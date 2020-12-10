<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mental', function (Blueprint $table) {
            $table->id('idMental');
            $table->string('nomMedHipera');
            $table->string('desProbAprendizaje')->nullable();
            $table->string('desProbMedicoG')->nullable();
            $table->unsignedBigInteger('estM_id')->unique();

            $table->foreign('estM_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('mental');
    }
}
