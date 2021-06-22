<?php

namespace App\Models;

use App\Models\ModelFilme;
use App\Models\ModelSala;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSessao extends Model
{
    use HasFactory;

    protected $fillable = ['dataInicio', 'status', 'filme', 'sala'];
    public $timestamps = false;

    public function relFilmes($id) {
        $filme = ModelFilme::find($id)->toArray();
        return $filme;
    }

    public function relSalas($id) {
        $sala = ModelSala::find($id)->toArray();
        return $sala;
    }
}
