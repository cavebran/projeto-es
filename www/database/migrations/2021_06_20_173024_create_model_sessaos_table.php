<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelSessaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_sessaos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dataInicio');
            $table->enum('status', ['NAO_INICIADA','EM_ANDAMENTO','ATRASADA','FINALIZADA']);
            $table->integer('duracaoTotal')->default(null)->nullable();
            $table->integer('filme');
            $table->foreign('filme')->references('id')->on('model_filmes')->onUpdate('cascade');
            $table->string('sala', 8);
            $table->foreign('sala')->references('id')->on('model_salas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_sessaos');
    }
}
