<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedades', function (Blueprint $table) {
            $table->id('idEnf');
            $table->string('nomEnf');
            $table->string('descripcionEnf');
            $table->string('txEnf')->nullable();
            $table->string('nomMedico')->nullable();
            $table->string('telMedico')->nullable();
            $table->unsignedBigInteger('estEn_id')->unique();

            $table->foreign('estEn_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('enfermedades');
    }
}
