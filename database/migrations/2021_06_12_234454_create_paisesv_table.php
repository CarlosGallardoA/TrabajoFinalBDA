<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaisesvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paisesv', function (Blueprint $table) {
            $table->bigIncrements('idv');
            $table->string('imgv');
            $table->string('nombrev');
            $table->unsignedBigInteger('idjugadoresv');
            $table->foreign('idjugadoresv')->references('id')->on('jugadores');
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
        Schema::dropIfExists('paisesv');
    }
}
