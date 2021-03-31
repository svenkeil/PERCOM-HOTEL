<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard <span style="color:#dc3545!important;">PERCOM-HOTEL</span></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ route('user-dashboard') }}">Dashboard</a></li>
              @if(Route::currentRouteName()=='view-profile')
              <li class="breadcrumb-item active">Profilage</li>
              @endif
              @if(Route::currentRouteName()=='user-list')
              <li class="breadcrumb-item active">list</li>
              @endif
              @if(Route::currentRouteName()=='user-gestion')
              <li class="breadcrumb-item active">Gestion</li>
              @endif
              @if(Route::currentRouteName()=='user-role')
              <li class="breadcrumb-item active">Privillèges</li>
              @endif
              @if(Route::currentRouteName()=='user-role-list')
              <li class="breadcrumb-item active">Liste Privillèges</li>
              @endif
              @if(Route::currentRouteName()=='page-newsletter')
              <li class="breadcrumb-item active">Newsletter</li>
              @endif
              @if(Route::currentRouteName()=='tchat')
              <li class="breadcrumb-item active">tchat</li>
              @endif
              @if(Route::currentRouteName()=='forum')
              <li class="breadcrumb-item active">forum</li>
              @endif
              @if(Route::currentRouteName()=='galerie_image')
              <li class="breadcrumb-item active">galerie_image</li>
              @endif
              @if(Route::currentRouteName()=='evenement')
              <li class="breadcrumb-item active">evènement</li>
              @endif
              @if(Route::currentRouteName()=='qui_sommes_nous')
              <li class="breadcrumb-item active">qui_sommes_nous</li>
              @endif
              @if(Route::currentRouteName()=='partenaires')
              <li class="breadcrumb-item active">partenaires</li>
              @endif
              @if(Route::currentRouteName()=='contact')
              <li class="breadcrumb-item active">contact</li>
              @endif
              @if(Route::currentRouteName()=='blog')
              <li class="breadcrumb-item active">blog</li>
              @endif
              @if(Route::currentRouteName()=='page_footer')
              <li class="breadcrumb-item active">page_footer</li>
              @endif
              @if(Route::currentRouteName()=='page_top')
              <li class="breadcrumb-item active">page_top</li>
              @endif
              @if(Route::currentRouteName()=='index')
              <li class="breadcrumb-item active">index</li>
              @endif
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
