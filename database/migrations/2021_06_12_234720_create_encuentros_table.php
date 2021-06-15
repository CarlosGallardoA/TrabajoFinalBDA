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
            $table->integer('rematesl');
            $table->integer('rematesv');
            $table->integer('rematesarcol');
            $table->integer('rematesarcov');
            $table->string('posesionl');
            $table->string('posesionv');
            $table->integer('pasesl');
            $table->integer('pasesv');
            $table->string('precisionpasesl');
            $table->string('precisionpasesv');
            $table->integer('faltasl');
            $table->integer('faltasv');
            $table->integer('amarillasl');
            $table->integer('amarillasv');
            $table->integer('rojasl');
            $table->integer('rojasv');
            $table->integer('padelantadal');
            $table->integer('padelantadav');
            $table->integer('esquinal');
            $table->integer('esquinav');
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
