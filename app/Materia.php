<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';

    protected $fillable = ['nome'];

    public function usuarios() {
        return $this->belongsToMany('App\Usuario', 'usuario_materia');
    }
}
