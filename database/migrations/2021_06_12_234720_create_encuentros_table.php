<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuentros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpaisl');
            $table->foreign('idpaisl')->references('idl')->on('paisesl');
            $table->unsignedBigInteger('idpaisv');
            $table->foreign('idpaisv')->references('idv')->on('paisesv');
            $table->integer('golesl')->nullable();
            $table->integer('golesv')->nullable();
            $table->string('fecha');
            $table->integer('rematesl')->nullable();
            $table->integer('rematesv')->nullable();
            $table->integer('rematesarcol')->nullable();
            $table->integer('rematesarcov')->nullable();
            $table->string('posesionl')->nullable();
            $table->string('posesionv')->nullable();
            $table->integer('pasesl')->nullable();
            $table->integer('pasesv')->nullable();
            $table->string('precisionpasesl')->nullable();
            $table->string('precisionpasesv')->nullable();
            $table->integer('faltasl')->nullable();
            $table->integer('faltasv')->nullable();
            $table->integer('amarillasl')->nullable();
            $table->integer('amarillasv')->nullable();
            $table->integer('rojasl')->nullable();
            $table->integer('rojasv')->nullable();
            $table->integer('padelantadal')->nullable();
            $table->integer('padelantadav')->nullable();
            $table->integer('esquinal')->nullable();
            $table->integer('esquinav')->nullable();
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
        Schema::dropIfExists('encuentros');
    }
}
