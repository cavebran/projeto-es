<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSessao extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSessao';

    public function relFilmes() {
        return $this->hasOne('App\Models\ModelFilme', 'idFilme', 'filme');
    }

    public function relSalas() {
        return $this->hasOne('App\Models\ModelSala', 'idSala', 'sala');
    }

}
