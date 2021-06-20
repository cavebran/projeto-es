<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_filmes', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('diretor', 255);
            $table->string('titulo', 255);
            $table->integer('duracao')->comment('em segundos');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_filmes');
    }
}
