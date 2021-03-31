<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>REGISTER HEBERGEMENT| PERCOM-HOTEL</title>
  <!-- Cross-Site Request Forgery (CSRF) is a type of attack that occurs when a malicious web site, email, blog, instant message, or program causes a user’s web browser to perform an unwanted action on a trusted site when the user is authenticated.
  SRF tokens, also called request verification codes, are unique session generated codes and are commonly used for form submissions-->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="PERFITCOM">
    <meta name="keywords"
        content="Admin ,PERFITCOM">
    <meta name="author" content="PERFITCOM">
    <!-- Favicon icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('img/logo/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('img/logo/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('img/logo/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/logo/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('img/logo/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('img/logo/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('img/logo/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('img/logo/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('img/logo/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('img/logo/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('img/logo/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('img/logo/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('img/logo/favicon/favicon-16x16.png') }}">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/feather/css/feather.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/menu-search/css/component.css')}}">
    
    <!-- css pour rendre le logo petit -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/moncss.css') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ URL::asset('files/assets/pages/multi-step-sign-up/css/reset.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('files/assets/pages/multi-step-sign-up/css/style.css')}}">
    <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.brighttheme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.buttons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.history.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.mobile.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/pnotify/notify.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/style.css')}}">
    <style type="text/css">
      #preloader {
          position: fixed;
          left: 0;
          top: 0;
          z-index: 99999;
          width: 100%;
          height: 100%;
          overflow: visible;
          background: #fff url("{{ asset('img/logo/Preloader.gif') }}") no-repeat center center;
      }
    </style>

</head>

<body class="multi-step-sign-up" style="background: url(../files/assets/images/register.jpg) no-repeat;">
    <!-- Pre-loader start -->
    <div id="preloader"></div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded load-height">

      <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header auth-header" header-theme="theme1">
                <div class="navbar-wrapper">

                    <div class="navbar-logo" logo-theme="theme1">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="../">
                            <img class="img-fluid" src="../files/assets/images/logo.png" alt="Theme-Logo" style=" margin-left: -26px;" />
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container ">


                    </div>
                </div>
            </nav>
        </div>
        <!-- Menu header end -->


      <form id="msform" >
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Compte</li>
            <li>Ajout d'informations</li>
            <li>Details Personnels</li>
        </ul>
        <!-- fieldsets -->
        <fieldset class="tab" style="top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h2 class="fs-title" style="color: #eb1e28;">Registration</h2>
            <h3 class="fs-subtitle">Bienvenue!! Inscrivez-vous pour commencer</h3>
            <div class="input-group">
                <input type="text" class="form-control" name="username" placeholder="Username ou Pseudo" require=""/>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" name="email" placeholder="Email" require="" />
            </div>
            <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Password" require="" />
            </div>
            <div class="input-group">
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" require="" />
            </div>
            <button type="button" name="next" class="btn btn-primary next" value="Next" id="nextBtn2">Next</button>
        </fieldset>

        <fieldset class="tab" style="top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h2 class="fs-title" style="color: #eb1e28;">Ajout d'informations</h2>
            <label>Date de debut</label><span style="color: #eb1e28;">*</span> <br/>
            <div class="input-group">
               
                <input type="date" class="form-control" name="date_debut" placeholder="Date de debut" require=""/>
            </div>
            <label>Date de fin</label><span style="color: #eb1e28;">*</span> <br/>
            <div class="input-group">
               
                <input type="date" class="form-control" name="date_fin" placeholder="Date de fin" require="" />
            </div>
            <label>Type contrat</label><span style="color: #eb1e28;">*</span> <br/>

            <div class="input-group">
                <select name="contrat" class="contrat form-control" id="contrat">
                    <option value="Stage" selected="selected">Stage</option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                </select>          
            </div>
            <label>Revenu</label><span style="color: #eb1e28;">*</span> <br/>
            <div class="input-group">
                <input type="number" class="form-control" name="revenu" placeholder="Revenu" require="" />
            </div>

            <label>Numero de compte</label><span style="color: #eb1e28;">*</span> <br/>
            <div class="input-group">
                <input type="number" class="form-control" name="no_compte" placeholder="Numero de compte" require="" />
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" name="next" class="btn btn-primary next" value="Next" id="nextBtn">Next</button>
        </fieldset>

        <fieldset class="tab" style="top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h2 class="fs-title">Details Personnels</h2>
            <h3 class="fs-subtitle">Dites nous plus sur vous!</h3>
            <div class="input-group">
                <input type="text" class="form-control" name="fname" placeholder="First Name" require=""/>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" name="lname" placeholder="Last Name" require=""/>
            </div>
            <div class="input-group">
                <input type="number" class="form-control" name="phone" placeholder="Phone" require=""/>
            </div>
            <div class="input-group">
                <input type="text" name="poste" class="form-control" placeholder="Votre poste actuel" require="" />
            </div>
            <label>Photo</label><span style="color: #eb1e28;">*</span> <br/>

            <div class="input-group">
                <input type="file" name="photo" class="form-control" require="" />
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" id="btn-login" name="submit" class="btn btn-primary submit" value="submit" id="submitbtn">Submit<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
        </fieldset>
    </form>
    </div>
<div class="footer bg-inverse">
  <p class="text-center">Copyright &copy; 2020 PERFITCOM SARL , All rights reserved.</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
     <script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>
    <!-- pnotify js -->

    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.desktop.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.buttons.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.confirm.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.callbacks.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.animate.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.history.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.mobile.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.nonblock.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/assets/pages/pnotify/notify.js')}}"></script>


    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/i18next/i18next.min.js')}}"></script>
    <script type="text/javascript"
        src="{{ URL::asset('files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript"
        src="{{ URL::asset('files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/assets/js/script.js')}}"></script>
    <script src="{{ URL::asset('files/assets/pages/multi-step-sign-up/js/main.js')}}"></script>
</body>
<script>
  (function($) {
      "use strict";

      /*--------------------------
      preloader
      ---------------------------- */
      $(window).on('load', function() {
          var pre_loader = $('#preloader')
          pre_loader.fadeOut('slow', function() { $(this).remove(); });
      });
  })(jQuery);


  // ma methode de registration commence ici

  // signup pour les verifications et recuperations des donnees
  function SignUp() {
    event.preventDefault();
    PNotify.removeAll();
    var info = {};
    var errors = [];
      $("#msform")
      .find("input")
      .each(function() {
        $(this).css("border", "1px solid #ccc");
        if ($(this).val() == "" || $(this).val() == null) {
            if($(this).attr("name") != "date_fin") {
                $(this).css("border", "1px solid #f77575");
                errors.push($(this).attr("name"));
            }
        }
        info[$(this).attr("name")] = $(this).val();
      });

      if($(".contrat").val() == null) {
        errors.push($(".contrat").val());
      } else {
        info["contrat"] = $(".contrat").val();
      }

    if (errors.length > 0) {
      new PNotify({
        title: 'Champs vides',
        text: 'Erreur remplissez tous vos champs importants',
        icon: 'icofont icofont-info-square',
        type: 'error'
      });
      return;
    }
    console.log(info);

    $("#spinner-login").show();

    $("#btn-login").addClass("disabled");
     login(info);     
  }

  // login pour la connexion
  function login(info) {
    $.ajax({

        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },

        type:'POST',

        data:info,

        url: '{{route('process-heberg-register')}}', //process-user-register est  le fichier php excute cote serveur

        success:function(response){
            $("#spinner-login").hide();
            $("#spinner-login-form").hide();

            $("#btn-login").removeClass("disabled");
            $("#btn-login-home").removeClass("disabled");



            if(response.status=='success'){
                new PNotify({
                    text: response.message,
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info'
                });
                setTimeout(()=>{
                    window.location.href="{{route('liste-resp-hebergement')}}";
                }, 1000);
            }

            if(response.status=='info'){
                new PNotify({
                    text: response.message,
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info'
                });
            }

        },

        error:function(response){
            $("#spinner-login").hide();
            $("#btn-login").removeClass("disabled");
                new PNotify({
                    text: 'Error occurred , try again later',
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info'
                });
        }

      });
    }


































  
 /* function SignUp(){
    

}

function login(info) {
    
}
*/
</script>
</html>
