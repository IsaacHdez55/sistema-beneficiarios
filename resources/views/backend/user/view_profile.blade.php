@extends('admin.admin_master')

@section('title','Mi Perfil')

@section('admin')

<div class="content-wrapper" style="min-height: 1602px;">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Mi Perfil</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Mi Perfil</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
            	<img class="profile-user-img img-fluid img-circle" alt="{{ $user->name }}" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user.jpg') }}">
            </div>

            <h3 class="profile-username text-center">{{ $user->name }}</h3>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Correo Electrónico: </b> <a class="float-right">{{ $user->email }}</a>
              </li>
              <li class="list-group-item">
                <b>Rol: </b> <a class="float-right">{{ $user->usertype }}</a>
              </li>
            </ul>

            <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-block"><b>Editar Perfil</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->

      <div class="col-md-6">
      		
    	<!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Sobre mí</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-mobile-alt mr-1"></i> Celular</strong>

            <p class="text-muted">
              {{ $user->mobile }}
            </p>

            <hr>

            <strong><i class="fas fa-map-marked-alt mr-1"></i> Dirección</strong>

            <p class="text-muted">{{ $user->address }}</p>

            <hr>

            <strong><i class="fas fa-genderless mr-1"></i> Género</strong>

            <p class="text-muted">{{ $user->gender }}</p>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div><!-- /.col -->

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection