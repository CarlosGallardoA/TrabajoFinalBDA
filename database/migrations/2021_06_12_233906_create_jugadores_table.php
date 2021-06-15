<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('jugador1');
            $table->string('jugador2');
            $table->string('jugador3');
            $table->string('jugador4');
            $table->string('jugador5');
            $table->string('jugador6');
            $table->string('jugador7');
            $table->string('jugador8');
            $table->string('jugador9');
            $table->string('jugador10');
            $table->string('jugador11');
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
        Schema::dropIfExists('jugadores');
    }
}
