@extends('admin.admin_master')

@section('title','Editar Perfil')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper" style="min-height: 1602px;">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Perfil</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('profile.view') }}">Mi Perfil</a></li>
          <li class="breadcrumb-item active">Editar Perfil</li>
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
            <h3 class="card-title">Editar Perfil</h3>
          </div>
          <!-- /.card-header -->

        <!-- form start -->
        <form action="{{ route('profile.store') }}" method="post" method="post" enctype="multipart/form-data">
          	@csrf

            <div class="card-body">

            	<div class="row">

            		<div class="col-md-6">

            			<div class="form-group">
			          		<label for="name">Nombre Completo</label><span class="text-danger">*</span>
			              	<div class="input-group mb-3">
			                  <div class="input-group-prepend">
			                    <span class="input-group-text"><i class="fa fa-user"></i></span>
			                  </div>
			                  <input type="text" name="name" class="form-control" value="{{ $editData->name }}" placeholder="Ingresar Nombre Completo">
			            	</div>
			            </div>

			            <div class="form-group">
			          		<label for="mobile">Celular</label><span class="text-danger">*</span>
			              	<div class="input-group mb-3">
			                  <div class="input-group-prepend">
			                    <span class="input-group-text"><i class="fa fa-user"></i></span>
			                  </div>
			                  <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile }}" placeholder="Ingresar Celular">
			            	</div>
			            </div>

			            <div class="form-group">
			         		<label for="gender">Género</label><span class="text-danger">*</span>
			                <select class="form-control" name="gender" required>
			                	<option value="" selected disabled>-- Seleccionar Género --</option>
			                	<option value="Masculino" {{ ($editData->gender == "Masculino" ? "selected" : "") }}>Masculino</option>
								<option value="Femenino" {{ ($editData->gender == "Femenino" ? "selected" : "") }}>Femenino</option>
								<option value="Otro" {{ ($editData->gender == "Otro" ? "selected" : "") }}>Otro</option>
			                </select>
			          	</div>            		

            		</div> {{-- .col-md-6 --}}

            		<div class="col-md-6">

            			<div class="form-group">
				      		<label for="email">Correo Electrónico</label><span class="text-danger">*</span>
				        	<div class="input-group mb-3">
				              	<div class="input-group-prepend">
				                	<span class="input-group-text"><i class="fa fa-envelope"></i></span>
				              	</div>
		              			<input type="email" name="email" class="form-control" value="{{ $editData->email }}" placeholder="Ingresar Correo Electrónico">
				        	</div>
				        </div>

            			<div class="form-group">
			          		<label for="address">Dirección</label><span class="text-danger">*</span>
			              	<div class="input-group mb-3">
			                  <div class="input-group-prepend">
			                    <span class="input-group-text"><i class="fa fa-user"></i></span>
			                  </div>
			                  <input type="text" name="address" class="form-control" value="{{ $editData->address }}" placeholder="Ingresar Dirección">
			            	</div>
			            </div>

			            <div class="form-group">
                    <label for="image">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Elegir archivo</label>
                      </div>
                    </div>
                	</div>

                	<div class="form-group">
									
										<img id="showImage" src="{{ (!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/user.jpg') }}" style="width: 100px; width: 100px; border: 1px solid #000000;">
										
									</div>

            		</div> {{-- .col-md-6 --}}

            	</div> {{-- ./row --}}

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
             	<input type="submit" class="btn btn-primary" value="Editar Usuario" required>
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

<script>
	
	$(document).ready(function(){

		$('#image').change(function(e){

			var reader = new FileReader();
			reader.onload = function(e){

				$('#showImage').attr('src',e.target.result);

			}

			reader.readAsDataURL(e.target.files['0']);

		});

	});

</script>

@endsection