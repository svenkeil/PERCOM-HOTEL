<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|RECEPTION</title>


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
    <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
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
    
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/datedropper/datedropper.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/multiselect/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('files/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css') }}">
    <!-- intltelinput -->

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

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #c65240;
        }

        /* signature */
        #sig-canvas {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
            }

            .pcoded-main-container {
            background-image: url("{{asset('files/assets/images/reception.jpg')}}");
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
                                                        <h4>RECEPTION</h4>
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
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Reception</a>
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

                                                    <!-- Formulaire reserver -->
                                                    <form class="reception1">
                                                        <div class="md-content">
                                                            <h3 id="modal_header" style="background-color: #b82710">1. Informations de base</h3>
                                                            <div>
                                                               <!-- <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label> Date </label>
                                                                            <label class="j-icon-right" for="today">  <i class="icofont icofont-ui-calendar"></i> </label>
                                                                            <div class="input-group">
                                                                                <input class="debut form-control" id="dropper-default"
                                                                                    type="text" placeholder="Today" name="today"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                         /.form-group 
                                                                        <div class="form-group">
                                                                            <label> Heure </label>
                                                                            <label class="j-icon-right" for="heure">  <i class="icofont icofont-ui-calendar"></i> </label>
                                                                            <div class="input-group">
                                                                                <input class="fin form-control" id="dropper-animation"
                                                                                    type="time" placeholder="Heure" name="heure"/>
                                                                            </div>
                                                                        </div>
                                                                         /.form-group
                                                                    </div>
                                                                </div> -->
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Client</label>
                                                                            <select name="client" class="client_reception form-control form-control-primary">
                                                                                <option value="Nouveau"> Nouveau Client </option>
                                                                                @foreach($clients as $client)
                                                                                    <option value="{{ $client['id'] }}">{{ $client['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <hr />
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Id du document *</label>
                                                                            <label class="j-icon-right" for="id_doc"></label>
                                                                            <input type="text" class="form-control form-control-primary"   id="id_doc" name="id_doc" placeholder="#P0000SS4"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Noms *</label>
                                                                            <label class="j-icon-right" for="nomcl">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"   id="nomcl" name="nomcl"/>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Prenoms *</label>
                                                                            <label class="j-icon-right" for="prenomcl">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"   id="prenomcl" name="prenomcl"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Nom de jeune fille</label>
                                                                            <label class="j-icon-right" for="nomfille">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"   id="nomfille" name="nomfille"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Entreprise</label>
                                                                        <input type="text" class="form-control form-control-primary"  id="entreprise" name="entreprise"/>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                        <label>Type de client</label>
                                                                            <input type="text" class="form-control form-control-primary" id="type_client" name="typeclient"/>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                        <label>Identifiant unique</label>
                                                                            <input type="text" class="form-control form-control-primary" id="identifiant_unique" name="identifiant_unique"/>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                <!-- <div class="col-12 col-sm-6">
                                                                        <button type="button" class="btn btn-primary waves-effect affich" value="submit">Next<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                                    </div>-->
                                                                <!-- <div class="col-12 col-sm-6">
                                                                        <button type="button"
                                                                    class="btn btn-primary waves-effect md-close">Print PDF</button>
                                                                    </div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                                    <!-- Formulaire reserver -->
                                                    <form class="reception2">
                                                        <div class="md-content">
                                                            <h3 id="modal_header" style="background-color: #b82710">2. Informations complementaires 1</h3>
                                                            <div style="margin-bottom:20px;">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label> Date de naissance </label>
                                                                            <label class="j-icon-right" for="today">  <i class="icofont icofont-ui-calendar"></i> </label>
                                                                            <div class="input-group">
                                                                                <input class="dob form-control" id="dob"
                                                                                    type="date" placeholder="Date de naissance" name="dob"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Lieu de naissance *</label>
                                                                            <label class="j-icon-right" for="lieu_naissance">  <i class="fa fa-institution"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"   id="lieu_naissance" name="lieu_naissance"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Numero de telephone *</label>
                                                                            <label class="j-icon-right" for="telephone">  <i class="icofont icofont-phone"></i> </label>
                                                                            <input class="form-control" type="tel" id ="tel" name="tel" placeholder="" style="width: 485px;"> 
                                                                            <input type="hidden" class="form-control"   id="phone_number" name="phone_number"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Email *</label>
                                                                            <label class="j-icon-right" for="email">  <i class="fa fa-send-o"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"   id="email" name="email"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Nationalite</label>
                                                                            <label class="j-icon-right" for="nationalite">  <i class="fa fa-globe"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"   id="nationalite" name="nationalite"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Pays de residence</label>
                                                                            <label class="j-icon-right" for="pays">  <i class="fa fa-globe"></i> </label>
                                                                            <select name="country" class="country form-control" id="country">
                                                                                <option value="Cameroon" selected="selected">Cameroon</option>
                                                                                <option value="Afrique du Sud">Afrique du Sud</option>
                                                                                <option value="Algerie">Algerie</option>
                                                                                <option value="Tunisie">Tunisie</option>
                                                                                <option value="Nigeria">Nigeria</option>
                                                                                <option value="Mali">Mali</option>
                                                                                <option value="Togo">Togo</option>
                                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                                <option value="Canada">Canada</option>
                                                                                <option value="Usa">Usa</option>
                                                                                <option value="Cote d'ivoire">Cote d'ivoire</option>
                                                                                <option value="Maroc">Maroc</option>
                                                                                <option value="Ouganda">Ouganda</option>
                                                                                <option value="Afrique du sud">Afrique du sud</option>
                                                                                <option value="Italie">Italie</option>
                                                                                <option value="Allemagne">Allemagne</option>
                                                                                <option value="Portugal">Portugal</option>
                                                                                <option value="Belgique">Belgique</option>
                                                                                <option value="Ethiopie">Ethiopie</option>
                                                                                <option value="Mozambique">Mozambique</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                               <!-- <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                        <button type="button" class="btn btn-primary waves-effect affich" value="submit">Next<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                                    </div>
                                                                 <div class="col-12 col-sm-6">
                                                                        <button type="button"
                                                                    class="btn btn-primary waves-effect md-close">Print PDF</button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                            

                                                    <!-- Formulaire reserver -->
                                                    <form class="reception3">
                                                        <div class="md-content">
                                                            <h3 id="modal_header" style="background-color: #b82710">3. Informations complementaires 2</h3>
                                                            <div style="margin-bottom:20px;">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Adresse *</label>
                                                                            <label class="j-icon-right" for="adresse">  <i class="fa fa-street-view"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="adresse" name="adresse"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Profession *</label>
                                                                            <label class="j-icon-right" for="profession">  <i class="fa fa-bank"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="profession" name="profession"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Venant De  *</label>
                                                                            <label class="j-icon-right" for="venant_de">  <i class="fa fa-fort-awesome"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="venant_de" name="venant_de"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Se rendant a *</label>
                                                                            <label class="j-icon-right" for="se_rendant_a">  <i class="fa fa-fort-awesome"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="se_rendant_a" name="se_rendant_a"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Sexe</label>
                                                                            <label class="j-icon-right" for="sexe"> </label>
                                                                            <select name="sexe" class="sexe form-control form-control-primary">
                                                                                <option value="Masculin"> Masculin </option>
                                                                                <option value="Feminin"> Feminin </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Nombre de personnes</label>
                                                                            <label class="j-icon-right" for="nb_personnes">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="nb_personnes" name="nb_personnes"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Nombre d'enfants  *</label>
                                                                            <label class="j-icon-right" for="enfants">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="enfants" name="enfants"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label> Nombre d'adultes *</label>
                                                                            <label class="j-icon-right" for="adultes">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="adultes" name="adultes"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                               <!-- <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                        <button type="button" class="btn btn-primary waves-effect affich" value="submit">Next<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                                    </div>
                                                                 <div class="col-12 col-sm-6">
                                                                        <button type="button"
                                                                    class="btn btn-primary waves-effect md-close">Print PDF</button>
                                                                    </div>
                                                                </div>-->
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <!-- Formulaire reserver -->
                                                    <form class="reception4">
                                                        <div class="md-content">
                                                            <h3 id="modal_header" style="background-color: #b82710">4. Informations sur la chambre</h3>
                                                            <div style="margin-bottom:20px;">
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Chambre No</label>
                                                                            <label class="j-icon-right" for="chambre_n"> </label>
                                                                            <select name="chambre_n" class="chambre_n form-control form-control-primary">
                                                                                @foreach($chambreslibres as $chambre)
                                                                                    <option value="{{ $chambre['id'] }}">{{ $chambre['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Date de d'arrivee</label>
                                                                            <label class="j-icon-right" for="date_arrivee">
                                                                                <i class="icofont icofont-ui-calendar"></i>
                                                                            </label>
                                                                            <input type="date" class="form-control form-control-primary" id="date_arrivee" name="date_arrivee"/>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Date de depart</label>
                                                                            <label class="j-icon-right" for="date_depart">
                                                                                <i class="icofont icofont-ui-calendar"></i>
                                                                            </label>
                                                                            <input type="date" class="form-control form-control-primary"   id="date_depart" name="date_depart"/>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Total des nuitees *</label>
                                                                            <label class="j-icon-right" for="total_nuit">  <i class="fa fa-bed"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="total_nuit" name="total_nuit" disabled="disabled"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Heure d'arrivee</label>
                                                                            <input type="time" class="form-control form-control-primary"   id="heure_arrivee" name="heure_arrivee"/>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Heure de depart</label>
                                                                            <input type="time" class="form-control form-control-primary"  id="heure_depart" name="heure_depart"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr />
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Prix</label>
                                                                            <label class="j-icon-right" for="prix">  <i class="fa fa-calculator"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" id="prix" name="prix" disabled="disabled"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Montant a donner au partenaire</label>
                                                                            <input type="number" class="form-control form-control-primary" id="montant_partenaire" value="0" name="montant_partenaire"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Receptionniste</label>
                                                                            <label class="j-icon-right" for="receptionniste">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  id="receptionniste"  value="{{Auth::user()->name}}" name="receptionniste" disabled="disabled"/>
                                                                            <input type="hidden" class="form-control form-control-primary"  id="type_sejour" name="type_sejour" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Rabais</label>
                                                                            <input type="number" max="5000" class="form-control form-control-primary" id="rabais" value="0" name="rabais"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <!--<div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Parking</label>
                                                                        <select name="type_piece" class="type_piece form-control form-control-primary">
                                                                            <option value="CNI"> CNI </option>
                                                                            <option value="Passeport">  Passeport </option>
                                                                        </select>
                                                                    </div>
                                                                     /.form-group
                                                                    </div>
                                                                </div> -->
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Partenaires</label>
                                                                            <select name="partenaires" class="partenaires form-control form-control-primary">
                                                                                @foreach($partenaires as $parte)
                                                                                    <option value="{{ $parte['id'] }}">{{ $parte['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    
                                                                    <div class="col-12 col-sm-6">
                                                                            <button type="button" id="valider" class="btn btn-primary waves-effect affich" value="submit">Valider<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                                        </div>
                                                                    <!-- <div class="col-12 col-sm-6">
                                                                            <button type="button"
                                                                        class="btn btn-primary waves-effect md-close">Print PDF</button>
                                                                        </div>-->
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Formulaire informations reservations -->
                                                <form class="inforeserv" onsubmit="return AddReception()">
                                                    <div class="md-content">
                                                        <h3 id="modal_header4" style="background-color: #b82710">5. Informations complementaires 3</h3>
                                                        <div style="margin-bottom:20px;">
                                                        
                                                            <div class="row">
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
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Nom de l'hotel</label>
                                                                        <select name="hotel_name" class="hotel_name form-control form-control-primary">
                                                                            @foreach($hotels as $hotel)
                                                                                <option value="{{ $hotel['id'] }}">{{ $hotel['name'] }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                            <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            <hr/>

                                        
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Numero de Passeport/CNI</label>
                                                                        <label class="j-icon-right" for="num_piece">
                                                                            <i class="fa fa-product-hunt"></i>
                                                                        </label>
                                                                        <input type="text" class="form-control form-control-primary"  id="num_piece" name="num_piece"/>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Mode de transport</label>
                                                                        <input type="text" class="form-control form-control-primary" id="mode_transport" name="mode_transport"/>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Delivree le</label>
                                                                        <input type="date" class="form-control"   id="delivre_le" name="delivre_le"/>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Lieu de delivrance</label>
                                                                        <input type="text" class="form-control"   id="lieu_delivrance" name="lieu_delivrance"/>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Type de client</label>
                                                                        <select name="typeclient" class="typeclient form-control form-control-primary">
                                                                            @foreach($typeclients as $typecl)
                                                                                    <option value="{{ $typecl['id'] }}">{{ $typecl['name'] }}</option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Type de piece</label>
                                                                        <select name="type_piece" class="type_piece form-control form-control-primary">
                                                                            <option value="CNI"> CNI </option>
                                                                            <option value="Passeport">  Passeport </option>
                                                                        </select>
                                                                    </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            <!-- <div class="row">
                                                                
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Entreprise</label>
                                                                        <input type="text" class="form-control form-control-primary"  id="entreprise" name="entreprise"/>
                                                                    </div>
                                                                 /.form-group
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                    <label>Type de client</label>
                                                                        <input type="text" class="form-control form-control-primary" id="type_client" name="type_client"/>
                                                                    </div>
                                                                 /.form-group
                                                                </div>
                                                            </div> -->
                                                            <hr/>
                                                            
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12">
                                                                    <textarea class="form-control form-control-primary" id="remarque_recept" name="remarque" rows="3" placeholder="Remarque"></textarea>
                                                                </div>
                                                                    <!-- /.form-group -->
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="resume_reserv col-sm-4">

                                                            </div>

                                                            <div class="container">
                                                                <div class="row">
                                                                    <input type="button" id="sign" name ="signature" data-toggle="modal" data-target="#myModal"  value="Signature" class="btn" style="background: #747c7c; color: white; margin-left: 2rem; ">
                                                                </div>
                                                                <br/>
                                                                <div class="row" hidden>
                                                                    <div class="col-md-12">
                                                                        <textarea id="sig-dataUrl" class="form-control" type="hidden" rows="5">Data URL for your signature will go here!</textarea>
                                                                    </div>
                                                                </div>
                                                                <br/>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <img id="sig-image" src="" alt="Your signature will go here!"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div id="myModal" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">

                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Votre Signature</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <canvas id="sig-canvas" width="455" height="160">
                                                                                Please, update your browser and try again.
                                                                            </canvas>
                                                                            <input type="button" id="sig-submitBtn" name ="valider" style="background: #f102f4; color: white;" value="valider la Signature" class="btn" style="background: #747c7c; color: white ">
                                                                                    <input type="button" id="sig-clearBtn" name ="cancel" id="sig-clearBtn" value="Annuler la Signature" class="btn" style="background: #747c7c; color: white "><br><br>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <button type="submit" class="btn btn-primary waves-effect valid" value="submit">Enregistrer<i class="fa fa-check-square-o" style="color:green;"></i> <i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <button type="button" class="btn btn-primary waves-effect clos2">Close<i class="fa fa-times" style="color:red;"></i></button>
                                                                </div>
                                                            <!-- <div class="col-12 col-sm-6">
                                                                    <button type="button"
                                                                class="btn btn-primary waves-effect md-close">Print PDF</button>
                                                                </div>-->
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
    <div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; 2021 <a href="https://www.perfitcom.com" style="color:#36908c;">PERFITCOM SARL</a> , All rights reserved.</p>
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

<script src="{{ URL::asset('js/intltelinput.js') }}"></script>

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

<!-- Date-dropper js -->
<script type="text/javascript" src="{{ URL::asset('files/bower_components/datedropper/datedropper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/pages/advance-elements/custom-picker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>

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

<script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/pages/advance-elements/select2-custom.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/reception.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/prixreserver.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/typeclient.js')}}"></script>

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

    // variable pour le nb d'enfants
    var enfants = 0;

    // variable pour le nb d'adultes
    var adultes = 0;

    // variable pour le prix total
    var prix = 0;

  // addreception pour les verifications et recuperations des donnees
  function AddReception() {
    event.preventDefault(); // empeche un lien d'ouvrir une url
    PNotify.removeAll(); 

    var info = {};
    var errors = [];

    $(".inforeserv")
    .find("input")
    .each(function() {
        $(this).css("border", "1px solid #ccc");
        if($(this).val() == "" || $(this).val() == null) {
            $(this).css("border", "1px solid #f77575");
            errors.push($(this).attr("name")); 
        }
        info[$(this).attr("name")] = $(this).val();
    });

    //reception 4

    $(".reception4")
    .find("input")
    .each(function() {
        $(this).css("border", "1px solid #ccc");
        if($(this).val() == "" || $(this).val() == null) {
            if($(this).attr("name") != "heure_depart") {
                $(this).css("border", "1px solid #f77575");
                errors.push($(this).attr("name")); 
            }
        }
        info[$(this).attr("name")] = $(this).val();
    });

    //reception 3

    $(".reception3")
    .find("input")
    .each(function() {
        $(this).css("border", "1px solid #ccc");
        if($(this).val() == "" || $(this).val() == null) {
            $(this).css("border", "1px solid #f77575");
            errors.push($(this).attr("name")); 
        }
        info[$(this).attr("name")] = $(this).val();
    });

    //reception 2

    $(".reception2")
    .find("input")
    .each(function() {
        $(this).css("border", "1px solid #ccc");
        if($(this).val() == "" || $(this).val() == null) {
            $(this).css("border", "1px solid #f77575");
            errors.push($(this).attr("name")); 
        }
        info[$(this).attr("name")] = $(this).val();
    });

    //reception 1

    $(".reception1")
    .find("input")
    .each(function() {
        $(this).css("border", "1px solid #ccc");
        if($(this).val() == "" || $(this).val() == null) {
            $(this).css("border", "1px solid #f77575");
            errors.push($(this).attr("name")); 
        }
        info[$(this).attr("name")] = $(this).val();
    });

    if($('.client_reception').val() == null) {
        errors.push($('.client_reception').val());
    } else {
        info["client_reception"] = $('.client_reception').val();
    }

    if($(".sexe").val() == null) {
        errors.push($(".sexe").val());
      } else {
        info["sexe"] = $(".sexe").val();
      }

      if($(".typeclient").val() == null) {
        errors.push($(".typeclient").val());
      } else {
        info["type_client"] = $(".typeclient").val();
      }

      if($(".type_piece").val() == null) {
        errors.push($(".type_piece").val());
      } else {
        info["type_piece"] = $(".type_piece").val();
      }

      info["remarque"] = $('#remarque_recept').val(); 

      if($(".chambre_n").val() == null) {
        errors.push($(".chambre_n").val());
      } else {
        info["chambre_n"] = $(".chambre_n").val();
      }

      if($(".country").val() == null) {
        errors.push($(".country").val());
      } else {
        info["pays_residence"] = $(".country").val();
      }

      if($(".hotel_name").val() == null) {
        errors.push($(".hotel_name").val());
      } else {
        info["hotel"] = $(".hotel_name").val();
      }

      /*if($(".rabais").val() == null) {
        errors.push($(".rabais").val());
      } else {
        info["rabais"] = $(".rabais").val();
      }*/

      if($(".modepaiement").val() == null) {
        errors.push($(".modepaiement").val());
      } else {
        info["modepaiement"] = $(".modepaiement").val();
      }

      /*if($(".montant_partenaire").val() == null) {
        errors.push($(".montant_partenaire").val());
      } else {
        info["montant_partenaire"] = $(".montant_partenaire").val();
      } */

      if($(".partenaires").val() == null) {
        errors.push($(".partenaires").val());
      } else {
        info["partenaire"] = $(".partenaires").val();
      }
   // console.log(errors);
    if (errors.length > 0) {
      new PNotify({
        title: 'Champs vides',
        text: 'Erreur remplissez tous vos champs',
        icon: 'icofont icofont-info-square',
        type: 'error',
        delay: 1500
      });
      return;
    }

    console.log(info);

    $("#spinner-login").show();

    $(".valid").addClass("disabled");

  addingReception(info);
  }

  // function pour l'appel ajax

  function addingReception(info) {
    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        data: info,

        type: 'POST',

        url: '{{route('process-ajout-reception')}}',

        success: function(response) {
            $("#spinner-login").hide();
            $("#spinner-login-form").hide();

            $(".valid").removeClass("disabled");
            $("#btn-login-home").removeClass("disabled");

            if(response.status=='success'){
                new PNotify({
                    text: response.message,
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info',
                    delay: 1500
                });
                setTimeout(()=>{
                    window.location.href="{{route('occupation-chambres')}}";
                }, 1000);
            }

            if(response.status=='info'){
                new PNotify({
                    text: response.message,
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info',
                    delay: 1500
                });
            }
        },

        error: function(response) {
            $("#spinner-login").hide();
            $("#btn-login").removeClass("disabled");
                new PNotify({
                    text: 'Error occurred , try again later',
                    icon: 'icofont icofont-info-square',
                    animate_speed: 'fast',
                    type: 'info',
                    delay: 1500
                });
        }

        
    });
  }
  
</script>

<script>
    $(document).ready(function () {

        
$('#btn-submit').attr("disabled", true);

var teleph = document.getElementById("tel");
var iti = intlTelInput(teleph, {
    initialCountry: "cm",
    separateDialCode: "true",
    geoIpLookup: function(success, failure) {
        $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        var countryCode = (resp && resp.country) ? resp.country : "cm";
        success(countryCode);
        });
    },
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js?1590403638580",
// any initialisation options go here
    });
    // alert(iti.getNumber());

    $(".client_reception").change(function() {
        let client_id = $('.client_reception').val();
        if(client_id == "Nouveau") {
            document.getElementById("nomcl").value = "";
            document.getElementById("prenomcl").value = "";
            document.getElementById("dob").value = "";
            document.getElementById("lieu_naissance").value = "";
            document.getElementById("tel").value = "";
            document.getElementById("email").value = "";
            document.getElementById("nationalite").value = "";
            document.getElementById("adresse").value = "";
            document.getElementById("profession").value = "";
           //  document.getElementById("sexe").value = "";
            document.getElementById("num_piece").value = "";
            document.getElementById("delivre_le").value = "";
            document.getElementById("lieu_delivrance").value = "";
            document.getElementById("identifiant_unique").value = "";
            document.getElementById("type_client").value = "";
            document.getElementById("entreprise").value = "";
       } else {
        infoclient(client_id);
       // alert('1'+ client_id);
        // alert('gg');
       }
        
        // alert($('.client_reception').val());
    });

    $('.valid').on('click', function() {
        $('#phone_number').val(iti.getNumber());
        // alert('test');
    });
        
    $('#valider').on('click', function() {
        let  test,diff,diffparse, prix, chambrechoisie, j;
        let chambres = getDonnees();
        test = new Date($('#date_depart').val()) - new Date($('#date_arrivee').val());
        diff = test / (1000 * 60 * 60 * 24);
        diffparse = parseInt(diff);
        // alert(diffparse);

        let rabais = $("#rabais").val();

        // heures
        var timeOfCall = $('#heure_arrivee').val(),
        timeOfResponse = $('#heure_depart').val(),
        hours = timeOfResponse.split(':')[0] - timeOfCall.split(':')[0],
        minutes = timeOfResponse.split(':')[1] - timeOfCall.split(':')[1];

    minutes = minutes.toString().length<2?'0'+minutes:minutes;
    if(minutes<0){ 
        hours--;
        minutes = 60 + minutes;
    }
    hours = hours.toString().length<2?'0'+hours:hours;
//    $('#delay').val(hours + ':' + minutes);

    alert(hours + ':' + minutes);

    /****fin calcul heures */
        chambrechoisie = $('.chambre_n').val();
        for(j=0; j<chambres.length; j++) {
            if(chambres[j].id == chambrechoisie) {
               prix = chambres[j].prix;
               //alert(chambres[j].id);
        // alert($('.chambre_n').val());
       // alert(prix);
            }
        }
        // heures
        /*if($('#heure_arrivee').val() > $('#heure_depart').val()) {
            // $("#total_nuit").val('');
           // $("#prix").val('');
            new PNotify({
                title: 'Heures invalides',
                text: 'L\'heure de depart ne peut pas etre inferieure a l\'heure d\'arrivee',
                icon: 'icofont icofont-info-square',
                type: 'error',
                delay: 1500   
            });
            return;
            }  */
       if($('#date_arrivee').val() > $('#date_depart').val()) {
            $("#total_nuit").val('');
            $("#prix").val('');
            new PNotify({
                title: 'Date de fin invalide',
                text: 'La date de fin ne peut pas etre inferieure a la date de debut',
                icon: 'icofont icofont-info-square',
                type: 'error',
                delay: 1500   
            });
            return;
            }

        //ajout prix
        let prixsieste = 10000;
        if(diffparse > 0) {
            $("#total_nuit").val(diffparse);
            $("#prix").val(( prix - rabais) * diffparse);
            $("#type_sejour").val('Entree en Chambre');
        } else if(diffparse == 0) {
            if(hours < 3) {
                $("#total_nuit").val(0);
                $("#prix").val(prixsieste - rabais);
                $("#type_sejour").val('Day Use');
            }else {
                $("#total_nuit").val(0);
                $("#prix").val(prix/2-rabais);
                $("#type_sejour").val('Demi Nuitee');
            }
        }
        else {
            $("#total_nuit").val('');
            $("#prix").val('');
            new PNotify({
            title: 'Champs vides',
            text: 'Erreur Dates invalides',
            icon: 'icofont icofont-info-square',
            type: 'error',
            delay: 1500
        });
        return;
            $("#total_nuit").val('Erreur');
            $("#prix").val('Erreur');
        }
        
    });
    });

</script>
<script>
    function infoclient(id) {
        let clients = getDonneesClients();
       //  console.log('clients'+ clients);
        var infotype = getDonneesType();
        var i, j;
        var types = [];
       // alert(id);
       if(id == "Nouveau") {
            document.getElementById("nomcl").value = "";
            document.getElementById("prenomcl").value = "";
            document.getElementById("dob").value = "";
            document.getElementById("lieu_naissance").value = "";
            document.getElementById("tel").value = "";
            document.getElementById("email").value = "";
            document.getElementById("nationalite").value = "";
            document.getElementById("adresse").value = "";
            document.getElementById("profession").value = "";
           //  document.getElementById("sexe").value = "";
            document.getElementById("num_piece").value = "";
            document.getElementById("delivre_le").value = "";
            document.getElementById("lieu_delivrance").value = "";
            document.getElementById("identifiant_unique").value = "";
            document.getElementById("type_client").value = "";
            document.getElementById("entreprise").value = "";
       }
        else {
           // let number = clients[id].tel;
           
            // alert(types[1]);
            for(j=0; j<clients.length; j++) {
                if(id == clients[j].id) {
                    let type_id = clients[j].type_client_id;
                    let number = clients[j].tel;
                // alert(type_id);
               // alert("type "+ type_id);
                for(i=0; i<infotype.length; i++) {
                    if(infotype[i].id == type_id ) {
                        // document.getElementById("typeclient").value = "ff";
                        types.push(infotype[i].description);
                    }else {
                        // document.getElementById("typeclient").value = "ffd";
                       // types.push(infotype[i].description);
                    }
                }
               // alert(types);
                document.getElementById("nomcl").value = clients[j].name;
                document.getElementById("prenomcl").value = clients[j].prenom;
                document.getElementById("dob").value = clients[j].date_naissance;
                document.getElementById("lieu_naissance").value = clients[j].lieu_naissance;
                document.getElementById("tel").value = number.substring(4, 14);
                document.getElementById("email").value = clients[j].email;
                document.getElementById("nationalite").value = clients[j].pays;
                document.getElementById("adresse").value = clients[j].adresse;
                document.getElementById("profession").value = clients[j].profession;
                // document.getElementById("sexe").value = clients[id].sexe;
                document.getElementById("num_piece").value = clients[j].no_piece_personnelle;
                document.getElementById("delivre_le").value = clients[j].delivre_le;
                document.getElementById("lieu_delivrance").value = clients[j].lieu_delivrance;
                document.getElementById("identifiant_unique").value = clients[j].identifiant_unique;
                document.getElementById("type_client").value = types[0] ;
                document.getElementById("entreprise").value = clients[j].entreprise ;
                //document.getElementById("typeclient").value = hotel;
                // document.getElementById("signature").value = hotel;
                //  alert($("#type_client").val());
                //  alert($("#identifiant_unique").val());

                // $('#nomfille').val('test');
                }
            }
        }
            // alert('ff'+id);
    }

</script>
<script>
    (function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText = document.getElementById("sig-dataUrl");
  var sigImage = document.getElementById("sig-image");
  var clearBtn = document.getElementById("sig-clearBtn");
  var submitBtn = document.getElementById("sig-submitBtn");
  clearBtn.addEventListener("click", function(e) {
    clearCanvas();
    sigText.innerHTML = "Data URL for your signature will go here!";
    sigImage.setAttribute("src", "");
  }, false);
  submitBtn.addEventListener("click", function(e) {
    var dataUrl = canvas.toDataURL();
    sigText.innerHTML = dataUrl;
    sigImage.setAttribute("src", dataUrl);
  }, false);

})();
</script>
</body>
</html>
