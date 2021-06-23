<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\ModelSessao;

class SessaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelSessao $sessao)
    {
        $sessao->create([
            'dataInicio'    =>'2021-06-30 22:00:00',
            'status'        =>'NAO_INICIADA',
            'filme'         => 2,
            'sala'          =>'1A'
        ]);

        $sessao->create([
            'dataInicio'    =>'2021-06-30 15:00:00',
            'status'        =>'NAO_INICIADA',
            'filme'         => 3,
            'sala'          =>'2A'
        ]);

        $sessao->create([
            'dataInicio'    =>'2021-06-28 20:30:00',
            'status'        =>'NAO_INICIADA',
            'filme'         => 5,
            'sala'          =>'1D'
        ]);

        $sessao->create([
            'dataInicio'    =>'2021-06-28 10:45:00',
            'status'        =>'NAO_INICIADA',
            'filme'         => 4,
            'sala'          =>'1A'
        ]);

        $sessao->create([
            'dataInicio'    =>'2021-06-29 12:30:00',
            'status'        =>'NAO_INICIADA',
            'filme'         => 1,
            'sala'          =>'1D'
        ]);

        $sessao->create([
            'dataInicio'    =>'2021-06-29 22:00:00',
            'status'        =>'NAO_INICIADA',
            'filme'         => 2,
            'sala'          =>'1A'
        ]);
        
    }
}
