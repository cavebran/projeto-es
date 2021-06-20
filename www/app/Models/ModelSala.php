<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSala extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSala';

    public function relSessaos() {
        return $this->hasMany('App\Models\ModelSessao', 'sala');
    }

}
