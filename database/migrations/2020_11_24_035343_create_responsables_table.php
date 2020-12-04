<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id('idresponsable');
            $table->string('nombreRes');
            $table->string('apellidoRes');
            $table->string('numeroDuiRes');
            $table->string('profesionRes');
            $table->string('lugarTrabajoRes');
            $table->string('telefonoRes');
            $table->string('correoRes');
            $table->string('direccionRes');
            $table->unsignedBigInteger('estuRes_id')->unique();

            $table->foreign('estuRes_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('responsables');
    }
}
