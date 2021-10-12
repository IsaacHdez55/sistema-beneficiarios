<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries_families', function (Blueprint $table) {
            $table->id();

            // Información Miembros del hogar
            $table->integer('beneficiaries_id');
            $table->string('tipo_identificacion')->comment('CC (Cedula Ciudadania), TI (Tarjeta De Identidad), RC (Registro Civil)');
            $table->string('identificacion_miembro')->unique();
            $table->string('nombre_completo_miembro');
            $table->string('celular_miembro')->nullable();
            $table->string('parentesco_miembro')->nullable();

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
        Schema::dropIfExists('beneficiaries_families');
    }
}
