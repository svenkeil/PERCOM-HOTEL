<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|ACCOUNTING LIST</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="PERCOM DASHBOARD">
    <meta name="author" content="PERFITCOM">

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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/icofont/css/icofont.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/feather/css/feather.css') }}">

    <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.brighttheme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.buttons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.history.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.mobile.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/pnotify/notify.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Data Table Css -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.html">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/jquery.mCustomScrollbar.css') }}">

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/sweetalert.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/component.css')}}">
    <!-- css pour rendre le logo petit -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/moncss.css') }}">
    
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

        .pcoded-main-container {
            background-image: url("{{asset('files/assets/images/comptable.jpg')}}");
            }

      </style>
</head>

<body>

    <!-- Pre-loader start -->
    <div id="preloader"></div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!--================navbar1=================-->
            @include('pages.externes.navbar1')
            <!--================navbar1=================-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!--================navbar=================-->
                    @include('pages.externes.navbar')
                    <!--================navbar=================-->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>LISTE DES COMPTABLES</h4>
                                                        <span>DE PERCOM-HOTEL</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"  style="float: left;">
                                                            <a href="../"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">PERCOM - HOTEL</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Liste Comptables</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-block">
                                                    <div class="table-responsive dt-responsive">
                                                        <table id="complex-header"
                                                            class="table table-striped table-bordered nowrap"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr style="background-color: #b82710; text-align: center">
                                                                    <th colspan="8">COMPTE INFORMATIONS</th>
                                                                    <th colspan="1">GESTION</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>PSEUDO</th>
                                                                    <th>EMAIL</th>
                                                                    <th>MATRICULE</th>
                                                                    <th>DATE DE DEBUT</th>
                                                                    <th>DATE DE FIN</th>
                                                                    <th>NUMERO DE COMPTE</th>
                                                                    <th>REVENU</th>
                                                                    <th>DATE CREATION</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($comptables as $comptable)
                                                                    <tr>
                                                                        <td>{{$valeuruser::find($comptable['user_id'])['pseudo']}}</td>
                                                                        <td>{{$valeuruser::find($comptable['user_id'])['email']}}</td>
                                                                        <td>{{ $comptable['matricule']}}</td>
                                                                        <td>{{ $comptable['start_date']}}</td>
                                                                        <td>{{ $comptable['end_date']}}</td>
                                                                        <td>{{ $comptable['no_compte']}}</td>
                                                                        <td style="color: #dc3545;font-weight: bold">{{ $comptable['revenu']}}</td>
                                                                        <td>{{ $comptable['created_at']}}</td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger" data-modal="modal-13" onclick=""><i class="fa fa-info"></i></button>
                                                                            <button class="btn btn-primary btn-outline-primary waves-effect md-trigger" "><i class="fa fa-trash"></i></button>
                                                                            <button class="btn btn-primary btn-outline-primary waves-effect md-trigger" data-modal="modal-19" ><i class="fa fa-edit"></i></button>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>PSEUDO</th>
                                                                    <th>EMAIL</th>
                                                                    <th>MATRICULE</th>
                                                                    <th>DATE DE DEBUT</th>
                                                                    <th>DATE DE FIN</th>
                                                                    <th>NUMERO DE COMPTE</th>
                                                                    <th>REVENU</th>
                                                                    <th>DATE CREATION</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; 2020 PERFITCOM SARL , All rights reserved.</p>
    </div>

    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('files/bower_components/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>

<!-- sweet alert js -->
<script type="text/javascript" src="{{ URL::asset('files/assets/js/sweetalert.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/js/modal.js')}}"></script>
<!-- sweet alert modal.js intialize js -->
<!-- modalEffects js nifty modal window effects -->
<script type="text/javascript" src="{{ URL::asset('files/assets/js/modalEffects.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/js/classie.js')}}"></script>

<!-- data-table js -->
    <script src="{{ URL::asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('files/assets/pages/data-table/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('files/assets/pages/data-table/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>


<script src="{{ URL::asset('files/assets/pages/chat/js/mmc-common.js') }}"></script>
<script src="{{ URL::asset('files/assets/pages/chat/js/mmc-chat.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/pages/chat/js/chat.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('files/bower_components/i18next/i18next.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.desktop.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.buttons.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.confirm.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.callbacks.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.animate.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.history.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.mobile.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/pnotify/dist/pnotify.nonblock.js')}}"></script>

<script type="text/javascript"
    src="{{ URL::asset('files/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript"
    src="{{ URL::asset('files/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-i18next/jquery-i18next.min.js') }}"></script>
<script src="{{ URL::asset('files/assets/pages/data-table/js/data-table-custom.js')}}"></script>

<script src="{{ URL::asset('files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ URL::asset('files/assets/js/vartical-layout.min.js') }}"></script>
<script src="{{ URL::asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/js/script.js') }}"></script>

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
</script>
<script>
    // signup pour les verifications et recuperations des donnees
  function AddCustomerType() {
    event.preventDefault();
    PNotify.removeAll();
    var info = {};
    var errors = [];
      $(".ajoutch")
      .find("input")
      .each(function() {
        $(this).css("border", "1px solid #ccc");
        if ($(this).val() == "" || $(this).val() == null) {
          $(this).css("border", "1px solid #f77575");
          errors.push($(this).attr("name"));
        }
        info[$(this).attr("name")] = $(this).val();
      });

      if($(".hotel_name").val() == null) {
        errors.push($(".hotel_name").val());
      } else {
        info["hotel_id"] = $(".hotel_name").val();
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

    $(".valid").addClass("disabled");
    addingCustomerType(info);     
  }

  // login pour la connexion
  function addingCustomerType(info) {
    $.ajax({

        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },

        type:'POST',

        data:info,

        url: '{{route('process-ajout-customer-type')}}', //process-user-register est  le fichier php excute cote serveur

        success:function(response){
            $("#spinner-login").hide();
            $("#spinner-login-form").hide();

            $(".valid").removeClass("disabled");
            $("#btn-login-home").removeClass("disabled");



            if(response.status=='success'){
                new PNotify({
                    text: response.message,
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info'
                });
                setTimeout(()=>{
                    window.location.href="{{route('customer-type')}}";
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
</script>

<script>
    function previsualiser(id,name)
    {
        $("#modal-13").addClass("md-show"); //innerHtml pout changer le contenu d'un selecteur ex p
        document.getElementById("modal_header").innerHTML='Information sur le type  <i class="fa fa-hand-o-right"></i> '+name;
        document.getElementById("type").value = name;
    }
</script>
<script>
    function ajoutchambre() {
        $("#modal-13").addClass("md-show");
        document.getElementById("modal_header").innerHTML='Ajout d\'un type ce client';
    }
    $(document).ready(function() {
        $('.ajoutch').hide();

        $('.newch').on("click", function() {
            $('.ajoutch').show();
        });

        $('.clos').on("click", function() {
            $('.ajoutch').hide();
        });
        
    });
</script>
</body>
</html>
