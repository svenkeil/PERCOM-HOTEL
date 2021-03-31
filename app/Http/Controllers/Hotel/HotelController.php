<?php

namespace App\Http\Controllers\Hotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\Cloture;
use App\Models\Hotel\Decaissement;
use App\Models\Hotel\Reception;
use App\Models\Hotel\Client;
use App\Models\Hotel\Chambre;
use App\Models\Hotel\Reservation;
use App\Models\Hotel\TypeReservation;
use App\Models\Hotel\Restaurateur;
use App\Models\Hotel\RespHebergement;
use App\Models\Hotel\Comptable;
use App\Models\Hotel\Partenaire;
use App\Models\Hotel\Depart;
use App\Models\Hotel\Hs;
use App\Models\Hotel\Receptionniste;
use App\Models\Hotel\ModePaiement;
use App\Models\Hotel\Deloger;
use App\Models\Hotel\Reglement;
use App\Models\Hotel\Divers;
use App\Models\Hotel\Parking;
use App\Models\Hotel\Restauration;
use App\Models\Hotel\Restaureception;
use App\Models\Hotel\Formulereception;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;
use App\Models\Hotel\QualiteChambres;
use App\Models\Hotel\TypeChambres;
use App\Models\Hotel\TypeClient;

use Illuminate\Support\Facades\Session;
use App\Models\Hotel\FormuleChambre;
use Illuminate\Support\Str;

use PDF;

// pour les api
use Dingo\Api\Dispatcher;
use Dingo\Api\Routing\Helpers;

class HotelController extends Controller
{
    use Helpers;

    //
    /*mes fonctions pour percom hotel*/
    function profil() {
        return view('hotel.profilhotel');
    }

    function config() {
        $typechambres = $this->api->get('typechambres');
        $qualitechambres = $this->api->get('qualitechambres');
        $devises = $this->api->get('devises');
        $modepaiements = $this->api->get('modepaiements');
        $typereservations = $this->api->get('typereservations');
        $typeetablissement = $this->api->get('typeetablissement');
        $pays = $this->api->get('pays');
        return view('hotel.confighotel', compact('typechambres', 'qualitechambres', 'devises', 'modepaiements', 'typereservations', 'typeetablissement', 'pays'));
    }

    function index() {
        return User::all();
    }

    public function configHotel(Request $request) {
        if($request->isMethod('POST')) {
            if (Hotel::where('name',$request->name)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Hotel existe deja'
                ]);
            }
            else if (Hotel::where('email',$request->email)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Email existe deja'
                ]);
            }
            else { // logocontentype, directeur a revoir , 'etoiles' => $request->etoiles,
               $test = $this->api->post('profilhotel', [ 'name' => $request->name, 'date_creation' => $request->date_creation, 'email' => $request->email, 'contact' => $request->contacts,
                 'logo' => $request->logo, 'adresse' => $request->adresse, 'created_by' => Auth::user()->id, 'site_web' => $request->site_web, 'nb_chambres' => $request->nbchambres, 'nb_employes' => $request->nbemployes, 
                 'type_etablissement_id' => $request->typeetablissement, 'devise_id' => $request->devise, 'pays_id' => $request->pays, 'typechambre' => $request->typechambre, 'qualitechambre' => $request->qualitechambre,
                 'modepaiement' => $request->modepaiement, 'typereservation' => $request->typereservation]);

                 $test2 = $this->api->post('utilisateurs', [ 'email' => $request->email, 'username'=> $request->username,
                 'password'=> $request->password, 'lname'=> $request->name]);
                 
                if ($test && $test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter votre profil'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }

            }
        }
        else if($request->isMethod('GET')) {
            $typechambres = $this->api->get('typechambres');
            $qualitechambres = $this->api->get('qualitechambres');
            $devises = $this->api->get('devises');
            $modepaiements = $this->api->get('modepaiements');
            $typereservations = $this->api->get('typereservations');
            $typeetablissement = $this->api->get('typeetablissement');
            return view('hotel.confighotel', compact('typechambres', 'qualitechambres', 'devises', 'modepaiements', 'typereservations', 'typeetablissement'));
        }
        else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function listeChambres() {
        $listechambres = $this->api->get('chambres');
        $qualitechambres = $this->api->get('qualitechambres');
        $typechambres = $this->api->get('typechambres');
        $formulechambres = $this->api->get('formulechambres');
        $hotels = $this->api->get('profilhotel');

        $valeurqual = new QualiteChambres();
        $valeurtype = new TypeChambres();
        $valeurform = new FormuleChambre();
        $valeurhot = new Hotel();
        return view('hotel.listechambres', compact('listechambres', 'qualitechambres', 'typechambres', 'formulechambres', 'hotels', 'valeurqual', 'valeurtype', 'valeurform', 'valeurhot'));
    }

    public function qualiteChambres() {
        $qualitechambres = $this->api->get('qualitechambres');
        $hotels = $this->api->get('profilhotel');
        return view('hotel.qualitechambres', compact('qualitechambres', 'hotels'));
    }

    public function formuleChambres() {
        $hotels = $this->api->get('profilhotel');
        $formulechambres = $this->api->get('formulechambres');
        return view('hotel.formulechambres', compact('formulechambres', 'hotels'));
    }

    public function typeChambres() {
        $hotels = $this->api->get('profilhotel');
        $typechambres = $this->api->get('typechambres');
        return view('hotel.typechambres', compact('typechambres', 'hotels'));
    }

    public function customerList() {
        $clients = $this->api->get('clients');
        $hotels = $this->api->get('profilhotel');
        $typeclients = $this->api->get('typeclients');
        $valeurhot = new Hotel();
        $valeurtypcl = new TypeClient();
        return view('hotel.customerlist', compact('clients', 'hotels', 'typeclients', 'valeurhot', 'valeurtypcl'));
    }

    public function customerGestion() {
        $clients = $this->api->get('clients');
        $valeurhot = new Hotel();
        $valeurtypcl = new TypeClient();
        return view('hotel.customergestion', compact('clients', 'valeurhot', 'valeurtypcl'));
    }

    public function customerType() {
        $typeclients = $this->api->get('typeclients');
        $hotels = $this->api->get('profilhotel');
        return view('hotel.customertype', compact('typeclients', 'hotels'));
    }

    public function ajoutChambres(Request $request) {
        if($request->isMethod('POST')) {
            if (Chambre::where('name',$request->nom_chambre)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cette chambre existe deja'
                ]);
            }
            else if (Chambre::where('code',$request->code)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce code de chambre existe deja'
                ]);
            }else {
                $test2 = $this->api->post('chambres', [ 'name' => $request->nom_chambre, 'code'=> $request->code,
                 'prix'=> $request->prix, 'created_by' => Auth::user()->id, 'description'=> $request->description, 'photo'=> $request->photo, 'type_chambres_id'=> $request->type_chambre
                 , 'qualite_chambres_id'=> $request->qualite_chambre, 'formule_chambres_id'=> $request->formule_chambre,
                 'hotel_id'=> $request->hotel]);
                 
                if ($test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des chambres'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function ajoutCustomerType(Request $request) {
        if($request->isMethod('POST')) {
            if (TypeClient::where('name',$request->nom_type)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce type de client existe deja'
                ]);
            } else {
                $test2 = $this->api->post('typeclients', [ 'name' => $request->nom_type, 'description'=> $request->description, 'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel_id,]);
                 
                if ($test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des types de client'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function ajoutQualiteChambres(Request $request) {
        if($request->isMethod('POST')) {
            if (QualiteChambres::where('name',$request->nom_qualite)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cette qualite de chambre existe deja'
                ]);
            }
            else {
                $test2 = $this->api->post('qualitechambres', [ 'name' => $request->nom_qualite, 'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel_id,]);
                 
                if ($test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des qualites chambres'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function ajoutFormuleChambres(Request $request) {
        if($request->isMethod('POST')) {
            if (FormuleChambre::where('name',$request->nom_formule)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cette formule de chambre chambre existe deja'
                ]);
            }
            else {
                $test2 = $this->api->post('formulechambres', [ 'name' => $request->nom_formule, 'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel_id,]);
                 
                if ($test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des formules de chambres'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function ajoutTypeChambres(Request $request) {
        if($request->isMethod('POST')) {
            if (TypeChambres::where('name',$request->nom_type)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce type chambre existe deja'
                ]);
            }
            else {
                $test2 = $this->api->post('typechambres', [ 'name' => $request->nom_type, 'nb_personnes' => $request->nb_personnes
                , 'periode_vente' => $request->periode_vente, 'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel_id,]);
                 
                if ($test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des types chambres'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function reservationGestion() {
        // $clients = $this->api->get('clients');
        $reservations = $this->api->get('reservations');
        // $chambresoccupees = $this->api->get('chambresoccupees');
        $chambres = $this->api->get('chambres');
        $valeurchambres = new Chambre();
        $valeurclient = new Client();
        $valeuruser = new User();
        $valeurtype = new TypeReservation();
        return view('hotel.reservationgestion', compact('reservations', 'chambres', 'valeurchambres', 'valeurclient', 'valeuruser', 'valeurtype'));
    }

    public function histoReservation() {
        // $typeclients = $this->api->get('typeclients');
        $reservations = $this->api->get('reservations');
        // $chambresoccupees = $this->api->get('chambresoccupees');
        $chambres = $this->api->get('chambres');
        $valeurchambres = new Chambre();
        $valeurclient = new Client();
        $valeuruser = new User();
        $valeurtype = new TypeReservation();
        return view('hotel.historeservation', compact('reservations', 'chambres', 'valeurchambres', 'valeurclient', 'valeuruser', 'valeurtype'));
    }

    public function reserver() {
        // $typeclients = $this->api->get('typeclients');
        $typechambres = $this->api->get('typechambres');
        $chambres = $this->api->get('chambres');
        $clients = $this->api->get('clients');
        $typereservations = $this->api->get('typereservations');
        $modepaiements = $this->api->get('modepaiements');
        $hotels = $this->api->get('profilhotel');
        $typeclients = $this->api->get('typeclients');
        $pays = $this->api->get('pays');
        // $chambresoccupees = $this->api->get('chambresoccupees');
        $chambres = $this->api->get('chambres');
        $valeurch = new Chambre();
        return view('hotel.reserver', compact('typechambres', 'chambres', 'valeurch', 'chambres', 'clients', 'typeclients', 'pays', 'typereservations', 'hotels', 'modepaiements'));
    }

    public function ajoutReservation(Request $request) {
        if($request->isMethod('POST')) {

            if($request->client_reserv == 'Nouveau') {
                if (Client::where('email',$request->email)->exists())
                    {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Cet Email existe deja'
                        ]);
                    } else if (Client::where('no_piece_personnelle',$request->num_piece)->exists())
                    {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Ce numero de piece existe deja'
                        ]);
                    }
                    else {
                        
                        $arrchambre = $request->chambres;
                        $finch = $request->fin;
                        
                        $ch = $arrchambre[1];
                        for($i = 0; $i < count($ch); $i++) {
                            
                            $chambre = Chambre::find($ch[$i]);
                            $recep = Reception::where('chambre_id', $chambre->id)
                                                ->where('statut', 'En cours')
                                                ->get();

                            if(count($recep) > 0) {           
                                if($recep[0]->date_fin == $finch) {
                                    return response()->json([
                                        'status'=>'info',
                                        'message'=>'La chambre ne sera pas liberee'
                                    ]);
                                    }else {
                                    $test3 = Chambre::where('id', $chambre->id)->update([
                                        'reserver' => 'Oui',
                                        'deb_reserv' => $request->debut,
                                        'fin_reserv' => $request->fin,
                                    ]);

                                        $test1 = $this->api->post('clients', [ 'name' => $request->nomcl, 'hotel_id'=> $request->hotel,  'prenom'=> $request->prenomcl, 'sexe'=> $request->sexe, 'type_piece'=> $request->type_piece,
                                    'email'=> $request->email, 'tel'=> $request->phone_number, 'entreprise'=> $request->entreprise, 'created_by' => Auth::user()->id, 'pays_residence'=> $request->pays_residence, 'delivre_le'=> $request->delivre_le, 'lieu_delivrance'=> $request->lieu_delivrance,'profession'=> $request->profession, 'date_naissance'=> $request->dob, 'lieu_naissance'=> $request->lieu_naissance, 'adresse'=> $request->adresse, 'type_client_id'=> $request->typeclient, 'no_piece_personnelle'=> $request->num_piece, 'pays'=> $request->nationalite]);
                                    
                                    $user_id = DB::getPdo()->lastInsertId();

                                    $test2 = $this->api->post('reservations', ['prix_total' => $request->prix_total, 'remarque' => $request->remarque, 'nb_nuits' => $request->nb_nuits, 'debut' => $request->debut, 'fin' => $request->fin, 'nb_enfants' => $request->enfants, 'nb_adultes' => $request->adultes,'hotel'=> $request->hotel, 'modepaiement'=> $request->modepaiement, 'venant_de' => $request->venant_de, 'se_rendant_a' => $request->se_rendant_a,
                                            'client_id'=> $user_id, 'type_reservation_id'=> $request->typereservation, 'chambres'=> $arrchambre[1], 'created_by'=> Auth::user()->id, 'nb_chambres' => $request->nb_chambres,]);

                                    
                                }
                            }else {
                                $test1 = $this->api->post('clients', [ 'name' => $request->nomcl, 'hotel_id'=> $request->hotel,  'prenom'=> $request->prenomcl, 'sexe'=> $request->sexe, 'type_piece'=> $request->type_piece,
                                'email'=> $request->email, 'tel'=> $request->phone_number, 'entreprise'=> $request->entreprise, 'created_by' => Auth::user()->id, 'pays_residence'=> $request->pays_residence, 'delivre_le'=> $request->delivre_le, 'lieu_delivrance'=> $request->lieu_delivrance,'profession'=> $request->profession, 'date_naissance'=> $request->dob, 'lieu_naissance'=> $request->lieu_naissance, 'adresse'=> $request->adresse, 'type_client_id'=> $request->type_client, 'no_piece_personnelle'=> $request->num_piece, 'pays'=> $request->nationalite]);
                                
                                $user_id = DB::getPdo()->lastInsertId();

                                $test2 = $this->api->post('reservations', ['prix_total' => $request->prix_total, 'remarque' => $request->remarque, 'nb_nuits' => $request->nb_nuits, 'debut' => $request->debut, 'fin' => $request->fin, 'nb_enfants' => $request->enfants, 'nb_adultes' => $request->adultes,'hotel'=> $request->hotel, 'modepaiement'=> $request->modepaiement, 'venant_de' => $request->venant_de, 'se_rendant_a' => $request->se_rendant_a,
                                        'client_id'=> $user_id, 'type_reservation_id'=> $request->typereservation, 'chambres'=> $arrchambre[1], 'created_by'=> Auth::user()->id, 'nb_chambres' => $request->nb_chambres,]);

                                $test3 = Chambre::where('id', $chambre->id)->update([
                                    'reserver' => 'Oui',
                                    'deb_reserv' => $request->debut,
                                    'fin_reserv' => $request->fin,
                                ]);
                            }
              
                                    
                            /*$id_part = $request->partenaire;
                            $part = Partenaire::where('id', $id_part)->first();
                            $test4 = Partenaire::where('id', $id_part)->update([
                                'solde' => $part->solde + $request->montant_partenaire,
                            ]); */
                        }
                        if($test1 && $test2 && $test3) {
                            return response()->json([
                                'status'=>'success',
                                'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des reservations'
                            ]);
                        } else {
                            return response()->json([
                                'status'=>'info',
                                'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                            ]);
                        }
                    }
                
            } else {

                $arrchambre = $request->chambres;
                $finch = $request->fin;

                $ch = $arrchambre[1];
                for($i = 0; $i < count($ch); $i++) {
                    $chambre = Chambre::find($ch[$i]);
                    $recep = Reception::where('chambre_id', $chambre->id)
                                                ->where('statut', 'En cours')
                                                ->get();

                    if(count($recep) > 0) { 
                                                
                        if($recep[0]->date_fin == $finch) {
                            return response()->json([
                                'status'=>'info',
                                'message'=>'La chambre ne sera pas liberee a cette date'
                            ]);
                        }else {
                            $test1 = $this->api->post('reservations', ['prix_total' => $request->prix_total, 'remarque' => $request->remarque, 'nb_nuits' => $request->nb_nuits, 'debut' => $request->debut, 'fin' => $request->fin, 'nb_enfants' => $request->enfants, 'nb_adultes' => $request->adultes,'hotel'=> $request->hotel, 'modepaiement'=> $request->modepaiement, 'venant_de' => $request->venant_de, 'se_rendant_a' => $request->se_rendant_a,
                            'client_id'=> $request->client_reserv, 'type_reservation_id'=> $request->typereservation, 'chambres'=> $arrchambre[1], 'created_by'=> Auth::user()->id, 'nb_chambres' => $request->nb_chambres,]);
                            
                                $test2 = Chambre::where('id', $chambre->id)->update([
                                    'reserver' => 'Oui',
                                    'deb_reserv' => $request->debut,
                                    'fin_reserv' => $request->fin,
                                ]);
                            }
                    }else {
                        $test1 = $this->api->post('reservations', ['prix_total' => $request->prix_total, 'remarque' => $request->remarque, 'nb_nuits' => $request->nb_nuits, 'debut' => $request->debut, 'fin' => $request->fin, 'nb_enfants' => $request->enfants, 'nb_adultes' => $request->adultes,'hotel'=> $request->hotel, 'modepaiement'=> $request->modepaiement, 'venant_de' => $request->venant_de, 'se_rendant_a' => $request->se_rendant_a,
                            'client_id'=> $request->client_reserv, 'type_reservation_id'=> $request->typereservation, 'chambres'=> $arrchambre[1], 'created_by'=> Auth::user()->id, 'nb_chambres' => $request->nb_chambres,]);
                            
                                $test2 = Chambre::where('id', $chambre->id)->update([
                                    'reserver' => 'Oui',
                                    'deb_reserv' => $request->debut,
                                    'fin_reserv' => $request->fin,
                                ]);
                    }
                }
                

                if($test1) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des reservations'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            }
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function listehotel() {
        $hotels = $this->api->get('profilhotel');
        return view('hotel.listehotels', compact('hotels'));
    }

    //Rencontre 12/2/02/2021 hotel Y 

    public function reception() {
        $clients = $this->api->get('clients');
        $chambreslibres = $this->api->get('chambreslibres');
        $typeclients = $this->api->get('typeclients');
        $hotels = $this->api->get('profilhotel');
        $partenaires = $this->api->get('partenaires');
        $modepaiements = $this->api->get('modepaiements');
        $valeurtypcl = new TypeClient();
        return view('hotel.reception', compact('clients', 'chambreslibres', 'typeclients', 'partenaires', 'valeurtypcl' , 'hotels', 'modepaiements'));
    }

    public function occupationChambres() {
        $receptions = $this->api->get('receptions');
        $chambresoccupees = $this->api->get('chambresoccupees');
        $chambres = $this->api->get('chambres');
        $valeurchambres = new Chambre();

        $hs = Chambre::where('hs', 'Oui')->get();
        $dayuse = Reception::where('type_sejour', 'Day Use')
                            ->where('cloturer', 'Non')
                            ->get();

        $arrivees = Reception::where('cloturer', 'Non')->get();

        $recouches = 0;
        $cachambre = 0;
        for($i=0; $i< count($arrivees); $i++) {
            if(date("Y-m-d") != $arrivees[0]->date_fin) {
                // dd($arrivees[0]->date_fin);
                $recouches++;          
            }
            $cachambre += $arrivees[$i]->prix_total;
        }
        
        
       //dd($arrivees[0]->date_fin);
        $deloger = Deloger::where('cloturer', 'Non')->get();

        $deloger = Deloger::where('cloturer', 'Non')->get();

        $taux = (count($arrivees)/count($chambres)) * 100;

        $valeurformulechambres = new FormuleChambre();
        $valeurclients = new Client();
        return view('hotel.occupationchambres', compact('receptions', 'chambres', 'cachambre', 'recouches',  'hs', 'deloger', 'taux', 'arrivees', 'dayuse', 'valeurchambres', 'valeurformulechambres', 'valeurclients', 'chambresoccupees'));
    }

    //historique reception

    public function histoReception() {
        $receptions = $this->api->get('receptions');
        $valeurchambres = new Chambre();
        $valeurclients = new Client();
        return view('hotel.historiquereception', compact('receptions', 'valeurchambres', 'valeurclients'));
    }
    public function listeMenus() {
        $hotels = $this->api->get('profilhotel');
        $menus = $this->api->get('restaurations');
        return view('hotel.listemenus', compact('hotels', 'menus'));
    }

    public function mainCourante() {
        $receptions = $this->api->get('receptions');
        $restaureceptions = $this->api->get('restaureceptions');
        $chambresoccupees = $this->api->get('chambresoccupees');
        $divers = $this->api->get('divers');
        $valeurclient = new Client();
        $valeurrestaurecep = new Restaureception();
        $valeurrestau = new Restauration();
        $valeurchambre = new Chambre();
        return view('hotel.maincourante', compact('receptions', 'valeurchambre', 'valeurrestau', 'chambresoccupees', 'divers', 'valeurclient', 'valeurrestaurecep', 'restaureceptions'));
    }

    public function ajoutClient(Request $request) {
        if($request->isMethod('POST')) {
            if (Client::where('email',$request->email)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Email existe deja'
                ]);
            } else if (Client::where('no_piece_personnelle',$request->num_piece)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce numero de piece existe deja'
                ]);
            }
            else {
                $test2 = $this->api->post('clients', [ 'name' => $request->nom_client, 'prenom'=> $request->prenom, 'sexe'=> $request->sexe, 'type_piece'=> $request->type_piece,
                 'email'=> $request->email, 'entreprise'=> $request->entreprise, 'created_by' => Auth::user()->id, 'tel'=> $request->phone_number, 'pays_residence'=> $request->pays_residence, 'delivre_le'=> $request->delivre_le, 'lieu_delivrance'=> $request->lieu_delivrance,'profession'=> $request->profession, 'date_naissance'=> $request->date_naissance, 'lieu_naissance'=> $request->lieu_naissance, 'adresse'=> $request->adresse, 'type_client_id'=> $request->type_client, 'no_piece_personnelle'=> $request->num_piece, 'pays'=> $request->pays,
                 'hotel_id'=> $request->hotel]);
                 
                if ($test2) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des clients'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function ajoutReception(Request $request) {
        if($request->isMethod('POST')) {
            if($request->client_reception == 'Nouveau') {
                if (Client::where('email',$request->email)->exists())
                    {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Cet Email existe deja'
                        ]);
                    } else if (Client::where('no_piece_personnelle',$request->num_piece)->exists())
                    {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Ce numero de piece existe deja'
                        ]);
                    }
                    else {
                      
                        $id_ch = $request->chambre_n;
                        $testch = Chambre::find($id_ch);
                        if($testch->statut == 'Occupee') {
                            return response()->json([
                                'status'=>'info',
                                'message'=>'chambre occupee'
                            ]);
                        }else {

                            $test1 = $this->api->post('clients', [ 'name' => $request->nomcl, 'hotel_id'=> $request->hotel,  'prenom'=> $request->prenomcl, 'sexe'=> $request->sexe, 'type_piece'=> $request->type_piece,
                            'email'=> $request->email, 'tel'=> $request->phone_number, 'entreprise'=> $request->entreprise, 'created_by' => Auth::user()->id, 'pays_residence'=> $request->pays_residence, 'delivre_le'=> $request->delivre_le, 'lieu_delivrance'=> $request->lieu_delivrance,'profession'=> $request->profession, 'date_naissance'=> $request->dob, 'lieu_naissance'=> $request->lieu_naissance, 'adresse'=> $request->adresse, 'type_client_id'=> $request->type_client, 'no_piece_personnelle'=> $request->num_piece, 'pays'=> $request->nationalite]);
                            
                            $user_id = DB::getPdo()->lastInsertId();
    
                            $test2 = $this->api->post('receptions', ['prix' => $request->prix, 'total_general' => $reservation->prix, 'heure_arrivee' => $request->heure_arrivee, 'heure_depart' => $request->heure_depart, 'montant_partenaire' => $request->montant_partenaire, 'type_sejour' => $request->type_sejour, 'partenaire_id' => $request->partenaire, 'id_doc' => $request->id_doc, 'nb_personnes' => $request->nb_personnes , 'debut' => $request->date_arrivee, 'fin' => $request->date_depart, 
                            'nuits' => $request->total_nuit, 'remarque' => $request->remarque, 'enfants' => $request->enfants, 'adultes' => $request->adultes, 'rabais' => $request->rabais, 'hotel_id'=> $request->hotel, 'mode_paiement_id'=> $request->modepaiement, 'venant_de' => $request->venant_de, 'se_rendant_a' => $request->se_rendant_a, 'nomfille' => $request->nomfille, 'client_id'=> $user_id, 'chambre_id'=> $request->chambre_n, 'receptionniste_id'=> Auth::user()->id]);
                            
                            
                            $test3 = Chambre::where('id', $id_ch)->update([
                                'statut' => 'Occupee'
                            ]);

                            $id_part = $request->partenaire;
                            $modeutilise = DB::table('mode_paiements')->where('id', $request->modepaiement)->first();
                            
                            if($id_part != "Aucun") {
                                $part = Partenaire::where('id', $id_part)->first();
                                $test4 = Partenaire::where('id', $id_part)->update([
                                    'solde' => $part->solde + $request->montant_partenaire,
                                ]);

                                $test5 = $this->api->post('decaissements', ['prix' => $request->prix, 'remarque' => $request->remarque, 'created_by' => Auth::user()->id]);
                                $test4 = Partenaire::where('id', $id_part)->update([
                                    'solde' => $part->solde + $request->montant_partenaire,
                                ]);
                                $test6 = ModePaiement::where('id', $modeutilise->id)->update([
                                    'solde' => $modeutilise->solde - $request->montant_partenaire, // mettre le prix rem ici
                                ]);
                            }
                    }
                        if($test1 && $test2 && $test3) {
                            return response()->json([
                                'status'=>'success',
                                'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter le planning d\'occupation des chambres'
                            ]);
                        } else {
                            return response()->json([
                                'status'=>'info',
                                'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                            ]);
                        }
                    }
                
            } else {

                $id_ch = $request->chambre_n;
                $testch = Chambre::find($id_ch);
                if($testch->statut == 'Occupee') {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'chambre occupee'
                    ]);
                }else {
                    $test1 = $this->api->post('receptions', ['prix' => $request->prix, 'total_general' => $reservation->prix, 'heure_arrivee' => $request->heure_arrivee, 'heure_depart' => $request->heure_depart, 'montant_partenaire' => $request->montant_partenaire, 'type_sejour' => $request->type_sejour, 'partenaire_id' => $request->partenaire, 'id_doc' => $request->id_doc, 'nb_personnes' => $request->nb_personnes , 'debut' => $request->date_arrivee, 'fin' => $request->date_depart, 
                    'nuits' => $request->total_nuit, 'remarque' => $request->remarque, 'enfants' => $request->enfants, 'adultes' => $request->adultes, 'rabais' => $request->rabais, 'venant_de' => $request->venant_de, 'hotel_id'=> $request->hotel, 'mode_paiement_id' => $request->modepaiement, 'se_rendant_a' => $request->se_rendant_a, 'nomfille' => $request->nomfille, 'client_id'=> $request->client_reception, 'chambre_id'=> $request->chambre_n, 'receptionniste_id'=> Auth::user()->id]);
                    
                    
                    $test2 = Chambre::where('id', $id_ch)->update([
                        'statut' => 'Occupee'
                    ]);

                    $id_part = $request->partenaire;
                    $part = Partenaire::where('id', $id_part)->first();
                    $test3 = Partenaire::where('id', $id_part)->update([
                        'solde' => $part->solde + $request->montant_partenaire,
                    ]);
                }
                if($test1 && $test2 && $test3) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter le planning d\'occupation des chambres'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            }
            
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function  sortieClient($id, $chid)
    {
        
        if(!Auth::check()){
            return redirect()->route('user-login');
        }
        $user_id=Auth::user()->id;
        /*$newusers= User::where(['role'=>'user'])->where('id','!=',$user_id)->get();        
        $marchants= Marchant::all();
        $users= new User();
        $pointventes= PointVente::all();*/

         $chambres = Chambre::where('id', $chid)->update([
            'statut' => 'Libre',
        ]);

        $reception = Reception::where('id', $id)->update([
            'statut' => 'Terminee',
        ]);
        Session::flash('message', " Sortie enregistree  avec succes");
     return redirect()->route('historique-reception');
    }

    public function  delogerClient($id)
    {
        
        if(!Auth::check()){
            return redirect()->route('user-login');
        }
        $id = Reception::find($id);
        $valeurclient = new Client();
        $valeurchambre = new Chambre();
        $chambreslibres = $this->api->get('chambreslibres');
        $hotels = $this->api->get('profilhotel');
        return view('hotel.deloger', compact('chambreslibres', 'valeurclient', 'valeurchambre', 'hotels'))->with('id', $id);
    }

    public function  delogerClientPost(Request $request)
    {
        if($request->isMethod('POST')) {
            if (Deloger::where('id_delog', $request->id_delogement)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet id de delogement existe deja'
                ]);
            } 
            else {

                $id_recep = $request->id_reception;

                $reception = DB::table('receptions')->where('id', $id_recep)->first();
                $ancienne_chambre = DB::table('chambres')->where('id', $reception->chambre_id)->first();
                $test4 = Chambre::where('id', $ancienne_chambre->id)->update([
                    'statut' => 'Libre',
                ]);

                $test2 = Reception::where('id', $id_recep)->update([
                    'chambre_id' => $request->nv_chambre,
                ]);
                
               
                
                $id_chambr = $request->nv_chambre;
                $test3 = Chambre::where('id', $id_chambr)->update([
                    'statut' => 'Occupee',
                ]);
                
                $nouvelle_chambre = DB::table('chambres')->where('id', $id_chambr)->first();

                $test5 = Reception::where('id', $id_recep)->update([
                    'prix_total' => $reception->nb_nuits * $nouvelle_chambre->prix,
                ]);

                
               $test1 = $this->api->post('delogements', [ 'id_delog' => $request->id_delogement, 'nv_chambre'=> $request->nv_chambre, 'ancienne_chambre'=> $request->chambre_actuelle,'raison'=> $request->raison, 'reception_id'=> $request->id_reception, 'hotel_id'=> $request->hotel, 'created_by' => Auth::user()->id]);
                
               
                if ($test2 && $test1 && $test3 && $test4 && $test5) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Delogement effectue avec succes. Veuillez vous consulter le planning d\'occupation'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors du delogement. Veuillez reessayer plutard'
                    ]);
                }
            } 
        } else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }

    }

    public function listeDelogements() {
        $valeurchambre = new Chambre();
        $valeurhotel = new Hotel();
        $hotels = $this->api->get('profilhotel');
        $receptions = $this->api->get('receptions');
        $delogements = $this->api->get('delogements');
        return view('hotel.listedelogement', compact('receptions', 'delogements', 'hotels', 'valeurchambre', 'valeurhotel'));
    }

    public function ajoutMenu(Request $request) {
        if($request->isMethod('POST')) {
            if (Restauration::where('code', $request->code_menu)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet code de menu existe deja'
                ]);
            } 
            else {
                $test1 = $this->api->post('restaurations', [ 'name' => $request->nom_menu, 'type'=> $request->type_menu, 'code'=> $request->code_menu, 'prix'=> $request->prix_menu, 'date_de_preparation'=> $request->date_preparation, 
                'description' => $request->description , 'restaurateur_id' => Auth::user()->id,'hotel_id'=> $request->hotel_id]);

                if ($test1) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Menu ajoute avec succes. Veuillez vous consulter la liste de restauration'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            }
        } 
        else {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    public function menuTermine($id)
    {
        
        if(!Auth::check()){
            return redirect()->route('user-login');
        }
        $user_id=Auth::user()->id;
        /*$newusers= User::where(['role'=>'user'])->where('id','!=',$user_id)->get();        
        $marchants= Marchant::all();
        $users= new User();
        $pointventes= PointVente::all();*/


        $menu = Restauration::where('id', $id)->update([
            'statut' => 'Indisponible',
        ]);
        Session::flash('message', " Menu Modifie avec succes");
     return redirect()->route('liste-menus');
    }

    public function downloadPDF($id){
        $reception = Reception::find($id);
        $valeurclient = new client();
        $valeurchambre = new Chambre();
        $pdf = PDF::loadView('hotel.facture_client', compact('reception', 'valeurclient', 'valeurchambre'));
        return $pdf->download('invoice.pdf');
  
      }

      public function  restaurerClient($id)
        {
            
            if(!Auth::check()){
                return redirect()->route('user-login');
            }
            $id = Reception::find($id);
            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $chambresoccupees = $this->api->get('chambresoccupees');
            $restaurations = $this->api->get('restaurations');
            $hotels = $this->api->get('profilhotel');
            return view('hotel.restaurer', compact('restaurations', 'chambresoccupees', 'valeurclient', 'hotels', 'valeurchambre'))->with('id', $id);
        }

        public function restaurerClientPost(Request $request) {
            if($request->isMethod('POST')) {
               
                $menus = join(',', $request->menus);
                // dd($menus);
                $test1 = $this->api->post('restaureceptions', [ 'menus'=> $menus, 'prix'=> $request->prix, 'remarque'=> $request->remarque, 'reception_id' => $request->id_reception , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel]);

                $id->recep = $request->id_reception;

                $recep = Reception::find($id_recep);

                if($recep->regler == 'Oui') {
                    $receptest = Reception::where('id', $recep->id)->update([
                        'regler' => 'Non',
                        'total_general' => $recep->total_general + $request->prix,
                    ]);
                }else {
                    $receptest = Reception::where('id', $recep->id)->update([
                        'total_general' => $recep->total_general + $request->prix,
                    ]);
                }
                if ($test1) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Ajout avec succes. Veuillez vous consulter la main courante de reception'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            } 
            else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function back(Request $request) {
            return Redirect::back();
        }

        public function addCustomerType(Request $request) {
            if($request->isMethod('POST')) {
                if (Restauration::where('name', $request->nom_type)->exists())
                {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Ce type de client existe deja'
                    ]);
                } 
                else {
                    $test1 = $this->api->post('typeclients', [ 'name' => $request->nom_type, 'type'=> $request->type_menu, 'description'=> $request->description, 'created_by' => Auth::user()->id,'hotel_id'=> $request->hotel_id]);
    
                    if ($test1) {
                        return response()->json([
                            'status'=>'success',
                            'message'=>'Type de client ajoute avec succes. Veuillez vous consulter la liste des types de clients'
                        ]);
                    } else {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                        ]);
                    }
                }
            } else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function calendrier(){
            return view('hotel.calendrier');
        }

        public function reglement($id){
            $id = Reception::find($id);
            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $valeurreception = new Reception();
            $valeurtypeclient = new TypeClient();
            $valeurmodepaiement = new ModePaiement();
            $receptions = $this->api->get('receptions');
            $restaureceptions = $this->api->get('restaureceptions');
            $valeurrestaurecep = new Restaureception();
            $valeurrestau = new Restauration();
            $divers = $this->api->get('divers');
            $modepaiements = $this->api->get('modepaiements'); 
            return view('hotel.reglement', compact('valeurchambre', 'valeurclient' , 'divers' , 'modepaiements', 'valeurreception',  'valeurmodepaiement' , 'valeurtypeclient',
            'receptions', 'restaureceptions', 'valeurrestaurecep', 'valeurrestau',))->with('id', $id);
        }

        public function listeReglements(){
            $hotels = $this->api->get('profilhotel');
            $reglements = $this->api->get('reglements');
            $valeurclient = new Client();
            $valeurreception = new Reception();
            return view('hotel.listereglements' ,compact('hotels', 'reglements', 'valeurclient', 'valeurreception'));
        }
        

        public function reglementClientPost(Request $request){
            if($request->isMethod('POST')) {
                $test1 = $this->api->post('reglements', [ 'remarque'=> $request->remarque, 'created_by'=> Auth::user()->id, 'reception_id'=> $request->id_reception
                , 'total_restau'=> $request->total_restau, 'total_nuitees'=> $request->total_nuitees, 'divers'=> $request->divers,'prix_rem'=> $request->prix_rem, 'montant_additionnel'=> $request->montant_additionnel, 'total_general'=> $request->total_general]);
                
                $id_recep = $request->id_reception;
               
                $reception = DB::table('receptions')->where('id', $id_recep)->first();

                /*$testtotal = Reception::where('id', $reception->id)->update([
                    'total_general' => $reception->total_general + $request->total_general,
                ]);*/

                $testtotal = Reception::where('id', $reception->id)->update([
                    'total_general' => $request->total_general,
                ]);
                if(is_null($reception->total_jour)) {
                    $testprix = Reception::where('id', $id_recep)->update([
                        'total_jour' => $request->prix_rem,
                    ]);

                    $nvreception1 = DB::table('receptions')->where('id', $id_recep)->first();

                    $testprix2 = Reception::where('id', $id_recep)->update([
                        'total_recu' => $nvreception1->total_recu + $request->prix_rem,
                    ]);

                    $nvreception = DB::table('receptions')->where('id', $id_recep)->first();
                    if($nvreception->total_recu >= $nvreception->total_general) {
                        $test2 = Reception::where('id', $nvreception->id)->update([
                            'regler' => 'Oui',
                        ]);
                    }
                }else {
                    $data = implode(';', [$reception->total_jour, $request->prix_rem]);
                    $testprix = Reception::where('id', $id_recep)->update([
                        'total_jour' => $data,
                    ]);

                    $verif = explode(";" ,$data);
                    $somme = 0;
                    for($i=0; $i<count($verif); $i++) {
                        $somme += $verif[$i];
                    }

                    $nvreception = DB::table('receptions')->where('id', $id_recep)->first();

                    $test8 = Reception::where('id', $id_recep)->update([
                        'debours' => $somme,
                        'total_recu' => $nvreception->total_recu + $somme,
                    ]);
                    if($nvreception->total_recu >= $nvreception->total_general) {
                        $test2 = Reception::where('id', $id_recep)->update([
                            'regler' => 'Oui',
                        ]);

                        
                    }
                }

                /*$test4 = Chambre::where('id', $reception->chambre_id)->update([
                    'statut' => 'Libre',
                ]); */
                $modeutilise = DB::table('mode_paiements')->where('id', $reception->mode_paiement_id)->first();
                
                /* if(is_null($reception->total_jour)) {
                    if($request->prix_rem >= $reception->total_general) {
                        $test2 = Reception::where('id', $id_recep)->update([
                            'statut' => 'Terminee',
                        ]);
                    }
                }else {
                    
                    $verif = explode(";" ,$reception->total_jour);
                    $somme = 0;
                    for($i=0; $i<count($verif); $i++) {
                        $somme += $verif[$i];
                    }

                    if($somme >= $reception->total_general) {
                        $test2 = Reception::where('id', $id_recep)->update([
                            'statut' => 'Terminee',
                        ]);
                    }
                }*/
               
                

                /*$testdep = $this->api->post('departs', [ 'heure_depart'=> $request->heure_depart, 'date_depart'=> $request->date_depart, 'montant_additionnel'=> $request->montant_additionnel, 'depart_tardif'=> $request->depart_tardif,'remarque'=> $request->remarque, 'reception_id' => $request->id_reception , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel]);*/

                $total = $request->prix_rem + $request->montant_additionnel;
                $test3 = ModePaiement::where('id', $modeutilise->id)->update([
                    'solde' => $modeutilise->solde + $total, // mettre le prix rem ici
                ]);

                    if ($test1 && $test3) {
                        return response()->json([
                            'status'=>'success',
                            'message'=>'Reglement effectue avec succes. Veuillez vous consulter la liste des reglements'
                        ]);
                    } else {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Erreur lors du paiement. Veuillez reessayer plutard'
                        ]);
                    }
            } else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function listeModePaiements(){
            $hotels = $this->api->get('profilhotel');
            $modepaiements = $this->api->get('modepaiements');
            return view('hotel.listemodepaiements', compact('hotels', 'modepaiements'));
        }

        public function ajoutModePaiement(Request $request) {
            if($request->isMethod('POST')) {
                if (ModePaiement::where('name', $request->nom)->exists())
                {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Ce mode de paiement  existe deja'
                    ]);
                } 
                else {
                    $test1 = $this->api->post('modepaiements', [ 'name' => $request->nom, 'description'=> $request->description, 'created_by'=> Auth::user()->id, 'hotel_id'=> $request->hotel_id]);
    
                    if ($test1) {
                        return response()->json([
                            'status'=>'success',
                            'message'=>'Mode de paiement ajoute avec succes. Veuillez vous consulter la liste des modes de paiements'
                        ]);
                    } else {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                        ]);
                    }
                }
            } else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function deleteModePaiement(Request $request) {

        }

        public function restaurerExterieur() {
            if(!Auth::check()){
                return redirect()->route('user-login');
            }
            $valeurclient = new Client();
            $chambresoccupees = $this->api->get('chambresoccupees');
            $restaurations = $this->api->get('restaurations');
            $hotels = $this->api->get('profilhotel');
            $modepaiements = $this->api->get('modepaiements');
            return view('hotel.restexterieur', compact('restaurations', 'chambresoccupees', 'modepaiements', 'valeurclient', 'hotels'));
        }

        public function restaurerExterieurPost(Request $request) {
            if($request->isMethod('POST')) {
               
                $menus = join(',', $request->menus);
                /* var_dump($menus);
                exit();*/

                $infos = [];
                array_push($infos, $request->nom_client, $request->num_piece);
                $infos2 = join('-', $infos);

                
                // dd($menus);
                $test1 = $this->api->post('restaureceptions', [ 'menus'=> $menus, 'prix'=> $request->prix, 'remarque'=> $request->remarque, 'info_ext' => $infos2 , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel]);

                $resto_id = DB::getPdo()->lastInsertId();
                $ext = Restaureception::where('id', $resto_id)->update([
                    'exterieur' => 'Oui'
                ]);
                $test2 = $this->api->post('reglements', [ 'remarque'=> $request->remarque, 'created_by'=> Auth::user()->id, 'reception_id'=> $infos2
                , 'total_restau'=> $request->prix, 'total_general'=> $request->prix]);
                
                $modeutilise = DB::table('mode_paiements')->where('id', $request->mode_paiement_id)->first();
                

                $total = $request->prix;
                $test3 = ModePaiement::where('id', $modeutilise->id)->update([
                    'solde' => $modeutilise->solde + $total, // mettre le prix rem ici
                ]);
                if ($test1 && $test2 && $test3) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Ajout avec succes. Veuillez vous consulter la liste des restaurations'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            } 
            else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function listeRestaurations(){
            $hotels = $this->api->get('profilhotel');
            $restaureceptions = $this->api->get('restaureceptions');
            $valeurclient = new Client();
            $valeurreception = new Client();
            $valeurmenu = new Restauration();
            return view('hotel.listerestaurations' ,compact('hotels', 'restaureceptions', 'valeurclient', 'valeurmenu', 'valeurreception'));
        } 

        public function downloadPDFRestau($id){
            $reglement = Reglement::find($id);
            $valeurclient = new client();
            $valeurchambre = new Chambre();
            $pdf = PDF::loadView('hotel.facture_restau', compact('reglement', 'valeurclient', 'valeurchambre'));
            return $pdf->download('invoice_restau.pdf');
      
          }

          public function sorties() {
            $receptions = $this->api->get('receptions');
            $chambreslibres = $this->api->get('chambreslibres');
            $valeurchambres = new Chambre();
            $valeurclients = new Client();
            return view('hotel.sorties', compact('receptions', 'valeurchambres', 'chambreslibres', 'valeurclients'));
        }

        public function registerReceptionniste() {
            return view('user.registerreceptionniste');
        }
        
        public function registerComptable() {
            return view('user.registercomptable');
        }
        
        public function registerRespHebergement() {
            return view('user.registerrespheber');
        }

        public function registerRetaurateur() {
            return view('user.registerrestaurateur');
        }


        public function listeRetaurateurs() {
            $restaurateurs = $this->api->get('restaurateurs');
            $valeuruser= new User();
            return view('hotel.listerestaurateurs', compact('restaurateurs', 'valeuruser'));
        }
        
        public function listeRecepionniste() {
            $receptionnistes = $this->api->get('receptionnistes');
            $valeuruser= new User();
            return view('hotel.listereceptionnistes', compact('receptionnistes', 'valeuruser'));
        }
        
        public function listeComptables() {
            $comptables = $this->api->get('comptables');
            $valeuruser= new User();
            return view('hotel.listecomptables', compact('comptables', 'valeuruser'));
        }

        public function listeRespHebergement() {
            $respohebergements = $this->api->get('respohebergement');
            $valeuruser= new User();
            return view('hotel.listerespohebergement', compact('respohebergements', 'valeuruser'));
        }

        public function registerHebergPost(Request $request) {
            if($request->isMethod('POST')) {
                if (User::where('email',$request->email)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Email existe deja '
                ]);
            }
            else if (User::where('pseudo',$request->username)->exists())//$request->pseudo ici car c'est pseudo dans la bd et on verifie
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce pseudo existe deja'
                ]);
            }
            else {
                $test= $this->api->post('utilisateurs',[ 'email' => $request->email,
                'lname'=> $request->lname, 'fname' => $request->fname, 'photo' => $request->photo,
                'phone'=> $request->phone, 'username'=> $request->username,
                'password'=> $request->password, 'created_by' => Auth::user()->id]);

                $user_id = DB::getPdo()->lastInsertId();
                $compta = User::where('id', $user_id)->update([
                    'role' => 'RespoHebergement'
                ]);

                $test1= $this->api->post('respohebergement',[ 'type_contract' => $request->contrat, 'start_date' => $request->date_debut, 'end_date' => $request->date_fin, 'no_compte' => $request->no_compte,
                'revenu' => $request->revenu, 'user_id' => $user_id, 'created_by' => Auth::user()->id,]);
                if ($test && $test1 && $compta) {
                    /*try {
                        Mail::to($request->email)->queue(
                            new NewUserNotification()
                        );

                    } catch (\Exception $e) {
                        // return $e->getMessage();
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Action failed ,Try again later!'
                        ]);
                    }*/
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes.'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }

            }
            }
                else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function registerRestauPost(Request $request) {
            if($request->isMethod('POST')) {
                if (User::where('email',$request->email)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Email existe deja '
                ]);
            }
            else if (User::where('pseudo',$request->username)->exists())//$request->pseudo ici car c'est pseudo dans la bd et on verifie
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce pseudo existe deja'
                ]);
            }
            else {
                $test= $this->api->post('utilisateurs',[ 'email' => $request->email,
                'lname'=> $request->lname, 'fname' => $request->fname, 'photo' => $request->photo,
                'phone'=> $request->phone, 'username'=> $request->username,
                'password'=> $request->password, 'created_by' => Auth::user()->id]);

                $user_id = DB::getPdo()->lastInsertId();
                $compta = User::where('id', $user_id)->update([
                    'role' => 'Restaurateur'
                ]);

                $test1= $this->api->post('restaurateurs',[ 'type_contract' => $request->contrat, 'start_date' => $request->date_debut, 'end_date' => $request->date_fin, 'no_compte' => $request->no_compte,
                'revenu' => $request->revenu, 'user_id' => $user_id, 'created_by' => Auth::user()->id,]);
                if ($test && $test1 && $compta) {
                    /*try {
                        Mail::to($request->email)->queue(
                            new NewUserNotification()
                        );

                    } catch (\Exception $e) {
                        // return $e->getMessage();
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Action failed ,Try again later!'
                        ]);
                    }*/
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes.'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }

            }
            }
                else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function registerRecepPost(Request $request) {
            if($request->isMethod('POST')) {
                if (User::where('email',$request->email)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Email existe deja '
                ]);
            }
            else if (User::where('pseudo',$request->username)->exists())//$request->pseudo ici car c'est pseudo dans la bd et on verifie
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce pseudo existe deja'
                ]);
            }
            else {
                $test= $this->api->post('utilisateurs',[ 'email' => $request->email,
                'lname'=> $request->lname, 'fname' => $request->fname, 'photo' => $request->photo,
                'phone'=> $request->phone, 'username'=> $request->username,
                'password'=> $request->password, 'created_by' => Auth::user()->id]);

                $user_id = DB::getPdo()->lastInsertId();
                $compta = User::where('id', $user_id)->update([
                    'role' => 'Receptionniste'
                ]);

                $test1= $this->api->post('receptionnistes',[ 'type_contract' => $request->contrat, 'start_date' => $request->date_debut, 'end_date' => $request->date_fin, 'no_compte' => $request->no_compte,
                'revenu' => $request->revenu, 'user_id' => $user_id, 'created_by' => Auth::user()->id,]);
                if ($test && $test1 && $compta) {
                    /*try {
                        Mail::to($request->email)->queue(
                            new NewUserNotification()
                        );

                    } catch (\Exception $e) {
                        // return $e->getMessage();
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Action failed ,Try again later!'
                        ]);
                    }*/
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes.'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }

            }
            }
                else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function registerCompPost(Request $request) {
            if($request->isMethod('POST')) {
                if (User::where('email',$request->email)->exists())
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Cet Email existe deja '
                ]);
            }
            else if (User::where('pseudo',$request->username)->exists())//$request->pseudo ici car c'est pseudo dans la bd et on verifie
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Ce pseudo existe deja'
                ]);
            }
            else {
                $test= $this->api->post('utilisateurs',[ 'email' => $request->email,
                'lname'=> $request->lname, 'fname' => $request->fname, 'photo' => $request->photo,
                'phone'=> $request->phone, 'username'=> $request->username,
                'password'=> $request->password, 'created_by' => Auth::user()->id]);

                $user_id = DB::getPdo()->lastInsertId();
                $compta = User::where('id', $user_id)->update([
                    'role' => 'Comptable'
                ]);

                $test1= $this->api->post('comptables',[ 'type_contract' => $request->contrat, 'start_date' => $request->date_debut, 'end_date' => $request->date_fin, 'no_compte' => $request->no_compte,
                'revenu' => $request->revenu, 'user_id' => $user_id, 'created_by' => Auth::user()->id,]);
                if ($test && $test1 && $compta) {
                    /*try {
                        Mail::to($request->email)->queue(
                            new NewUserNotification()
                        );

                    } catch (\Exception $e) {
                        // return $e->getMessage();
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Action failed ,Try again later!'
                        ]);
                    }*/
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes.'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }

            }
            }
                else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }
        public function presentationHotel($id) {

        }

        // formule client
        public function  formuleClient($id)
        {
            
            if(!Auth::check()){
                return redirect()->route('user-login');
            }
            $id = Reception::find($id);
            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $chambresoccupees = $this->api->get('chambresoccupees');
            $restaurations = $this->api->get('restaurations');
            $hotels = $this->api->get('profilhotel');
            return view('hotel.formuleclient', compact('restaurations', 'chambresoccupees', 'valeurclient', 'hotels', 'valeurchambre'))->with('id', $id);
        }

        public function formuleClientPost(Request $request) {
            if($request->isMethod('POST')) {
               
                $menus = join(',', $request->menus);
                // dd($menus);
                $test1 = $this->api->post('formulereceptions', [ 'menus'=> $menus, 'heure'=> $request->heure, 'date'=> $request->date, 'prix'=> $request->prix, 'remarque'=> $request->remarque, 'reception_id' => $request->id_reception , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel]);

                $id_recep = $request->id_reception;
                $recep = Reception::where('id', $id_recep)->update([
                    'formule' => 'Oui',
                    'formule_by' => Auth::user()->id
                ]);
                if ($test1 && $recep) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Ajout avec succes. Veuillez vous consulter l\'historique des formules'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            } 
            else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function hsChambre($id) {
            $id = Chambre::find($id);
            $valeurchambre = new Chambre();
            $hotels = $this->api->get('profilhotel');

            return view('hotel.hs', compact('valeurchambre', 'hotels'))->with('id', $id);
        }

        public function hsChambrePost(Request $request) {
            if($request->isMethod('POST')) {
                
                    $test1 = $this->api->post('hs', [ 'raison' => $request->raison, 'chambre_id'=> $request->id_chambre, 'created_by' => Auth::user()->id,'hotel_id'=> $request->hotel_id]);
    
                    $id_ch = $request->id_chambre;
                    $cham = Chambre::where('id', $id_ch)->update([
                        'hs' => 'Oui',
                    ]);
                    if ($test1 && $cham) {
                        return response()->json([
                            'status'=>'success',
                            'message'=>'Modifie avec succes. Veuillez vous consulter le planning d\'ocCupation des chambres'
                        ]);
                    } else {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                        ]);
                    }
                
            } else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function hsChambreEnd($id) {
            $id = Chambre::find($id);
            $cham = Chambre::where('id', $id->id)->update([
                'hs' => 'Non',
            ]);
            Session::flash('message', "Chambre mise a jour");
            return Redirect::back();
        }

        public function listeHS() {
            $valeurchambre = new Chambre();
            $valeurhotel = new Hotel();
            $hotels = $this->api->get('profilhotel');
            $hs = $this->api->get('hs');
            return view('hotel.listehs', compact( 'hs', 'hotels', 'valeurchambre', 'valeurhotel'));
        }

        public function  departClient($id)
        {
            
            if(!Auth::check()){
                return redirect()->route('user-login');
            }
            $id = Reception::find($id);
            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $chambresoccupees = $this->api->get('chambresoccupees');
            $hotels = $this->api->get('profilhotel');
            return view('hotel.depart', compact('chambresoccupees', 'valeurclient', 'hotels', 'valeurchambre'))->with('id', $id);
        }

        public function departClientPost(Request $request) {
            if($request->isMethod('POST')) {
        
                $test1 = $this->api->post('departs', [ 'remarque'=> $request->remarque, 'date_depart'=> $request->date_depart, 'heure_depart'=> $request->heure_depart, 'depart_tardif'=> $request->depart_tardif, 'montant_additionnel'=> $request->montant_additionnel, 'reception_id' => $request->id_reception , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel]); 

                $id_recep = $request->id_reception;
                $test2 = Reception::where('id', $id_recep)->update([
                    'statut' => 'Terminee',
                ]);
                
                $reception = DB::table('receptions')->where('id', $id_recep)->first();
                $chambre = DB::table('chambres')->where('id', $reception->chambre_id)->first();
                $test3 = Chambre::where('id', $chambre->id)->update([
                    'statut' => 'Libre',
                ]);

                /*$test3 = Chambre::where('id', $reception->chambre_id)->update([
                    'statut' => 'Libre',
                ]);*/

                // DEPART TARDIF A INCREMENTR COMPTE
                
                if ($test3 && $test2 && $test1) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Depart enregistre avec succes. Veuillez vous consulter la main courante de reception'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            } 
            else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function cloture() {
            if(!Auth::check()){
                return redirect()->route('user-login');
            }

            $reglements = $this->api->get('reglements');

            $encaisse = Reglement::where('cloturer', 'Non')
                            ->get();

            $decaisse = Decaissement::where('cloturer', 'Non')
                            ->get();
            // dd($encaisse);
            $montant = 0;
            for($i=0 ; $i<count($encaisse); $i++) {
                $montant += $encaisse[$i]->prix_rem;   
            }

            $montantde = 0;
            for($i=0 ; $i<count($decaisse); $i++) {
                $montantde += $encaisse[$i]->prix;   
            }
            $hotels = $this->api->get('profilhotel');

            $reception = Reception::where('cloturer', 'Non')
                            ->get();
            $valeurchambre = new Chambre();
            return view('hotel.cloture', compact('reglements', 'hotels', 'encaisse', 'decaisse', 'montant', 'montantde', 'reception', 'valeurchambre'));
        }

        public function cloturePost(Request $request) {
            if($request->isMethod('POST')) {
               
                $test1 = $this->api->post('clotures', [ 'date'=> $request->date_cloture, 'encaissement' => $request->encaissement ,  'decaissement' => $request->decaissement , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel , 'heure'=> $request->heure_cloture, 'motif'=> $request->motif]);

                $reglement = Reglement::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);

                $deloger = Deloger::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);

                $depart = Depart::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);

                $hs = Hs::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);

               // $reception1 = Reception::where('statut', 'En cours')->get();
                $reception1 = DB::table('receptions')->where('statut', 'En cours')->get();
                for($i = 0; $i < count($reception1); $i++) {
                    $recep = Reception::find($reception1[$i]->id);

                    if(!is_null($recep->total_jour)) {
                        $verif = explode(";" ,$recep->total_jour);
                        $somme = 0;
                        for($j=0; $j<count($verif); $j++) {
                            $somme += $verif[$j];
                        }
                        $modif = Reception::where('id', $recep->id)->update([
                            'report_veille' => $recep->total_general - $somme,
                            // 'total_recu' => $reception1[$i]->total_recu + $somme,
                            'total_jour' => NULL,
                        ]);
                    }
                }

                $reception = Reception::where('statut', 'Terminee')->update([
                    'cloturer' => 'Oui'
                ]);

                $formulereception = Formulereception::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);
                
                $reservation = Reservation::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);

                $restau = Restaureception::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);

                $divers = Divers::where('cloturer', 'Non')->update([
                    'cloturer' => 'Oui'
                ]);
                if ($test1) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Cloture enregistree avec succes . Veuillez consulter la situation globale'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            } 
            else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }
        public function listeClotures() {
            $clotures = $this->api->get('clotures');
            $hotels = $this->api->get('profilhotel');
            return view('hotel.situation', compact('clotures', 'hotels'));
        }

        public function partenaires() {
            $partenaires = $this->api->get('partenaires');
            $hotels = $this->api->get('profilhotel');
            return view('hotel.partenaires', compact('partenaires', 'hotels'));
        }

        public function listeFormule() {
            $formule = $this->api->get('formulereceptions');
            $menus = $this->api->get('restaurations');
            $valeurclient = new Client();
            $valeurmenu = new Restauration();
            $valeurreception = new Reception();
            return view('hotel.listeformule', compact('formule', 'menus', 'valeurclient', 'valeurmenu', 'valeurreception'));
        }

        public function divers($id) {
            $id = Reception::find($id);
            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $chambreslibres = $this->api->get('chambreslibres');
            $hotels = $this->api->get('profilhotel');
            return view('hotel.divers', compact('chambreslibres', 'valeurclient', 'valeurchambre', 'hotels'))->with('id', $id);
        }

        public function diversPost(Request $request) {
            if($request->isMethod('POST')) {
               
                $test1 = $this->api->post('divers', [ 'nom'=> $request->nom, 'prix' => $request->prix ,  'remarque' => $request->remarque , 
                'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel , 'reception_id'=> $request->id_reception]);

                $id_recep = $request->id_reception;

                $recep = Reception::find($id_recep);

                if($recep->regler == 'Oui') {
                    $receptest = Reception::where('id', $recep->id)->update([
                        'regler' => 'Non',
                        'total_general' => $recep->total_general + $request->prix ,
                    ]);
                }else {
                    $receptest = Reception::where('id', $recep->id)->update([
                        'total_general' => $recep->total_general + $request->prix ,
                    ]);
                }
                if ($test1) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Divers enregistree avec succes . Veuillez consulter la main courante de reception'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout. Veuillez reessayer plutard'
                    ]);
                }
            } 
            else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function listeDeparts() {
            $departs = $this->api->get('departs');
            $hotels = $this->api->get('profilhotel');
            $valeurclient = new Client();
            $valeurreception = new Client();
            $valeurhotel = new Hotel();
            return view('hotel.listedeparts', compact('departs', 'hotels', 'valeurclient', 'valeurreception', 'valeurhotel'));
        }

        public function voirReservation($id) {

            $id = Reservation::find($id);
            $reservation = DB::table('chambre_reservation')->where('reservation_id', $id->id)->get();
            $chambres = [];
            for($i = 0; $i < count($reservation); $i++) {
                $chambre = Chambre::find($reservation[$i]->chambre_id);
                array_push($chambres, $chambre);
            }

            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $valeurreservation = new Reservation();
            $valeurtypeclient = new TypeClient();
            $valeurmodepaiement = new ModePaiement();

            return view('hotel.presentreservation', compact('chambres', 'valeurclient', 'valeurchambre' , 'valeurreservation', 'valeurtypeclient', 'valeurmodepaiement'))->with('id', $id);
        }

        public function arrivee($id) {

            $id = Reservation::find($id);
            $reservation = DB::table('chambre_reservation')->where('reservation_id', $id->id)->get();
            $chambres = [];
            for($i = 0; $i < count($reservation); $i++) {
                $chambre = Chambre::find($reservation[$i]->chambre_id);
                array_push($chambres, $chambre);
            }

            $valeurclient = new Client();
            $valeurchambre = new Chambre();
            $valeurreservation = new Reservation();
            $valeurtypeclient = new TypeClient();
            $valeurmodepaiement = new ModePaiement();

            return view('hotel.arrivee', compact('chambres', 'valeurclient', 'valeurchambre' , 'valeurreservation', 'valeurtypeclient', 'valeurmodepaiement'))->with('id', $id);
        }

        public function arriveePost(Request $request) {
            if($request->isMethod('POST')) {
                $id_reserv = $request->id_reservation;

                $reservation = Reservation::find($id_reserv);
                

                $nbpers = $reservation->nb_adultes + $reservation->nb_enfants;
                
                $reservation2 = DB::table('chambre_reservation')->where('reservation_id', $reservation->id)->get();
                $chambres = [];
                for($i = 0; $i < count($reservation2); $i++) {
                    $chambre = Chambre::find($reservation2[$i]->chambre_id);
                    array_push($chambres, $chambre);
                }

                
                $reservationmodep = DB::table('mode_paiement_reservation')->where('reservation_id', $reservation->id)->get();
                $reservationhotel = DB::table('hotel_reservation')->where('reservation_id', $reservation->id)->get();
               
                /*var_dump($reservationhotel[]);
                    exit(); */
                // $mode = ModePaiement::find($reservationmodep->mode_paiement_id);
                for($j = 0; $j < count($chambres); $j++) {
                    $testch = Chambre::find($chambres[$j]->id);
                    if($testch->statut == 'Occupee') {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'chambre occupee'
                        ]);
                    }else {
                        $num = Str::random(10);
                        $nb = count($chambres); 
                        $test2 = $this->api->post('receptions', ['prix' => $reservation->prix_total/$nb, 'total_general' => $reservation->prix_total/$nb, 'heure_arrivee' => $request->heure_arrivee, 'heure_depart' => $request->heure_depart, 'type_sejour' => $request->type_sejour, 'id_doc' =>  $num, 'nb_personnes' => $nbpers , 'debut' => $reservation->date_debut, 'fin' =>$reservation->date_fin, 
                        'nuits' => $reservation->nb_nuits, 'remarque' => $request->remarque, 'enfants' => $reservation->nb_enfants, 'adultes' => $reservation->nb_adultes, 'venant_de' => $reservation->venant_de, 'hotel_id'=> $reservationhotel[0]->hotel_id, 'mode_paiement_id' => $reservationmodep[0]->mode_paiement_id, 'se_rendant_a' => $reservation->se_rendant_a, 'client_id'=> $reservation->client_id, 'chambre_id'=> $chambres[$j]->id, 'receptionniste_id'=> Auth::user()->id]);

                        
                        $test3 = Chambre::where('id', $chambres[$j]->id)->update([
                            'statut' => 'Occupee'
                        ]);
                    }

                }
                $test1 = Reservation::where('id', $reservation->id)->update([
                    'statut' => 'Termine',
                    'arrivee_effectuee' => 'Arrivee Effectuee',
                    'heure_arrivee' => $request->heure_arrivee,
                    'date_arrivee' => $request->date_arrivee,
                ]);
                if($test1 && $test2 && $test3) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter le planning d\'occupation des chambres'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }

            }else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function reglerReservation($id) {
            $id = Reservation::find($id);
            $hotels = $this->api->get('profilhotel');
            $reglements = $this->api->get('reglements');
            $modepaiements = $this->api->get('modepaiements');
            $valeurclient = new Client();
            $valeurtypeclient = new TypeClient();
            $valeurmodepaiement = new ModePaiement();
            $valeurchambre = new Chambre();
            $valeurreception = new Reception();
            return view('hotel.reglementreserv' , compact('hotels', 'reglements', 'modepaiements',  'valeurmodepaiement', 'valeurclient', 'valeurtypeclient', 'valeurchambre' , 'valeurreception'))->with('id', $id);
        }

        public function downloadPDFReserv($id){
            $reservation = Reservation::find($id);
            $valeurclient = new client();
            $valeurchambre = new Chambre();
            $pdf = PDF::loadView('hotel.facture_reservation', compact('reservation', 'valeurclient', 'valeurchambre'));
            return $pdf->download('invoice_facturation.pdf');
      
          }

          public function parkingList() {

            $parkings = $this->api->get('parkings');
            $hotels = $this->api->get('profilhotel');
            $users = $this->api->get('utilisateurs');
            $valeurhotel = new Hotel();
            $valeuruser = new User();
            return view('hotel.listeparkings', compact('parkings', 'users', 'hotels', 'valeurhotel', 'valeuruser'));
        }

        public function typeReservations() {
            $hotels = $this->api->get('profilhotel');
            $typereservations = $this->api->get('typereservations');
            return view('hotel.typereservations', compact('typereservations', 'hotels'));
        }
        
        public function ajoutTypeReservation(Request $request) {
            if($request->isMethod('POST')) {
                if (TypeReservation::where('name',$request->nom_type)->exists())
                {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Ce type de client existe deja'
                    ]);
                } else {
                    $test2 = $this->api->post('typereservations', [ 'name' => $request->nom_type, 'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel_id,]);
                     
                    if ($test2) {
                        return response()->json([
                            'status'=>'success',
                            'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des types de reservation'
                        ]);
                    } else {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                        ]);
                    }
                } 
            } else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }

        public function parkingPost(Request $request) {
            if($request->isMethod('POST')) {
                if (Parking::where('nom',$request->nom)->exists())
                {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Ce nom de parking existe deja'
                    ]);
                }
                else {
                    $test2 = $this->api->post('parkings', [ 'nom' => $request->nom, 'nb_places' => $request->nb_places
                    , 'location' => $request->location, 'superficie' => $request->superficie, 'gerant_id' => $request->gerant, 'created_by' => Auth::user()->id, 'hotel_id'=> $request->hotel_id,]);
                    
                    if ($test2) {
                        return response()->json([
                            'status'=>'success',
                            'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous consulter la liste des parkings'
                        ]);
                    } else {
                        return response()->json([
                            'status'=>'info',
                            'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                        ]);
                    }
                } 
            } else {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Methode de requete invalide'
                ]);
            }
        }
}
