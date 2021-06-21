<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelFilme;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelFilme $filme)
    {
        $filme->create([
            'diretor'   =>'Lana Wachowski e Lilly Wachowski',
            'titulo'    =>'Matrix 3',
            'duracao'   =>'7740'
        ]);

        $filme->create([
            'diretor'   =>'John Lasseter',
            'titulo'    =>'Carros 2',
            'duracao'   =>'7200'
        ]);

        $filme->create([
            'diretor'   =>'Alfonso Cuarón',
            'titulo'    =>'Harry Potter e o Prisioneiro de Azkaban',
            'duracao'   =>'8520'
        ]);

        $filme->create([
            'diretor'   =>'Gino Nichele',
            'titulo'    =>'Barbie e o Castelo de Diamante',
            'duracao'   =>'4740'
        ]);

        $filme->create([
            'diretor'   =>'Christopher Nolan',
            'titulo'    =>'Interstellar',
            'duracao'   =>'10140'
        ]);

    }
}
