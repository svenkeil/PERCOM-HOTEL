<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //importants
use App\Models\User; // importants
use App\Models\Pays; // importants
use App\Admin\Role;
use App\Models\Employe;
use App\Models\Comptabilite\Devise;
use App\Models\Hotel\Hotel;
use App\Models\Hotel\Depart;
use App\Models\Hotel\Partenaire;
use App\Models\Hotel\Hs;
use App\Models\Hotel\Reglement;
use App\Models\Hotel\Restauration;
use App\Models\Hotel\Receptionniste;
use App\Models\Hotel\Restaurateur;
use App\Models\Hotel\Comptable;
use App\Models\Hotel\Divers;
use App\Models\Hotel\Decaissement;
use App\Models\Hotel\RespHebergement;
use App\Models\Hotel\Restaureception;
use App\Models\Hotel\Formulereception;
use App\Models\Hotel\Client;
use App\Models\Hotel\Deloger;
use App\Models\Hotel\Reception;
use App\Models\Hotel\TypeClient;
use App\Models\Hotel\Chambre;
use App\Models\Hotel\FormuleChambre;
use App\Models\Hotel\FonctionAgent;
use App\Models\Hotel\GalerieHotel;
use App\Models\Hotel\Geolocalisation;
use App\Models\Hotel\Parking;
use App\Models\Hotel\Materielentretien;
use App\Models\Hotel\Reservation;
use App\Models\Hotel\ModePaiement;
use App\Models\Hotel\Cloture;
use App\Models\Hotel\TypePaiement;
use App\Models\Hotel\TypeEtablissement;
use App\Models\Hotel\ServicesHotel;
use App\Models\Hotel\QualiteChambres;
use App\Models\Hotel\TypeReservation;
use App\Models\Hotel\TypeChambres;
use App\Models\Hotel\Emplacementparking;
use App\Models\Comptabilite\Compte;
use Illuminate\Support\Contracts\ArrayableInterface;
use Dingo\Api\Dispatcher;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Response;
use League\Fractal;
use App\Transformers\UserTransformer;
use App\Transformers\RoleTransformer;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exception\JWTException;

class ApiController extends Controller
{
    use Helpers;
    //
    // fonction pour le test de l'api pour la liste des utilisateurs
    function getUsers(Request $request){
        if($request->isMethod('GET'))
        {
            //$users = User::all();
            //return response()->json(User::all());
            //return $this->response->array(['name' => 'Youmbou ouachi']);
            return $this->response->collection(User::all(), new UserTransformer());
            //return User::get();
            //$user= User::findOrFail(4);
            /*$users= User::all();
            return $users.find(function($users){
                return $users->email = 'gilles.youmbou@perfitcom.com';
            });
            /*$resource = new Fractal\Resource\Collection($users, function(User $user){
                return [
                    'id'      => (int) $book->id,
                    'email'   => $book->email,
                    'test'    => $book->role
                ];
            });*/
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour afficher une user en fonction de son id
    function getUserById($id){
        try{
            $user=User::find($id);
            //print($user);
            if($user)
            {
                return $this->response->item($user, new UserTransformer());
            }
            else
            {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Utilisateur pas trouve'
                ]);
            }
            //return User::find($id);
            /*methode de debugage a base de l'exception relevee
            try{
                if($user)
                {
                    return $this->response->item($user, new UserTransformer());
                }
            }catch(NotFoundHttpFoundException $ex){
                return response()->json([
                    'message' => 'Utilisateur pas trouve'], 401);
            }
            */
        }catch(Exception $e){
            return response()->json([
                'error' => 'erreur'
            ]);
        }
        //return User::find($id);
        /*methode de debugage a base de l'exception relevee
        try{
            if($user)
            {
                return $this->response->item($user, new UserTransformer());
            }
        }catch(NotFoundHttpFoundException $ex){
            return response()->json([
                'message' => 'Utilisateur pas trouve'], 401);
        }
        */
    }

    //fonction pour afficher un user en fonction de son email
    function getUserByEmail(Request $request)
    {
        try{
            $email = $request->input('email');
            $user = User::where('email', $email)->first();
            if($user)
            {
                return $this->response->item($user, new UserTransformer());
            }
            else
            {
                return response()->json([
                    'status'=> 'error',
                    'message' => 'Utilisateur pas trouve'
                ]);
            }
        }
        catch(Exception $e){
            return response()->json([
                'error' =>'erreur'
            ]);
        } 
    }

    // function pour afficher un user en fontion de son login
    function getUserByLogin(Request $request)
    {
        try{
            $login = $request->input('pseudo');
            $user = User::where('pseudo', $login)->first();
            if($user)
            {
                return $this->response->item($user, new UserTransformer());
            }
            else
            {
                return response()->json([
                    'status'=> 'error',
                    'message' => 'Utilisateur pas trouve',
                ]);
            }

        }
        catch(Exception $e){
            return response()->json([
                'error' =>'erreur'
            ]);
        }
    }

    // function pour afficher un user en fontion de son login
    function getUsersPaginate(Request $request)
    {
        try{
            $user = User::paginate(1000);
            if($user)
            {
                return $this->response->item($user, new UserTransformer());
            }
            else
            {
                return response()->json([
                    'status'=> 'error',
                    'message' => 'Utilisateur pas trouve',
                ]);
            }

        }
        catch(Exception $e){
            return response()->json([
                'error' =>'erreur'
            ]);
        }
    }

    //fonction pour post un user
    function postUsers(Request $request){
        if($request->isMethod('POST')) // revoir pk pas post poste
        {
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->lname;//a enlever
            $user->prenom = $request->fname;//a enlever
            $user->photo = $request->photo;// a enlever
            $user->tel = $request->phone;//  enlever
            $user->pseudo = $request->username;
           //  $user->role = $request->role;
            $user->created_by = $request->created_by;
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(100);
            //dd($user);

            $user->save();
            return Response::json($user,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }

    }



    // fonction pour le test de l'api pour la liste des roles ou privileges
    function getRoles(Request $request){
        if($request->isMethod('GET'))
        {
            //return Role::all();
            return $this->response->collection(Role::all(), new RoleTransformer());
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un role
    function postRoles(Request $request){
        if($request->isMethod('POST'))
        {
            $role = new Role();
            $role->name = $request->role;// a verifier dans post

            $role->save();
            return Response::json($role,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des employes
    function getEmployes(Request $request){
        if($request->isMethod('GET'))
        {
            return Employe::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un employe
    function postEmployes(Request $request){
        if($request->isMethod('POST'))
        {
            $employe = new Employe();
            $employe->email = $request->email;
            $employe->name = $request->lname;
            $employe->prenom = $request->fname;
            $employe->poste = $request->poste;
            $employe->salaire = $request->salaire;//champ a ajouter

            $employe->save();

            if($request->fonction_agent_id) {
                $fonction_agent = FonctionAgent::find($request->fonction_agent_id);

                $employe->fonctionagents()->attach($fonction_agent);

            }
            
            return Response::json($employe,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }
    // fonction pour le test de l'api pour la liste des devises
    function getDevises(Request $request){
        if($request->isMethod('GET'))
        {
            return Devise::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post une devise
    function postDevises(Request $request){
        if($request->isMethod('POST'))
        {
            $devises = new Devise();
            $devises->name = $request->name;
            $devises->taux_echange = $request->taux_echange;//champ a ajouter

            $devises->save();
            return Response::json($devises,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour le profil de l'hotel
    function getProfilHotel(Request $request){
        if($request->isMethod('GET'))
        {
            return Hotel::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post le profil de l'hotel
    function postProfilHotel(Request $request){
        if($request->isMethod('POST'))
        {
            $hotel = new Hotel();
            $hotel->name = $request->name;
            $hotel->etoiles = $request->etoiles;
            $hotel->date_creation = $request->date_creation;
            $hotel->email = $request->email;
            $hotel->contact = $request->contact;
            $hotel->directeur = $request->directeur;
            $hotel->adresse = $request->adresse;
            $hotel->logo = $request->logo;
            $hotel->logo_content_type = $request->logo_content_type;
            $hotel->site_web = $request->site_web;
            $hotel->nb_chambres = $request->nb_chambres;
            $hotel->nb_employes = $request->nb_employes;
            $hotel->geolocalisation_id = $request->geolocalisation_id;
            $hotel->type_etablissement_id = $request->type_etablissement_id;
            $hotel->devise_id = $request->devise_id;
            $hotel->pays_id = $request->pays_id;
            $hotel->created_by = $request->created_by;

            $hotel->save();

            if($request->typereservation) {
                /* for($i=0; $i<$request->typereservation.length; $i++) {
                    $typereservation = TypeReservation::find($request->typereservation[i]);
                    $hotel->typereservations()->attach($typereservation);
                }*/

                $long1 = count($request->typereservation);
                for($i=0; $i<$long1; $i++) {
                    $typereservation = TypeReservation::find($request->typereservation[$i]);
                    $hotel->typereservations()->attach($typereservation);
                }
            }

            if($request->serviceshotel) {
                /* for($j=0; $j<$request->serviceshotel.length; $j++) {
                    $serviceshotel = ServicesHotel::find($request->serviceshotel[j]);
                    $hotel->serviceshotels()->attach($serviceshotel);
                }*/

                $long2 = count($request->serviceshotel);
                for($j=0; $j<$long2; $j++) {
                    $serviceshotel = ServicesHotel::find($request->serviceshotel[$j]);
                    $hotel->serviceshotels()->attach($serviceshotel);
                }
            }

            if($request->modepaiement) {
               /* for($k=0; $k<$request->modepaiement.length; $k++) {
                    $modepaiement = ModePaiement::find($request->modepaiement[k]);
                    $hotel->modepaiements()->attach($modepaiement);
                }*/
                $long3 = count($request->modepaiement);
                for($k=0; $k<$long3; $k++) {
                    $modepaiement = ModePaiement::find($request->modepaiement[$k]);
                    $hotel->modepaiements()->attach($modepaiement);
                }
            }

            if($request->qualitechambre) {
                /* for($l=0; $l<$request->qualitechambre.length; $l++) {
                    $qualitechambre = QualiteChambres::find($request->qualitechambre[l]);
                    $hotel->qualitechambres()->attach($qualitechambre);
                }*/

                $long4 = count($request->qualitechambre);
                for($l=0; $l<$long4; $l++) {
                    $qualitechambre = QualiteChambres::find($request->qualitechambre[$l]);
                    $hotel->qualitechambres()->attach($qualitechambre);
                }
            }

            if($request->typechambre) {
                /*foreach(($request->typechambre) as $typech){
                    $typechambre = TypeChambres::find($typech[m]);
                    $hotel->typechambres()->attach($typechambre);
                }
                 print($request->typechambre[2]);
                    print($request->typechambre[5]); [ 1, 2 ]
                    print(strlen($request->typechambre));
                    
                    print(strlen($request->typechambre));
                    print($request->typechambre[9]);
                    print($request->typechambre[14]);*/

                    $long5 = count($request->typechambre);
                    for($m=0; $m<$long5; $m++) {
                        $typechambre = TypeChambres::find($request->typechambre[$m]);
                        $hotel->typechambres()->attach($typechambre);
                    }
                
            }

            if($request->formulechambre) {

                $long6 = count($request->formulechambre);
                for($n=0; $n<$long6; $n++) {
                    $formulechambre = FormuleChambre::find($request->formulechambre[$n]);
                    $hotel->formulechambres()->attach($formulechambre);
                }
            }

            if($request->typepaiement) {

                $long7 = count($request->typepaiement);
                for($pl=0; $p<$long7; $p++) {
                    $typepaiement = TypePaiement::find($request->typepaiement[$p]);
                    $hotel->typepaiements()->attach($typepaiement);
                }
            }

           /* if($request->fonctionagents) {

                $long7 = count($request->fonctionagents);
                for($pl=0; $p<$long7; $p++) {
                    $fonctionagents = FonctionAgent::find($request->fonctionagents[$p]);
                    $hotel->fonctionagents()->attach($fonctionagents);
                }
            }*/

            
            return Response::json($hotel,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des chambres
    function getChambres(Request $request){
        if($request->isMethod('GET'))
        {
            return Chambre::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get les chambres occupees
    function getChambresOccupees(Request $request){
        if($request->isMethod('GET'))
        {
            $chambresoccupees = Chambre::where('statut', 'Occupee')->get();
            return Response::json($chambresoccupees,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get les chambres libres
    function getChambresLibres(Request $request){
        if($request->isMethod('GET'))
        {
            $chambreslibres = Chambre::where('statut', 'Libre')->get();
            return Response::json($chambreslibres,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post une chambre
    function postChambre(Request $request){
        if($request->isMethod('POST'))
        {
            $chambre = new Chambre();
            $chambre->name = $request->name;
            $chambre->code = $request->code;
            $chambre->prix = $request->prix;
            $chambre->description = $request->description;
            $chambre->photo = $request->photo;
            $chambre->deb_reserv = $request->deb_reserv;
            $chambre->fin_reserv = $request->fin_reserv;
            $chambre->type_chambres_id = $request->type_chambres_id;
            $chambre->qualite_chambres_id = $request->qualite_chambres_id;
            $chambre->formule_chambres_id = $request->formule_chambres_id;
            $chambre->hotel_id = $request->hotel_id;
            $chambre->created_by = $request->created_by;

            $chambre->save();

            if($request->reservation_id) {
                $reservation = Reservation::find($request->reservation_id);

                $chambre->reservations()->attach($reservation);

            }
            return Response::json($chambre,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des chambres
    function getFormuleChambres(Request $request){
        if($request->isMethod('GET'))
        {
            return FormuleChambre::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post une chambre
    function postFormuleChambre(Request $request){
        if($request->isMethod('POST'))
        {
            $formulechambre = new FormuleChambre();
            $formulechambre->name = $request->name;
            $formulechambre->created_by = $request->created_by;
            $formulechambre->hotel_id = $request->hotel_id;

            $formulechambre->save();

            return Response::json($formulechambre,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la geolocalisation de l'hotel
    function getGeolocalisation(Request $request){
        if($request->isMethod('GET'))
        {
            return Geolocalisation::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un une geolocalisation
    function postGeolocalisation(Request $request){
        if($request->isMethod('POST'))
        {
            $geolocalisation = new Geolocalisation();
            // $geolocalisation->latitude = $request->latitude;
            // $geolocalisation->longitude = $request->longitude;
            $geolocalisation->fuseau_horaire = $request->fuseau_horaire;

            $geolocalisation->save();
            return Response::json($geolocalisation,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des reservations
    function getReservations(Request $request){
        if($request->isMethod('GET'))
        {
            return Reservation::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post une reservation
    function postReservations(Request $request){
        if($request->isMethod('POST'))
        {
            $reservations = new Reservation();
            $reservations->id_reserv = Str::random(15);
            $reservations->date_debut = $request->debut;
            $reservations->date_fin = $request->fin;
            $reservations->nb_nuits = $request->nb_nuits;
            $reservations->nb_adultes = $request->nb_adultes;
            $reservations->nb_enfants = $request->nb_enfants;
            $reservations->nb_chambres = $request->nb_chambres;
            $reservations->venant_de = $request->venant_de;
            $reservations->se_rendant_a = $request->se_rendant_a;
            $reservations->prix_total = $request->prix_total;
            $reservations->remarque = $request->remarque;
            // $reservations->chambre_id = $request->chambre_id;
            $reservations->client_id = $request->client_id;
            $reservations->type_reservation_id = $request->type_reservation_id;
            $reservations->created_by = $request->created_by;

            $reservations->save();

            /*if($request->chambre_id) { // 1 chambre. a revoir pour pluseiurs. voir hotel
                $chambre = Chambre::find($request->chambre_id);

                $reservations->chambres()->attach($chambre);

            } */

            if($request->chambres) {

                $long1 = count($request->chambres);
                for($i=0; $i<$long1; $i++) {
                    $chambre = Chambre::find($request->chambres[$i]);
                    $reservations->chambres()->attach($chambre);
                }
            }

            if($request->modepaiement) { // 1 mode de paiement. a revoir pour pluseiurs. voir hotel
                $modepaiement = ModePaiement::find($request->modepaiement);

                $reservations->modepaiements()->attach($modepaiement);

            }

            if($request->hotel) { // 1 mode de paiement. a revoir pour pluseiurs. voir hotel
                $hotel = Hotel::find($request->hotel);

                $reservations->hotels()->attach($hotel);

            }

            return Response::json($reservations,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }


    // fonction pour le test de l'api pour la liste des pays
    function getPays(Request $request){
        if($request->isMethod('GET'))
        {
            return Pays::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un pays
    function postPays(Request $request){
        if($request->isMethod('POST'))
        {
            $pays = new Pays();
            $pays->name = $request->name;

            $pays->save();
            return Response::json($pays,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour le compte de l'hotel
    function getCompteHotel(Request $request) {
        if($request->isMethod('GET'))
        {
            return Compte::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post le compte de l'hotel
    function postCompteHotel(Request $request) {
        if($request->isMethod('POST'))
        {
            $comptehotel = new Compte();
            $comptehotel->num_compte = $request->num_compte;
            $comptehotel->tva = $request->tva;
            $comptehotel->journal = $request->journal;
            $comptehotel->devise_id = $request->devise_id;
            $comptehotel->hotel_id = $request->hotel_id;

            $comptehotel->save();
            return Response::json($comptehotel,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get le type de chambres
    function getTypeChambres(Request $request){
        if($request->isMethod('GET'))
        {
            return TypeChambres::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type de chambre
    function postTypeChambre(Request $request) {
        if($request->isMethod('POST'))
        {
            $typechambre = new TypeChambres();
            $typechambre->name = $request->name;
            $typechambre->nb_personnes = $request->nb_personnes;
            $typechambre->periode_vente = $request->periode_vente;
            $typechambre->created_by = $request->created_by;
            $typechambre->hotel_id = $request->hotel_id;
            // $typechambre->hotel_id = $request->hotel_id;

            $typechambre->save();
            return Response::json($typechambre,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get la qualite de chambres
    function getQualiteChambres(Request $request){
        if($request->isMethod('GET'))
        {
            return QualiteChambres::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post une nouvelle qualite de chambre
    function postQualiteChambre(Request $request) {
        if($request->isMethod('POST'))
        {
            $qualitechambre = new QualiteChambres();
            $qualitechambre->name = $request->name;
            $qualitechambre->created_by = $request->created_by;
            $qualitechambre->hotel_id = $request->hotel_id;
            // $qualitechambre->hotel_id = $request->hotel_id;

            $qualitechambre->save();
            return Response::json($qualitechambre,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get le type de reservation
    function getTypeReservations(Request $request){
        if($request->isMethod('GET'))
        {
            return TypeReservation::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post le type de reservation
    function postTypeReservation(Request $request) {
        if($request->isMethod('POST'))
        {
            $typereservation = new TypeReservation();
            $typereservation->name = $request->name;
            $typereservation->created_by = $request->created_by;
            // $typereservation->hotel_id = $request->hotel_id;

            $typereservation->save();
            return Response::json($typereservation,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get les modes de paiement
    function getModePaiements(Request $request){
        if($request->isMethod('GET'))
        {
            return ModePaiement::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un mode de paiement
    function postModePaiement(Request $request) {
        if($request->isMethod('POST'))
        {
            $modepaiement = new ModePaiement();
            $modepaiement->name = $request->name;
            $modepaiement->created_by = $request->created_by;
            $modepaiement->description = $request->description;
            // $modepaiement->hotel_id = $request->hotel_id;

            $modepaiement->save();
            
            if($request->reservation_id) { // 1 reservation. a revoir pour pluseiurs. voir hotel
                $reservation = Reservation::find($request->reservation_id);

                $modepaiement->reservations()->attach($reservation);

            }

            if($request->hotel_id) { // 1 reservation. a revoir pour pluseiurs. voir hotel
                $hotel = Hotel::find($request->hotel_id);

                $modepaiement->hotels()->attach($hotel);

            }
            return Response::json($modepaiement,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get les types de paiement
    function getTypePaiements(Request $request){
        if($request->isMethod('GET'))
        {
            return TypePaiement::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type de paiement
    function postTypePaiement(Request $request) {
        if($request->isMethod('POST'))
        {
            $typepaiement = new TypePaiement();
            $typepaiement->name = $request->name;
            $typepaiement->montant = $request->montant;
            // $modepaiement->hotel_id = $request->hotel_id;

            $typepaiement->save();

            return Response::json($typepaiement,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get les types d'hotel
    function getTypeEtablissements(Request $request){
        if($request->isMethod('GET'))
        {
            return TypeEtablissement::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type d'hotel
    function postTypeEtablissement(Request $request) {
        if($request->isMethod('POST'))
        {
            $typeetablissement = new TypeEtablissement();
            $typeetablissement->name = $request->name;
           // $typeetablissement->hotel_id = $request->hotel_id;

            $typeetablissement->save();
            return Response::json($typeetablissement,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }
    

    // fonction pour get les services de l'hotel
    function getServicesHotel(Request $request){
        if($request->isMethod('GET'))
        {
            return ServicesHotel::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un service de l'Hotel
    function postServicesHotel(Request $request) {
        if($request->isMethod('POST'))
        {
            $serviceshotel = new ServicesHotel();
            $serviceshotel->name = $request->name;
            // $serviceshotel->hotel_id = $request->hotel_id;

            $serviceshotel->save();
            return Response::json($serviceshotel,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour get les images l'hotel
    function getImagesHotel(Request $request){
        if($request->isMethod('GET'))
        {
            return GalerieHotel::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post une image de l'hotel
    function postImageHotel(Request $request) {
        if($request->isMethod('POST'))
        {
            $imagehotel = new GalerieHotel();
            $imagehotel->name = $request->name;
            $imagehotel->image_content_type = $request->name;
            $imagehotel->image = $request->name;
            $imagehotel->description = $request->name;
            $imagehotel->hotel_id = $request->hotel_id;

            $imagehotel->save();
            return Response::json($imagehotel,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }
    
    // fonction pour le test de l'api pour la liste des clients de l'hotel
    function getClients(Request $request){
        if($request->isMethod('GET'))
        {
            return Client::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un client
    function postClient(Request $request){
        if($request->isMethod('POST'))
        {
            $client = new Client();
            $client->name = $request->name;
            $client->prenom = $request->prenom;
            $client->email = $request->email;
            $client->tel = $request->tel;
            $client->adresse = $request->adresse;
            $client->date_naissance = $request->date_naissance;
            $client->lieu_naissance = $request->lieu_naissance;
            $client->profession = $request->profession;
            $client->adresse = $request->adresse;
            $client->entreprise = $request->entreprise;
            $client->pays = $request->pays; // mettre pays _id
            $client->pays_residence = $request->pays_residence; // mettre pays _id
            $client->identifiant_unique = Str::random(15);
            $client->ville = $request->ville;
            $client->no_piece_personnelle = $request->no_piece_personnelle;
            $client->delivre_le = $request->delivre_le;
            $client->lieu_delivrance = $request->lieu_delivrance;
            $client->sexe = $request->sexe;
            $client->type_piece = $request->type_piece;
            $client->photo_piece = $request->photo_piece;
            $client->hotel_id = $request->hotel_id;
            $client->type_client_id = $request->type_client_id;
            $client->created_by = $request->created_by;

            $client->save();

            return Response::json($client,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des type de  clients de l'hotel
    function getTypeClients(Request $request){
        if($request->isMethod('GET'))
        {
            return TypeClient::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postTypeClient(Request $request){
        if($request->isMethod('POST'))
        {
            $typeclient = new TypeClient();
            $typeclient->name = $request->name;
            $typeclient->description = $request->description;
            $typeclient->created_by = $request->created_by;
            $typeclient->hotel_id = $request->hotel_id;

            $typeclient->save();

            return Response::json($typeclient,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des type de  clients de l'hotel
    function getFonctionAgents(Request $request){
        if($request->isMethod('GET'))
        {
            return FonctionAgent::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postFonctionAgent(Request $request){
        if($request->isMethod('POST'))
        {
            $fonctionagent = new FonctionAgent();
            $fonctionagent->name = $request->name;

            $fonctionagent->save();

            if($request->employe_id) {
                $employe = Employe::find($request->employe);

                $fonctionagent->employes()->attach($employe);

            }

            return Response::json($fonctionagent,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // fonction pour le test de l'api pour la liste des reception
    function getReceptions(Request $request){
        if($request->isMethod('GET'))
        {
            return Reception::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postReception(Request $request){
        if($request->isMethod('POST'))
        {
            $reception = new Reception();
            $reception->id_doc = $request->id_doc;
            $reception->name = Str::random(15);
            $reception->prix_total = $request->prix;
            $reception->nb_personnes = $request->nb_personnes;
            $reception->date_debut = $request->debut;
            $reception->date_fin = $request->fin;
            $reception->nb_nuits = $request->nuits;
            $reception->enfants = $request->enfants;
            $reception->adultes = $request->adultes;
            $reception->rabais = $request->rabais;
            $reception->montant_partenaire = $request->montant_partenaire;
            $reception->formule_by = $request->formule_by;
            $reception->remarque = $request->remarque;
            $reception->heure_arrivee = $request->heure_arrivee;
            $reception->heure_depart = $request->heure_depart;
            $reception->type_sejour = $request->type_sejour;
            $reception->total_restau = $request->total_restau;
            $reception->total_jour = $request->total_jour;
            $reception->total_recu = $request->total_recu;
            $reception->total_general = $request->total_general;
            $reception->report_veille = $request->report_veille;
            $reception->debours = $request->debours;
            $reception->aarhes = $request->aarhes;
            $reception->observations = $request->observations;
            $reception->partenaire_id = $request->partenaire_id;
            $reception->client_id = $request->client_id;
            $reception->chambre_id = $request->chambre_id;
            $reception->receptionniste_id = $request->receptionniste_id;
            $reception->mode_paiement_id = $request->mode_paiement_id;
            $reception->se_rendant_a = $request->se_rendant_a;
            $reception->venant_de = $request->venant_de;
            $reception->nomfille = $request->nomfille;
            $reception->hotel_id = $request->hotel_id;

            $reception->save();


            return Response::json($reception,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }


    
    function getDelogements(Request $request){
        if($request->isMethod('GET'))
        {
            return Deloger::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postDelogement(Request $request){
        if($request->isMethod('POST'))
        {
            $deloger = new Deloger();
            $deloger->id_delog = $request->id_delog;
            $deloger->nv_chambre = $request->nv_chambre;
            $deloger->ancienne_chambre = $request->ancienne_chambre;
            $deloger->raison = $request->raison;
            $deloger->reception_id = $request->reception_id;
            $deloger->hotel_id = $request->hotel_id;
            $deloger->created_by = $request->created_by;

            $deloger->save();


            return Response::json($deloger,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getRestaurations(Request $request){
        if($request->isMethod('GET'))
        {
            return Restauration::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postRestauration(Request $request){
        if($request->isMethod('POST'))
        {
            $menu = new Restauration();
            $menu->name = $request->name;
            $menu->type = $request->type;
            $menu->code = $request->code;
            $menu->prix = $request->prix;
            $menu->date_de_preparation = $request->date_de_preparation;
            $menu->description = $request->description;
            $menu->restaurateur_id = $request->restaurateur_id;

            $menu->save();

            if($request->hotel_id) {
                $hotel = Hotel::find($request->hotel_id);

                $menu->hotels()->attach($hotel);

            }
            return Response::json($menu,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getRestaureceptions(Request $request){
        if($request->isMethod('GET'))
        {
            return Restaureception::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postRestaureception(Request $request){
        if($request->isMethod('POST'))
        {
            $menurecep = new Restaureception();
            $menurecep->remarque = $request->remarque;
            $menurecep->menus = $request->menus;
            $menurecep->prix = $request->prix;
            $menurecep->reception_id = $request->reception_id;
            $menurecep->hotel_id = $request->hotel_id;
            $menurecep->created_by = $request->created_by;

            $menurecep->save();

            return Response::json($menurecep,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getReglements(Request $request){
        if($request->isMethod('GET'))
        {
            return Reglement::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postReglement(Request $request){
        if($request->isMethod('POST'))
        {
            $reglement = new Reglement();
            $reglement->name = Str::random(15);
            $reglement->total_restau = $request->total_restau;
            $reglement->total_nuitees = $request->total_nuitees;
            $reglement->divers = $request->divers;
            $reglement->total_general = $request->total_general;
            $reglement->reception_id = $request->reception_id;
            $reglement->hotel_id = $request->hotel_id;
            $reglement->remarque = $request->remarque;
            $reglement->info_ext = $request->info_ext;
            $reglement->prix_rem = $request->prix_rem;
            $reglement->montant_additionnel = $request->montant_additionnel;
            $reglement->created_by = $request->created_by;

            $reglement->save();

            return Response::json($reglement,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getRestaurateurs(Request $request){
        if($request->isMethod('GET'))
        {
            return Restaurateur::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postRestaurateur(Request $request){
        if($request->isMethod('POST'))
        {
            $restaurateur = new Restaurateur();
            $restaurateur->matricule = Str::random(15);
            $restaurateur->type_contract = $request->type_contract;
            $restaurateur->cv = $request->cv;
            $restaurateur->start_date = $request->start_date;
            $restaurateur->end_date = $request->end_date;
            $restaurateur->no_compte = $request->no_compte;
            $restaurateur->revenu = $request->revenu;
            $restaurateur->user_id = $request->user_id;
            $restaurateur->created_by = $request->created_by;

            $restaurateur->save();

            return Response::json($restaurateur,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getRespoHebergements(Request $request){
        if($request->isMethod('GET'))
        {
            return RespHebergement::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postRespoHebergement(Request $request){
        if($request->isMethod('POST'))
        {
            $respohebergement = new RespHebergement();
            $respohebergement->matricule = Str::random(15);
            $respohebergement->type_contract = $request->type_contract;
            $respohebergement->cv = $request->cv;
            $respohebergement->start_date = $request->start_date;
            $respohebergement->end_date = $request->end_date;
            $respohebergement->no_compte = $request->no_compte;
            $respohebergement->revenu = $request->revenu;
            $respohebergement->user_id = $request->user_id;
            $respohebergement->created_by = $request->created_by;

            $respohebergement->save();

            return Response::json($respohebergement,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getComptables(Request $request){
        if($request->isMethod('GET'))
        {
            return Comptable::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postComptable(Request $request){
        if($request->isMethod('POST'))
        {
            $comptable = new Comptable();
            $comptable->matricule = Str::random(15);
            $comptable->type_contract = $request->type_contract;
            $comptable->cv = $request->cv;
            $comptable->start_date = $request->start_date;
            $comptable->end_date = $request->end_date;
            $comptable->no_compte = $request->no_compte;
            $comptable->revenu = $request->revenu;
            $comptable->user_id = $request->user_id;
            $comptable->created_by = $request->created_by;

            $comptable->save();

            return Response::json($comptable,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getReceptionnistes(Request $request){
        if($request->isMethod('GET'))
        {
            return Receptionniste::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postReceptionniste(Request $request){
        if($request->isMethod('POST'))
        {
            $receptionniste = new Receptionniste();
            $receptionniste->matricule = Str::random(15);
            $receptionniste->type_contract = $request->type_contract;
            $receptionniste->cv = $request->cv;
            $receptionniste->start_date = $request->start_date;
            $receptionniste->end_date = $request->end_date;
            $receptionniste->no_compte = $request->no_compte;
            $receptionniste->revenu = $request->revenu;
            $receptionniste->user_id = $request->user_id;
            $receptionniste->created_by = $request->created_by;

            $receptionniste->save();

            return Response::json($receptionniste,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // hs
    function getHs(Request $request){
        if($request->isMethod('GET'))
        {
            return Hs::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postHs(Request $request){
        if($request->isMethod('POST'))
        {
            $hs = new Hs();
            $hs->id_hs = Str::random(15);
            $hs->raison = $request->raison;
            $hs->chambre_id = $request->chambre_id;
            $hs->hotel_id = $request->hotel_id;
            $hs->created_by = $request->created_by;

            $hs->save();

            return Response::json($hs,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    function getFormulereceptions(Request $request){
        if($request->isMethod('GET'))
        {
            return Formulereception::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postFormulereception(Request $request){
        if($request->isMethod('POST'))
        {
            $formrecep = new Formulereception();
            $formrecep->remarque = $request->remarque;
            $formrecep->menus = $request->menus;
            $formrecep->prix = $request->prix;
            $formrecep->heure = $request->heure;
            $formrecep->date = $request->date;
            $formrecep->reception_id = $request->reception_id;
            $formrecep->hotel_id = $request->hotel_id;
            $formrecep->created_by = $request->created_by;

            $formrecep->save();

            return Response::json($formrecep,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // partenaire
    function getPartenaires(Request $request){
        if($request->isMethod('GET'))
        {
            return Partenaire::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postPartenaire(Request $request){
        if($request->isMethod('POST'))
        {
            $partenaires = new Partenaire();
            $partenaires->matricule = Str::random(15);
            $partenaires->name = $request->name;
            $partenaires->phone = $request->phone;
            $partenaires->type_partenaire = $request->type_partenaire;
            $partenaires->date_debut = $request->date_debut;
            $partenaires->date_fin = $request->date_fin;
            $partenaires->solde = $request->solde;
            $partenaires->hotel_id = $request->hotel_id;
            $partenaires->created_by = $request->created_by;

            $partenaires->save();

            return Response::json($partenaires,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

     // depart
     function getDeparts(Request $request){
        if($request->isMethod('GET'))
        {
            return Depart::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post un type client
    function postDepart(Request $request){
        if($request->isMethod('POST'))
        {
            $depart = new Depart();
            $depart->date_depart = $request->date_depart;
            $depart->heure_depart = $request->heure_depart;
            $depart->depart_tardif = $request->depart_tardif;
            $depart->montant_additionnel = $request->montant_additionnel;
            $depart->remarque = $request->remarque;
            $depart->reception_id = $request->reception_id;
            $depart->hotel_id = $request->hotel_id;
            $depart->created_by = $request->created_by;

            $depart->save();

            return Response::json($depart,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

     // Cloture
     function getClotures(Request $request){
        if($request->isMethod('GET'))
        {
            return Cloture::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post
    function postCloture(Request $request){
        if($request->isMethod('POST'))
        {
            $cloture = new Cloture();
            $cloture->date = $request->date;
            $cloture->heure = $request->heure;
            $cloture->motif = $request->motif;
            $cloture->encaissement = $request->encaissement;
            $cloture->decaissement = $request->decaissement;
            $cloture->hotel_id = $request->hotel_id;
            $cloture->created_by = $request->created_by;

            $cloture->save();

            return Response::json($cloture,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }


    // Divers
    function getDivers(Request $request){
        if($request->isMethod('GET'))
        {
            return Divers::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post
    function postDivers(Request $request){
        if($request->isMethod('POST'))
        {
            $divers = new Divers();
            $divers->nom = $request->nom;
            $divers->prix = $request->prix;
            $divers->remarque = $request->remarque;
            $divers->reception_id = $request->reception_id;
            $divers->hotel_id = $request->hotel_id;
            $divers->created_by = $request->created_by;

            $divers->save();

            return Response::json($divers,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // Decaissement
    function getDecaissement(Request $request){
        if($request->isMethod('GET'))
        {
            return Decaissement::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post
    function postDecaissement(Request $request){
        if($request->isMethod('POST'))
        {
            $decaissement = new Decaissement();
            $decaissement->nom = Str::randon(15);
            $decaissement->prix = $request->prix;
            $decaissement->remarque = $request->remarque;
            $decaissement->hotel_id = $request->hotel_id;
            $decaissement->created_by = $request->created_by;

            $decaissement->save();

            return Response::json($decaissement,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // Parking
    function getParkings(Request $request){
        if($request->isMethod('GET'))
        {
            return Parking::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post
    function postParking(Request $request){
        if($request->isMethod('POST'))
        {
            $parking = new Parking();
            $parking->matricule = Str::random(15);
            $parking->nom = $request->nom;
            $parking->location = $request->location;
            $parking->nb_places = $request->nb_places;
            $parking->superficie = $request->superficie;
            $parking->gerant_id = $request->gerant_id;
            $parking->hotel_id = $request->hotel_id;
            $parking->created_by = $request->created_by;

            $parking->save();

            return Response::json($parking,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // Decaissement
    function getMaterielEntretien(Request $request){
        if($request->isMethod('GET'))
        {
            return Materielentretien::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post
    function postMaterielEntretien(Request $request){
        if($request->isMethod('POST'))
        {
            $matentretien = new Materielentretien();
            $decaissement->nom = Str::random(15);
            $decaissement->prix = $request->prix;
            $decaissement->remarque = $request->remarque;
            $decaissement->hotel_id = $request->hotel_id;
            $decaissement->created_by = $request->created_by;

            $matenetretien->save();

            return Response::json($matenetretien,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    // Parking
    function getEmplacementParking(Request $request){
        if($request->isMethod('GET'))
        {
            return Emplacementparking::all();
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }

    //fonction pour post
    function postEmplacementParking(Request $request){
        if($request->isMethod('POST'))
        {
            $empparking = new Emplacementparking();
            $empparking->matricule = Str::random(15);
            $empparking->prix = $request->prix;
            $empparking->taille = $request->taille;
            $empparking->parking_id = $request->parking_id;
            $empparking->client_id = $request->client_id;
            $empparking->created_by = $request->created_by;

            $empparking->save();

            return Response::json($empparking,200);
        }
        else
        {
            return response()->json([
                'status'=> 'error',
                'message'=>' methode de requete invalide'
            ]);
        }
    }
    
    function test(){


        return["Result" => "Data has been saved"];
    }
}
