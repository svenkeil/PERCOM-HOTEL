<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|HOTEL PROFILE</title>


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
    
    <!-- css pour rendre le logo petit -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/moncss.css') }}">

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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/jquery.mCustomScrollbar.css') }}"><!-- toujours comme ca en laravel et dans le dossier public-->

    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/sweetalert.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/component.css')}}">

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
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Profil de l'Hotel</h4>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"  style="float: left;">
                                                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Gestion de l'Hotel</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Profil</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!--profile cover start-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid"
                                                            src="../files/assets/images/user-profile/bg-img1.jpg"
                                                            alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    <a href="#" class="profile-image">
                                                                        <img class="user-img img-radius"
                                                                            src="../files/assets/images/user-profile/hotel_profile.jpg"
                                                                            alt="hotel-img">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2>PERCOM - HOTEL</h2>
                                                                            <span class="text-white">Hotel 5 Etoiles</span>
                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--profile cover end-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- tab header start -->
                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist"
                                                        id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab"
                                                                href="#personal" role="tab">Informations Personnelles</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#binfo"
                                                                role="tab">Services de l'Hotel</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#contacts"
                                                                role="tab">Informations Additionnelles</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#review"
                                                                role="tab">Galerie</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- tab header end -->
                                                <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text"> A propos de l'Hotel</h5>
                                                                <button id="edit-btn" type="button"
                                                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                                    <i class="icofont icofont-edit"></i>
                                                                </button>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Nom de la propriete
                                                                                                        </th>
                                                                                                        <td>PERCOM - HOTEL</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Type de propriete</th>
                                                                                                        <td>Hotel</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Nombres de Chambres
                                                                                                        </th>
                                                                                                        <td>40
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Nombre d'Etoiles</th>
                                                                                                        <td>
                                                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                                                            <i class="fa fa-star" style="color: yellow;"></i>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Location
                                                                                                        </th>
                                                                                                        <td>Douala, Cameroun</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Date de creation
                                                                                                        </th>
                                                                                                        <td>20 Octobre 2020</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Devise de base</th>
                                                                                                        <td><a
                                                                                                                href="#!">FCFA</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Email</th>
                                                                                                        <td><a
                                                                                                                href="#!">Demo@example.com</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            contact</th>
                                                                                                        <td>(0237) -
                                                                                                            694255179</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Nombre d'Employes</th>
                                                                                                        <td>15</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Directeur</th>
                                                                                                        <td>M. NOUMO Willy
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Logo
                                                                                                        </th>
                                                                                                        <td><img class="img-fluid" 
                                                                                                            src="../files/assets/images/logoperfitcom.jpg"
                                                                                                            alt="hotel-img"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Site Web</th>
                                                                                                        <td><a
                                                                                                                href="https://www.perfitcom.com">www.perfitcom.com</a>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">
                                                                                                            Fuseau Horaire</th>
                                                                                                        <td>Africa - Douala
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of view-info -->
                                                                <div class="edit-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="icofont icofont-user"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Nom de la propriete">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <select
                                                                                                            id="type-property"
                                                                                                            class="form-control">
                                                                                                            <option
                                                                                                                value="">
                                                                                                                ----
                                                                                                                Type d'Hotel
                                                                                                                ----
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="hotel">
                                                                                                                Hotel
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="auberge">
                                                                                                                Auberge
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="motel">
                                                                                                                Motel
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="appartement">
                                                                                                                Appartement
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="fa fa-bed"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Nombre de chambres">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <select
                                                                                                            id="stars-numbers"
                                                                                                            class="form-control">
                                                                                                            <option
                                                                                                                value="">
                                                                                                                ----
                                                                                                                Nombres d'etoiles
                                                                                                                ----
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="st1">
                                                                                                                1
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="st2">
                                                                                                                2
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="st3">
                                                                                                                3
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="st4">
                                                                                                                4
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="st5">
                                                                                                                5
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="fa fa-location-arrow"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Location">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="f"></i></span>
                                                                                                            <input
                                                                                                                type="date"
                                                                                                                class="form-control"
                                                                                                                placeholder="Date de creation">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <select
                                                                                                            id="devise"
                                                                                                            class="form-control">
                                                                                                            <option
                                                                                                                value="">
                                                                                                                ----
                                                                                                                Devise de base
                                                                                                                ----
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="fcfa">
                                                                                                                FCFA
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="euro">
                                                                                                                Euro
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="dollar">
                                                                                                                Dollar
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-6">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="fa fa-mail-forward"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="E-mail">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="icofont icofont-mobile-phone"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Contact">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="icofont icofont-user"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Nombre d'Employes">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="icofont icofont-user"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Directeur">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="fa fa-flag"></i></span>
                                                                                                            <input
                                                                                                                type="file"
                                                                                                                class="form-control"
                                                                                                                placeholder="Logo">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="input-group">
                                                                                                            <span
                                                                                                                class="input-group-addon"><i
                                                                                                                    class="fa fa-wikipedia-w"></i></span>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                placeholder="Site Web">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <select
                                                                                                            id="devise"
                                                                                                            class="form-control">
                                                                                                            <option
                                                                                                                value="">
                                                                                                                ----
                                                                                                               Fuseau Horaire
                                                                                                                ----
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="fcfa">
                                                                                                                Africa - Douala
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="euro">
                                                                                                                Africa - Libreville
                                                                                                            </option>
                                                                                                            <option
                                                                                                                value="dollar">
                                                                                                                America - Canada
                                                                                                            </option>
                                                                                                        </select>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <!-- <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                                                    <input type="text" class="form-control" placeholder="Twitter Id">
                                                                                </div>
                                                                            </td>
                                                                        </tr> -->
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                                <div class="text-center">
                                                                                    <a href="#!"
                                                                                        class="btn btn-primary waves-effect waves-light m-r-20">Sauvegarder</a>
                                                                                    <a href="#!" id="edit-cancel"
                                                                                        class="btn btn-default waves-effect">Annuler</a>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end of edit info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <!-- end of edit-info -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                       
                                                        <!-- personal card end-->
                                                    </div>
                                                    <!-- tab pane personal end -->
                                                    <!-- tab pane info start -->
                                                    <div class="tab-pane" id="binfo" role="tabpanel">
                                                        <!-- info card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Les Services de l'Hotel</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div
                                                                            class="card b-l-success business-info services m-b-20">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">
                                                                                            Hebergement</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span
                                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="true" role="tooltip">
                                                                                </span>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-edit"></i>
                                                                                        Modifier</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-ui-delete"></i>
                                                                                        Supprimer</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-eye-alt"></i>
                                                                                        Presenter</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail"></p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div
                                                                            class="card b-l-danger business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">
                                                                                            Restauration</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span
                                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="true" role="tooltip">
                                                                                </span>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-edit"></i>
                                                                                        Modifier</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-ui-delete"></i>
                                                                                        Supprimer</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-eye-alt"></i>
                                                                                        Presenter</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail"></p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div
                                                                            class="card b-l-info business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">
                                                                                            Reservation</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span
                                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="true" role="tooltip">
                                                                                </span>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-edit"></i>
                                                                                        Modifier</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-ui-delete"></i>
                                                                                        Supprimer</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-eye-alt"></i>
                                                                                        Presenter</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail"></p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div
                                                                            class="card b-l-warning business-info services">
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail"></p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div
                                                                            class="card b-l-danger business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">Acceuil a l'aeroport
                                                                                            </h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span
                                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="true" role="tooltip">
                                                                                </span>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-edit"></i>
                                                                                        Modifier</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-ui-delete"></i>
                                                                                        Supprimer</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-eye-alt"></i>
                                                                                        Presenter</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail"></p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div
                                                                            class="card b-l-success business-info services">
                                                                            <div class="card-header">
                                                                                <div class="service-header">
                                                                                    <a href="#">
                                                                                        <h5 class="card-header-text">
                                                                                            Tourisme</h5>
                                                                                    </a>
                                                                                </div>
                                                                                <span
                                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                                    data-toggle="dropdown"
                                                                                    aria-haspopup="true"
                                                                                    aria-expanded="true" role="tooltip">
                                                                                </span>
                                                                                <div
                                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-edit"></i>
                                                                                        Modifier</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-ui-delete"></i>
                                                                                        Supprimer</a>
                                                                                    <a class="dropdown-item"
                                                                                        href="#!"><i
                                                                                            class="icofont icofont-eye-alt"></i>
                                                                                        Presenter</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <p class="task-detail"></p>
                                                                                    </div>
                                                                                    <!-- end of col-sm-8 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of card-block -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-header-text">Profit</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div id="main"
                                                                            style="height:300px;width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- info card end -->
                                                    </div>
                                                    <!-- tab pane info end -->
                                                    <!-- tab pane contact start -->
                                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <!-- user contact card left side start -->
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title">Partenaires<span
                                                                                class="f-15"> (8)</span></h4>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="connection-list">
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/mastercard.png"
                                                                                    alt="f-1" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="MasterCard">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/american-express.png"
                                                                                    alt="f-2" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="American Express">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/cirrus.png"
                                                                                    alt="f-3" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="Cirrus">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/paypal.png"
                                                                                    alt="f-4" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="PayPal">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/visa.png"
                                                                                    alt="f-5" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="Visa">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/mestro.png"
                                                                                    alt="f-6" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="Maestro">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/booking.png"
                                                                                    alt="f-7" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="Booking.com">
                                                                            </a>
                                                                            <a href="#"><img
                                                                                    class="img-fluid img-radius"
                                                                                    src="../files/assets/images/partenaires/tripadvisor.png"
                                                                                    alt="f-8" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    data-original-title="Trip Advisor">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- user contact card left side end -->
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <!-- contact data table card start -->
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5 class="card-header-text">Services Supplementaires
                                                                                </h5>
                                                                            </div>
                                                                            <div class="card-block contact-details">
                                                                                <div class="connection-list">
                                                                                   <div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label>  
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/service_chambre.jpg"
                                                                                                alt="f-1" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Service en chambre 24h/24">
                                                                                            </a><span>Service en chambre 24h/24</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                    class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/location_voiture.jpg"
                                                                                                alt="f-2" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Location de voiture">
                                                                                            </a><span>Location de voiture</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                    class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/parking.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Parking">
                                                                                            </a><span>Parking</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/distributeur.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Distributeur automatique">
                                                                                            </a><span>Distributeur automatique</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/vue_sur_la_mer.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Vue sur la mer">
                                                                                            </a><span>Vue sur la mer</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/terrasse.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Terrasse">
                                                                                            </a><span>Terrasse</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/navette_aeroport.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Navette vers l'aeroport">
                                                                                            </a><span>Navette vers l'aeroport</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/salle_de_jeu.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Salle de jeu">
                                                                                            </a><span>Salle de jeu</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/piscine.jpg"
                                                                                                alt="f-3" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Piscine">
                                                                                            </a><span>Piscine</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/fitness.jpg"
                                                                                                alt="f-8" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Salle de Fitness">
                                                                                            </a><span>Salle de Fitness</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/bowling.png"
                                                                                                alt="f-5" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Bowling">
                                                                                            </a><span>Bowling</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/videosurveillance1.jpg"
                                                                                                alt="f-6" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="VideoSurveillance">
                                                                                            </a><span>VideoSurveillance</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div
                                                                                            class="checkbox-fade fade-in-danger">
                                                                                            <label class="check-task">
                                                                                                <input type="checkbox" value="">
                                                                                                <span class="cr">
                                                                                                    <i
                                                                                                        class="cr-icon feather icon-check txt-default"></i>
                                                                                                </span>
                                                                                            </label> 
                                                                                            <a href="#"><img
                                                                                                class="img-fluid img-radius"
                                                                                                src="../files/assets/images/services_supp/photocopieuse.jpg"
                                                                                                alt="f-7" data-toggle="tooltip"
                                                                                                data-placement="top"
                                                                                                data-original-title="Photocopieuse">
                                                                                            </a><span>Photocopieuse</span>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- contact data table card end -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- tab pane contact end -->
                                                    <div class="tab-pane" id="review" role="tabpanel">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Galerie</h5>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <!-- Image grid card start -->
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>Nos Photos</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/pic_1.jpg"
                                                                                            data-lightbox="1" data-title="Chambre classique">
                                                                                            <img src="../files/assets/images/gallery-grid/pic_1.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/pic_2.jpg"
                                                                                            data-lightbox="2" data-title="Chambre Superieure">
                                                                                            <img src="../files/assets/images/gallery-grid/pic_2.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/pic_3.jpg"
                                                                                            data-lightbox="3" data-title="Suite VIP">
                                                                                            <img src="../files/assets/images/gallery-grid/pic_3.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/pic_4.jpg"
                                                                                            data-lightbox="4" data-title="Piscine">
                                                                                            <img src="../files/assets/images/gallery-grid/pic_4.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/d.jpg"
                                                                                            data-lightbox="5" data-title="Notre hotel">
                                                                                            <img src="../files/assets/images/gallery-grid/d.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/indexw.jpg"
                                                                                            data-lightbox="9" data-title="Chambre Hotel Y">
                                                                                            <img src="../files/assets/images/gallery-grid/indexw.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/index3.jpg"
                                                                                            data-lightbox="7" data-title="Notre hotel">
                                                                                            <img src="../files/assets/images/gallery-grid/index3.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-sm-6">
                                                                                <div class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="../files/assets/images/gallery-grid/images.jpg"
                                                                                            data-lightbox="8" data-title="Notre hotel">
                                                                                            <img src="../files/assets/images/gallery-grid/images.jpg"
                                                                                                alt="" class="img-tabs img-thumbnail">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Image grid card end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- tab content end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
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
<!-- user profile.js-->
<script type="text/javascript" src="{{ URL::asset('files/assets/js/nv/user-profile.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/js/nv/echarts/echarts-all.js')}}"></script>
</body>
</html>
