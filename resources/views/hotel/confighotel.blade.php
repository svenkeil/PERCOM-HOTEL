<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>CONFIGURATION HOTEL | PERCOM-HOTEL</title>
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
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
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
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css') }}">
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

      #msform #progressbar li {
        width: 7rem;
      }

      .bootstrap-tagsinput {
          font-size: 1.4rem;
          line-height: 30px;
          border-radius: 2px;
          width: 37.5rem;
          margin-bottom: 1rem;
      }

      /*.pcoded load-height {
            background-image: url("{{asset('files/assets/images/config_fond.jpg')}}");
        }*/

    </style>

</head>

<body class="multi-step-sign-up" style="background: url(../files/assets/images/config_fond.jpg) no-repeat;">
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


    <form id="msform" style="width: 50rem;">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active"> Informations Personnelles </li>
            <li > Chambres </li>
            <li > Fiscalite / Comptabilite </li>
            <li > Geolocalisation </li>
            <li > Reservation </li>
            <li > Gestion des Resources Humaines </li>
            <li > Creation de compte </li>
        </ul>
        <!-- fieldsets -->

        @if(Session::has('message'))

            <div class="section mt-2 text-center">
                <button type="button" class="close"
                    data-dismiss="alert" aria-label="Close">
                    <i
                        class="icofont icofont-close-line-circled"></i>
                </button>
                <p style="color:red; font-size: 2rem;"><strong>{{ Session::get('message') }}</p>
            </div>

        @endif
        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Vos Informations Personnelles</h3>
            <div class="input-group">
                    <input type="text" class="form-control" name="name" placeholder="Nom de l'Hotel *" require=""/>
                </div>
                <span style="margin-bottom: 0.5rem; font-size: 0.9rem;color:#b82710;"> Date de Creation *</span>
                <div class="input-group">
                    <input type="date" class="form-control" name="date_creation" require=""/>
                </div>
                <div class="tags_add">
                    <input type="text" class="contacts form-control" data-role="tagsinput"  name="contacts" placeholder="Contacts">
                </div>
                <span style="margin-bottom: 0.5rem; font-size: 0.9rem;color:#b82710;"> Votre Logo *</span>
                <div class="input-group">
                    <input type="file" class="form-control" name="logo" accept="image/*" id="file"  onchange="previewFile(this)" placeholder="Logo" require="" />
                </div>
                <br />
                <img id="previewImg" alt="Logo" style="margin-top:-1rem; width:10rem; height:5rem;">
                <br />
            <button type="button" name="next" class="btn btn-primary next1" value="Next" id="nextBtn">Next</button>
        </fieldset>


        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Vos Chambres</h3>
            <div class="input-group">
                    <input type="number" class="form-control" name="nbchambres" placeholder="Nombre de chambres*" require=""/>
                </div>
                <span style="margin-bottom: 0.5rem; font-size:1rem;color:#b82710;"> Type de chambres *</span>
                <div class="input-group">
                    <select class="typech js-example-responsive col-sm-12"  multiple="multiple" name="typechambre">
                        @foreach($typechambres as $type)
                            <option value="{{ $type['id'] }}">{{ $type['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <span style="margin-bottom: 0.5rem; font-size:1rem;color:#b82710;"> Qualite de chambres *</span>
                <div class="input-group">
                    <select class="qualitech js-example-responsive col-sm-12"  multiple="multiple" name="qualitechambre">
                        @foreach($qualitechambres as $qualite)
                            <option value="{{ $qualite['id'] }}">{{ $qualite['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" name="next" class="btn btn-primary next2" value="Next" id="nextBtn">Next</button>
        </fieldset>

        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Fiscalite / Comptabilite</h3>
            <div class="input-group">
                    <input type="number" class="form-control" name="numcompte" placeholder="Numero de compte *" require=""/>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" name="tva" placeholder="TVA *" require="" />
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" name="journal" placeholder="Journal *" require="" />
                </div>
                <div class="input-group">
                    <select id="devise" class="devise form-control" name="devise">
                        <option value="titre"> ---- Devise de base ---- *</option>
                        @foreach($devises as $devise)
                            <option value="{{ $devise['id'] }}">{{ $devise['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" name="next" class="btn btn-primary next" value="Next" id="nextBtn">Next</button>
        </fieldset>

        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Geolocalisation de l'Hotel</h3>
            <!--select ici avec api fuseau horaire(pour avoir geolocalisation id) et les pays -->
            <div class="input-group">
                <input type="text" class="form-control" name="adresse" placeholder="Adresse *" require=""/>
            </div>
            <div class="input-group">
                <select id="pays" class="pays form-control" name="pays">
                    <option value="titre"> ---- Pays ---- *</option>
                    @foreach($pays as $pay)
                        <option value="{{ $pay['id'] }}">{{ $pay['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" name="fuseauhoraire" placeholder="Fuseau Horaire *" require="" />
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" name="next" class="btn btn-primary next" value="Next" id="nextBtn">Next</button>
        </fieldset>


        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Reservation</h3>
            <span style="margin-bottom: 0.5rem; font-size:1rem;color:#b82710;"> Mode de paiement *</span>
            <div class="input-group">
                <select class="modepaiement js-example-responsive col-sm-12"  multiple="multiple" name="modepaiement">
                    @foreach($modepaiements as $mpaiement)
                        <option value="{{ $mpaiement['id'] }}">{{ $mpaiement['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group">
                <select id="type-property" class="typee form-control" name="typeetablissement">
                    <option value="titre"> ---- Type d'Etablissement ---- *</option>
                    @foreach($typeetablissement as $typee)
                        <option value="{{ $typee['id'] }}">{{ $typee['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <span style="margin-bottom: 0.5rem; font-size:1rem;color:#b82710;"> Type de reservation *</span>
            <div class="input-group">
                <select class="typereser js-example-responsive col-sm-12"  multiple="multiple" name="typereservation">
                    @foreach($typereservations as $typereser)
                        <option value="{{ $typereser['id'] }}">{{ $typereser['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" name="next" class="btn btn-primary next3" value="Next" id="nextBtn">Next</button>
        </fieldset>

        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Gestion des resources humaines</h3>
            <div class="input-group">
                <input type="text" class="form-control" name="nbemployes" placeholder="Nombre d'employes *" require=""/>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" name="site_web" placeholder="Site Web *" require=""/>
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" name="next" class="btn btn-primary next" value="Next" id="nextBtn">Next</button>
        </fieldset>

        <fieldset class="tab" style="padding-top: 0 rem; margin-top: -1 rem; top: -22px;">
            <img class="logo" src="../files/assets/images/logoform.png" alt="logo.png">
            <h3 class="fs-subtitle" style="color:#b82710;">Creation du compte</h3>
            <div class="input-group">
                <input type="text" class="form-control" name="username" placeholder="Username ou Pseudo *" require=""/>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" name="email" placeholder="Email *" require="" />
            </div>
            <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Password *" require="" />
            </div>
            <div class="input-group">
                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password *" require="" />
            </div>
            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous"
                value="Previous" id="prevBtn">Previous</button>
            <button type="button" id="btn-login" name="submit" class="btn btn-primary submit" value="submit" id="submitbtn">Submit<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
        </fieldset>
    </form>
    </div>
<div class="footer bg-inverse">
  <p class="text-center">Copyright &copy; 2021 PERFITCOM SARL , All rights reserved.</p>
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
    <!-- <script src="{{ URL::asset('files/assets/pages/multi-step-sign-up/js/main.js')}}"></script> -->
    <script type="text/javascript" src="{{ URL::asset('files/assets/supplement/confighotel.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/assets/pages/advance-elements/select2-custom.js')}}"></script>
</body>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        /* $('#exampleInputFile').on('change', function(){
            var fileInput = document.getElementById('exampleInputFile');

            var filePath = fileInput.value;

            // Allowing file type
            var allowedExtensions = /(\.png|\.jpg|\.jpeg)$/i;

            if (!allowedExtensions.exec(filePath)) {
                $("#labfile").text("Choose file");
                $("#imageur").css("display","none");
                new PNotify({
                    text: "Invalid type image",
                    animate_speed: 'fast',
                    type: 'danger'
                });
                fileInput.value = '';
                return false;
            }
            else{
                var file, img;
                if ((file = this.files[0])) {
                    img = new Image();
                    var objectUrl = _URL.createObjectURL(file);
                    img.onload = function () {
                        alert(this.width + " " + this.height);
                        _URL.revokeObjectURL(objectUrl);
                    };
                    $("#imageur").css("display","block");
                    //$("#imageur").attr("src", objectUrl);


                    $("#imageur")
                        .fadeOut(400, function() {
                            $("#imageur").attr('src',objectUrl);
                        })
                        .fadeIn(400);
                }
            }



         });
         */
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
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
        /* if ($(this).val() == "" || $(this).val() == null) {
          $(this).css("border", "1px solid #f77575");
          errors.push($(this).attr("name"));
        } */
        if($(this).attr("name") !== undefined) {
            info[$(this).attr("name")] = $(this).val();
        }
      });

        info["typechambre"] = $(".typech").val();

        info["qualitechambre"] = $(".qualitech").val();
        
        if($(".devise").val() == "titre"){
            info["devise"] = "";
        }else {
            info["devise"] = $(".devise").val();
        }

        if($(".pays").val() == "titre"){
            info["pays"] = "";
        }else {
            info["pays"] = $(".pays").val();
        }
        
        info["modepaiement"] = $(".modepaiement").val();

        if($(".typee").val() == "titre"){
            info["typeetablissement"] = "";
        }else {
            info["typeetablissement"] = $(".typee").val();
        }

        info["typereservation"] = $(".typereser").val();
      
    /* if (errors.length > 0) {
      new PNotify({
        title: 'Champs vides',
        text: 'Erreur remplissez tous vos champs importants',
        icon: 'icofont icofont-info-square',
        type: 'error'
      });
      return;
    } */
     console.log(info);

    $("#spinner-login").show();

    $("#btn-login").addClass("disabled");
    // window.location.href="{{route('user-login')}}";
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

        url: '{{route('process-config-hotel')}}',

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
                    window.location.href="{{route('user-login')}}";
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
