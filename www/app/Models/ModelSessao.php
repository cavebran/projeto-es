<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSessao extends Model
{
    use HasFactory;

    protected $fillable = ['dataInicio', 'status', 'filme', 'sala'];
    public $timestamps = false;

    public function relFilmes() {
        return $this->hasOne('App\Models\ModelFilme', 'id', 'filme');
    }

    public function relSalas() {
        return $this->hasOne('App\Models\ModelSala', 'id', 'sala');
    }
}
