<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|MAIN COURANTE</title>


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
    <!-- Data Table Css -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.html">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/jquery.mCustomScrollbar.css') }}">

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
            background-image: url("{{asset('files/assets/images/occ_chambres.jpg')}}");
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
                                                        <h4>MAIN COURANTE DE RECEPTION</h4>
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
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Main courante de reception</a>
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
                                                                    <th colspan="6"> CHAMBRES INFORMATION </th>
                                                                    <th colspan="5"> RESTAURATION </th>
                                                                    <th colspan="14"> RECEPTION INFORMATION </th>
                                                                    <th colspan="4"> ACTION </th>
                                                                </tr>
                                                                <tr>
                                                                    <th>CHAMBRE</th>
                                                                    <th>NOMBRE DE PERSONNES</th>
                                                                    <th>NOM DU CLIENT</th>
                                                                    <th>DATE DE DEPART</th>
                                                                    <th>PRIX CHAMBRE</th>
                                                                    <th>TOTAL NUITEES</th>
                                                                    <th>PD</th>
                                                                    <th>DEJ</th>
                                                                    <th>DIN</th>
                                                                    <th>BAR</th>
                                                                    <th>TOTAL RESTAU</th>
                                                                    <th>DIVERS</th>
                                                                    <th>STATUT</th>
                                                                    <th>TOTAL JOUR</th>
                                                                    <th>REPORT VEILLE</th>
                                                                    <th>DEBOURS</th>
                                                                    <th>AARHES</th>
                                                                    <th>MONTANT RECU</th>
                                                                    <th>RESTE</th>
                                                                    <th>TOTAL GENERAL</th>
                                                                    <th>ENCAISSE</th>
                                                                    <th>CHEQUE</th>
                                                                    <th>DEBIT</th>
                                                                    <th>SOLDE A REPORTER</th>
                                                                    <th>OBSERVATIONS</th>
                                                                    <th>REGLER</th>
                                                                    <th>DIV</th>
                                                                    <th>DEPART</th>
                                                                    <th>PARTENAIRE</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
`                                                               @foreach($receptions as $reception)  
                                                                    @if($reception['statut']== 'En cours' || $reception['cloturer']== 'Non')
                                                                        <tr>
                                                                            <td>{{ $valeurchambre::find($reception['chambre_id'])['name'] }}</td>
                                                                            <td>{{$reception['nb_personnes']}}</td>
                                                                            <td>{{ $valeurclient::find($reception['client_id'])['name'] }}</td>
                                                                            <td>{{$reception['date_fin']}}</td>
                                                                            <td style="color: #dc3545;font-weight: bold">{{ number_format($valeurchambre::find($reception['chambre_id'])['prix'], 0) }}</td>
                                                                            <td style="color: #dc3545;font-weight: bold">{{$reception['prix_total']}} </td>
                                                                            <td><input type="text" class="form-control" style="width: 7rem; color: #dc3545;font-weight: bold" font-weight: bolder" id="petitdej{{$reception['id']}}" name="petitdej" readonly="true" /> </td>
                                                                            <td><input type="text" class="dej form-control"  style="width: 7rem; color: #dc3545;font-weight: bold"  id="dej{{$reception['id']}}" name="dej" readonly="true"/> </td>
                                                                            <td><input type="text" class="dinn form-control" style="width: 7rem; color: #dc3545;font-weight: bold"   id="dinner{{$reception['id']}}" name="dinner" readonly="true"/> </td>
                                                                            <td><input type="text" class="bar form-control"  style="width: 7rem; color: #dc3545;font-weight: bold" id="bar{{$reception['id']}}" name="bar" readonly="true"/> </td>
                                                                            <td><input type="text" class="totalresto form-control"  style="width: 7rem;color: #dc3545;font-weight: bold" font-weight: bolder" id="totalresto{{$reception['id']}}" name="totalresto" readonly="true"/> </td>
                                                                            <td><input type="text" class="divers form-control"  style="width: 7rem; color: #dc3545;font-weight: bold"  id="divers{{$reception['id']}}" name="divers" value="0" readonly="true"/> </td>
                                                                            <td style="color: #5f4e63;font-weight: bold">{{$reception['statut']}}</td>
                                                                            <td style="color: #dc3545;font-weight: bold">{{$reception['total_jour']}}</td>
                                                                            <td>{{$reception['report_veille']}}</td>
                                                                            <td>{{$reception['debours']}}</td>
                                                                            <td>{{$reception['aarhes']}}</td>
                                                                            <td>{{$reception['total_recu']}}</td>
                                                                            @if(($reception['total_general'] - $reception['total_recu']) < 0)
                                                                                <td>0</td>
                                                                            @else
                                                                                <td>{{$reception['total_general'] - $reception['total_recu']}}</td>
                                                                            @endif
                                                                            <td>
                                                                                <input type="text" class="total_general form-control" style="color: #dc3545;font-weight: bold" id="total_general{{$reception['id']}}" value="0" readonly="true" name="total_general"/>
                                                                                <input type="hidden" class="total_nuitee form-control" id="total_nuitee{{$reception['id']}}" value="{{$reception['prix_total']}}" name="total_nuitee"/>
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td style="color: #dc3545;font-weight: bold">{{$reception['montant_partenaire']}}</td>
                                                                            <td></td>
                                                                            <td><input type="text" class="observations form-control" id="observations{{$reception['id']}}" value=" partenaire {{$reception['montant_partenaire']}}" name="observations"/></td>
                                                                            @if($reception['regler'] == 'Non')
                                                                                <td><a href="{{route('reglement', ['id' => $reception['id']])}}" class="btn btn-primary">Regler</a></td>
                                                                            @else
                                                                            <td style="color: #5f4e63;font-weight: bold">PAYE</td>
                                                                            @endif
                                                                            <td><a href="{{route('divers', ['id' => $reception['id']])}}" class="btn btn-primary">Divers</a></td>
                                                                            @if($reception['statut'] == 'Terminee')
                                                                                <td></td>
                                                                            @else
                                                                                <td><a href="{{route('depart', ['id' => $reception['id']])}}" class="btn btn-primary">Depart</a></td>
                                                                            @endif
                                                                            <td><a href="{{route('partenaire', ['id' => $reception['id']])}}" class="btn btn-primary">Partenaire</a></td>
                                                                        </tr>
                                                                    @endif
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                <th>CHAMBRE</th>
                                                                    <th>NOMBRE DE PERSONNES</th>
                                                                    <th>NOM DU CLIENT</th>
                                                                    <th>DATE DE DEPART</th>
                                                                    <th>PRIX CHAMBRE</th>
                                                                    <th>TOTAL NUITEES</th>
                                                                    <th>PD</th>
                                                                    <th>DEJ</th>
                                                                    <th>DIN</th>
                                                                    <th>BAR</th>
                                                                    <th>TOTAL RESTAU</th>
                                                                    <th>DIVERS</th>
                                                                    <th>STATUT</th>
                                                                    <th>TOTAL JOUR</th>
                                                                    <th>REPORT VEILLE</th>
                                                                    <th>DEBOURS</th>
                                                                    <th>AARHES</th>
                                                                    <th>MONTANT RECU</th>
                                                                    <th>RESTE</th>
                                                                    <th>TOTAL GENERAL</th>
                                                                    <th>ENCAISSE</th>
                                                                    <th>CHEQUE</th>
                                                                    <th>DEBIT</th>
                                                                    <th>SOLDE A REPORTER</th>
                                                                    <th>OBSERVATIONS</th>
                                                                    <th>REGLER</th>
                                                                    <th>DIV</th>
                                                                    <th>DEPART</th>
                                                                    <th>PARTENAIRE</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <br/>
                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-block">
                                                    <form class="recap_reception">
                                                        <div class="md-content">
                                                            <h3 style="background-color: #a99166" align="center">Recapitulatif Reception</h3>
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Arrivees</label>
                                                                            <label class="j-icon-right" for="arrivees"></label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  value="{{ App\Models\Hotel\Reception::count() }}" font-weight: bolder" id="arrivees" name="arrivees"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label> Recouches</label>
                                                                            <label class="j-icon-right" for="recouches">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  font-weight: bolder" id="recouches" name="recouches"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Total chambres occupees</label>
                                                                            <label class="j-icon-right" for="tot_chambres_occupees">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true" value="{{count($chambresoccupees)}}" font-weight: bolder" id="tot_chambres_occupees" name="tot_chambres_occupees"/>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Day use</label>
                                                                            <label class="j-icon-right" for="day_use">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  font-weight: bolder" id="day_use" name="day_use"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>C.A Chambre</label>
                                                                            <label class="j-icon-right" for="ca_chambre">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  font-weight: bolder" id="ca_chambre" name="ca_chambre"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>C.A Day</label>
                                                                            <label class="j-icon-right" for="ca_day">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  font-weight: bolder" id="ca_day" name="ca_day"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>C.A Total</label>
                                                                            <label class="j-icon-right" for="ca_total">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  font-weight: bolder" id="ca_total" name="ca_total"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>H.S</label>
                                                                            <label class="j-icon-right" for="hs">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  font-weight: bolder" id="hs" name="hs"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Delogement</label>
                                                                            <label class="j-icon-right" for="delogement">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary" readonly="true"  value="{{ App\Models\Hotel\Deloger::count() }}" font-weight: bolder" id="delogement" name="delogement"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr/>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-4">
                                                                        <div class="form-group">
                                                                            <label>Taux</label>
                                                                            <label class="j-icon-right" for="taux">  <i class="fa fa-user"></i> </label>
                                                                            <input type="text" class="form-control form-control-primary"  readonly="true" font-weight: bolder" id="taux" name="taux"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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


<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('files/bower_components/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('files/bower_components/modernizr/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/bower_components/modernizr/feature-detects/css-scrollbars.js') }}"></script>


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

<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/restaureception.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/divers.js')}}"></script>


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
    $(document).ready(function() {
        let resto = getDonneesRestau();
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
        

        let prix1 = 0;
        let prix2 = 0;
        let prix3 = 0;
        let prixdivers = 0;
        let prixdiversapi = 0;
       // $("#petitdej17").val(15);
        // alert(resto);
        
        @foreach($restaureceptions as $restauration)
           // console.log({{ $restauration['reception_id'] }});
            @if(count($restaureceptions) == 2)
                @for($i=0; $i<strlen($restauration['menus']); $i=$i+2)
                   // console.log('for');
                @endfor
                console.log('gg');
            @else
                console.log('error');
            @endif
        @endforeach

        // divers
        @foreach($receptions as $reception)
            @foreach($divers as $div)
                @if($div['reception_id'] == $reception['id'])
                    prixdiversapi = parseInt({{$div['prix']}});
                    prixdivers = parseInt(document.getElementById("divers{{$reception['id'] }}").value)
                    document.getElementById("divers{{$reception['id'] }}").value = prixdiversapi+ prixdivers;
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
                @if($restauration['reception_id'] == $reception['id'])
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
                @endif
            @endforeach
            
            // alert('gg');
        @endforeach

        // total general
        @foreach($receptions as $reception)
           document.getElementById("total_general{{$reception['id'] }}").value = 5;
            prix1 = 0;
            prix2 = 0;
            prix3 = 0;

            prix1 = parseInt(document.getElementById("totalresto{{$reception['id'] }}").value);
            prix2 = parseInt(document.getElementById("total_nuitee{{$reception['id'] }}").value);
            prix3 = parseInt(document.getElementById("divers{{$reception['id'] }}").value);
            document.getElementById("total_general{{$reception['id'] }}").value = prix1+ prix2 + prix3;
            console.log('kkfkfkfkf');
        @endforeach
        
    });
</script>
</body>
</html>
