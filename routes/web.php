<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

return view('welcome');
})->name('welcome');



Route::prefix('user')->group(function () {

 /*    Route::get('/validateRegister','App\Http\Controllers\User\UserController@validateRegister')->name('user-validate-register');

Route::match(['post','get'], '/email-verification','App\Http\Controllers\User\SubscriptionController@checkAccountVeriffied')->name('email-verification');

Route::match(['get', 'post'], '/password-reset','App\Http\Controllers\User\UserController@passwordReset')->name( 'user-password-reset');
Route::get('/logout', 'App\Http\Controllers\User\UserController@UserLogout')->name('user-logout');
Route::get('/profil', 'App\Http\Controllers\User\UserController@UserLogout')->name('user-logout');


Route::get('/usergestion', 'App\Http\Controllers\User\UserController@gestion')->name('user-gestion');
Route::post('/deleteuser' ,'App\Http\Controllers\User\UserController@destroyUser')->name('delete-user');
Route::post('/updateuser' ,'App\Http\Controllers\User\UserController@updateUser')->name('update-user');
*/
Route::post('/rolepost','App\Http\Controllers\User\UserController@role')->name('process-user-role');
Route::get('/role','App\Http\Controllers\User\UserController@role')->name('user-role');
Route::get('/rolelist','App\Http\Controllers\User\UserController@listrole')->name('user-role-list');

//percom-hotel
//route pour processuserlogin et login
Route::get('/LoginPage', 'App\Http\Controllers\User\UserController@login')->name('user-login');
Route::post('/LoginPagepost', 'App\Http\Controllers\User\UserController@login')->name('process-user-login');

//route pour le profile de l'user
Route::get('/profile', 'App\Http\Controllers\User\UserController@profile')->name('view-profile');
Route::get('/userlist', 'App\Http\Controllers\User\UserController@list')->name('user-list');// a base de l'api de la liste des utilissaturs dans api routes

//route pour process-user-register et register percom hotel
Route::get('/register', 'App\Http\Controllers\User\UserController@register')->name('user-register');
Route::post('/registerpost', 'App\Http\Controllers\User\UserController@register')->name('process-user-register');
Route::get('/dashboard', 'App\Http\Controllers\User\UserController@dashboard')->name('user-dashboard');
Route::get('/LoggedOut', 'App\Http\Controllers\User\UserController@userlogout')->name('user-logout');

//route pour la gestion des users
Route::get('/usergestion', 'App\Http\Controllers\User\UserController@gestion')->name('user-gestion');
Route::get('/deleteuser', 'App\Http\Controllers\User\UserController@destroyUser')->name('delete-user');
Route::get('/updateuser', 'App\Http\Controllers\User\UserController@updateUser')->name('update-user');

//route pour le role
Route::get('/role', 'App\Http\Controllers\User\UserController@role')->name('user-role');
Route::post('/role', 'App\Http\Controllers\User\UserController@role')->name('user-role');

Route::get('/apidata' ,'App\Http\Controllers\User\UserController@getApiData')->name('apidata');
});


Route::prefix('pages')->group(function () {
   /* Route::get('/newsletter','App\Http\Controllers\User\UserController@newsletter')->name('page-newsletter');
    Route::post('/Validatednewsletter','App\Http\Controllers\User\UserController@Validatednewsletter')->name('validated-newsletter');
    Route::post('/deletenewsletter' ,'App\Http\Controllers\User\UserController@destroyNewsletter')->name('delete-newsletter');
    Route::get('/tchat' ,'App\Http\Controllers\Site\PageController@tchat')->name('tchat');
    Route::get('/forum' ,'App\Http\Controllers\Site\PageController@forum')->name('forum');
    Route::get('/galerie_image' ,'App\Http\Controllers\Site\PageController@galerie_image')->name('galerie_image');
    Route::get('/evenementDashboard' ,'App\Http\Controllers\Site\PageController@evenement')->name('evenement');
    Route::get('/blogDasboard' ,'App\Http\Controllers\Site\PageController@blog1')->name('blog1'); // ma route pour le blog


    Route::get('/evenementupdate/{id}' ,'App\Http\Controllers\Site\PageController@evenementupdate')->name('evenement-update');
    Route::get('/blogupdate/{id}' ,'App\Http\Controllers\Site\PageController@blogupdate')->name('blog-update'); // ma route pour la vue blog-udate

    // routes pour les requetes du blog postupdate save et delete
    Route::post('/blogsave' ,'App\Http\Controllers\Site\PageController@articlepost')->name('save-article');
    Route::post('/blogpostupdate' ,'App\Http\Controllers\Site\PageController@articlepostup')->name('post-update-article');
    Route::post('/deleteblog' ,'App\Http\Controllers\Site\PageController@destroyArticle')->name('delete-article');

    Route::post('/evenementsave' ,'App\Http\Controllers\Site\PageController@evenementpost')->name('save-evenement');
    Route::post('/evenementpostupdate' ,'App\Http\Controllers\Site\PageController@evenementpostup')->name('post-update-evenement');
    Route::post('/deleteevent' ,'App\Http\Controllers\Site\PageController@destroyEvent')->name('delete-event');

    Route::get('/qui_sommesDashboard' ,'App\Http\Controllers\Site\PageController@qui_sommes_nous')->name('qui_sommes_nous');
    Route::get('/partenairesDashboard' ,'App\Http\Controllers\Site\PageController@partenaires')->name('partenaires');
    Route::get('/contactDashboard' ,'App\Http\Controllers\Site\PageController@contact')->name('contact');
    Route::get('/blog_nousDashboard' ,'App\Http\Controllers\Site\PageController@blog')->name('blog');
    Route::get('/page_footerDashboard' ,'App\Http\Controllers\Site\PageController@page_footer')->name('page_footer');
    Route::get('/page_topDashboard' ,'App\Http\Controllers\Site\PageController@page_top')->name('page_top');
    Route::get('/indexDashboard' ,'App\Http\Controllers\Site\PageController@index')->name('index');
    */
    

    /*
    Route::post('/tchatsave','App\Http\Controllers\Site\PageController@chatsave')->name('process-tchat-register');

    Route::get('/forumgettopic' ,'App\Http\Controllers\Site\PageController@gettopicforum')->name('forum-get-topic');
    Route::post('/forumposttopic' ,'App\Http\Controllers\Site\PageController@gettopicforum')->name('forum-post-topic');
    */
});
Route::prefix('hotel')->group(function () {
    //Mes routes pour percom hotel pour le profil de l'hotel
    Route::get('/profilhotel', 'App\Http\Controllers\Hotel\HotelController@profil')->name('hotel-profil');
    Route::get('/confighotel', 'App\Http\Controllers\Hotel\HotelController@config')->name('config-hotel');

    Route::post('/confighotelpost', 'App\Http\Controllers\Hotel\HotelController@configHotel')->name('process-config-hotel');

    //Route pour le type de chambres
    Route::get('/typechambres', 'App\Http\Controllers\Hotel\HotelController@typeChambres')->name('type-chambres');
    //Route pour post un type de  chambre
    Route::post('/typechambrespost', 'App\Http\Controllers\Hotel\HotelController@ajoutTypeChambres')->name('process-ajout-type-chambres');
    
    //Route pour la liste des chambres
    Route::get('/listechambres', 'App\Http\Controllers\Hotel\HotelController@listeChambres')->name('liste-chambres');
    //Route pour post une chambre
    Route::post('/listechambrespost', 'App\Http\Controllers\Hotel\HotelController@ajoutChambres')->name('process-ajout-chambres');

    //Route pour la qualite de chambres
    Route::get('/qualitechambres', 'App\Http\Controllers\Hotel\HotelController@qualiteChambres')->name('qualite-chambres');
    //Route pour post une qualite de chambre
    Route::post('/qualitechambrespost', 'App\Http\Controllers\Hotel\HotelController@ajoutQualiteChambres')->name('process-ajout-qualite-chambres');

    //Route pour la formule de chambres
    Route::get('/formulechambres', 'App\Http\Controllers\Hotel\HotelController@formuleChambres')->name('formule-chambres');
    //Route pour post une formule de chambre
    Route::post('/formulechambrespost', 'App\Http\Controllers\Hotel\HotelController@ajoutFormuleChambres')->name('process-ajout-formule-chambres');
    
    //Route pour la liste des clients de l'hotel
    Route::get('/customerlist', 'App\Http\Controllers\Hotel\HotelController@customerList')->name('customer-list');
    //Route pour post un client
    Route::post('/clientpost', 'App\Http\Controllers\Hotel\HotelController@ajoutClient')->name('process-ajout-customer');


    //Route pour le gestion des clients
    Route::get('/customergestion', 'App\Http\Controllers\Hotel\HotelController@customerGestion')->name('customer-gestion');

    //Route pour la liste des type clients de l'hotel
    Route::get('/customertype', 'App\Http\Controllers\Hotel\HotelController@customerType')->name('customer-type');
    Route::post('/customertypepost', 'App\Http\Controllers\Hotel\HotelController@addCustomerType')->name('process-ajout-customer-type');

    //Route pour la liste des reservations
    Route::get('/historeservation', 'App\Http\Controllers\Hotel\HotelController@histoReservation')->name('historique-reservation');

    //Route pour la gestion des reservation
    Route::get('/reservationgestion', 'App\Http\Controllers\Hotel\HotelController@reservationGestion')->name('reservation-gestion');

    //Route pour le form de reservation
    Route::get('/reserver', 'App\Http\Controllers\Hotel\HotelController@reserver')->name('reserver');
    Route::post('/reserverpost', 'App\Http\Controllers\Hotel\HotelController@ajoutReservation')->name('process-ajout-reservation');

    // Reception
    Route::post('/receptionpost', 'App\Http\Controllers\Hotel\HotelController@ajoutReception')->name('process-ajout-reception');

    //Route pour la liste des hotels
    Route::get('/listehotels', 'App\Http\Controllers\Hotel\HotelController@listehotel')->name('liste-hotel');

    //Routes pour tout incluant la reception et specifiques des besoins de hotel y (Rencontre 12/02/2021)
    Route::get('/reception', 'App\Http\Controllers\Hotel\HotelController@reception')->name('reception');

    // Route menus
    Route::get('/listemenus', 'App\Http\Controllers\Hotel\HotelController@listeMenus')->name('liste-menus');
    Route::post('/menupost','App\Http\Controllers\Hotel\HotelController@ajoutMenu')->name('process-ajout-menu');
    Route::get('/menutermine{id}','App\Http\Controllers\Hotel\HotelController@menuTermine')->name('menutermine');

    Route::get('/maincourante', 'App\Http\Controllers\Hotel\HotelController@mainCourante')->name('main-courante');
    Route::get('/occupationchambres', 'App\Http\Controllers\Hotel\HotelController@occupationChambres')->name('occupation-chambres');
    Route::get('/historiquereception', 'App\Http\Controllers\Hotel\HotelController@histoReception')->name('historique-reception');

    // Route sortie client
    Route::get('/sortie{id}chambre{chid}','App\Http\Controllers\Hotel\HotelController@sortieClient')->name('sortie');

    // Route deloger client
    Route::get('/deloger{id}','App\Http\Controllers\Hotel\HotelController@delogerClient')->name('deloger');
    Route::post('/delogerpost','App\Http\Controllers\Hotel\HotelController@delogerClientPost')->name('process-delogement');
    Route::get('/listedelogements', 'App\Http\Controllers\Hotel\HotelController@listeDelogements')->name('liste-delogements');

    // Route pour download le pdf
    // facture reception
    Route::get('/downloadPDF/{id}','App\Http\Controllers\Hotel\HotelController@downloadPDF')->name('download-pdf');
    // facture restauration
    Route::get('/downloadPDFRestau/{id}','App\Http\Controllers\Hotel\HotelController@downloadPDFRestau')->name('download-pdf-restau');

    //reservation
    Route::get('/downloadPDFReserv/{id}','App\Http\Controllers\Hotel\HotelController@downloadPDFReserv')->name('download-pdf-reserv');


    // Route pour la restauration d'un client
     // Route restaurer client
     Route::get('/restaurer{id}','App\Http\Controllers\Hotel\HotelController@restaurerClient')->name('restaurer');
     Route::post('/restaurerpost','App\Http\Controllers\Hotel\HotelController@restaurerClientPost')->name('process-restauration');
    
    
     Route::get('/restaurext','App\Http\Controllers\Hotel\HotelController@restaurerExterieur')->name('restau-exterieur');
     Route::post('/restaurerexterieurpost','App\Http\Controllers\Hotel\HotelController@restaurerExterieurPost')->name('process-restauration-exterieur');

     // back
     // Route::get('/back','App\Http\Controllers\Hotel\HotelController@back')->name('back');

     //Route calendrier
     Route::get('/calendrier', 'App\Http\Controllers\Hotel\HotelController@calendrier')->name('calendrier');

     //Route sorties
     Route::get('/sorties', 'App\Http\Controllers\Hotel\HotelController@sorties')->name('sorties');

     //Route reglements
     Route::get('/reglement{id}', 'App\Http\Controllers\Hotel\HotelController@reglement')->name('reglement');
     Route::get('/listereglements', 'App\Http\Controllers\Hotel\HotelController@listeReglements')->name('liste-reglements');
    Route::get('/listeformules', 'App\Http\Controllers\Hotel\HotelController@listeRestaurations')->name('liste-restauration');
     Route::get('/listemodespaiements', 'App\Http\Controllers\Hotel\HotelController@listeModePaiements')->name('liste-modes-paiements');
     Route::post('/reglementpost', 'App\Http\Controllers\Hotel\HotelController@ReglementClientPost')->name('process-reglement');

         // Reception
    Route::post('/modepaiementpost', 'App\Http\Controllers\Hotel\HotelController@ajoutModePaiement')->name('process-ajout-mode-paiement');
    Route::get('/modepaiementdelete{id}', 'App\Http\Controllers\Hotel\HotelController@deleteModePaiement')->name('delete-mode');


    // register les users
    Route::get('/registerreceptionniste','App\Http\Controllers\Hotel\HotelController@registerReceptionniste')->name('register-receptionniste');
    Route::get('/registercomptable','App\Http\Controllers\Hotel\HotelController@registerComptable')->name('register-comptable');
    Route::get('/registerresphebergement','App\Http\Controllers\Hotel\HotelController@registerRespHebergement')->name('register-resp-hebergement');
    Route::get('/registerrestaurateur','App\Http\Controllers\Hotel\HotelController@registerRetaurateur')->name('register-restaurateur');

    Route::get('/listerestaurateurs','App\Http\Controllers\Hotel\HotelController@listeRetaurateurs')->name('liste-restaurateurs');
    Route::get('/listereceptionnistes','App\Http\Controllers\Hotel\HotelController@listeRecepionniste')->name('liste-receptionnistes');
    Route::get('/listecomptables','App\Http\Controllers\Hotel\HotelController@listeComptables')->name('liste-comptable');
    Route::get('/listeresponshebergement','App\Http\Controllers\Hotel\HotelController@listeRespHebergement')->name('liste-resp-hebergement');

    
    
    Route::post('/registerreceptionnistepost','App\Http\Controllers\Hotel\HotelController@registerRecepPost')->name('process-recept-register');
    Route::post('/registercomptablepost','App\Http\Controllers\Hotel\HotelController@registerCompPost')->name('process-comptable-register');
    Route::post('/registerresphebergementpost','App\Http\Controllers\Hotel\HotelController@registerHebergPost')->name('process-heberg-register');
    Route::post('/registerrestaurateurpost','App\Http\Controllers\Hotel\HotelController@registerRestauPost')->name('process-restau-register');

    Route::get('/presentationHotel{id}','App\Http\Controllers\Hotel\HotelController@presentationHotel')->name('present-hotel');

    // Route formule client
    Route::get('/formuleclient{id}','App\Http\Controllers\Hotel\HotelController@formuleClient')->name('formule');
    Route::post('/formuleclientpost','App\Http\Controllers\Hotel\HotelController@formuleClientPost')->name('process-formule');
    Route::get('/listeformule','App\Http\Controllers\Hotel\HotelController@listeFormule')->name('liste-formules');
    // Route restaurer client
    Route::get('/depart{id}','App\Http\Controllers\Hotel\HotelController@departClient')->name('depart');
    Route::post('/departpost','App\Http\Controllers\Hotel\HotelController@departClientPost')->name('process-depart');
    Route::get('/listedeparts','App\Http\Controllers\Hotel\HotelController@listeDeparts')->name('liste-departs');


    // Route hs
    Route::get('/hschambre{id}','App\Http\Controllers\Hotel\HotelController@hsChambre')->name('hs');
    Route::get('/endhschambre{id}','App\Http\Controllers\Hotel\HotelController@hsChambreEnd')->name('end-hs');
    Route::post('/hschambrepost','App\Http\Controllers\Hotel\HotelController@hsChambrePost')->name('process-hs');
    Route::get('/listehorservice','App\Http\Controllers\Hotel\HotelController@listeHS')->name('liste-hs');
    Route::get('/partenaires','App\Http\Controllers\Hotel\HotelController@partenaires')->name('partenaires');

    Route::get('/cloture','App\Http\Controllers\Hotel\HotelController@cloture')->name('cloture');
    Route::post('/cloturepost','App\Http\Controllers\Hotel\HotelController@cloturePost')->name('process-cloture');

    Route::get('/listeclotures','App\Http\Controllers\Hotel\HotelController@listeClotures')->name('liste-clotures');

    Route::get('/divers{id}','App\Http\Controllers\Hotel\HotelController@divers')->name('divers');
    Route::post('/diverspost','App\Http\Controllers\Hotel\HotelController@diversPost')->name('process-divers');

    Route::get('/listedivers','App\Http\Controllers\Hotel\HotelController@listeDivers')->name('liste-divers');

    Route::get('/reservation{id}','App\Http\Controllers\Hotel\HotelController@voirReservation')->name('voir');
    Route::get('/arrivee{id}','App\Http\Controllers\Hotel\HotelController@arrivee')->name('arrivee');
    Route::get('/reglerreservation{id}','App\Http\Controllers\Hotel\HotelController@reglerReservation')->name('regler-reserv');
    Route::post('/arriveepost','App\Http\Controllers\Hotel\HotelController@arriveePost')->name('process-arrivee');
    Route::post('/reglerreservpost','App\Http\Controllers\Hotel\HotelController@reglerReservationPost')->name('process-regler-reserv-post');
    
    //parking
    Route::get('/listeparkings','App\Http\Controllers\Hotel\HotelController@parkingList')->name('ajouter-parking');
    Route::post('/parkingpost','App\Http\Controllers\Hotel\HotelController@parkingPost')->name('process-ajout-parking');
    Route::post('/reservparkingpost','App\Http\Controllers\Hotel\HotelController@reservParkingPost')->name('process-reserv-post');

    Route::get('/reservparking','App\Http\Controllers\Hotel\HotelController@reservationParking')->name('reservation-parking');
    Route::get('/histoparking','App\Http\Controllers\Hotel\HotelController@histoParking')->name('historique-parking');

    //Route pour le type de chambres
    Route::get('/typereservations', 'App\Http\Controllers\Hotel\HotelController@typeReservations')->name('type-reservation');
    //Route pour post un type de  chambre
    Route::post('/typereservationpost', 'App\Http\Controllers\Hotel\HotelController@ajoutTypeReservation')->name('process-ajout-type-reservation');

    Route::get('/partenaire{id}','App\Http\Controllers\Hotel\HotelController@partenaire')->name('partenaire');

    });

//ma route percom-hotel pour retour welcome
Route::get('', 'App\Http\Controllers\Site\PageController@welcome')->name('welcome-index');

//ma route percom-hotel pour admin
Route::group(['prefix' => 'admin' ,'middleware'=>'auth'], function()
{
    Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard')->name('admin-dashboard');
});


