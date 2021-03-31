<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|BOOK</title>


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

        .pcoded-main-container {
            background-image: url("{{asset('files/assets/images/user-profile/fond_profile.jpg')}}");
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
                                                        <h4>RESERVER</h4>
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
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Reserver</a>
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
                                                    <form class="reserver1">
                                                        <div class="md-content">
                                                            <h3 id="modal_header" style="background-color: #b82710">1. Recherche</h3>
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Check - in</label>
                                                                            <label class="j-icon-right" for="date_from">  <i class="icofont icofont-ui-calendar"></i> </label>
                                                                            <div class="input-group">
                                                                               <!-- <input class="debut form-control" id="dropper-default"
                                                                                    type="text" placeholder="Arrivee" name="debut"/> -->
                                                                                <input type="date" class="form-control"   id="debut" name="debut"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group">
                                                                            <label>Check - out</label>
                                                                            <label class="j-icon-right" for="date_to">  <i class="icofont icofont-ui-calendar"></i> </label>
                                                                            <div class="input-group">
                                                                               <!-- <input class="fin form-control" id="dropper-animation"
                                                                                    type="text" placeholder="Depart" name="fin"/> -->
                                                                                <input type="date" class="form-control"   id="fin" name="fin"/>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Chambres</label>
                                                                            <label class="j-icon-right" for="chambres">  <i class="fa fa-bed"></i> </label>
                                                                            <select id="chambresselect" name="chambres "class="chambres form-control form-control-info">
                                                                                <option value="1"> 1 Chambre</option>
                                                                                <option value="2"> 2 Chambres</option>
                                                                                <option value="3"> 3 Chambres</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Hotel</label>
                                                                            <label class="j-icon-right" for="hotel">  <i class="icofont icofont-bank-alt"></i> </label>
                                                                            <select name="hotel" class="hotel form-control form-control-primary">
                                                                                @foreach($hotels as $hotel)
                                                                                    <option value="{{ $hotel['id'] }}">{{ $hotel['name'] }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="chambrediv row" id="chambrediv">
                                                                    
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                        <button type="button" class="btn btn-primary waves-effect affich" value="submit">Afficher les chambres<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
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
                                    <!-- Formulaire selection typechambre chambre -->
                                    <form class="selecttype">
                                        <div class="md-content">
                                            <h3 id="modal_header3" style="background-color: #b82710">2. Selectionnez le type de chambre</h3>
                                            <div>
                                                <div class="row">
                                                <!-- Multiple Open Accordion start -->
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-header-text">Types de chambres</h5>
                                                        </div>
                                                        <div class="card-block accordion-block">
                                                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                                            @foreach($typechambres as $typechambre)
                                                                <div class="accordion-panel">
                                                                    <div class="titre accordion-heading" role="tab"
                                                                        id="headingOne" >
                                                                        <h3 class="card-title accordion-title" style="background-color:#0b0d1014;">
                                                                            <a class="accordion-msg" data-toggle="collapse"
                                                                                data-parent="#accordion" href="#collapseOne{{ $typechambre['id'] }}"
                                                                                aria-expanded="true"
                                                                                aria-controls="collapseOne{{ $typechambre['id'] }}">
                                                                               {{ $typechambre['name'] }} 
                                                                               @foreach($chambres as $cham)
                                                                                @if( $cham['type_chambres_id'] == $typechambre['id'])
                                                                                    <span style="color:red;"> Disponible</span>
                                                                                    @break;
                                                                                @endif
                                                                               @endforeach
                                                                            </a>
                                                                        </h3>
                                                                    </div>
                                                                    <div id="collapseOne{{ $typechambre['id'] }}" class="desc{{ $typechambre['id'] }} panel-collapse collapse in"
                                                                        role="tabpanel" aria-labelledby="headingOne">
                                                                        <div class="accordion-content accordion-desc">
                                                                            <p>
                                                                            <div class="card-block table-border-style">
                                                                                <div class="table-responsive">
                                                                                    <table class="table table-columned">
                                                                                        <thead class="table-info">
                                                                                            <tr>
                                                                                                <th>Type de tarif</th>
                                                                                                <th>Nombre de nuits</th>
                                                                                                <th>Maximum</th>
                                                                                                <th>Chambre(s)</th>
                                                                                                <th>Nb chambres</th>
                                                                                                <th>Prix Total</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Remboursable</td>
                                                                                                <td><input type="text" class="nbnuits form-control"   name="nb_nuits" disabled="disabled"/> </td>
                                                                                                <td>
                                                                                                    @for($i = 0; $i < $typechambre['nb_personnes'] ; $i++)
                                                                                                        <i class="fa fa-user"></i>
                                                                                                    @endfor
                                                                                                </td>
                                                                                                <td>
                                                                                                <select name="select" class="chambres_choisies{{ $typechambre['id'] }} js-example-responsive col-sm-12 primary" multiple="multiple" name="chambre_choisies"> 
                                                                                                    @foreach($chambres as $cham)
                                                                                                        @if( $cham['type_chambres_id'] == $typechambre['id'])
                                                                                                            <option value="{{ $cham['id'] }}">{{ $cham['name'] }}</option>
                                                                                                        @endif
                                                                                                    @endforeach
                                                                                                </select>
                                                                                                </td>
                                                                                                <td><input type="number" class="nb_chambres form-control"   id="nbchambres" name="nb_chambres" disabled="disabled"/></td>
                                                                                                <td><input type="number" class="form-control"   id="prixtot{{ $typechambre['id'] }}" name="prix_total"/></td>                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <hr />
                                                


                                            </div>
                                        </div>
                                    </form>

                                    <!-- Formulaire informations reservations -->
                                    <form class="inforeserv" onsubmit="return AddReservation()">
                                        <div class="md-content">
                                            <h3 id="modal_header4" style="background-color: #b82710">3. Informations de la reservation</h3>
                                            <div>
                                            
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type de reservation</label>
                                                            <select name="typereservation" class="typereservation form-control form-control-primary">
                                                                @foreach($typereservations as $typereservation)
                                                                    <option value="{{ $typereservation['id'] }}">{{ $typereservation['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Mode de paiement</label>
                                                            <select name="modepaiement" class="modepaiement form-control form-control-primary">
                                                                @foreach($modepaiements as $modepaiement)
                                                                    <option value="{{ $modepaiement['id'] }}">{{ $modepaiement['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <hr/>

                                                <div class="row">
                                                    <div class="col-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Client</label>
                                                            <select name="client" class="client_reserv form-control form-control-primary">
                                                                <option value="Nouveau"> Nouveau Client </option>
                                                                @foreach($clients as $client)
                                                                    <option value="{{ $client['id'] }}">{{ $client['name'] }}</option>
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
                                                            <label>Prenom du client</label>
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-ui-user"></i>
                                                            </label>
                                                            <input type="text" class="form-control form-control-primary"   id="prenomcl" name="prenomcl"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nom du client</label>
                                                            <label class="j-icon-right" for="name">
                                                                <i class="icofont icofont-ui-user"></i>
                                                            </label>
                                                            <input type="text" class="form-control form-control-primary"   id="nomcl" name="nomcl"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Telephone</label>
                                                            <label class="j-icon-right" for="phone">
                                                                <i class="icofont icofont-phone"></i>
                                                            </label>
                                                            <input class="form-control" type="tel" id ="tel" name="tel" placeholder="" style="width: 485px;"> 
                                                            <input type="hidden" class="form-control"   id="phone_number" name="phone_number"/>                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Pays</label>
                                                            <select name="pays" class="pays form-control form-control-primary">
                                                                @foreach($pays as $pay)
                                                                    <option value="{{ $pay['id'] }}">{{ $pay['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <label class="j-icon-right" for="email">
                                                                <i class="icofont icofont-envelope"></i>
                                                            </label>
                                                            <input type="text" class="form-control form-control-primary"   id="email" name="email"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Adresse du client</label>
                                                            <input type="text" class="form-control"   id="adresse" name="adresse"/>
                                                        </div>
                                                        <!-- /.form-group -->
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
                                                                <input type="text" class="form-control form-control-primary" id="type_client" name="type_client"/>
                                                            </div>
                                                            <!-- /.form-group -->
                                                        </div>
                                                </div>
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
                                                            <label>Type de Piece</label>
                                                            <select name="type_piece" class="type_piece form-control form-control-primary">
                                                                <option value="Cni"> Carte Nationale d'identite </option>
                                                                <option value="Passeport"> Passeport </option>
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                        <label>Identifiant unique</label>
                                                            <input type="text" class="form-control form-control-primary" id="identifiant_unique" name="identifiant_unique"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
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
                                                            <label>Ville</label>
                                                            <input type="text" class="form-control form-control-primary"   id="ville" name="ville"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Photo de la piece personnelle</label>
                                                            <input type="file" class="form-control"   id="photo_piece_personnelle" name="photo"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type de Piece</label>
                                                            <select name="type_piece" class="type_piece form-control form-control-primary">
                                                                <option value="Cni"> Carte Nationale d'identite </option>
                                                                <option value="Passeport"> Passeport </option>
                                                            </select>
                                                        </div>
                                                         /.form-group 
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Photo de la piece personnelle</label>
                                                            <input type="file" class="form-control"   id="photo_piece_personnelle" name="photo"/>
                                                        </div>
                                                         /.form-group
                                                    </div> 
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Sexe</label>
                                                            <select name="sexe" class="sexe form-control form-control-primary">
                                                                <option value="Masculin"> Masculin </option>
                                                                <option value="Feminin"> Feminin </option>
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type de client</label>
                                                            <select name="typeclient" class="typeclient form-control form-control-primary">
                                                                @foreach($typeclients as $typeclient)
                                                                    <option value="{{ $typeclient['id'] }}">{{ $typeclient['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-12">
                                                        <textarea class="form-control form-control-primary" id="remarque_reserv" name="remarque" rows="3" placeholder="Remarque"></textarea>
                                                    </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                
                                                <div class="resume_reserv col-sm-4">

                                                </div>

                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <button type="submit" class="btn btn-primary waves-effect valid" value="submit">Reserver<i class="fa fa-check-square-o" style="color:green;"></i> <i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
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
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/reserver.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/reception.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/typeclient.js')}}"></script>

<script src="{{ URL::asset('js/intltelinput.js') }}"></script>

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
    // var prixtest = [];
    $(document).ready(function() {

        // client info
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

            $(".client_reserv").change(function() {
                // alert('test');
                let client_id = $('.client_reserv').val();
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
       // prix;
       @foreach($typechambres as $typechambre) 
            if($(".chambres_choisies{{ $typechambre['id'] }}").val().length == 0) {
                document.getElementById("prixtot{{ $typechambre['id'] }}").value = 0;
            } else {
                let i;
                let j;
                
                for(i = 0; i<$(".chambres_choisies{{ $typechambre['id'] }}").val().length; i++){
                    document.getElementById("prixtot{{ $typechambre['id'] }}").value = 0;
                    // console.log("id du prix "+$(".chambres_choisies{{ $typechambre['id'] }}").val()[i]);
                   // console.log("val du prix "+donnees[$(".chambres_choisies{{ $typechambre['id'] }}").val()[i]].prix);
                    // console.log("pk erreurr val du prix "+donnees[3].prix);

                    for(j=0; j<donnees.length; j++) { 
                        if(donnees[j].id == $(".chambres_choisies{{ $typechambre['id'] }}").val()[i] ) {
                            console.log ("bien joue "+donnees[j].id);
                            console.log ("bien joue "+donnees[j]);
                            document.getElementById("prixtot{{ $typechambre['id'] }}").value += parseInt(donnees[j].prix);
                        }
                    }
                   
                    // console.log($(".chambres_choisies{{ $typechambre['id'] }}").val().length);
                    // console.log($(".chambres_choisies{{ $typechambre['id'] }}").val()[0]);
                }
               
                
                //document.getElementById("prixtot{{ $typechambre['id'] }}").value = diffparse * $(".chambres_choisies{{ $typechambre['id'] }}").length *['prix_base_par_nuit'];
            }   
            @endforeach
        // debut 1er document. redy
        /*$('.ajoutch').hide();

        $('.newch').on("click", function() {
            $('.ajoutch').show();
            document.getElementById("modal_header2").innerHTML='Ajout d\'une chambre';
        });

        $('.clos').on("click", function() {
            $('.ajoutch').hide();
        });*/

        
        /*var i;
        $('.chambrediv').hide();
        for(i=0; i<$('.chambres').val(); i++) {
            $('.chambrediv').show();
        }
        
        $('.chambrediv').on("change", function() {
            for(i=0; i<$('.chambres').val(); i++) {
            $('.chambrediv').show();
        }
        });*/
        var i=0;
        $('.chambrediv').hide();
        for(i=0; i<$('.chambres').val(); i++) {
            var k = i +1;
            //$('.chambrediv').show();
            $('.chambrediv').after("<div class='chdiv row'>"+
                                        "<div class='col-12 col-sm-6'>"+
                                       " <div class='form-group'><label>Enfants</label> <label class='j-icon-right'  for='enfant'>   <i class='icofont icofont-woman-in-glasses'></i>  </label>"+
                                           " <select id='enfants"+k+"' name='enfants' class='enfants"+k+" form-control form-control-info'>"+
                                           " <option value='1'> 1 Enfant</option>"+
                                           "  <option value='2'> 2 Enfants</option>"+
                                           "  <option value='3'> 3 Enfants</option>"+
                                           "</select>"+
                                           " </div>"+
                                           "</div>"+
                                           "<div class='col-12 col-sm-6'>"+
                                           "<div class='form-group'>"+
                                           "<label>Adultes</label> <label class='j-icon-right'  for='adultes'>   <i class='icofont icofont-waiter'></i>  </label>"+
                                           " <select id='adultes"+k+"' name='adultes' class='adultes"+k+" form-control form-control-info'>"+
                                            "    <option value='1'> 1 Adulte</option>"+
                                            "   <option value='2'> 2 Adultes</option>"+
                                            "    <option value='3'> 3 Adultes</option>"+
                                            " </select>"+
                                            "</div>"+
                                            " </div>"+
                                            "<label style='color:red;'>Chambre "+k+"</label>"+
                                            " </div>");
        }

        //maximum length
        @foreach($typechambres as $typechambre)
            $(".chambres_choisies{{ $typechambre['id'] }}").select2({
                maximumSelectionLength: $('.chambres').val()
            });
        @endforeach
        
        $('#chambresselect').change(function() {
            $('.chdiv').remove();
            $('.res_reserv').remove(); // pour le resume
            for(i=0; i<$('.chambres').val(); i++) {
                var j = i +1;
            //$('.chambrediv').show();
            $('.chambrediv').before("<div class='chdiv row'>"+
                                        "<div class='col-12 col-sm-6'>"+
                                       " <div class='form-group'><label>Enfants</label> <label class='j-icon-right'  for='enfants'>   <i class='icofont icofont-woman-in-glasses'></i>  </label>"+
                                           " <select id='enfants"+j+"' name='enfants' class='enfants"+j+" form-control form-control-info'>"+
                                           " <option value='1'> 1 Enfant</option>"+
                                           "  <option value='2'> 2 Enfants</option>"+
                                           "  <option value='3'> 3 Enfants</option>"+
                                           "</select>"+
                                           " </div>"+
                                           "</div>"+
                                           "<div class='col-12 col-sm-6'>"+
                                           "<div class='form-group'>"+
                                           "<label>Adultes</label>  <label class='j-icon-right'  for='adultes'>   <i class='icofont icofont-waiter'></i>  </label>"+
                                           " <select id='adultes"+j+"' name='adultes' class='adultes"+j+" form-control form-control-info'>"+
                                            "    <option value='1'> 1 Adulte</option>"+
                                            "   <option value='2'> 2 Adultes</option>"+
                                            "    <option value='3'> 3 Adultes</option>"+
                                            " </select>"+
                                            "</div>"+
                                            " </div>"+
                                            "<label style='color:red;'>Chambre "+j+"</label>"+
                                            " </div>");

                                            
        }

        // maximumselect
        @foreach($typechambres as $typechambre)
            $(".chambres_choisies{{ $typechambre['id'] }}").select2({
                maximumSelectionLength: $('.chambres').val()
            });

            // tout supprimer
            $(".chambres_choisies{{ $typechambre['id'] }}").val([]);
        @endforeach

        $('.selecttype').hide();
        $('.inforeserv').hide();

        });


        // au changement des dates

        $('#debut').change(function() {
            $('.selecttype').hide();
            $('.inforeserv').hide();
        });


        $('#fin').change(function() {
            $('.selecttype').hide();
            $('.inforeserv').hide();
        });
        
        // debut 2e document . ready
        $('.selecttype').hide();
        $('.inforeserv').hide();


        // pour l'affihcage des 2 autres div
        $('.affich').on("click", function() {
            var errors = [];

            let test;
            let diff;
            let diffparse;
            $('.selecttype').show();
            $('.inforeserv').show();
            test = new Date($('#fin').val()) - new Date($('#debut').val());
            diff = test / (1000 * 60 * 60 * 24);
            diffparse = parseInt(diff);
            $(".nbnuits").val(diffparse);

            let date_debut = new Date($('#debut').val());
            let date_fin = new Date($('#fin').val());
            /*restriction div 1 */
            if($('#fin').val() == "") {
                errors.push("date fin");
            }

            if($('#debut').val() == "") {
                errors.push("date fin");
            }

           /* if(date_debut.getTime() == date_fin.getTime()) {
                $('.selecttype').hide();
                $('.inforeserv').hide();
                new PNotify({
                    title: 'Date de fin invalide',
                    text: 'La date de fin ne peut pas etre egale a la date de debut',
                    icon: 'icofont icofont-info-square',
                    type: 'error'   
                });
                return;
            }*/

            if($('#fin').val() < $('#debut').val()) {
                $('.selecttype').hide();
                $('.inforeserv').hide();
                new PNotify({
                    title: 'Date de fin invalide',
                    text: 'La date de fin ne peut pas etre inferieure a la date de debut',
                    icon: 'icofont icofont-info-square',
                    type: 'error'   
                });
                return;
            }

            if(diffparse < 0) {
                $('.selecttype').hide();
                $('.inforeserv').hide();
                new PNotify({
                    title: 'Date de fin invalide',
                    text: 'La date de fin ne peut pas etre inferieure a la date de debut',
                    icon: 'icofont icofont-info-square',
                    type: 'error'   
                });
                return;
            }

            if(errors.length > 0) {
                $('.selecttype').hide();
                $('.inforeserv').hide();
                new PNotify({
                    title: 'Champs Vides',
                    text: 'Erreur selectionnez les dates d\'entree et de sortie',
                    icon: 'icofont icofont-info-square',
                    type: 'error'   
                });
                return;
            }
            
            

           /* @foreach($typechambres as $typechambre) 
            if($(".chambres_choisies{{ $typechambre['id'] }}").val().length == 0) {
                document.getElementById("prixtot{{ $typechambre['id'] }}").value = 10;
            } else {
                let i;
                let prix = 0;
               
                document.getElementById("prixtot{{ $typechambre['id'] }}").value = 15;
                //document.getElementById("prixtot{{ $typechambre['id'] }}").value = diffparse * $(".chambres_choisies{{ $typechambre['id'] }}").length *['prix_base_par_nuit'];
            }   
            @endforeach */

            // lorsque il choisi une chambre pour chaque type pour donner la valeur au prix total
            @foreach($typechambres as $typechambre)
                $(".chambres_choisies{{ $typechambre['id'] }}").change(function() {
                    if($(".chambres_choisies{{ $typechambre['id'] }}").val().length == 0) {
                        document.getElementById("prixtot{{ $typechambre['id'] }}").value = 0;
                    } else {
                        let i;
                        let j;
                            document.getElementById("prixtot{{ $typechambre['id'] }}").value = 0;
                        for(i = 0; i<$(".chambres_choisies{{ $typechambre['id'] }}").val().length; i++){
                            
                            // console.log("id du prix "+$(".chambres_choisies{{ $typechambre['id'] }}").val()[i]);
                        // console.log("val du prix "+donnees[$(".chambres_choisies{{ $typechambre['id'] }}").val()[i]].prix);
                            // console.log("pk erreurr val du prix "+donnees[3].prix);

                            for(j=0; j<donnees.length; j++) { 
                                if(donnees[j].id == $(".chambres_choisies{{ $typechambre['id'] }}").val()[i] ) {
                                    // console.log ("bien joue "+donnees[j].id);
                                    // console.log ("bien joue "+donnees[j]);
                                    let prixapi = parseFloat(donnees[j].prix);
                                    let nbnuits = parseInt($(".nbnuits").val());
                                    if(nbnuits == 0) {
                                        nbnuits = 1;
                                    }
                                    let nbchambres = parseInt($(".nb_chambres").val());
                                    let prix = parseFloat(document.getElementById("prixtot{{ $typechambre['id'] }}").value);
                                    document.getElementById("prixtot{{ $typechambre['id'] }}").value = (prixapi + prix) * nbnuits * nbchambres;
                                }
                            }
                        
                            // console.log($(".chambres_choisies{{ $typechambre['id'] }}").val().length);
                            // console.log($(".chambres_choisies{{ $typechambre['id'] }}").val()[0]);
                        }
                    
                        
                        //document.getElementById("prixtot{{ $typechambre['id'] }}").value = diffparse * $(".chambres_choisies{{ $typechambre['id'] }}").length *['prix_base_par_nuit'];
            }     
                });
            @endforeach
            
            // pour afficher le ddiv resume_reserv
            @foreach($typechambres as $typechambre)
            $(".chambres_choisies{{ $typechambre['id'] }}").change(function() {
                var prixresume = 0;

                // prix
                @foreach($typechambres as $typechambre)
                
                    prixresume += parseInt(document.getElementById("prixtot{{ $typechambre['id'] }}").value)
                @endforeach

                $('.res_reserv').remove();
                $(".resume_reserv").append("<div class='res_reserv card bg-c-blue text-white widget-visitor-card' style='height:6rem; left:20rem;'>"+
                                        "<div class='card-block-small text-center'>"+
                                        "<h6>Reservez "+$('.chambres').val()+" chambres pour</h6>"+
                                        "<h2>"+prixresume+"</h2>"+
                                        "<i class='feather icon-file-text'></i>"+
                                        "</div>");
            });
            @endforeach

            // nombre de chmbres
            $('.nb_chambres').val($('.chambres').val());
        });

        $('.clos2').on("click", function() {
            $('.selecttype').hide();
            $('.inforeserv').hide();

            let test = $(".chambres_choisies1").val()[0];
            let donnees = getDonnees();
            console.log(donnees);
            let dd = parseInt(test);
            
            //var d = '0';
            //alert($(".chambres_choisies1").val()[0]);
           // alert($(".chambres_choisies1").val()[1]);
            
            
           // alert("length "+$(".chambres_choisies1").val().length);

            // appel ajax

           /* @foreach($typechambres as $typechambre) 
            if($(".chambres_choisies{{ $typechambre['id'] }}").val().length == 0) {
                document.getElementById("prixtot{{ $typechambre['id'] }}").value = 0;
            } else {
                let i;
                let j;
                
                for(i = 0; i<$(".chambres_choisies{{ $typechambre['id'] }}").val().length; i++){
                    document.getElementById("prixtot{{ $typechambre['id'] }}").value = 0;
                    // console.log("id du prix "+$(".chambres_choisies{{ $typechambre['id'] }}").val()[i]);
                   // console.log("val du prix "+donnees[$(".chambres_choisies{{ $typechambre['id'] }}").val()[i]].prix);
                    // console.log("pk erreurr val du prix "+donnees[3].prix);

                    for(j=0; j<donnees.length; j++) { 
                        if(donnees[j].id == $(".chambres_choisies{{ $typechambre['id'] }}").val()[i] ) {
                            console.log ("bien joue "+donnees[j].id);
                            console.log ("bien joue "+donnees[j]);
                            document.getElementById("prixtot{{ $typechambre['id'] }}").value += parseInt(donnees[j].prix);
                        }
                    }
                   
                    // console.log($(".chambres_choisies{{ $typechambre['id'] }}").val().length);
                    // console.log($(".chambres_choisies{{ $typechambre['id'] }}").val()[0]);
                }
               
                
                //document.getElementById("prixtot{{ $typechambre['id'] }}").value = diffparse * $(".chambres_choisies{{ $typechambre['id'] }}").length *['prix_base_par_nuit'];
            }   
            @endforeach*/
            /* alert($(".chambres_choisies2").val());  pour les valeurs de l'array du select2
            alert($(".chambres_choisies2").val().length); pour la longueur de l'array du select2 */
        });

      /* $('.debut').dateDropper({
            format: 'd-m-Y'
        });

        $('.fin').dateDropper({
            format: 'd-m-Y'
        });*/

        

            $('.valid').on('click', function() {
                $('#phone_number').val(iti.getNumber());
                // alert('test');
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
               //  alert(types);
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

    // variable pour le nb d'enfants
    var enfants = 0;

    // variable pour le nb d'adultes
    var adultes = 0;

    // variable pour le prix total
    var prix = 0;

  // addreservation pour les verifications et recuperations des donnees
  function AddReservation() {
    event.preventDefault(); // empeche un lien d'ouvrir une url
    PNotify.removeAll(); 

    var info = {};
    var errors = [];

    $(".reserver1")
    .find("input")
    .each(function() {
        $(this).css("border", "1px solid #ccc");
        if($(this).val() == "" || $(this).val() == null) {
            $(this).css("border", "1px solid #f77575");
            errors.push($(this).attr("name")); 
        }
        info[$(this).attr("name")] = $(this).val();
    });

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

    // pays
    if($('.pays').val() == null) {
        errors.push($('.pays').val());
    } else {
        info["pays"] = $('.pays').val();
    }
    
    // typereservation
    if($('.typereservation').val() == null) {
        errors.push($('.typereservation').val());
    } else {
        info["typereservation"] = $('.typereservation').val();
    }
    
    // hotel
    if($('.hotel').val() == null) {
        errors.push($('.hotel').val());
    } else {
        info["hotel"] = $('.hotel').val();
    }

    // modepaiement
    if($('.modepaiement').val() == null) {
        errors.push($('.modepaiement').val());
    } else {
        info["modepaiement"] = $('.modepaiement').val();
    }
    
    // sexe
    if($('.sexe').val() == null) {
        errors.push($('.sexe').val());
    } else {
        info["sexe"] = $('.sexe').val();
    }

    // type de piece
    if($('.type_piece').val() == null) {
        errors.push($('.type_piece').val());
    } else {
        info["type_piece"] = $('.type_piece').val();
    }

    // type de client
    if($('.typeclient').val() == null) {
        errors.push($('.typeclient').val());
    } else {
        info["typeclient"] = $('.typeclient').val();
    }

    info["remarque"] = $('#remarque_reserv').val();
    
    /*//debut
    info["debut"] = $('.debut').val();

    //fin
    info["fin"] = $('.fin').val();*/
    
    //nb_chambres
    info["nb_chambres"] = $('.chambres').val();

    //nb_nuits
    info["nb_nuits"] =  $(".nbnuits").val();

    //client id
    info["client"] =  $(".client_reserv").val();

    /* user id
    info["user"] =  Auth::user()->pseudo; remplacer par id */

    // nb enfants
    var i;
    enfants = 0;
    for(i=1; i<=$('.chambres').val(); i++) {
        enfants += parseInt($('.enfants' +i ).val());
    }
    info["enfants"] =  enfants;

    // nb enfants
    var j;
    adultes = 0;

    for(j=1; j<=$('.chambres').val(); j++) {
        adultes += parseInt($('.adultes' +j).val());
    }
    info["adultes"] =  adultes;

    // verification pour les chambres choisies (le nombre)

    var verif_nb_chambres = 0;
    @foreach($typechambres as $typechambre)
        // tabchambres.push($(".chambres_choisies{{ $typechambre['id'] }}").val())
        verif_nb_chambres += $(".chambres_choisies{{ $typechambre['id'] }}").val().length;
    @endforeach

    if(verif_nb_chambres == $('.chambres').val()) {
        // variable les chambres en fonctions des types
            var tabchambres = [];
        @foreach($typechambres as $typechambre)
            if($(".chambres_choisies{{ $typechambre['id'] }}").val().length != 0) {
                tabchambres.push("{{ $typechambre['id'] }}");
                tabchambres.push($(".chambres_choisies{{ $typechambre['id'] }}").val());
            }
            
        @endforeach

        info["chambres"] = tabchambres;
    } else if(verif_nb_chambres > $('.chambres').val()){
        new PNotify({
        title: 'Alerte',
        text: 'Le nombre de chambre choisies par type est superieur au nombre de chambre defini en debut du formule. Veuillez revoir les chambres selectionnes en respectant le nombre de chambres choisies',
        icon: 'icofont icofont-info-square',
        type: 'error'
      });
      return;
    } else {
        new PNotify({
        title: 'Alerte',
        text: 'Le nombre de chambre choisies par type est inferieur au nombre de chambre defini en debut du formule. Veuillez revoir les chambres selectionnes en respectant le nombre de chambres choisies',
        icon: 'icofont icofont-info-square',
        type: 'error'
      });
      return;
    }
    
    // verifier nbpersonnes dans typechambre
    let nb = adultes + enfants;
    alert(nb);
    @foreach($typechambres as $typechambre)
        if($(".chambres_choisies{{ $typechambre['id'] }}").val().length != 0) {
            if(nb > {{ $typechambre['nb_personnes'] }}) {
                new PNotify({
                title: 'Alerte',
                text: 'Ce type de chambres ne peut pas contenir le nombre de personnes souhaites',
                icon: 'icofont icofont-info-square',
                type: 'error'
            });
            return;
            }
        }
    @endforeach

    // prix
    prix = 0;
    @foreach($typechambres as $typechambre)
        prix += parseInt(document.getElementById("prixtot{{ $typechambre['id'] }}").value)
    @endforeach
    info["prix_total"] = prix;

    if($('.client_reserv').val() == null) {
        errors.push($('.client_reserv').val());
    } else {
        info["client_reserv"] = $('.client_reserv').val();
    }

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

     addingReservation(info);
  }

  // function pour l'appel ajax

  function addingReservation(info) {
    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        data: info,

        type: 'POST',

        url: '{{route('process-ajout-reservation')}}',

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
                    type: 'info'
                });
                setTimeout(()=>{
                    window.location.href="{{route('reservation-gestion')}}";
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

        error: function(response) {
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
</body>
</html>
