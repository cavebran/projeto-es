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
        Schema::create('sessaos', function (Blueprint $table) {
            $table->increments('idSessao');
            $table->dateTime('dataInicio');
            $table->enum('status', ['NAO_INICIADA','EM_ANDAMENTO','ATRASADA','FINALIZADA']);
            $table->integer('duracaoTotal')->default(null)->nullable();
            $table->integer('filme');
            $table->foreign('filme')->references('idFilme')->on('filmes')->onUpdate('cascade');
            $table->string('sala', 8);
            $table->foreign('sala')->references('idSala')->on('salas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessaos');
    }
}
