<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadreEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padre_estudiantes', function (Blueprint $table) {
            $table->id('idPadre');
            $table->string('nombrePadre');
            $table->string('apellidoPadre');
            $table->string('numeroDuiPadre');
            $table->string('profesionPadre');
            $table->string('lugarTrabajoPadre');
            $table->string('telefonoPadre');
            $table->string('correoPadre');
            $table->string('direccionPadre');
            $table->unsignedBigInteger('estuPa_id')->unique();

            $table->foreign('estuPa_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('padre_estudiantes');
    }
}
