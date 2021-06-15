<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiseslTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paisesl', function (Blueprint $table) {
            $table->bigIncrements('idl');
            $table->string('imgl');
            $table->string('nombrel');
            $table->string('sede');
            $table->unsignedBigInteger('idjugadoresl');
            $table->foreign('idjugadoresl')->references('id')->on('jugadores');
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
        Schema::dropIfExists('paisesl');
    }
}
