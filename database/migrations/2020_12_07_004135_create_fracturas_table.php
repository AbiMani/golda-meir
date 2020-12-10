<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFracturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fracturas', function (Blueprint $table) {
            $table->id('idFractura');
            $table->string('areaAfectada');
            $table->string('secuelaFrac');
            $table->string('txFrac')->nullable();
            $table->unsignedBigInteger('estFr_id')->unique();

            $table->foreign('estFr_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('fracturas');
    }
}
