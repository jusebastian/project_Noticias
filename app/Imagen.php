<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

    protected $table = "imagens";

    /**
     * 
     * @var array
     */

     protected $fillable = [
         'name', 'article_id'
     ];


     public function articulo(){

        return $this->belongsTo('App\Articulo');
     }
}
