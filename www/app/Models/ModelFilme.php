<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFilme extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function relSessaos() {
        return $this->hasMany('App\Models\ModelSessao', 'filme');
    }
}
