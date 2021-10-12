@extends('admin.admin_master')

@section('title','Agregar Usuario')

@section('admin')

<div class="content-wrapper" style="min-height: 1602px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	<div class="container-fluid">
	  <div class="row mb-2">
	    <div class="col-sm-6">
	      <h1>Agregar Usuario</h1>
	    </div>
	    <div class="col-sm-6">
	      <ol class="breadcrumb float-sm-right">
	        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
	            <li class="breadcrumb-item"><a href="{{ route('user.view') }}">Gestión de Usuarios</a></li>
	            <li class="breadcrumb-item active">Agregar Usuario</li>
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
	          <h3 class="card-title">Agregar Usuario</h3>
	        </div>
	        <!-- /.card-header -->

	      <!-- form start -->
	      <form action="{{ route('users.store') }}" method="post">
	        	@csrf

	          <div class="card-body">

	          	<div class="row">

	          		<div class="col-md-6">
	          			
	          			<div class="form-group">
			         		<label for="usertype">Perfil</label><span class="text-danger">*</span>
			                <select class="form-control" name="usertype" required>
			                	<option value="" selected disabled>-- Seleccionar Perfil --</option>
			                	<option value="Adminstrador">Adminstrador</option>
			                	<option value="Digitador">Digitador</option>
			                </select>
			          	</div>

			          	<div class="form-group">
				      		<label for="usertype">Correo Electrónico</label><span class="text-danger">*</span>
				        	<div class="input-group mb-3">
				              	<div class="input-group-prepend">
				                	<span class="input-group-text"><i class="fa fa-envelope"></i></span>
				              	</div>
				              	<input type="email" name="email" class="form-control" placeholder="Ingresar Correo Electrónico">
				              	@error('email')
									<span class="text-danger">{{ $message }}</span>
								@enderror
				        	</div>
				        </div>

	          		</div> {{-- .col-md-6 --}}

	          		<div class="col-md-6">

	          			<div class="form-group">
			          		<label for="usertype">Nombre Completo</label><span class="text-danger">*</span>
			              	<div class="input-group mb-3">
			                  <div class="input-group-prepend">
			                    <span class="input-group-text"><i class="fa fa-user"></i></span>
			                  </div>
			                  <input type="text" name="name" class="form-control" placeholder="Ingresar Nombre Completo">
			            	</div>
			            </div>

			            <div class="form-group">
			          		<label for="usertype">Contraseña</label><span class="text-danger">*</span>
			            	<div class="input-group mb-3">
			                  <div class="input-group-prepend">
			                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
			                  </div>
			                  <input type="password" name="password" class="form-control" placeholder="Ingresar Contraseña">
			            	</div>
			            </div>

	          		</div> {{-- .col-md-6 --}}

	          	</div> {{-- ./row --}}

	          </div>
	          <!-- /.card-body -->

	          <div class="card-footer">
	           	<input type="submit" class="btn btn-primary" value="Guardar Usuario" required>
	        	<a href="{{ route('user.view') }}" type="button" class="btn btn-default">Cancelar</a>
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