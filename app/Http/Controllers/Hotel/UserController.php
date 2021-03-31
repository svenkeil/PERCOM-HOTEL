<?php

namespace App\Http\Controllers\User;

use App\Admin\Role;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias

use App\Models\User;
use Illuminate\Support\Facades\Auth; // les facades sont comme les interfaces
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;
//use \GuzzleHttp\Client; pour guzzle
//use Illuminate\Support\Facades\Http;//pas besoin d'inclure ca pour laravel 7 et + deja integre

// pour les api
use Dingo\Api\Dispatcher;
use Dingo\Api\Routing\Helpers;


class UserController extends BaseController
{
    use Helpers;
    //mes fonctions commencent ici
    /* fonction pour le test de l'api
    function getListe(){
        return User::all();
    }
    function test2(){
        return "hello Mc Brondan";
    }*/

    //test guzzle
    public function getApiData(){
        /*$client = new Client();
        $response = $client->get('http://localhost:8000/api/utilisateurs');
        echo $response;
        $test = 1;
        echo $test;
        //$request = $client->get('http://localhost:8000/api/utilisateurs');
        //dd(json_decode($request->getBody()));
        $users = $this->api->get('utilisateurs');
        //dd($users);
        exit();
        //return view('user.userlist')->with('users', $users);
        */
        $test= $this->api->post('postutilisateurs',[ 'email' => 'g',
                    'name'=> 'f', 'prenom' => 'g', 'photo' => 'g',
                    'poste'=> 'f', 'tel'=> '41', 'pseudo'=> 'g', 'created_by'=> Auth::user()->id,
                    'password'=>Hash::make('$request->password'), 'remember_token'=>Str::random(10)]);
                   dd($test);
                   
        return "test";
        
    }
    /* fonction pour le login*/ // gerer le logout lors de l'appel de la vue si il est deja connecte
    function login(Request $request){
        if($request->isMethod('POST'))
        {
            $remember = ($request->remember) ? true : false;
            // $model = User::class;
            if (!User::where('email',$request->email)->exists()) {
                return response()->json([
                    'status'=>'info',
                    'message'=>'Utilisateur pas trouve!!'
                ]);
            }
            if (Auth::attempt(['email' => $request->email,'password' => $request->password], $remember)) {

                $user=Auth::user();
                $user->statut = 1;
                $user->save();
                if ($user->role=="user") {
                    return response()->json([
                        'status'=>'success',
                        'code'=>1
                    ]);
                }
                if ($user->role=="admin") {
                    return response()->json([
                        'status'=>'success',
                        'code'=>2
                    ]);
                }

            }
            else{
                return response()->json([
                    'status'=>'info',
                    'message'=>'Identifiants de login invalides,Veuillez reessayer plutard!!!'
                ]);
            }
            if (Auth::viaRemember())
            {

            }
        }
        else if($request->isMethod('GET'))
        {
            return view('user.login');
        }
        else
        {
            return response()->json([
                'status'=>'info',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

    //fonction pour register view
    function register(Request $request){
        if ($request -> isMethod('POST')){
            //dd($request->password);
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
            else
            {
            //$create=false;
            /*$create = User::create([
                'email'=>$request->email,
                'name'=>$request->lname,
                'prenom'=>$request->fname,
                'photo'=>$request->photo,
                'poste'=>$request->poste,
                'tel'=>$request->phone,
                'pseudo'=>$request->username,
                'password'=>Hash::make($request->password),
                'remember_token' => Str::random(10),
            ]);
                */ // revoir pk pas post poste
                $test= $this->api->post('utilisateurs',[ 'email' => $request->email,
                'lname'=> $request->lname, 'fname' => $request->fname, 'photo' => $request->photo,
                'phone'=> $request->phone, 'username'=> $request->username,
                'password'=> $request->password]);
                if ($test) {
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
                        'message'=>'l\'enregistrement s\'effectue avec succes. Veuillez vous connecter'
                    ]);
                } else {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'enregistrement. Veuillez reessayer plutard'
                    ]);
                }
            }

        }else if ($request ->isMethod('GET')){
            return view('user.register');
        }else{
            return response() ->json([
                'status'=>'info',
                'message' =>'Methode de requete invalide'
            ]);
        }
    }/*
    public function validateRegister(Request $request)
    {
        if (User::where('email',$request->email)->exists())
        {
            return response()->json([
                'status'=>'doublonmail',
                'message'=>'This email already exists'
            ]);
        }
    }*/

    //fonction pour authenthifier l'user
    public function dashboard(){
        if (Auth::check())
        {
            return view('user.dashboard');
        }
        return view('user.login');
    }

    //fonction pour logout
    public function userlogout(Request $request)
    {
        $user=Auth::user();
        //$user->online = false;
        $user->statut = 0; //pour le statut online ou off
        $user->save();
        Auth::logout();
        return redirect()->route('user-login');
    }

    //fonction pour attribuer un role
    public function role(Request $request)
    {
        if($request->isMethod('POST'))
        {
            if(!Auth::check())
            {
                return response()->json([
                    'status'=>'error',
                    'message'=>'Veuillez vous connecter'
                ]);
            }
            else 
            {
                $roles=$this->api->get('roles');
                //dd($roles);
                //if(Role::where('name', $request->role)->exists())
                foreach($roles as $role){
                if($role['role']=="test")
                {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Ce role existe deja'
                    ]);
                }
                else
                {
                    /*$create = Role::create([
                        'name'=>$request->role
                    ]);*/
                    $create = $this->api->post('roles',['role'=>$request->role]);//role de apicontroller
                }

                if($create)
                {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'Role ajoute avec succes'
                    ]);
                }
                else 
                {
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Erreur lors de l\'ajout du role, Veuillez ressayer plus tard'
                    ]);
                }
            }
        }
    }
        else if ($request->isMethod('GET')) 
        {
            if(!Auth::check())
            {
                return redirect()->route('user-login');
            }
            else {
                $roles = $this->api->get('roles');
                return view('user.role', compact('roles'));
            }
        }
        else {
            return response()->json([
                'status'=>'erreur',
                'message'=>'Methode de requete invalide'
            ]);
        }
    }

   /* 

    public function role(Request $request)
    {

        if ($request->isMethod('POST')) {
            if (Role::where('name',$request->name)->exists() == "true") {
                return response()->json([
                    'status'=>'info',
                    'message'=>'This name already exists'
                ]);
            }
            else{
                $create =Role::create([
                    'name'=>$request->name,
                ]);


                if ($create) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'role has save successfuly'
                    ]);
                }else{
                    return response()->json([
                        'status'=>'info',
                        'message'=>'save failed create role, try again later'
                    ]);
                }
            }

        }else if ($request->isMethod('GET')) {
            if (Auth::check()){
                $roles= Role::all();
                return view('user.role', compact('roles'));
            }
            else {
                return view('user.login');
            }
        }else{
            return response()->json([
                'status'=>'info',
                'message'=>'invalid request method'
            ]);
        }
    }

    public function listrole(Request $request)
    {
        if (Auth::check()){
            $roles= Role::all();
            return view('user.rolelist', compact('roles'));
        }
        else {
            return view('user.login');
        }
    }

    public function UserLogout(Request $request){
        $user=Auth::user();
        //$user->online = false;
        $user->save();
        Auth::logout();
        return redirect()->route('user-login');
    }

    public function login(Request $request)
    {
        if($request->isMethod('GET')){
            //if (Auth::check()) return redirect('/');
            return view('user.login');
        }
        if ($request->isMethod('POST')) {
            $remember = ($request->remember) ? true : false;
            $model = User::class;
            if (!User::where('email',$request->email)->exists()) {
                return response()->json([
                    'status'=>'info',
                    'message'=>'User not found!'
                ]);
            }
            if (Auth::attempt(['email' => $request->email,'password' => $request->password], $remember)) {

                $user=Auth::user();
                $user->save();
                if ($user->role=="user") {
                    return response()->json([
                        'status'=>'success',
                        'code'=>1
                    ]);
                }
                if ($user->role=="admin") {
                    return response()->json([
                        'status'=>'success',
                        'code'=>2
                    ]);
                }

            }
            else{
                return response()->json([
                    'status'=>'info',
                    'message'=>'Invalid login credentials ,Try again later!'
                ]);
            }
            if (Auth::viaRemember())
            {

            }
        }
    }

    public function dashboard(){
        if (Auth::check())
        {
            return view('user.dashboard');
        }
    }*/
    //PERCOM-HOTEL
    public function profile ()
    {
        /*if (!Auth::check())
        {
            return view('user.login');
        }
        $user_id=Auth::user()->id;
        $users= User::where(['role'=>'user'])->where('id','!=',$user_id)->get();
        return view('user.profile', compact('users'));*/
        return view('user.profile');
    }

    public function list ()
    {
        if (!Auth::check())
        {
            // return view('user.login');
            return redirect()->route('user-login');
        }else
        {
        $users = $this->api->get('utilisateurs'); // $test['name'] si ce n'est pas un bojet c un element du tableau
        
        // return Http::get('http://localhost:8000/api/utilisateurs')->json();
        //return view('user.userlist');
        //dd($users);
        return view('user.userlist',compact('users'));//pb numero table zindex footer
        //return view('user.userlist',['User' => $users]);
        //return $users = Auth::user()->name;
        //return view('user.userlist')->with('users', $users);
        }
       
    }

    public function gestion(){
        if(!Auth::check())
        {
            return redirect()->route('user-login');
        }
        else
        {//gerer $remember
            $users = $this->api->get('utilisateurs'); // $test['name'] si ce n'est pas un bojet c un element du tableau
            //dd($users);
            return view('user.usergestion',compact('users'));
        }
    }

    //Sessiom::flash('mess',"fff")
    //@if end if Session::has Session::get autocompletteoff
   /* public function gestion (Request $request)
    {
        if (!Auth::check())
        {
            return view('user.login');
        }
        if($request->isMethod('GET'))
        {
            $user_id=Auth::user()->id;
            $roles= Role::all();
            $users= User::where('id','!=',$user_id)->get();

            return view('user.usergestion', compact('users','roles'));
        }
        else if($request->isMethod('POST'))
        {
            if (User::where('pseudo',$request->pseudo)->exists() == "true")
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'This pseudo already exists'
                ]);
            }
            else if (User::where('email',$request->email)->exists() == "true")
            {
                return response()->json([
                    'status'=>'info',
                    'message'=>'This email already exists'
                ]);
            }
            else
            {
                if (User::where(['id'=>$request->id])->update(['password'=>Hash::make($request->new)])) {
                    return response()->json([
                        'status'=>'success',
                        'message'=>'User successfully updated!'
                    ]);
                }else{
                    return response()->json([
                        'status'=>'info',
                        'message'=>'Your user has not updated.'
                    ]);
                }
            }

        }

    }

    public function updateUser(Request $request)
    {
        $id = $request->info['ids'];
        $email = $request->info['emails'];
        $name = $request->info['names'];
        $prenom = $request->info['prenoms'];
        $poste = $request->info['postes'];
        $tel = $request->info['tels'];
        $role = $request->rol;
        $pseudo = $request->info['pseudos'];

        if (User::where(['role'=>'user'])->where('id','!=',$id)->where('email',$email)->exists())
        {
            return  response()->json([
                'status'=>'info',
                'message'=>'Email has been taken by another one'
            ]);
        }

        else if (User::where(['role'=>'user'])->where('id','!=',$id)->where('pseudo',$pseudo)->exists()){
            return  response()->json([
                'status'=>'info',
                'message'=>'Pseudo has been taken by another one'
            ]);
        }
        else
        {
            if (User::where(['id'=>$id])->update( ['email'=>$email, 'name'=>$name, 'prenom'=>$prenom,
            'poste'=>$poste, 'tel'=>$tel, 'role'=>$role, 'pseudo'=>$pseudo]))
            {
                return  response()->json([
                    'status'=>'success',
                    'message'=>'User Has been saved successfully'
                ]);
            }
            else
            {
                return  response()->json([
                    'status'=>'success',
                    'message'=>'User Has not been saved successfully'
                ]);
            }
        }
    }

    public function destroyUser(Request $request)
    {
        if (!empty($request->id)) {
            $id =$request->id;

            if (User::where("id",$id)->delete()) {
                return response()->json([
                    'message' => 'User successfully deleted!',
                    'status' => 'success',
                ]);

            } else {
                return response()->json([
                    'message' => 'Error backend occured please try again later',
                    'status' => 'info'
                ]);
            }


        }else{
           return response()->json([
                'message' => 'Error empty occured please try again later',
                'status' => 'info',
            ]);
        }
    }

    public function destroyNewsletter(Request $request)
    {
        if (!empty($request->id)) {
            $id =$request->id;

            if (Newsletter::where("id_newsletter",$id)->delete()) {
                return response()->json([
                    'message' => 'Newsletter successfully deleted!',
                    'status' => 'success',
                ]);

            } else {
                return response()->json([
                    'message' => 'Error backend occured please try again later',
                    'status' => 'info'
                ]);
            }


        }else{
           return response()->json([
                'message' => 'Error empty occured please try again later',
                'status' => 'info',
            ]);
        }
    }

    public function Validatednewsletter (Request $request)
    {
        if (Newsletter::where('id_newsletter',$request->id)->where('valide',0)->exists()) {
            $id = $request->id;
            $valide = 1;

            DB::table('newsletters')
            ->where('id_newsletter', $id)
            ->update(
                ['valide'=>$valide]
            );
            return  response()->json([
                'status'=>'success',
                'message'=>'Newsletter Has been validated successfully'
            ]);
        }
        else{
            return  response()->json([
                'status'=>'info',
                'message'=>'Newsletter is already validated'
            ]);
        }
    }

    public function newsletter ()
    {
        $news= Newsletter::all();
        return view('pages.newsletter', compact('news'));
    }*/
}
