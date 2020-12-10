<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_salud', function (Blueprint $table) {
            $table->id('idGeneral');
            $table->string('tipoSangre');
            $table->string('peso');
            $table->string('talla');
            $table->unsignedBigInteger('estGS_id')->unique();

            $table->foreign('estGS_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('general_salud');
    }
}
