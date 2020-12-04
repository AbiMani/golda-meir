<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadreEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madre_estudiantes', function (Blueprint $table) {
            $table->id('idMadre');
            $table->string('nombreMadre');
            $table->string('apellidoMadre');
            $table->string('numeroDuiMadre');
            $table->string('profesionMadre');
            $table->string('lugarTrabajoMadre');
            $table->string('telefonoMadre');
            $table->string('correoMadre');
            $table->string('direccionMadre');

            $table->unsignedBigInteger('estuMa_id')->unique();

            $table->foreign('estuMa_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('madre_estudiantes');
    }
}
