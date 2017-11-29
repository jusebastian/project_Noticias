<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{


    protected $table = "categorias";

    /**
     * 
     * @var array 
     */
    protected $fillable = [
        'name'
    ];


    //modelo categoria se va a relacionar con los articulos

    public function articulos(){

        return $this->hasMany('App\Articulo');
    }

}
