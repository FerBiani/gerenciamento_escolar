<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = ['email', 'nome', 'data_nascimento', 'nivel_id'];

    //relacionamentos
    public function nivel() {
        return $this->belongsTo('App\Nivel');
    }
}
