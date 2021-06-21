<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelSala;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelSala $sala)
    {
        $sala->create([
            'id'                => '1A',
            'tipo'              => 'COMUM',
            'capacidade'        => '100',
            'intervaloMin'      => '600',
            'intervaloIdeal'    => '1200'
        ]);

        $sala->create([
            'id'                => '2A',
            'tipo'              => 'COMUM',
            'capacidade'        => '100',
            'intervaloMin'      => '600',
            'intervaloIdeal'    => '1200'
        ]);

        $sala->create([
            'id'                => '1D',
            'tipo'              => 'EQUIPADA',
            'capacidade'        => '80',
            'intervaloMin'      => '1200',
            'intervaloIdeal'    => '1800'
        ]);
    }
}
