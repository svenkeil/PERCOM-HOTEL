<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PERCOM-HOTEL|SORTIES</title>


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
                                                        <h4>SORTIES</h4></h4>
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
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="#!">Sorties par jour</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-block">
                                                    <form class="sorties_clients">
                                                        <div class="md-content">
                                                            <h3 style="background-color: #a99166" align="center">Sorties par jour</h3>
                                                            <div>
                                                                <div class="row" style="margin-bottom: 2rem;">
                                                                    <div class="col-12 col-sm-3">
                                                                            <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="lundi">LUNDI</button>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3">
                                                                            <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="mardi">MARDI</button>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3">
                                                                            <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="mercredi">MERCREDI</button>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3">
                                                                            <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="jeudi">JEUDI</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12 col-sm-3">
                                                                        <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="vendredi">VENDREDI</button>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3">
                                                                        <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="samedi">SAMEDI</button>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3">
                                                                        <button type="button" class="btn btn-primary btn-lg" style="margin-right:2rem;" id="dimanche">DIMANCHE</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <hr/>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />-->
                                    <div class="page-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Date de sortie</label>
                                                                <label class="j-icon-right" for="date_sortie"></label>
                                                                <input type="date" class="form-control form-control-primary"  id="date_sortie" name="date_sortie"/>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Prix total</label>
                                                                <input type="text" class="form-control form-control-primary" readonly="true" id="prix" name="prix"/>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <!--<div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Reglement</label>
                                                                <input type="text" class="form-control form-control-primary"  id="reglement" readonly="true" name="reglement"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Montant verse</label>
                                                                <input type="text" class="form-control form-control-primary" readonly="true" id="montant_verse" name="montant_verse"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Reste </label>
                                                                <input type="text" class="form-control form-control-primary"  id="reste" readonly="true" name="reste"/>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="table-responsive dt-responsive">
                                                        <table id="complex-header"
                                                            class="table table-striped table-bordered nowrap"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr style="background-color: #b82710; text-align: center">
                                                                    <th colspan="5">CHAMBRES INFORMATION</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>CHAMBRE</th>
                                                                    <th>DATE DE SORTIE</th>
                                                                    <!-- <th>NOM DU CLIENT</th>
                                                                    <th>NOMBRE DE PERSONNES</th>
                                                                    <th>ARRIVEE</th>
                                                                    <th>PRIX TOTAL</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                     <th>CHAMBRE</th>
                                                                     <th>DATE DE SORTIE</th>
                                                                   <!-- <th>NOM DU CLIENT</th>
                                                                    <th>NOMBRE DE PERSONNES</th>
                                                                    <th>ARRIVEE</th>
                                                                    <th>PRIX TOTAL</th>   -->                                                             </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="table-responsive dt-responsive">
                                                        <table id="complex-header2"
                                                            class="table table-striped table-bordered nowrap"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr style="background-color: #b82710; text-align: center">
                                                                    <th colspan="5">PAYMENTS INFORMATION</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>REGLEMENT</th>
                                                                    <th>MONTANT VERSE</th>
                                                                    <th>RESTE</th>
                                                                    <!-- <th>NOM DU CLIENT</th>
                                                                    <th>NOMBRE DE PERSONNES</th>
                                                                    <th>ARRIVEE</th>
                                                                    <th>PRIX TOTAL</th> -->
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                     <th>REGLEMENT</th>
                                                                    <th>MONTANT VERSE</th>
                                                                    <th>RESTE</th>
                                                                   <!-- <th>NOM DU CLIENT</th>
                                                                    <th>NOMBRE DE PERSONNES</th>
                                                                    <th>ARRIVEE</th>
                                                                    <th>PRIX TOTAL</th>   -->                                                             </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    
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
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/sorties.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('files/assets/supplement/chambre.js') }}"></script>

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
   /* var today = new Date();
    var day = today.getDay();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(); 

    $(document).ready(function() {
       // alert(date);
       // alert(today.getDay());

       $("#lundi").on('click', function() {
            alert('test');
       });
    });*/
    
    $(document).ready(function() {
        $("#date_sortie").change(function() {
            let info = getDonneesRecep();
            let infoch = getDonneesChambre();
            let j, k ,m , n; 
            let prix = 0; 
            let montant_verse = 0; 
            let reste = 0; 
            var chambres = [];
            var reception = [];
           //  alert(info);
            var date = new Date($("#date_sortie").val());
            for(j=0; j<info.length; j++) {
                var newdate = new Date(info[j].date_fin);
                // console.log(newdate);
                if(newdate.getTime() == date.getTime() && info[j].statut == 'En cours') {

                   // alert(info[j].id);
                for(k=0; k<infoch.length; k++) {
                    if(info[j].chambre_id == infoch[k].id) {
                       // alert('gg');
                        chambres.push(infoch[k].name);
                    }
                }
                    
                    if(!info[j].total_recu) { // pour voir si le champ est vide
                        montant_verse += 0;
                    }else {
                        montant_verse += parseInt(info[j].total_recu);
                    }
                    // alert(prix);
                    if(!info[j].total_general) {
                        reste = montant_verse;
                    }else {
                        // reste = prix - montant_verse;
                        prix += parseInt(info[j].total_general);
                        reste = prix - montant_verse;
                    }
                    // reste = prix - montant_verse;
                    if(chambres.length > 0) {
                        if(reste >= 0) { // pour voir si le champ est vide
                            reception.push('Pas regle');
                        }else {
                            reception.push('Regle');
                        }
                    }
                    reception.push(montant_verse);
                    reception.push(reste);

                }
            }
            //alert(chambres.length);
           // alert(prix);
          /*  $('#prix').val(prix);
            $('#montant_verse').val(montant_verse);

            reste = prix - montant_verse;
            if(chambres.length > 0) {
                if(reste > 0) { // pour voir si le champ est vide
                    $('#reglement').val('Pas Regle');
                }else {
                    $('#reglement').val('Regle');
                }
            }

            $('#reste').val(reste); */

            alert("reception "+ reception.length);
            alert(chambres.length);
            // alert(reception[2]);
            if(chambres.length > 0) {
                for(m=0; m<chambres.length; m++) {
                   // alert(chambres[0]);
                    $(".odd").empty();
                    $("#complex-header").prepend("<tr>"+
                                            "<td>"+chambres[m]+"</td>"+
                                            "<td>"+date+"</td>"+
                                            "</tr>");

                }

                for(n=0; n<reception.length; n=n+3) {
                    
                    $("#complex-header2").prepend("<tr>"+
                                            "<td>"+reception[n]+"</td>"+
                                            "<td  style='color: #0acd8a;font-weight: bold'>"+reception[n+1]+"</td>"+
                                            "<td  style='color: #0acd8a;font-weight: bold'>"+reception[n+2]+"</td>"+
                                            "</tr>");
                }
            }
            if(chambres.length == 0) {
               // alert('pk');
                $("td").remove();
            }
            //console.log(date);
        });
    });
   
   
</script>
</body>
</html>
