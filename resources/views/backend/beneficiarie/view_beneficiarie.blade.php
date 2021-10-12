@extends('admin.admin_master')

@section('title','Beneficiarios')

@section('admin')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestión de Beneficiarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Gestión de Beneficiarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    	<div class="card card-primary card-outline">

    		<div class="card-header">
	            
	            <h3 class="card-title"><a href="{{ route('beneficiaries.add') }}" class="btn btn-primary btn-block">
                  <i class="fa fa-plus-circle"></i> Agregar Beneficiario
                </a></h3>
	        
	        </div>

          <div class="card-body">

            <table id="example" style="width:100%" class="table table-bordered table-striped">

              <thead>
              <tr>
              	<th style="width: 10px;">#</th>
                <th>Beneficiario</th>              
                <th>Cédula</th>
                <th>Teléfono</th>
                <th>Municipio</th>
                <th>Vereda</th>
                <th>Acciones</th>
              </tr>
              </thead>

              <tbody>
              
              	@foreach ($allData as $key => $user)

	              	<tr>
	              		<td>{{ $key + 1 }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>{{ $user->usertype }}</td>
										<td>{{ $user->usertype }}</td>
										<td>{{ $user->status }}</td>
		                <td>
		                	<a  href="{{ route('users.edit', $user->id) }}" type="button" class="btn btn-info">
			                  <i class="fa fa-pen"></i>
			                </a>

			                <a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger" id="delete">
			                  <i class="fa fa-trash"></i>
			                </a>

		                </td>
		            	</tr>

                @endforeach
              
              </tbody>

            </table>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection