<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|CUSTOMER LIST</title>


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
            background-image: url("{{asset('files/assets/images/liste_chambres_fond.jpg')}}");
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
                                                        <h4>LISTE DES CLIENTS</h4>
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
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Liste Clients</a>
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
                                                                    <th colspan="17">CLIENT INFORMATION</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>NOM DU CLIENT</th>
                                                                    <th>EMAIL</th>
                                                                    <th>PRENOM</th>
                                                                    <th>ADRESSE</th>
                                                                    <th>PROFESSION</th>
                                                                    <th>TELEPHONE</th>
                                                                    <th>SEXE</th>
                                                                    <th>NUMERO PIECE</th>
                                                                    <th>DELIVRE LE</th>
                                                                    <th>LIEU DE DELIVRANCE</th>
                                                                    <th>TYPE PIECE</th>
                                                                    <th>TYPE CLIENT</th>
                                                                    <th>NATIONALITE</th>
                                                                    <th>IDENTIFIANT UNIQUE</th>
                                                                    <th>PAYS DE RESIDENCE</th>
                                                                    <th>HOTEL</th>
                                                                    <th>DATE DE CREATION</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($clients as $client)
                                                                <tr>
                                                                    <td>{{ $client['name']}}</td>
                                                                    <td>{{ $client['email']}}</td>
                                                                    <td>{{ $client['prenom']}}</td>
                                                                    <td>{{ $client['adresse']}}</td>
                                                                    <td>{{ $client['profession']}}</td>
                                                                    <td>{{ $client['tel']}}</td>
                                                                    <td>{{ $client['sexe']}}</td>
                                                                    <td>{{ $client['no_piece_personnelle']}}</td>
                                                                    <td>{{ $client['delivre_le']}}</td>
                                                                    <td>{{ $client['lieu_delivrance']}}</td>
                                                                    <td>{{ $client['type_piece']}}</td>
                                                                    <td>{{ $valeurtypcl::find($client['type_client_id'])['name'] }}</td>
                                                                    <td>{{ $client['pays']}}</td>
                                                                    <td>{{ $client['identifiant_unique']}}</td>
                                                                    <td>{{ $client['pays_residence']}}</td>
                                                                    <td>{{ $valeurhot::find($client['hotel_id'])['name'] }}</td>
                                                                    <td>{{ $client['created_at']}}</td>
                                                            
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>NOM DU CLIENT</th>
                                                                    <th>EMAIL</th>
                                                                    <th>PRENOM</th>
                                                                    <th>ADRESSE</th>
                                                                    <th>PROFESSION</th>
                                                                    <th>TELEPHONE</th>
                                                                    <th>SEXE</th>
                                                                    <th>NUMERO PIECE</th>
                                                                    <th>DELIVRE LE</th>
                                                                    <th>LIEU DE DELIVRANCE</th>
                                                                    <th>TYPE PIECE</th>
                                                                    <th>TYPE CLIENT</th>
                                                                    <th>NATIONALITE</th>
                                                                    <th>IDENTIFIANT UNIQUE</th>
                                                                    <th>PAYS DE RESIDENCE</th>
                                                                    <th>HOTEL</th>
                                                                    <th>DATE DE CREATION</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <button class="newcust btn btn-primary btn-outline-primary waves-effect md-trigger" ><i class="fa fa-file"></i>Nouveau</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- editable-table.thml pour gerer les suppressions du table -->

                                    <!-- Formulaire previsualisation client -->
                                    <div class="md-modal md-effect-13" id="modal-13">
                                        <div class="md-content">
                                            <h3 id="modal_header" style="background-color: #b82710"></h3>
                                            <div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nom du client</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="nomclient" name="nom_client"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" disabled="disabled" font-weight: bolder" id="email" name="email"/>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Prenom du client</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="prenomclient" name="prenom_client"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Adresse</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="adresse" name="adresse"/>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label></label>Profession</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="profession" name="profession"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Numero de telephone</label>
                                                            <input type="tel" class="form-control" disabled="disabled" font-weight: bolder" id="tel"  name="tel" />
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Sexe</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="sexe" name="sexe"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Numero de piece</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="numpiece" name="num_piece"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Delivree le</label>
                                                            <input type="date" class="form-control" disabled="disabled" font-weight: bolder" id="delivre_le" name="delivre_le"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Lieu de delivrance</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="lieu_delivrance" name="lieu_delivrance"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type de client</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="typeclient" name="type_client"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Pays</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="pays" name="pays"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Identifiant unique</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="identifiant_unique" name="identifiant_unique"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Pays de residence</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="pays_residence" name="pays_residence"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type de piece</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="typepiece" name="type_piece"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Hotel</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="hotel" name="hotel"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Entreprise</label>
                                                            <input type="text" class="form-control" disabled="disabled" font-weight: bolder" id="entreprise" name="entreprise"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <button type="button"
                                                    class="btn btn-primary waves-effect md-close">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Formulaire ajout client -->
                                    <form class="ajoutcust" onsubmit="return AddCustomer()">
                                        <div class="md-content">
                                            <h3 id="modal_header2" style="background-color: #b82710"></h3>
                                            <div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Nom du client</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="nom_client" name="nom_client"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control"  font-weight: bolder" id="email" name="email"/>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Prenom du client</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="prenom" name="prenom"/>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Adresse</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="adresse" name="adresse"/>
                                                        </div>
                                                <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Profession</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="profession" name="profession"/>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
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
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Date de naissance</label>
                                                            <input type="date" class="form-control"  font-weight: bolder" id="date_naissance" name="date_naissance"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Lieu de naissance</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="lieu_naissance" name="lieu_naissance"/>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Telephone</label>
                                                            <input type="tel" class="form-control"  font-weight: bolder" id="telephone" name="telephone" style="width: 485px;"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Sexe</label>
                                                            <select name="sexe" class="sexe form-control form-control-primary">
                                                                <option value="Masculin"> Masculin </option>
                                                                <option value="Feminin">  Feminin </option>
                                                            </select>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Delivree le</label>
                                                            <input type="date" class="form-control"  font-weight: bolder" id="delivre_le" name="delivre_le"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Lieu de delivrance</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="lieu_delivrance" name="lieu_delivrance"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
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
                                                        <!-- /.col -->
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Type de client</label>
                                                            <select name="type_cl" class="type_cl form-control form-control-primary">
                                                                @foreach($typeclients as $tpclient)
                                                                    <option value="{{ $tpclient['id'] }}">{{ $tpclient['name'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    <!-- /.form-group -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Pays</label>
                                                            <select name="pays" class="pays form-control form-control-primary">
                                                                <option value="Cameroun"> Cameroun </option>
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
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Numero de piece</label>
                                                            <input type="text" class="form-control"  font-weight: bolder" id="num_piece" name="num_piece"/>
                                                            <input type="hidden" class="form-control"  font-weight: bolder" id="phone_number" name="phone_number"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Pays de residence</label>
                                                            <select name="pays_residence" class="pays_residence form-control form-control-primary">
                                                                <option value="Cameroun"> Cameroun </option>
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
                                                        <!-- /.form-group -->
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Entreprise</label>
                                                            <input type="text" class="form-control" font-weight: bolder" id="entreprise" name="entreprise"/>
                                                        </div>
                                                        <!-- /.form-group -->
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                <div class="col-12 col-sm-6">
                                                        <button type="submit" class="btn btn-primary waves-effect valid" value="submit">Valider<i class="fas fa-check" style="color:green;"></i> <i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <button type="button" class="btn btn-primary waves-effect clos">Close<i class="fa fa-times" style="color:red;"></i></button>
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
  function AddCustomer() {
    event.preventDefault();
    PNotify.removeAll();
    var info = {};
    var errors = [];
      $(".ajoutcust")
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
        info["hotel"] = $(".hotel_name").val();
      }

      if($(".pays").val() == null) {
        errors.push($(".pays").val());
      } else {
        info["pays"] = $(".pays").val();
      }

      if($(".pays_residence").val() == null) {
        errors.push($(".pays_residence").val());
      } else {
        info["pays_residence"] = $(".pays_residence").val();
      }

      if($(".sexe").val() == null) {
        errors.push($(".sexe").val());
      } else {
        info["sexe"] = $(".sexe").val();
      }

      if($(".type_cl").val() == null) {
        errors.push($(".type_cl").val());
      } else {
        info["type_client"] = $(".type_cl").val();
      }

      if($(".type_piece").val() == null) {
        errors.push($(".type_piece").val());
      } else {
        info["type_piece"] = $(".type_piece").val();
      }
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
    addingCustomer(info);     
  }

  // login pour la connexion
  function addingCustomer(info) {
    $.ajax({

        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },

        type:'POST',

        data:info,

        url: '{{route('process-ajout-customer')}}', //process-user-register est  le fichier php excute cote serveur

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
                    window.location.href="{{route('customer-list')}}";
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
    function convert(val) {
        const euro = new Intl.NumberFormat();
         return euro.format(val); 
    }

    function previsualiser(id,name,code,prix,statut,description,type,qualite,formule,hotel)
    {
        $("#modal-13").addClass("md-show"); //innerHtml pout changer le contenu d'un selecteur ex p
        document.getElementById("modal_header").innerHTML='Information sur la <i class="fa fa-bed"></i> '+name;
        document.getElementById("nomchambre").value = name;
        document.getElementById("codechambre").value = code;
        document.getElementById("prix").value = prix;
        document.getElementById("statut").value = statut;
        document.getElementById("description").value = description;
        document.getElementById("typechambre").value = type;
        document.getElementById("qualitechambre").value = qualite;
        document.getElementById("formulechambre").value = formule;
        document.getElementById("hotel").value = hotel;
    }
</script>

<script>
    $(document).ready(function () {

$('#btn-submit').attr("disabled", true);

var teleph = document.getElementById("telephone");
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

    $('.valid').on('click', function() {
        $('#phone_number').val(iti.getNumber());
        // alert('test');
    });

        $('.ajoutcust').hide();

        $('.newcust').on("click", function() {
            $('.ajoutcust').show();
            document.getElementById("modal_header2").innerHTML='Ajout d\'un client';
        });

        $('.clos').on("click", function() {
            $('.ajoutcust').hide();
            
        });
    });



</script>
</body>
</html>
