<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-success">
  <!-- Brand Logo -->
  <a href="#" class="brand-link" style="text-align: center;">
    <img style="width: 10rem" src="{{ URL::asset('img/logo/logo.png') }}" alt="PERFITCOM Logo" class="brand-image img-circle elevation-3">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview @if(Route::currentRouteName()=='blog' or Route::currentRouteName()=='contact' or Route::currentRouteName()=='page_top' or Route::currentRouteName()=='page_footer' or Route::currentRouteName()=='qui_sommes_nous' or Route::currentRouteName()=='blog' or Route::currentRouteName()=='evenement' or Route::currentRouteName()=='partenaires' or Route::currentRouteName()=='index' or Route::currentRouteName()=='evenement-update')menu-open @endif">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Vos Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link @if(Route::currentRouteName()=='index') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Index</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('page_top') }}" class="nav-link @if(Route::currentRouteName()=='page_top') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Top</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('page_footer') }}" class="nav-link @if(Route::currentRouteName()=='page_footer') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Footer</Footer></p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{ route('blog') }}" class="nav-link @if(Route::currentRouteName()=='blog') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('contact') }}" class="nav-link @if(Route::currentRouteName()=='contact') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('evenement') }}" class="nav-link @if(Route::currentRouteName()=='evenement' or Route::currentRouteName()=='evenement-update' ) active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Evènements</p>
              </a>
            </li>
            <li class="nav-item">
              <a  href="{{ route('qui_sommes_nous') }}" class="nav-link @if(Route::currentRouteName()=='qui_sommes_nous') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Qui sommes nous</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('partenaires') }}" class="nav-link @if(Route::currentRouteName()=='partenaire') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Partenaires</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview @if(Route::currentRouteName()=='view-profile' or Route::currentRouteName()=='user-list' or Route::currentRouteName()=='user-gestion' or Route::currentRouteName()=='user-role' or Route::currentRouteName()=='user-role-list') menu-open @endif">
          <a href="#" class="nav-link @if(Route::currentRouteName()=='view-profile' or Route::currentRouteName()=='user-list' or Route::currentRouteName()=='user-gestion' or Route::currentRouteName()=='user-role' or Route::currentRouteName()=='user-role-list') active @endif">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Utilisateurs
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('view-profile') }}" class="nav-link @if(Route::currentRouteName()=='view-profile') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Profilage</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('user-list') }}" class="nav-link @if(Route::currentRouteName()=='user-list') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste Utilisateurs</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user-gestion') }}" class="nav-link @if(Route::currentRouteName()=='user-gestion') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gestion</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enregistrer</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{ route('user-role') }}" class="nav-link @if(Route::currentRouteName()=='user-role') active @endif">
                <i class="far fa-circle nav-icon"></i>
                <p>Enregistrer Rôles</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user-role-list') }}" class="nav-link @if(Route::currentRouteName()=='user-role-list') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste Rôles</p>
                </a>
              </li>
          </ul>
        </li>


        <li class="nav-header">FONCTIONNALITES</li>

        <li class="nav-item">
          <a href="{{ route('page-newsletter') }}" class="nav-link @if(Route::currentRouteName()=='page-newsletter') active @endif">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Newsletter
            </p>
          </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('tchat') }}" class="nav-link @if(Route::currentRouteName()=='tchat') active @endif">
            <i class="fas fa-comments"></i>
            <p>
              Tchat
            </p>
          </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('galerie_image') }}" class="nav-link @if(Route::currentRouteName()=='galerie_image') active @endif">
            <i class="nav-icon far fa-images"></i>
            <p>
              Galery Images
            </p>
          </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('forum') }}" class="nav-link @if(Route::currentRouteName()=='forum') active @endif">
            <i class="fas fa-user-plus"></i>
            <p>
              Forum
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('user-logout')}}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <p>
              Déconnexion
            </p>
          </a>
        </li>

        <!--li class="nav-item">
          <a href="{{route('user-register')}}" class="nav-link">
            <i class="fas fa-sign-in-alt"></i>
            <p>
              Register
            </p>
          </a>
        </li-->

      </ul>
      <br/><br/><br/><br/><br/>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
