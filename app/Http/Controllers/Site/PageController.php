<?php

namespace App\Http\Controllers\Site;

use App\Admin\Categorie;
use App\Admin\Event;
use App\Admin\Article;
use App\Admin\Topic;
use App\Evenement\Evenement;
use App\Http\Controllers\Controller;
use App\Admin\MessageEmetteur;
use App\Forum\Fcategorie;
use App\Forum\Fsouscategorie;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class PageController extends BaseController
{

    /*mes fonctions pour percom hotel
    function profil(){
        return view('hotel.profilhotel');
    } */
    
    //fonction pour rentrer sur welcome
    function welcome(){
        return view('welcome');
    }
       //fonction pour la route de la vue du blog(article)
       function blog1(Request $request)
       {
           $articles = Article::all();
           return view('pages.blog', compact('articles'));
       }
   
       //fonction pour la route de la vue de blog update (articlepostup) :: assignation de masse
       function blogupdate($id)
       {
           $id = Article::find($id);
           $articles = Article::all();
           return view('pages.blog-update', compact('articles'))->with('id', $id);
       }
   
       //fonction pour la requete de blogpostup (articlepostup)
       public function articlepostup(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            if ($request->has('avatar'))
            {
                $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
                $avatar = $request->file('avatar');
                $path = public_path('avatars/');


                $img = $_FILES['avatar']['name'];
                $tmp = $_FILES['avatar']['tmp_name'];
                // get uploaded file's extension
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                // can upload same image using rand function
                $final_image = rand(1000,1000000).$img;
                // check's valid format
                if(in_array($ext, $valid_extensions))
                {
                    $path = $path.strtolower($final_image);
                    if(move_uploaded_file($tmp,$path))
                    {
                        if(filesize($path) <= 1000000)
                        {
                            $type = pathinfo($path, PATHINFO_EXTENSION);
                            $data = file_get_contents($path);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                            //$filename = time() . '.' . $avatar->getClientOriginalExtension();
                            //dd($base64);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                            if (Article::where(['id'=>$request->id])->update([
                                'title_fr'=>$request->titre,
                                'url_fr'=>$request->url,
                                //'categorie_id'=>$request->cats, cats la valeur du name de categorie dans la vue 
                                'description_fr'=>$request->description,
                                'excerpt_fr'=>$request->excerpt,
                                'image_url'=>$base64,
                                ])){
                                    Session::flash('message', "Votre article a bien été mis à jour");
                                    return Redirect::back();
                                }
                                else
                                {
                                    Session::flash('message', "Votre article n'a pas été mis à jour");
                                    return Redirect::back();
                                }
                        }
                        else{
                            Session::flash('message', "Votre image ne peut être chargée selectionnez une autre image, image trop lourde");
                            return Redirect::back();
                        }
                    }
                    else{
                        Session::flash('message', "Votre image ne peut être chargée selectionnez une autre image");
                        return Redirect::back();
                    }
                }
            }
            else
            {
                if (Article::where(['id'=>$request->id])->update([
                    'title_fr'=>$request->titre,
                    'url_fr'=>$request->url,
                    'description_fr'=>$request->description,
                    'excerpt_fr'=>$request->excerpt,
                    ])){
                        Session::flash('message', "Votre article a bien été mis à jour");
                        return Redirect::back();
                    }
                    else
                    {
                        Session::flash('message', "Votre article n'a pas été mis à jour");
                        return Redirect::back();
                    }
            }
        }
    }


    public function articlepost(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $articleInfo = new Article();
            if ($request->has('avatar'))
            {
                $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
                $avatar = $request->file('avatar');
                $path = public_path('avatars/');


                $img = $_FILES['avatar']['name'];
                $tmp = $_FILES['avatar']['tmp_name'];
                // get uploaded file's extension
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                // can upload same image using rand function
                $final_image = rand(1000,1000000).$img;
                // check's valid format
                if(in_array($ext, $valid_extensions))
                {
                    $path = $path.strtolower($final_image);
                    if(move_uploaded_file($tmp,$path))
                    {
                        //echo $filename . ': ' . filesize($filename) . ' bytes';
                        //dd(filesize($path) . ' bytes');
                        if(filesize($path) <= 1000000)
                        {
                            $type = pathinfo($path, PATHINFO_EXTENSION);
                            $data = file_get_contents($path);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                            //$filename = time() . '.' . $avatar->getClientOriginalExtension();
                            //dd($base64);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                            $articleInfo->title_fr = $request->titre;
                            $articleInfo->url_fr = $request->url;
                            $articleInfo->description_fr = $request->description;
                            $articleInfo->excerpt_fr= $request->excerpt;
                            $articleInfo->image_url= $base64;
                            if ($articleInfo->save())
                            {
                                Session::flash('message', "Votre article avec image a bien été enregistré");
                                return Redirect::back();
                            }
                        }
                        else
                        {
                            Session::flash('message', "Le poids de votre image est trop grande pour être traitée");
                            return Redirect::back();
                        }


                    }
                    else{
                        Session::flash('message', "Votre image ne peut être chargée selectionnez une autre image");
                        return Redirect::back();
                    }
                }
            }
            else
            {
                $articleInfo->title_fr = $request->titre;
                $articleInfo->url_fr = $request->url;          
                //$eventInfo->date_event = $request->dateeve;
                $articleInfo->description_fr = $request->description;
                $articleInfo->excerpt_fr= $request->excerpt;
                if ($articleInfo->save())
                {
                    Session::flash('message', "Votre article sans image a bien été enregistré");
                    return Redirect::back();
                }
            }
        }
    }

    public function destroyArticle(Request $request)
    {
        if (!empty($request->id)) {
            $id =$request->id;

            if (Article::where("id",$id)->delete()) {
                return response()->json([
                    'message' => 'Article successfully deleted!',
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
   
    // fonction pour les evenements
    public function evenement(Request $request)
    {
        $categories= Categorie::all();
        $topics= Topic::all();
        $events= Event::all();
        $valeur = new Categorie();
        return view('pages.evenement', compact('categories', 'events', 'valeur', 'topics'));// compact c'est pour appeler tous les modeles qu'on va utiliser dans la vue
    }

    public function evenementupdate($id)
    {
        $id = Event::find($id);
        //dd($id->title_fr);
        $events= Event::all();
        $categories= Categorie::all();
        $topics= Topic::all();
        return view('pages.evenement-update', compact('events','categories', 'topics'))->with('id', $id);
    }

    public function evenementpostup(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            if ($request->has('avatar'))
            {
                $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
                $avatar = $request->file('avatar');
                $path = public_path('avatars/');


                $img = $_FILES['avatar']['name'];
                $tmp = $_FILES['avatar']['tmp_name'];
                // get uploaded file's extension
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                // can upload same image using rand function
                $final_image = rand(1000,1000000).$img;
                // check's valid format
                if(in_array($ext, $valid_extensions))
                {
                    $path = $path.strtolower($final_image);
                    if(move_uploaded_file($tmp,$path))
                    {
                        if(filesize($path) <= 1000000)
                        {
                            $type = pathinfo($path, PATHINFO_EXTENSION);
                            $data = file_get_contents($path);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                            //$filename = time() . '.' . $avatar->getClientOriginalExtension();
                            //dd($base64);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                            if (Event::where(['id'=>$request->id])->update([
                                'title_fr'=>$request->titre,
                                'location'=>$request->lieu,
                                'url_fr'=>$request->url,
                                'date_event'=>$request->dateeve,
                                'categorie_id'=>$request->cats,
                                'topic_id'=>$request->topics,
                                'tags_fr'=>$request->tags,
                                'description_fr'=>$request->description,
                                'excerpt_fr'=>$request->excerpt,
                                'image_url'=>$base64,
                                ])){
                                    Session::flash('message', "Votre évènement a bien été mis à jour");
                                    return Redirect::back();
                                }
                                else
                                {
                                    Session::flash('message', "Votre évènement n'a pas été mis à jour");
                                    return Redirect::back();
                                }
                        }
                        else{
                            Session::flash('message', "Votre image ne peut être chargée selectionnez une autre image, image trop lourde");
                            return Redirect::back();
                        }
                    }
                    else{
                        Session::flash('message', "Votre image ne peut être chargée selectionnez une autre image");
                        return Redirect::back();
                    }
                }
            }
            else
            {
                if (Event::where(['id'=>$request->id])->update([
                    'title_fr'=>$request->titre,
                    'location'=>$request->lieu,
                    'url_fr'=>$request->url,
                    'date_event'=>$request->dateeve,
                    'categorie_id'=>$request->cats,
                    'topic_id'=>$request->topics,
                    'tags_fr'=>$request->tags,
                    'description_fr'=>$request->description,
                    'excerpt_fr'=>$request->excerpt,
                    ])){
                        Session::flash('message', "Votre évènement a bien été mis à jour");
                        return Redirect::back();
                    }
                    else
                    {
                        Session::flash('message', "Votre évènement n'a pas été mis à jour");
                        return Redirect::back();
                    }
            }
        }
    }


    public function evenementpost(Request $request)
    {
        if ($request->isMethod('POST'))
        {
            $eventInfo = new Event();
            if ($request->has('avatar'))
            {
                $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
                $avatar = $request->file('avatar');
                $path = public_path('avatars/');


                $img = $_FILES['avatar']['name'];
                $tmp = $_FILES['avatar']['tmp_name'];
                // get uploaded file's extension
                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                // can upload same image using rand function
                $final_image = rand(1000,1000000).$img;
                // check's valid format
                if(in_array($ext, $valid_extensions))
                {
                    $path = $path.strtolower($final_image);
                    if(move_uploaded_file($tmp,$path))
                    {
                        //echo $filename . ': ' . filesize($filename) . ' bytes';
                        //dd(filesize($path) . ' bytes');
                        if(filesize($path) <= 1000000)
                        {
                            $type = pathinfo($path, PATHINFO_EXTENSION);
                            $data = file_get_contents($path);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                            //$filename = time() . '.' . $avatar->getClientOriginalExtension();
                            //dd($base64);
                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                            $eventInfo->title_fr = $request->titre;
                            $eventInfo->location = $request->lieu;
                            $eventInfo->url_fr = $request->url;
                            $eventInfo->date_event = $request->dateeve;
                            $eventInfo->date_event = $request->dateeve;
                            $eventInfo->categorie_id = $request->cats;
                            $eventInfo->topic_id = $request->topics;
                            $eventInfo->tags_fr = $request->tags;
                            $eventInfo->description_fr = $request->description;
                            $eventInfo->excerpt_fr= $request->excerpt;
                            $eventInfo->image_url= $base64;
                            if ($eventInfo->save())
                            {
                                Session::flash('message', "Votre évènement avec image a bien été enregistré");
                                return Redirect::back();
                            }
                        }
                        else
                        {
                            Session::flash('message', "Le poids de votre image est trop grande pour être traitée");
                            return Redirect::back();
                        }


                    }
                    else{
                        Session::flash('message', "Votre image ne peut être chargée selectionnez une autre image");
                        return Redirect::back();
                    }
                }
            }
            else
            {
                $eventInfo->title_fr = $request->titre;
                $eventInfo->location = $request->lieu;
                $eventInfo->url_fr = $request->url;
                $eventInfo->date_event = $request->dateeve;
                //$eventInfo->date_event = $request->dateeve;
                $eventInfo->categorie_id = $request->cats;
                $eventInfo->topic_id = $request->topics;
                $eventInfo->tags_fr = $request->tags;
                $eventInfo->description_fr = $request->description;
                $eventInfo->excerpt_fr= $request->excerpt;
                if ($eventInfo->save())
                {
                    Session::flash('message', "Votre évènement sans image a bien été enregistré");
                    return Redirect::back();
                }
            }
        }
    }

    public function destroyEvent(Request $request)
    {
        if (!empty($request->id)) {
            $id =$request->id;

            if (Event::where("id",$id)->delete()) {
                return response()->json([
                    'message' => 'Event successfully deleted!',
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


    public function qui_sommes_nous(Request $request)
    {
        return view('pages.qui_sommes_nous');
    }
    public function partenaires(Request $request)
    {
        return view('pages.partenaires');
    }
    public function contact(Request $request)
    {
        return view('pages.contact');
    }
    public function blog(Request $request)
    {
        return view('pages.blog');
    }
    public function page_footer(Request $request)
    {
        return view('pages.page_footer');
    }
    public function page_top(Request $request)
    {
        return view('pages.page_top');
    }
    public function index(Request $request)
    {
        return view('pages.index');
    }



    public function chatsave(Request $request)
    {
        $id = Auth::user()->id;
        //dd($id);
        $create =MessageEmetteur::create([
            'user_id'=>Auth::user()->id,
            'messageenvoye'=>$request->message,
            'messagerecepteur_id'=>$request->pseudo
        ]);
        if ($create) {

            return response()->json([
                'status'=>'success',
                'message'=>'Registration was successful,login to proceed'
            ]);
        }else{
            return response()->json([
                'status'=>'info',
                'message'=>'Registration failed create user, try again later'
            ]);
        }
    }


    public function tchat(Request $request)
    {
        $id = Auth::user()->id;
        $identifiant = Auth::user()->pseudo;
        $users = User::where('id','!=',$id)->get();
        $userall = new User();
        $messagesrecus = MessageEmetteur::where('messagerecepteur_id',$identifiant)->get();
        return view('pages.tchat', compact('users', 'messagesrecus', 'userall'));
    }
    public function forum(Request $request)
    {
        $categorieall = Fcategorie::all();
        $souscat = Fsouscategorie::all();
        return view('pages.forum', compact('categorieall', 'souscat'));
    }

    public function gettopicforum(Request $request)
    {
        if ($request->isMethod('GET'))
        {
            $categories = Fcategorie::all();
            $souscat = Fsouscategorie::all();
            return view('pages.topic', compact('categories', 'souscat'));
        }

        if ($request->isMethod('POST'))
        {

        }
    }


    public function galerie_image(Request $request)
    {
        return view('pages.galerie_image');
    }

    public function encryptImage (Request $request)
    {
        $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
        $path = 'uploads/'; // upload directory
        if(!empty($_FILES['image']))
        {
            $img = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            // get uploaded file's extension
            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

            // can upload same image using rand function
            $final_image = rand(1000,1000000).$img;
            // check's valid format
            if(in_array($ext, $valid_extensions))
            {
                $path = $path.strtolower($final_image);
                if(move_uploaded_file($tmp,$path))
                {
                    $type = pathinfo($path, PATHINFO_EXTENSION);
                    $data = file_get_contents($path);
                    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                    $fichier = fopen($img.'.txt', 'c+b');
                    fwrite($fichier, $base64);

                    echo "<img src='$path' width='400px' height='200px'/>";
                }
            }
            else
            {
                echo 'invalid';
            }
        }
    }
}
