<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_salas', function (Blueprint $table) {
            $table->string('id', 8)->primary()->comment('numero da sala');
            $table->enum('tipo', ['COMUM', 'EQUIPADA']);
            $table->integer('capacidade');
            $table->integer('intervaloMin')->comment('em segundos');
            $table->integer('intervaloIdeal')->comment('em segundos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_salas');
    }
}
