<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operados', function (Blueprint $table) {
            $table->id('idOperados');
            $table->string('descripcionOp');
            $table->string('secuelasOp')->nullable();
            $table->string('txOp')->nullable();
            $table->unsignedBigInteger('estOp_id')->unique();

            $table->foreign('estOp_id')->references('idEstudiante')->on('estudiantes')->onDelete('cascade');
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
        Schema::dropIfExists('operados');
    }
}
