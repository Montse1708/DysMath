<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
    <i><img style="width:50px" src="{{ asset('img/dysmath1.png') }}"></i>
      {{ __('DYSMATH') }}
    </a>
  </div>
  <div class="sidebar-wrapper" >
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
        <i class="material-icons">menu</i>
          <p>{{ __('Menú') }}
            <b class="caret"></b>
          </p>
        </a>
        
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
          <li class="nav-item{{ $activePage == 'juegos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('juegos') }}">
                <span class="sidebar-mini"> G </span>
                <span class="sidebar-normal"> {{ __('Juegos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('perfil') }}">
                <span class="sidebar-mini"> P </span>
                <span class="sidebar-normal">{{ __('Perfil') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'botman' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('perfil') }}">
                <span class="sidebar-mini"> CA </span>
                <span class="sidebar-normal"> {{ __('Chatbot') }} </span>
              </a>
            </li>
            @can('posts.index')
            <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('posts.index') }}">
                <i class="material-icons">library_books</i>
                <p>{{ __('Subir Actividad') }}</p>
              </a>
            </li>
            @endcan
          </ul>
        </div>
      </li>
      <!--Asignar permisos -->
      @can('users.index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">person_add</i>
            <p>Usuarios</p>
        </a>
      </li>
      @endcan
      
      <!--Asignar permisos -->
      @can('permissions.index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permissions') }}</p>
        </a>
      </li>
      @endcan
      <!--Asignar permisos -->
      @can('roles.index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">people_alt</i>
            <p>{{ __('Roles') }}</p>
        </a>
        @endcan
      </li>
    </ul>
  </div>
</div>
