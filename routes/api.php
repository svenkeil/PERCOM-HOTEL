<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Dingo\Api\Auth\Provider\JWT;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('utilisateurs','App\Http\Controllers\Api\V1\ApiController@getUsers')->name('getAllUsers');//route pour afficher la liste des utilisateurs de la bd en json
   // $api->get('produits','App\Http\Controllers\User\UserController@test2');
    
    $api->post('utilisateurs', 'App\Http\Controllers\Api\V1\ApiController@postUsers')->name('postUser');

    $api->get('roles', 'App\Http\Controllers\Api\V1\ApiController@getRoles')->name('get-roles');
    $api->post('roles', 'App\Http\Controllers\Api\V1\ApiController@postRoles')->name('post-role');

    $api->get('employes', 'App\Http\Controllers\Api\V1\ApiController@getEmployes')->name('get-employes');
    $api->post('employes', 'App\Http\Controllers\Api\V1\ApiController@postEmployes')->name('post-employes');

    $api->get('devises', 'App\Http\Controllers\Api\V1\ApiController@getDevises')->name('get-devises');
    $api->post('devises', 'App\Http\Controllers\Api\V1\ApiController@postDevises')->name('post-devises');

    $api->get('profilhotel', 'App\Http\Controllers\Api\V1\ApiController@getProfilHotel')->name('get-profil-hotel');
    $api->post('profilhotel', 'App\Http\Controllers\Api\V1\ApiController@postProfilHotel')->name('post-profilhotel');

    $api->get('chambres', 'App\Http\Controllers\Api\V1\ApiController@getChambres')->name('get-chambres');
    $api->post('chambres', 'App\Http\Controllers\Api\V1\ApiController@postChambre')->name('post-chambre');

    $api->get('chambresoccupees', 'App\Http\Controllers\Api\V1\ApiController@getChambresOccupees')->name('get-chambres-occupees');
    $api->get('chambreslibres', 'App\Http\Controllers\Api\V1\ApiController@getChambresLibres')->name('get-chambres-libres');
    
    $api->get('typechambres', 'App\Http\Controllers\Api\V1\ApiController@getTypeChambres')->name('get-typechambres');
    $api->post('typechambres', 'App\Http\Controllers\Api\V1\ApiController@postTypeChambre')->name('post-typechambre');

    $api->get('qualitechambres', 'App\Http\Controllers\Api\V1\ApiController@getQualiteChambres')->name('get-qualitechambres');
    $api->post('qualitechambres', 'App\Http\Controllers\Api\V1\ApiController@postQualiteChambre')->name('post-qualitechambre');

    $api->get('formulechambres', 'App\Http\Controllers\Api\V1\ApiController@getFormuleChambres')->name('get-formulechambres');
    $api->post('formulechambres', 'App\Http\Controllers\Api\V1\ApiController@postFormuleChambre')->name('post-formulechambre');

    $api->get('geolocalisation', 'App\Http\Controllers\Api\V1\ApiController@getGeolocalisation')->name('get-geolocalisation');
    $api->post('geolocalisation', 'App\Http\Controllers\Api\V1\ApiController@postGeolocalisation')->name('post-geolocalisation');
    
    $api->get('reservations', 'App\Http\Controllers\Api\V1\ApiController@getReservations')->name('get-reservations');
    $api->post('reservations', 'App\Http\Controllers\Api\V1\ApiController@postReservations')->name('post-reservation');
    
    $api->get('pays', 'App\Http\Controllers\Api\V1\ApiController@getPays')->name('get-pays');
    $api->post('pays', 'App\Http\Controllers\Api\V1\ApiController@postPays')->name('post-pays');
    
    $api->get('comptehotel', 'App\Http\Controllers\Api\V1\ApiController@getCompteHotel')->name('get-comptehotel');
    $api->post('comptehotel', 'App\Http\Controllers\Api\V1\ApiController@postCompteHotel')->name('post-comptehotel');

    $api->get('modepaiements', 'App\Http\Controllers\Api\V1\ApiController@getModePaiements')->name('get-modepaiements');
    $api->post('modepaiements', 'App\Http\Controllers\Api\V1\ApiController@postModePaiement')->name('post-modepaiement');

    $api->get('typepaiements', 'App\Http\Controllers\Api\V1\ApiController@getTypePaiements')->name('get-type-paiements');
    $api->post('typepaiements', 'App\Http\Controllers\Api\V1\ApiController@postTypePaiement')->name('post-type-paiement');

    $api->get('typereservations', 'App\Http\Controllers\Api\V1\ApiController@getTypeReservations')->name('get-typereservations');
    $api->post('typereservations', 'App\Http\Controllers\Api\V1\ApiController@postTypeReservation')->name('post-typereservation');

    $api->get('typeetablissement', 'App\Http\Controllers\Api\V1\ApiController@getTypeEtablissements')->name('get-typehotels');
    $api->post('typeetablissement', 'App\Http\Controllers\Api\V1\ApiController@postTypeEtablissement')->name('post-typehotel');

    $api->get('serviceshotel', 'App\Http\Controllers\Api\V1\ApiController@getServicesHotel')->name('get-serviceshotel');
    $api->post('serviceshotel', 'App\Http\Controllers\Api\V1\ApiController@postServicesHotel')->name('post-servicehotel');

    $api->get('galeriehotel', 'App\Http\Controllers\Api\V1\ApiController@getImagesHotel')->name('get-imageshotel');
    $api->post('galeriehotel', 'App\Http\Controllers\Api\V1\ApiController@postImageHotel')->name('post-imagehotel');
    
    $api->get('clients', 'App\Http\Controllers\Api\V1\ApiController@getClients')->name('get-clients');
    $api->post('clients', 'App\Http\Controllers\Api\V1\ApiController@postClient')->name('post-client');

    $api->get('typeclients', 'App\Http\Controllers\Api\V1\ApiController@getTypeClients')->name('get-type-clients');
    $api->post('typeclients', 'App\Http\Controllers\Api\V1\ApiController@postTypeClient')->name('post-type-client');

    $api->get('fonctionagents', 'App\Http\Controllers\Api\V1\ApiController@getFonctionAgents')->name('get-fonction-agent');
    $api->post('fonctionagents', 'App\Http\Controllers\Api\V1\ApiController@postFonctionAgent')->name('post-fonction-agent');
    
    $api->get('receptions', 'App\Http\Controllers\Api\V1\ApiController@getReceptions')->name('get-reception');
    $api->post('receptions', 'App\Http\Controllers\Api\V1\ApiController@postReception')->name('post-reception');

    $api->get('delogements', 'App\Http\Controllers\Api\V1\ApiController@getDelogements')->name('get-delogements');
    $api->post('delogements', 'App\Http\Controllers\Api\V1\ApiController@postDelogement')->name('post-delogement');
    
    $api->get('restaurations', 'App\Http\Controllers\Api\V1\ApiController@getRestaurations')->name('get-restaurations');
    $api->post('restaurations', 'App\Http\Controllers\Api\V1\ApiController@postRestauration')->name('post-restauration');
    
    $api->get('restaureceptions', 'App\Http\Controllers\Api\V1\ApiController@getRestaureceptions')->name('get-restaureceptions');
    $api->post('restaureceptions', 'App\Http\Controllers\Api\V1\ApiController@postRestaureception')->name('post-restaureception');
    
    $api->get('reglements', 'App\Http\Controllers\Api\V1\ApiController@getReglements')->name('get-reglements');
    $api->post('reglements', 'App\Http\Controllers\Api\V1\ApiController@postReglement')->name('post-reglements');
    
    $api->get('restaurateurs', 'App\Http\Controllers\Api\V1\ApiController@getRestaurateurs')->name('get-restaurateurs');
    $api->post('restaurateurs', 'App\Http\Controllers\Api\V1\ApiController@postRestaurateur')->name('post-restaurateurs');

    $api->get('receptionnistes', 'App\Http\Controllers\Api\V1\ApiController@getReceptionnistes')->name('get-receptionnistes');
    $api->post('receptionnistes', 'App\Http\Controllers\Api\V1\ApiController@postReceptionniste')->name('post-receptionnistes');

    $api->get('respohebergement', 'App\Http\Controllers\Api\V1\ApiController@getRespoHebergements')->name('get-respohebergements');
    $api->post('respohebergement', 'App\Http\Controllers\Api\V1\ApiController@postRespoHebergement')->name('post-respohebergements');

    $api->get('comptables', 'App\Http\Controllers\Api\V1\ApiController@getComptables')->name('get-comptables');
    $api->post('comptables', 'App\Http\Controllers\Api\V1\ApiController@postComptable')->name('post-comptables');
    
    $api->get('hs', 'App\Http\Controllers\Api\V1\ApiController@getHs')->name('get-hs');
    $api->post('hs', 'App\Http\Controllers\Api\V1\ApiController@postHs')->name('post-hs');

    $api->get('formulereceptions', 'App\Http\Controllers\Api\V1\ApiController@getFormulereceptions')->name('get-formulereceptions');
    $api->post('formulereceptions', 'App\Http\Controllers\Api\V1\ApiController@postFormulereception')->name('post-formulereception');
    
    $api->get('partenaires', 'App\Http\Controllers\Api\V1\ApiController@getPartenaires')->name('get-partenaires');
    $api->post('partenaires', 'App\Http\Controllers\Api\V1\ApiController@postPartenaire')->name('post-partenaire');
    
    $api->get('departs', 'App\Http\Controllers\Api\V1\ApiController@getDeparts')->name('get-departs');
    $api->post('departs', 'App\Http\Controllers\Api\V1\ApiController@postDepart')->name('post-depart');

    $api->get('clotures', 'App\Http\Controllers\Api\V1\ApiController@getClotures')->name('get-clotures');
    $api->post('clotures', 'App\Http\Controllers\Api\V1\ApiController@postCloture')->name('post-cloture');

    $api->get('divers', 'App\Http\Controllers\Api\V1\ApiController@getDivers')->name('get-divers');
    $api->post('divers', 'App\Http\Controllers\Api\V1\ApiController@postDivers')->name('post-divers');

    $api->get('decaissements', 'App\Http\Controllers\Api\V1\ApiController@getDecaissement')->name('get-decaissements');
    $api->post('decaissements', 'App\Http\Controllers\Api\V1\ApiController@postDecaissements')->name('post-decaissement');
    
    $api->get('parkings', 'App\Http\Controllers\Api\V1\ApiController@getParking')->name('get-parkings');
    $api->post('parkings', 'App\Http\Controllers\Api\V1\ApiController@postParking')->name('post-parkings');
    
    $api->get('materielentretien', 'App\Http\Controllers\Api\V1\ApiController@getMaterielEntretien')->name('get-materielentretien');
    $api->post('materielentretien', 'App\Http\Controllers\Api\V1\ApiController@postMaterielEntretien')->name('post-materielentretien');

    $api->get('parkings', 'App\Http\Controllers\Api\V1\ApiController@getParkings')->name('get-parking');
    $api->post('parkings', 'App\Http\Controllers\Api\V1\ApiController@postParking')->name('post-parking');

    $api->get('emplacementparking', 'App\Http\Controllers\Api\V1\ApiController@getEmplacementParking')->name('get-emplacementparking');
    $api->post('emplacementparking', 'App\Http\Controllers\Api\V1\ApiController@postEmplacementParking')->name('post-emplacementparking');
    //Authenticate jwt
    $api->post('authenticate', 'App\Http\Controllers\Api\Auth\AuthController@authenticate');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api->version('v1', ['middleware' => 'api.auth'], function($api)
{
    $api->get('utilisateurs/{id}','App\Http\Controllers\Api\V1\ApiController@getUserById')->name('getUserById');
    $api->get('utilisateursByEmail', 'App\Http\Controllers\Api\V1\ApiController@getUserByEmail')->name('getUserByEmail');//getuserbyemail
    $api->get('utilisateursByLogin', 'App\Http\Controllers\Api\V1\ApiController@getUserByLogin')->name('getUserByLogin');//getuserbylogin
    $api->get('utilisateurspaginate', 'App\Http\Controllers\Api\V1\ApiController@getUsersPaginate')->name('getUserspaginate');//getuserpaginate
});
Route::post('/utilisateurs', 'App\Http\Controllers\Api\V1\ApiController@postUsers')->name('post-Users');

//pour jwt
/*Route::group([
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('refresh', 'AuthController@refresh');

    Route::group(["middleware" => "auth.jwt"], function(){
        Route::post('logout', 'AuthController@logout');
    
        Route::post('me', 'AuthController@me');
    });
});*/
