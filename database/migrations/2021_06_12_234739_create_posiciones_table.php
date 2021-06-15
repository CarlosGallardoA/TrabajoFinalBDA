<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posiciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpaisl');
            $table->foreign('idpaisl')->references('idl')->on('paisesl');
            $table->integer('pj');
            $table->integer('g');
            $table->integer('e');
            $table->integer('p');
            $table->integer('gf');
            $table->integer('gc');
            $table->integer('puntos');
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
        Schema::dropIfExists('posiciones');
    }
}
