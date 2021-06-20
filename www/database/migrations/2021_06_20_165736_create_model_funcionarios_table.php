<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_funcionarios', function (Blueprint $table) {
            $table->string('cpfFunc', 11)->primary();
            $table->string('nome', 255);
            $table->string('senha', 32);
            $table->enum('cargo', ['GERENTE', 'ATENDENTE', 'LIMPEZA', 'SEGURANCA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_funcionarios');
    }
}