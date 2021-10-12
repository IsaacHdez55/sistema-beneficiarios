<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();

            // Información Personal del Beneficiario
            $table->string('identificacion')->unique();
            $table->string('nombre_completo');
            $table->string('celular')->nullable();
            $table->string('sisben')->nullable();

            // CARACTERISTICAS DE UBICACIÓN Y TRANSPORTE AL PREDIO
            $table->string('municipio');
            $table->string('vereda');
            $table->string('name_predio_finca')->nullable();
            $table->string('norte')->nullable();
            $table->string('este')->nullable();
            $table->string('cota')->nullable();
            $table->string('predio_riesgo')->nullable();
            $table->string('acceso_vehicular')->nullable();
            $table->string('transporte_mular')->nullable();
            $table->string('transporte_fluvial')->nullable();
            $table->string('transporte_vehiculo')->nullable();
            $table->string('transporte_hombre')->nullable();

            // DIAGNOSTICO SANITARIO DE LA VIVIENDA
            $table->string('unidad_sanitaria')->nullable();
            $table->string('muros')->nullable();
            $table->string('techo')->nullable();
            $table->string('pisos')->nullable();
            $table->string('sistema_septico')->nullable();
            $table->string('dimensiones_septico_alto')->nullable();
            $table->string('dimensiones_septico_ancho')->nullable();
            $table->string('dimensiones_septico_laro')->nullable();
            $table->string('dimensiones_septico_material')->nullable();
            $table->string('estado_septico')->nullable();
            $table->text('estado_septico_porque')->nullable();
            $table->string('observaciones_sanitario')->nullable();

            //ESQUEMA DE LOCALIZACION DE LA VIVIENDA Y DENTRO DEL PREDIO
            $table->string('image_esquema')->nullable();
            $table->text('observaciones_esquema')->nullable();

            // PRUEBA DE PERMEABILIADAD
            $table->string('permeabilidad_tiempo')->nullable();
            $table->text('permeabilidad_observaciones')->nullable();

            // RESGISTRO FOTOGRÁFICO PRUEBA PERMEABILIDAD
                                                                                            
            $table->string('permeabilidad_image1')->nullable();
            $table->string('permeabilidad_image2')->nullable();

            // RESGISTRO FOTOGRÁFICO CONDICIONES ACTUALES DE LA VIVIENDA - UNIDAD SANITARIA                                                                              
            $table->string('condiciones_actuales_image1')->nullable();
            $table->string('condiciones_actuales_image2')->nullable();
            $table->string('condiciones_actuales_image3')->nullable();
            $table->string('condiciones_actuales_image4')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
}
