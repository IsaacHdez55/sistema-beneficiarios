@extends('admin.admin_master')

@section('title','Agregar Beneficiario')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper" style="min-height: 1602px;">}

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
		  <div class="row mb-2">
		    <div class="col-sm-6">
		      <h1>Agregar Beneficiario</h1>
		    </div>
		    <div class="col-sm-6">
		      <ol class="breadcrumb float-sm-right">
		        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
		            <li class="breadcrumb-item"><a href="{{ route('beneficiaries.view') }}">Gestión de Beneficiarios</a></li>
		            <li class="breadcrumb-item active">Agregar Beneficiario</li>
		      </ol>
		    </div>
		  </div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">

			<div class="row">

		    	<div class="col-md-12">

			        <div class="card card-default">

			          <div class="card-header">
			            <h3 class="card-title">Agregar Beneficiario</h3>
			          </div>

			          <div class="card-body p-0">

			            <div class="bs-stepper">

			              	<div class="bs-stepper-header" role="tablist">
				                <!-- your steps here -->
				                <div class="step" data-target="#logins-part">
				                  <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
				                    <span class="bs-stepper-circle">1</span>
				                    <span class="bs-stepper-label">Primer Formulario</span>
				                  </button>
				                </div>
				                <div class="line"></div>
				                <div class="step" data-target="#information-part">
				                  <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
				                    <span class="bs-stepper-circle">2</span>
				                    <span class="bs-stepper-label">Segundo Formulario</span>
				                  </button>
				                </div>
				            </div>  <!-- /.bs-stepper-header -->

			              	<div class="bs-stepper-content">

				              	<div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">

					              	<h5 class="text-center">FICHA TECNICA HOGAR POSTULANTE PROGRAMA DE UNIDADES SANITARIAS</h5>

					              	<p><strong>1. DATOS DEL HOGAR POSTULANTE:</strong></p>

					                <!-- DATOS DEL HOGAR POSTULANTE -->

					                <div class="row">
					                	
					                	<div class="col-md-12">
					                		
					                		<div class="row">
					                			
					                			<div class="col-md-4">
					                				
					                				<div class="form-group">
									                    <label for="identificacion">No. CÉDULA</label><span class="text-danger">*</span>
									                    <input type="number" class="form-control" name="identificacion" placeholder="Ingresar número de cédula">
									                </div>

					                			</div> <!-- /.col-md-4 -->

					                			<div class="col-md-8">
					                				
					                				<div class="form-group">
									                    <label for="nombre_completo">NOMBRE DEL JEFE DE HOGAR</label><span class="text-danger">*</span>
									                    <input type="text" class="form-control" name="nombre_completo" placeholder="Ingresar nombre completo del beneficiario">
									                </div>

					                			</div> <!-- /.col-md-8 -->

					                			<div class="col-md-6">
					                				
					                				<div class="form-group">
									                    <label for="nombre_completo">SISBEN</label><span class="text-danger">*</span>
									                    <div class="input-group">
									                      <div class="custom-file">
									                        <input type="file" class="custom-file-input" name="sisben">
									                        <label class="custom-file-label" for="sisben">Elegir archivo</label>
									                      </div>
									                    </div>
									                </div>

					                			</div> <!-- /.col-md-6 -->

					                			<div class="col-md-6">
					                				
					                				<div class="form-group">
									                    <label for="celular">NÚMERO DE TELÉFONO</label><span class="text-danger">*</span>
									                    <input type="number" class="form-control" name="celular" placeholder="Ingresar nombre completo del beneficiario">
									                </div>

					                			</div> <!-- /.col-md-6 -->

					                		</div> <!-- /.row -->

					                		{{-- MIEMBROS DEL HOGAR --}}

					                		<p>MIEMBROS DEL HOGAR</p>
											
											<div class="agregar_item">

						                		<div class="row">

						                			<div class="col-xs-2">

						                				<div class="form-group">
											                <label for="tipo_identificacion">IDENTIFICACIÓN</label><span class="text-danger">*</span>
											                <select class="form-control " name="tipo_identificacion[]" required>
											                	<option value="" selected disabled>-- SELECCIONAR --</option>
											                	<option value="CC">CC</option>
											                	<option value="TI">TI</option>
											                	<option value="RC">RC</option>
											                </select>
											            </div>
						                				
						                			</div> <!-- /.col-xs-3 -->

						                			<div class="col-md-2">

						                				<div class="form-group">
							                				<label for="identificacion_miembro">No. IDENTIFICACIÓN</label><span class="text-danger">*</span>
											                <input type="number" class="form-control" name="identificacion_miembro[]" placeholder="Ingresar no. identificación" required>
											            </div>
						                				
						                			</div> <!-- /.col-md-2 -->

						                			<div class="col-md-3">

						                				<div class="form-group">
							                				<label for="nombre_completo_miembro">NOMBRE</label><span class="text-danger">*</span>
											                <input type="text" class="form-control" name="nombre_completo_miembro[]" placeholder="Ingresar nombre completo" required>
											            </div>
						                				
						                			</div> <!-- /.col-md-3 -->

						                			<div class="col-md-2">

						                				<div class="form-group">
							                				<label for="parentesco_miembro">PARENTESCO</label>
											                <input type="text" class="form-control" name="parentesco_miembro[]" placeholder="Ingresar parentesco">
											            </div>
						                				
						                			</div> <!-- /.col-md-2 -->

						                			<div class="col-md-2">

						                				<div class="form-group">
							                				<label for="celular_miembro">CELULAR</label><span class="text-danger">*</span>
											                <input type="number" class="form-control" name="celular_miembro[]" placeholder="Ingresar número de teléfono">
											            </div>
						                				
						                			</div> <!-- /.col-md-2 -->

						                			<div class="col-xs-2" style="padding-top: 25px;">

						                				<span class="btn btn-success addeventmore"><i class="fa fa-plus"></i></span>
						                				
						                			</div> <!-- /.col-xs-2 -->

						                		</div> <!-- /.row -->

						                	</div>  <!-- /.agregar_item -->

						                	{{-- FIN MIEMBROS DEL HOGAR --}}

					                	</div> <!-- /.col-md-12 -->

					                </div> <!-- /.row -->

					                <P><strong>2. CARACTERISTICAS DE UBICACIÓN Y TRANSPORTE AL PREDIO</strong></P>

					                 <!-- CARACTERISTICAS DE UBICACIÓN Y TRANSPORTE AL PREDIO -->

					                <div class="row">
					                			
			                			<div class="col-md-6">
			                				
			                				<div class="form-group">
							                    <label for="municipio">MUNICIPIO</label><span class="text-danger">*</span>
							                    <input type="text" class="form-control" name="municipio" placeholder="Ingresar su municipio" required>
							                </div>

			                			</div> <!-- /.col-md-6 -->

			                			<div class="col-md-6">
			                				
			                				<div class="form-group">
							                    <label for="vereda">VEREDA</label><span class="text-danger">*</span>
							                    <input type="text" class="form-control" name="vereda" placeholder="Ingresar su vereda" required>
							                </div>

			                			</div> <!-- /.col-md-6 -->

			                			<div class="col-md-6">
			                				
			                				<div class="form-group">
							                    <label for="name_predio_finca">NOMBRE DEL PREDIO O FINCA</label>
							                    <input type="text" class="form-control" name="name_predio_finca" placeholder="Ingresar nombre del predio o finca" required>
							                </div>

			                			</div> <!-- /.col-md-6 -->

			                			<div class="col-md-6">

				                			<div class="row">

				                				<label>COORDENADAS ELIPSOIDALES PARA GEOREFERENCIACION DEL PREDIO</label>

				                				<div class="col-4">

				                					<div class="form-group">
									                    {{-- <label for="norte">NORTE</label> --}}
									                    <input type="text" class="form-control" name="norte" placeholder="Ingresar norte">
									                </div>
				                					
				                				</div> <!-- /.col-4 -->
				                				<div class="col-4">

				                					<div class="form-group">
									                    {{-- <label for="este">ESTE</label> --}}
									                    <input type="text" class="form-control" name="este" placeholder="Ingresar este">
									                </div>
				                					
				                				</div> <!-- /.col-4 -->
				                				<div class="col-4">

				                					<div class="form-group">
									                   {{--  <label for="cota">COTA</label> --}}
									                    <input type="text" class="form-control" name="cota" placeholder="Ingresar cota">
									                </div>
				                					
				                				</div> <!-- /.col-4 -->

				                			</div> <!-- /.row -->

			                			</div> <!-- /.col-md-6 -->

			                			<div class="col-md-4">

						    				<div class="form-group">
								                <label for="predio_riesgo">PREDIO EN ZONA DE ALTO RIESGO</label><span class="text-danger">*</span>
								                <select class="form-control " name="predio_riesgo" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="INUNDACIÓN">INUNDACIÓN</option>
								                	<option value="DESLIZAMIENTO">DESLIZAMIENTO</option>
								                	<option value="HUMDIMIENTO">HUMDIMIENTO</option>
								                	<option value="ORDEN PÚBLICO">ORDEN PÚBLICO</option>
								                	<option value="NO APLICA">NO APLICA</option>
								                </select>
								            </div>
						    				
						    			</div> <!-- /.col-md-4 -->

						    			<div class="col-md-4">

								            <div class="form-group">
								                <label for="acceso_vehicular">DISTANCIA DEL CASCO URBANO</label><span class="text-danger">*</span>
								                <select class="form-control " name="acceso_vehicular" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="0 - 5 km">0 - 5 km</option>
								                	<option value="5 - 10 km">5 - 10 km</option>
								                	<option value="10 - 15 km">10 - 15 km</option>
								                	<option value="15 - 20 km">15 - 20 km</option>
								                	<option value="20 - 25 km">20 - 25 km</option>
								                	<option value="25 - 30 km">25 - 30 km</option>
								                	<option value="30 - 35 km">30 - 35 km</option>
								                	<option value="35 - 40 km">35 - 40 km</option>
								                	<option value="40 - 45 km">40 - 45 km</option>
								                	<option value="45 - 50 km">45 - 50 km</option>
								                </select>
								            </div>
						    				
						    			</div> <!-- /.col-md-4 -->

						    			<div class="col-md-4">

						    				<div class="form-group">
								                <label for="transporte_mular">TRANSPORTE MULAR</label><span class="text-danger">*</span>
								                <select class="form-control " name="transporte_mular" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="0 - 5 km">0 - 5 km</option>
								                	<option value="5 - 10 km">5 - 10 km</option>
								                	<option value="10 - 15 km">10 - 15 km</option>
								                	<option value="15 - 20 km">15 - 20 km</option>
								                	<option value="20 - 25 km">20 - 25 km</option>
								                	<option value=">20 km">>20 km</option>
								                	<option value="NO APLICA">NO APLICA</option>
								                </select>
								            </div>
						    				
						    			</div> <!-- /.col-md-4 -->

						    			<div class="col-md-4">

						    				<div class="form-group">
								                <label for="transporte_fluvial">TRANSPORTE FLUVIAL</label><span class="text-danger">*</span>
								                <select class="form-control " name="transporte_fluvial" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="0 - 5 km">0 - 5 km</option>
								                	<option value="5 - 10 km">5 - 10 km</option>
								                	<option value="10 - 15 km">10 - 15 km</option>
								                	<option value="15 - 20 km">15 - 20 km</option>
								                	<option value="20 - 25 km">20 - 25 km</option>
								                	<option value=">20 km">>20 km</option>
								                	<option value="NO APLICA">NO APLICA</option>
								                </select>
								            </div>
						    				
						    			</div> <!-- /.col-md-4 -->

						    			<div class="col-md-4">

						    				<div class="form-group">
								                <label for="transporte_vehiculo">TRANSPORTE VEHICULO O CAMPERO</label><span class="text-danger">*</span>
								                <select class="form-control " name="transporte_vehiculo" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="0 - 5 km">0 - 5 km</option>
								                	<option value="5 - 10 km">5 - 10 km</option>
								                	<option value="10 - 15 km">10 - 15 km</option>
								                	<option value="15 - 20 km">15 - 20 km</option>
								                	<option value="20 - 25 km">20 - 25 km</option>
								                	<option value=">20 km">>20 km</option>
								                	<option value="NO APLICA">NO APLICA</option>
								                </select>
								            </div>
						    				
						    			</div> <!-- /.col-md-4 -->

						    			<div class="col-md-4">

						    				<div class="form-group">
								                <label for="transporte_hombre">TRANSPORTE HOMBRE</label><span class="text-danger">*</span>
								                <select class="form-control " name="transporte_hombre" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="0 - 5 km">0 - 5 km</option>
								                	<option value="5 - 10 km">5 - 10 km</option>
								                	<option value="10 - 15 km">10 - 15 km</option>
								                	<option value="15 - 20 km">15 - 20 km</option>
								                	<option value="20 - 25 km">20 - 25 km</option>
								                	<option value=">20 km">>20 km</option>
								                	<option value="NO APLICA">NO APLICA</option>
								                </select>
								            </div>
						    				
						    			</div> <!-- /.col-md-4 -->

			                		</div> <!-- /.row -->

			                		<P><strong>3. DIAGNOSTICO SANITARIO DE  LA  VIVIENDA</strong></P>

			                		<!-- CARACTERISTICAS DE UBICACIÓN Y TRANSPORTE AL PREDIO -->

			                		<div class="row">

			                			<div class="col-md-4">

			                				<div class="form-group">
								                <label for="unidad_sanitaria">LA VIVIENDA CUENTA CON UNIDAD SANITARIA</label>
								                <select class="form-control " name="unidad_sanitaria" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="SI">SI</option>
								                	<option value="NO">NO</option>
								                </select>
								            </div>

			                			</div> <!-- /.col-md-4 -->

			                			<div class="col-md-4">

			                				<div class="form-group">
								                <label for="muros">MUROS</label>
								                <select class="form-control " name="muros" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="MADERA">MADERA</option>
								                	<option value="LONA">LONA</option>
								                	<option value="ZINC">ZINC</option>
								                	<option value="LADRILLO">LADRILLO</option>
								                	<option value="OTRO">OTRO</option>
								                </select>
								            </div>

			                			</div> <!-- /.col-md-4 -->

			                			<div class="col-md-4">

			                				<div class="form-group">
								                <label for="techo">TECHO</label>
								                <select class="form-control " name="techo" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="MADERA">MADERA</option>
								                	<option value="PLASTICO">PLASTICO</option>
								                	<option value="ZINC">ZINC</option>
								                	<option value="ETERNIT">ETERNIT</option>
								                	<option value="OTRO">OTRO</option>
								                </select>
								            </div>

			                			</div> <!-- /.col-md-4 -->

			                			<div class="col-md-4">

			                				<div class="form-group">
								                <label for="pisos">PISOS</label>
								                <select class="form-control " name="pisos" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="TIERRA">TIERRA</option>
								                	<option value="CEMENTO">CEMENTO</option>
								                	<option value="MADERA">MADERA</option>
								                	<option value="OTRO MATERIAL">OTRO MATERIAL</option>
								                </select>
								            </div>

			                			</div> <!-- /.col-md-4 -->

			                			<div class="col-md-8">

			                				<div class="form-group">
								                <label for="sistema_septico">LA VIVIENDA CUENTA CON SISTEMA SEPTICO PARA EL TRATAMIENTO DE AGUAS RESIDUALES</label>
								                <select class="form-control " name="sistema_septico" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="SI">SI</option>
								                	<option value="NO">NO</option>
								                </select>
								            </div>

			                			</div> <!-- /.col-md-8 -->

			                		</div> <!-- /.row -->

			                		<P>DIMENSIONES SISTEMA SEPTICO</P>

			                		<!-- DIMENSIONES SISTEMA SEPTICO -->

			                		<div class="row">

			                			<div class="col-3">

		                					<div class="form-group">
							                    <label for="dimensiones_septico_alto">ALTO</label>
							                    <input type="text" class="form-control" name="dimensiones_septico_alto" placeholder="Ingresar Alto">
							                </div>
		                					
		                				</div> <!-- /.col-3 -->
		                				<div class="col-3">

		                					<div class="form-group">
							                    <label for="dimensiones_septico_ancho">ANCHO</label>
							                    <input type="text" class="form-control" name="dimensiones_septico_ancho" placeholder="Ingresar Ancho">
							                </div>
		                					
		                				</div> <!-- /.col-3 -->
		                				<div class="col-3">

		                					<div class="form-group">
							                    <label for="dimensiones_septico_laro">LARGO</label>
							                    <input type="text" class="form-control" name="dimensiones_septico_laro" placeholder="Ingresar Largo">
							                </div>
		                					
		                				</div> <!-- /.col-3 -->
		                				<div class="col-3">

		                					<div class="form-group">
							                    <label for="dimensiones_septico_material">MATERIAL</label>
							                    <input type="text" class="form-control" name="dimensiones_septico_material" placeholder="Ingresar Material">
							                </div>
		                					
		                				</div> <!-- /.col-3 -->
			                			
			                		</div> <!-- /.row -->

			                		<div class="row">

			                			<div class="col-md-4">

			                				<div class="form-group">
								                <label for="estado_septico">ESTADO DEL SISTEMA SEPTICO</label>
								                <select class="form-control " name="estado_septico" required>
								                	<option value="" selected disabled>-- SELECCIONAR --</option>
								                	<option value="BUENO">BUENO</option>
								                	<option value="REGULAR">REGULAR</option>
								                	<option value="MALO">MALO</option>
								                </select>
								            </div>

			                			</div> <!-- /.col-md-4 -->

			                			<div class="col-md-8">

				                			<div class="form-group">
						                        <label>¿Por qué?</label>
						                        <textarea class="form-control" rows="4" name="estado_septico_porque" placeholder="Enter ..."></textarea>
						                    </div>

						                </div> <!-- /.col-md-8 -->

						                <div class="col-md-12">

				                			<div class="form-group">
						                        <label>Observaciones</label>
						                        <textarea class="form-control" rows="8" name="estado_septico_porque" placeholder="Enter ..."></textarea>
						                    </div>

						                </div> <!-- /.col-md-12 -->
		                						                			
			                		</div> <!-- /.row -->

			                		<h5 class="text-center">ESQUEMA DE  LOCALIZACION DE LA VIVIENDA Y  DENTRO DEL PREDIO</h5>

			                		<div class="row">

				                		<div class="col-md-12">

						                    <input type="file" class="dropify" name="image_esquema" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-12 -->

						                <div class="col-md-12">

				                			<div class="form-group">
						                        <label>Observaciones</label>
						                        <textarea class="form-control" rows="8" name="estado_septico_porque" placeholder="Enter ..."></textarea>
						                    </div>

						                </div> <!-- /.col-md-12 -->

						            </div><!-- /.row -->

					                <br>

					                <button class="btn btn-primary" onclick="stepper.next()">Siguiente</button>

					            </div> <!-- /.logins-part -->
				                
				                <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">

				                	<P><strong>4. PRUEBA DE PERMEABILIADAD</strong></P>

				                	<!--  PRUEBA DE PERMEABILIADAD -->

				                	<div class="row">
				                		
				                		<div class="col-md-4">
					                				
			                				<div class="form-group">
							                    <label for="permeabilidad_tiempo">TIEMPO</label>
							                    <input type="text" class="form-control" name="permeabilidad_tiempo" placeholder="Ingresar tiempo">
							                </div>

			                			</div> <!-- /.col-md-4 -->

			                			<div class="col-md-8">

				                			<div class="form-group">

						                        <label for="permeabilidad_observaciones">Observaciones</label>
						                        <textarea class="form-control" rows="8" name="permeabilidad_observaciones" placeholder="Enter ..."></textarea>

						                    </div>

						                </div> <!-- /.col-md-8 -->

				                	</div><!-- /.row -->

				                	<P><strong>5. RESGISTRO FOTOGRÁFICO PRUEBA PERMEABILIDAD</strong></P>

				                	<!--  RESGISTRO FOTOGRÁFICO PRUEBA PERMEABILIDAD -->

				                	<div class="row">
				                		
				                		<div class="col-md-6">

						                    <input type="file" class="dropify" name="permeabilidad_image1" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-6 -->

						                <div class="col-md-6">

						                    <input type="file" class="dropify" name="permeabilidad_image2" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-6 -->

				                	</div>

				                	<P><strong>5. RESGISTRO FOTOGRÁFICO CONDICIONES ACTUALES DE LA VIVIENDA - UNIDAD SANITARIA</strong></P>

				                	<!--  RESGISTRO FOTOGRÁFICO CONDICIONES ACTUALES DE LA VIVIENDA - UNIDAD SANITARIA -->

				                	<div class="row">
				                		
				                		<div class="col-md-6">

						                    <input type="file" class="dropify" name="condiciones_actuales_image1" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-6 -->

						                <div class="col-md-6">

						                    <input type="file" class="dropify" name="condiciones_actuales_image2" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-6 -->

						                <div class="col-md-6">

						                    <input type="file" class="dropify" name="condiciones_actuales_image3" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-6 -->

						                <div class="col-md-6">

						                    <input type="file" class="dropify" name="condiciones_actuales_image4" data-allowed-file-extensions="jpg jpeg png" />
		                
						                </div><!-- /.col-md-6 -->

				                	</div>

				                	<br>
				                 
					                <button class="btn btn-primary" onclick="stepper.previous()">Anterior</button>
					                <button type="submit" class="btn btn-primary">Enviar</button>

				                </div> <!-- /.information-part -->

				            </div>  <!-- /.bs-stepper-content -->

			            </div> <!-- /.bs-stepper -->

			          </div> <!-- /.card-body -->

			        </div> <!-- /.card -->

		      	</div>  <!-- /.col-md-12 -->

		    </div> <!-- /.row -->

		    <div style="visibility: hidden;">
				<div class="whole_extra_item_add" id="whole_extra_item_add">
					<div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
						<div class="row">

							<div class="col-xs-2">

			    				<div class="form-group">
					                <label for="tipo_identificacion">IDENTIFICACIÓN</label><span class="text-danger">*</span>
					                <select class="form-control " name="tipo_identificacion[]" required>
					                	<option value="" selected disabled>-- SELECCIONAR --</option>
					                	<option value="CC">CC</option>
					                	<option value="TI">TI</option>
					                	<option value="RC">RC</option>
					                </select>
					            </div>
			    				
			    			</div> <!-- /.col-xs-3 -->

			    			<div class="col-md-2">

			    				<div class="form-group">
			        				<label for="identificacion_miembro">No. IDENTIFICACIÓN</label><span class="text-danger">*</span>
					                <input type="number" class="form-control" name="identificacion_miembro[]" placeholder="Ingresar no. identificación" required>
					            </div>
			    				
			    			</div> <!-- /.col-md-2 -->

			    			<div class="col-md-3">

			    				<div class="form-group">
			        				<label for="nombre_completo_miembro">NOMBRE</label><span class="text-danger">*</span>
					                <input type="text" class="form-control" name="nombre_completo_miembro[]" placeholder="Ingresar nombre completo" required>
					            </div>
			    				
			    			</div> <!-- /.col-md-3 -->

			    			<div class="col-md-2">

			    				<div class="form-group">
			        				<label for="parentesco_miembro">PARENTESCO</label>
					                <input type="text" class="form-control" name="parentesco_miembro[]" placeholder="Ingresar parentesco">
					            </div>
			    				
			    			</div> <!-- /.col-md-2 -->

			    			<div class="col-md-2">

			    				<div class="form-group">
			        				<label for="celular_miembro">CELULAR</label><span class="text-danger">*</span>
					                <input type="number" class="form-control" name="celular_miembro[]" placeholder="Ingresar número de teléfono">
					            </div>
			    				
			    			</div> <!-- /.col-md-2 -->

			    			<div class="col-xs-2" style="padding-top: 25px;">

			    				<span class="btn btn-success addeventmore"><i class="fa fa-plus"></i></span>
			    				<span class="btn btn-danger removeeventmore"><i class="fa fa-minus"></i></span>
			    				
			    			</div> <!-- /.col-xs-2 -->

						</div>
					</div>
				</div>
			</div>		   

		</div> <!-- /.container-fluid -->

	</section>
	<!-- /.content -->

</div> <!-- /.content-wrapper -->



<script>
	
	$(document).ready(function (){

		var counter = 0;
		$(document).on("click", ".addeventmore", function(){

			var whole_extra_item_add = $('#whole_extra_item_add').html();
			// console.log(whole_extra_item_add);
			$(this).closest(".agregar_item").append(whole_extra_item_add);
			counter++;

		});

		$(document).on("click",'.removeeventmore', function(event){

			$(this).closest(".delete_whole_extra_item_add").remove();
			counter-= 1

		}); 

	});

</script>

@endsection