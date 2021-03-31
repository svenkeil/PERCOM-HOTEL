<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>newsletter| PERFITCOM</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/toastr/toastr.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        
        <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/summernote/summernote-bs4.css') }}">

        <!-- css pour rendre le logo petit -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('files/assets/css/moncss.css') }}">
        
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/pnotify.custom.min.css') }}">
        
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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


      </head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!--================navbar=================-->
    @include('partials.navbar')
    <!--================navbar=================-->

    <!--================sidebar=================-->
    @include('partials.sidebar')
    <!--================sidebar=================-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!--================header=================-->
    @include('partials.header')
    <!--================header=================-->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list"></i>Liste des users actifs sur la newsletter</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-danger" onclick="valider();">Validez Newsletter</button>
                        <button class="btn btn-danger">Envoyer Email Newsletter</button>
                    </div>

  <!-- /.content-wrapper -->

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body formulaire">
          <h5 class="card-title bg-danger" style="border-radius:100px"><b>AJOUTER UN ARTICLE</b></h5> <br> <br>


          <form action="evenement" Method="post" >


              <div class="form-group" >
                <label for="exampleFormControlInput1"> Titre de l'article</label>
                <input type="text" class="form-control "  name="titre" id="titre" placeholder="titre de l'evenement" required>

              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Contenu</label>
                <textarea class="form-control" name="description" id="description" rows="3" required>  </textarea>

              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1"> Auteur</label>
                <input type="text" class="form-control " name="lieu" id="lieu" required></div>
              <div class="form-group">
                <label for="exampleFormControlInput1 "> Date de publication</label>
                <input type="date" class="form-control" name="dateve" id="dateve" required>
              </div>
               <div class="form-group">
                <input type="file" class="form-group" id="customFile">
                <label class="form-group" for="exampleFormControlInput1">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>

          </form>

        </div>
      </div>
    </div>

</div>

  @include('partials.footer')


</body>
</html>
