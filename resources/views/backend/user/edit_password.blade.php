@extends('admin.admin_master')

@section('title','Editar Contraseña')

@section('admin')

<div class="content-wrapper" style="min-height: 1602px;">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Contraseña</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('profile.view') }}">Mi Perfil</a></li>
              <li class="breadcrumb-item active">Editar Contraseña</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

<div class="container-fluid">

    <div class="row">

      <!-- col-md-12 -->

      <div class="col-md-12">

        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Editar Contraseña</h3>
          </div>
          <!-- /.card-header -->

        <!-- form start -->
        <form action="{{ route('password.update') }}" method="post">
          	@csrf

            <div class="card-body">

            	<div class="row">

            		<div class="col-md-12">

			          	<div class="form-group">
				      		<label for="usertype">Contraseña Antigua</label><span class="text-danger">*</span>
				        	<div class="input-group mb-3">
				              	<div class="input-group-prepend">
				                	<span class="input-group-text"><i class="fa fa-lock-open"></i></span>
				              	</div>
				              	<input type="password" class="form-control" placeholder="Ingresar Contraseña Antigua" id="current_password" name="oldpassword">
				        	</div>

				        	@error('oldpassword')
								<span class="text-danger">{{ $message }}</span>
							@enderror
				        	
				        </div>

				        <div class="form-group">
				      		<label for="usertype">Contraseña Nueva</label><span class="text-danger">*</span>
				        	<div class="input-group mb-3">
				              	<div class="input-group-prepend">
				                	<span class="input-group-text"><i class="fa fa-lock"></i></span>
				              	</div>
				              	<input type="password" name="password" class="form-control" placeholder="Ingresar Nueva Contraseña">
				              	
				        	</div>

				        	@error('password')
								<span class="text-danger">{{ $message }}</span>
							@enderror

				        </div>

				        <div class="form-group">
				      		<label for="usertype">Confirmar Contraseña</label><span class="text-danger">*</span>
				        	<div class="input-group mb-3">
				              	<div class="input-group-prepend">
				                	<span class="input-group-text"><i class="fa fa-lock"></i></span>
				              	</div>
				              	<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña">
				        	</div>

				        	@error('password_confirmation')
								<span class="text-danger">{{ $message }}</span>
							@enderror

				        </div>

            		</div> {{-- .col-md-6 --}}

            	</div> {{-- ./row --}}

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
             	<input type="submit" class="btn btn-primary" value="Actualizar Contraseña" required>
	        	<a href="{{ route('profile.view') }}" type="button" class="btn btn-default">Cancelar</a>
            </div>

        </form>


        </div>
        <!-- /.card -->

      </div>
      <!--/.col-->

    </div>
    <!-- /.row -->

  </div>

</section>
<!-- /.content -->

</div>

@endsection