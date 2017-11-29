<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = "tareas";

    protected $fillable = [
        'name'
    ];


    public function articulos()
    {
        return $this->belongsToMany('App\Articulo');
    }
}
