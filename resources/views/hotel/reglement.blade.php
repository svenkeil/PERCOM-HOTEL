<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|CUSTOMER PAY</title>


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
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Data Table Css -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.html">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/jquery.mCustomScrollbar.css') }}">

    <!-- Multiple select-->
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css') }}">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/sweetalert.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/component.css')}}">
    <!-- css pour rendre le logo petit -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/moncss.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" />
    
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
            background-image: url("{{asset('files/assets/images/restauration.jpg')}}");
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #4ba1cc;
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
                                                        <h4>PAIEMENT CLIENT</h4>
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
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Paiement CLIENT</a>
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
                                                    <form class="reglement" onsubmit="return AddReglement()">
                                                            <div class="md-content">
                                                                <h3 style="background-color: #a99166" align="center">Reglement Client: <strong style="color:#5e281c">{{$valeurclient::find($id->client_id)->name}}</strong></h3>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>Date d'arrivee</label>
                                                                                <input type="date" class="form-control form-control-primary" name="arrivee" id="arrivee" value="{{ $id->date_debut }}" readonly="true">
                                                                            </div>
                                                                            
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Date de depart</label>
                                                                                    <input type="date" class="form-control form-control-primary" name="depart" id="depart" value="{{ $id->date_fin }}" readonly="true">                                                                                 </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr/>
                                                                        <div class="row">
                                                                           
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Nombre de nuits</label>
                                                                                    <input type="text" class="form-control" readonly="true" value="{{ $id->nb_nuits }}"  id="nb_nuits" name="nb_nuits"/>
                                                                                    <input type="hidden" class="form-control" value="{{ $id->id }}"  id="id_reception" name="id_reception"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Chambre du client</label>
                                                                                    <input type="text" class="form-control form-control-primary" readonly="true" value="{{$valeurchambre::find($id->chambre_id)->name}}"  id="chambre_actuelle" name="chambre_actuelle"/>
                                                                                </div>
                                                                        <!-- /.form-group -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                           
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Prix de la chambre</label>
                                                                                    <input type="text" class="form-control form-control-primary" readonly="true"   id="prix_chambre" value="{{ $valeurchambre::find($id->chambre_id)->prix}}" name="prix_chambre"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Total Restauration</label>
                                                                                    <input type="text" class="form-control form-control-primary" readonly="true"   value="0" id="total_restau" name="total_restau"/>
                                                                                </div>
                                                                        <!-- /.form-group -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                           
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Type de client</label>
                                                                                    <input type="text" class="form-control form-control-primary" readonly="true"   id="type_client" name="type_client" value="{{$valeurtypeclient::find($valeurclient::find($id->client_id)->type_client_id)->name}}"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Total Nuitees</label>
                                                                                    <input type="text" class="form-control form-control-primary"  id="total_nuitees" readonly="true" name="total_nuitees" value="{{ $id->prix_total }}" />
                                                                                </div>
                                                                        <!-- /.form-group -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Divers</label>
                                                                                    <input type="text" class="form-control form-control-primary" readonly="true" id="divers" value="0" name="divers"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Total General</label>
                                                                                    <input type="text" class="form-control form-control-primary"  id="total_general" readonly="true" name="total_general"/>
                                                                                </div>
                                                                        <!-- /.form-group -->
                                                                            </div>
                                                                        </div>
                                                                        <hr/>
                                                                        <div class="row">
                                                                           
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Mode de paiement</label>
                                                                                    <input type="text" class="form-control form-control-primary" readonly="true" value="{{$valeurmodepaiement::find($id->mode_paiement_id)->name}}"  id="mode_paiement" name="mode_paiement"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Date de depart</label>
                                                                                    <input type="date" class="form-control form-control-primary" id="date_depart" name="date_depart"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Heure de depart</label>
                                                                                    <input type="time" class="form-control form-control-primary" id="heure_depart" name="heure_depart"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr/>
                                                                        <div class="row">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Depart tardif</label>
                                                                                    <select name="depart_tardif" class="depart_tardif form-control form-control-primary">
                                                                                        <option value="Non"> Non </option>
                                                                                        <option value="Oui"> Oui </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Montant additionel</label>
                                                                                    <input type="text" class="form-control form-control-primary" id="montant_additionnel" value="0" name="montant_additionnel"/>
                                                                                </div>
                                                                        <!-- /.form-group -->
                                                                            </div>
                                                                        </div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>Montant recu</label>
                                                                                <input type="text" class="form-control form-control-primary"  id="prix_rem" name="prix_rem"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>Mode de paiement</label>
                                                                                <select name="modepaiement" class="modepaiement form-control form-control-primary">
                                                                                    @foreach($modepaiements as $mode)
                                                                                        <option value="{{ $mode['id'] }}">{{ $mode['name'] }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <!-- /.form-group -->
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12">
                                                                            <textarea class="form-control form-control-primary" id="remarque" name="remarque" rows="3" placeholder="Remarque: SI remise , veuillez mentionner ici"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <hr/>
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-6">
                                                                                <button type="submit" class="btn btn-primary waves-effect valid" value="submit">Valider<i class="fas fa-check" style="color:green;"></i> <i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6">
                                                                            <button type="button" class="btn btn-primary waves-effect"><a href="{{route('main-courante')}}">Close</a><i class="fa fa-times" style="color:red;"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
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
    @foreach($receptions as $reception) 
        <input type="hidden" class="form-control" style="width: 7rem; color: #dc3545;font-weight: bold"  id="petitdej{{$reception['id']}}" name="petitdej" readonly="true" />
        <input type="hidden" class="dej form-control"  style="width: 7rem; color: #dc3545;font-weight: bold"  id="dej{{$reception['id']}}" name="dej" readonly="true"/>
        <input type="hidden" class="dinn form-control" style="width: 7rem; color: #dc3545;font-weight: bold"   id="dinner{{$reception['id']}}" name="dinner" readonly="true"/>
        <input type="hidden" class="bar form-control"  style="width: 7rem; color: #dc3545;font-weight: bold" id="bar{{$reception['id']}}" name="bar" readonly="true"/>
        <input type="hidden" class="totalresto form-control"  style="width: 7rem;color: #dc3545;font-weight: bold"  id="totalresto{{$reception['id']}}" name="totalresto" readonly="true"/>
        <input type="hidden" class="divers form-control"  style="width: 7rem;color: #dc3545;font-weight: bold"  id="divers{{$reception['id']}}" name="divershidden" value="0" readonly="true"/>
    @endforeach
    <div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; 2021 PERFITCOM SARL , All rights reserved.</p>
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
<!--Multiple select -->


    <script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('files/assets/pages/advance-elements/select2-custom.js')}}"></script>

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
  function AddReglement() {
    event.preventDefault();
    PNotify.removeAll();
    var info = {};
    var errors = [];
      $(".reglement")
      .find("input")
      .each(function() {
        $(this).css("border", "1px solid #ccc");
        if ($(this).val() == "" || $(this).val() == null) {
          if($(this).attr("name") !== undefined && $(this).attr("name") !== "date_depart" && $(this).attr("name") !== "heure_depart" && $(this).attr("name") !== "montant_additionnel") {
            $(this).css("border", "1px solid #f77575");
            errors.push($(this).attr("name"));
          }
        }
        info[$(this).attr("name")] = $(this).val();
      });

      info["remarque"] = $('#remarque').val(); 

      // console.log(info);
      console.log(errors);
    if (errors.length > 0) {
      new PNotify({
        title: 'Champs vides',
        text: 'Erreur remplissez tous vos champs',
        icon: 'icofont icofont-info-square',
        type: 'error'
      });
      return;
    }
    console.log(info);
    

    $("#spinner-login").show();

    $(".valid").addClass("disabled");
  addingReglement(info);     
  }

  // login pour la connexion
  function addingReglement(info) {
    $.ajax({

        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },

        type:'POST',

        data:info,

        url: '{{route('process-reglement')}}', //process-user-register est  le fichier php excute cote serveur

        success:function(response){
            $(".valid").removeClass("disabled");

            if(response.status=='success'){
                new PNotify({
                    text: response.message,
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info'
                });
                setTimeout(()=>{
                    window.location.href="{{route('liste-reglements')}}";
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
    $(document).ready(function() {

        // total restau
        console.log('hh'+$('#dej1').val());
       //  $('#total_restau').val(15);
        // total general
        // let resto = getDonneesRestau();
        // total general
        let prixresto = 0;
        let prixnuitees = 0;
        let prixdivtot = 0;
        // total resto
        let prixapi = 0;
        let prix = 0;

        // petit dej
        let prixapipetitdej = 0;
        let prixpetitdej = 0;

        // dej
        let prixapidej = 0;
        let prixdej = 0;

        // dinner
        let prixapidinner = 0;
        let prixdinner = 0;

        // bar
        let prixapibar = 0;
        let prixbar = 0;

        let prixdivers = 0;
        let prixdiversapi = 0;
        // divers
        @foreach($receptions as $reception)
            @foreach($divers as $div)
                @if($div['reception_id'] == $id->id)
                    prixdiversapi = parseInt({{$div['prix']}});
                    prixdivers = parseInt(document.getElementById("divers{{$reception['id'] }}").value)
                    document.getElementById("divers{{$reception['id'] }}").value = prixdiversapi+ prixdivers;
                    document.getElementById("divers").value = prixdiversapi+ prixdivers;
                @endif
            @endforeach
        @endforeach

        @foreach($receptions as $reception)
        document.getElementById("petitdej{{$reception['id'] }}").value = 0;
        document.getElementById("totalresto{{$reception['id'] }}").value = 0;
        document.getElementById("dej{{$reception['id'] }}").value = 0;
        document.getElementById("bar{{$reception['id'] }}").value = 0;
        document.getElementById("dinner{{$reception['id'] }}").value = 0;
            @foreach($restaureceptions as $restauration)
                @if($restauration['reception_id'] == $id->id)
                    //console.log({{$restauration['menus']}});
                    @for($i=0; $i<strlen($restauration['menus']); $i=$i+2)
                        @if($valeurrestau::find($restauration['menus'][$i])['type'] == 'Petit Dejeuner')
                            // console.log('pd')
                            prixapipetitdej = parseInt({{$valeurrestau::find($restauration['menus'][$i])['prix']}});
                            prixpetitdej = parseInt(document.getElementById("petitdej{{$reception['id'] }}").value)
                            document.getElementById("petitdej{{$reception['id'] }}").value = prixpetitdej+ prixapipetitdej;
                        @endif

                        @if($valeurrestau::find($restauration['menus'][$i])['type'] == 'Dejeuner')
                            // console.log('dej')
                            prixapidej = parseInt({{$valeurrestau::find($restauration['menus'][$i])['prix']}});
                            prixdej = parseInt(document.getElementById("dej{{$reception['id'] }}").value)
                            document.getElementById("dej{{$reception['id'] }}").value = prixdej+ prixapidej;
                        @endif

                        @if($valeurrestau::find($restauration['menus'][$i])['type'] == 'Dinner')
                            // console.log('din')
                            prixapidinner = parseInt({{$valeurrestau::find($restauration['menus'][$i])['prix']}});
                            prixdinner = parseInt(document.getElementById("dinner{{$reception['id'] }}").value)
                            document.getElementById("dinner{{$reception['id'] }}").value = prixdinner+ prixapidinner;
                        @endif

                        @if($valeurrestau::find($restauration['menus'][$i])['type'] == 'Bar')
                            // console.log('bar')
                            prixapibar = parseInt({{$valeurrestau::find($restauration['menus'][$i])['prix']}});
                            prixbar = parseInt(document.getElementById("bar{{$reception['id'] }}").value)
                            document.getElementById("bar{{$reception['id'] }}").value = prixbar+ prixapibar;
                        @endif
                    @endfor
                    prixapi = parseInt({{$restauration['prix']}});
                    prix = parseInt(document.getElementById("totalresto{{$reception['id'] }}").value)
                     document.getElementById("totalresto{{$reception['id'] }}").value = prix+ prixapi;
                     document.getElementById("total_restau").value = prix+ prixapi;
                @endif
            @endforeach
            prixresto = parseInt(document.getElementById("total_restau").value);
            prixnuitees = parseInt(document.getElementById("total_nuitees").value);
            prixdivtot = parseInt(document.getElementById("divers").value);
            document.getElementById("total_general").value = prixnuitees+ prixresto + prixdivtot;
            // alert('gg');
        @endforeach
        
    });

</script>
</body>
</html>
