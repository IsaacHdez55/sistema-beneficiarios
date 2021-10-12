@php

$user = DB::table('users')->where('id',Auth::user()->id)->first();

$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('dashboard') }}" class="brand-link">
    <img src="{{ asset('backend/img/AdminLTELogo.png') }}" alt="SISBE" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SISBE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user.jpg') }}" alt="{{ $user->name }}" class="brand-image img-circle elevation-3" style="opacity: .8">
      </div>
      <div class="info">
        <a href="{{ route('profile.view') }}" class="d-block">{{ $user->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ ($route == 'dashboard')?'active':'' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.view') }}" class="nav-link {{ ($prefix == '/users')?'active':'' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Gestión de Usuarios
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link {{ ($prefix == '/profiles')?'active':'' }}" >
            <i class="nav-icon fas fa-user-circle"></i>
            <p>
              Perfil
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('profile.view') }}" class="nav-link {{ ($route == 'profile.view')?'active':'' }}">
                <i class="fas fa-user-circle nav-icon"></i>
                <p>Mi Perfil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('password.view') }}" class="nav-link {{ ($route == 'password.view')?'active':'' }}">
                <i class="fa fa-unlock-alt nav-icon"></i>
                <p>Cambiar Contraseña</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('beneficiaries.view') }}" class="nav-link {{ ($prefix == '/beneficiaries')?'active':'' }}">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              Beneficiarios
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>