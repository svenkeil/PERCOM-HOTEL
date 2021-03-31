<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Route::currentRouteName() }} | PERFITCOM</title>
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

<body class="hold-transition sidebar-mini">
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
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Création Privillèges</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form id="login-us-form" onsubmit="return SignUp()">
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Privillèges</label>
                    <input autocomplete="off" type="text" class="form-control" style="color: #dc3545!important; font-weight: bolder" name="name"/>
                    </div>
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <button type="submit" class="btn btn-danger">Sauvegarder&nbsp;<i class="fas fa-spinner fa-spin" style="display:none" class="spinner" id="spinner-login"></i></button>
                    </div>
                    <!-- /.form-group -->
                </div>
                </div>
            </form>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <p>Access <i class="fas fa-universal-access"></i><span style="font-weight: bolder; color: #dc3545!important"> {{!empty(Auth::user()->role) ? Auth::user()->role : 'nothing for this moment'}}</span></p>
          </div>
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('partials.footer')

  <script type="text/javascript">
    function SignUp(){
        event.preventDefault();
        PNotify.removeAll();
        var info = {};
        var errors = [];
          $("#login-us-form")
          .find("input")
          .each(function() {
            $(this).css("border", "1px solid #ccc");
            if ($(this).val() == "" || $(this).val() == null) {
              $(this).css("border", "1px solid #f77575");
              errors.push($(this).attr("name"));
            }
            info[$(this).attr("name")] = $(this).val();
          });
        if (errors.length > 0) {
          new PNotify({
            text: "Fill in the required Fields.",
            animate_speed: "fast",
            type: "error"
          });
          return;
        }
        //console.log(info);

        $("#spinner-login").show();

        $("#btn-login").addClass("disabled");
        role(info);

    }

    function role(info) {
        $.ajax({

            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },

            type:'POST',

            data:info,

            url: '{{route('process-user-role')}}',

            success:function(response){
                $("#spinner-login").hide();
                $("#spinner-login-form").hide();

                 $("#btn-login").removeClass("disabled");
                 $("#btn-login-home").removeClass("disabled");

                 if(response.status=='success'){


                    new PNotify({
                        text: response.message,
                        animate_speed: 'fast',
                        type: 'success'
                    });
                }

                if(response.status=='info'){
                    new PNotify({
                        text: response.message,
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
                        animate_speed: 'fast',
                        type: 'info'
                    });
            }

        });
    }

</script>

</body>
</html>
