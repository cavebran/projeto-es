<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelFuncionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelFuncionario $func)
    {
        $func->create([
            'id'                => '11122233344',
            'nome'              => 'Juliana Schwartz',
            'senha'             => '123',
            'cargo'             => 'GERENTE'
        ]);

        $func->create([
            'id'                => '11122233355',
            'nome'              => 'Guilherme Brante',
            'senha'             => '123',
            'cargo'             => 'GERENTE'
        ]);

        $func->create([
            'id'                => '11122233366',
            'nome'              => 'Guilherme Milani',
            'senha'             => '123',
            'cargo'             => 'GERENTE'
        ]);

        $func->create([
            'id'                => '11122233377',
            'nome'              => 'Lucca Marques',
            'senha'             => '123',
            'cargo'             => 'GERENTE'
        ]);

        $func->create([
            'id'                => '11122233388',
            'nome'              => 'Bolivia',
            'senha'             => '123',
            'cargo'             => 'SEGURANCA'
        ]);

        $func->create([
            'id'                => '11122233399',
            'nome'              => 'Marcos Santana',
            'senha'             => '123',
            'cargo'             => 'LIMPEZA'
        ]);

        $func->create([
            'id'                => '11122233300',
            'nome'              => 'Gabriel Kyomen',
            'senha'             => '123',
            'cargo'             => 'ATENDENTE'
        ]);
    }
}