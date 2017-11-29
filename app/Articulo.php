<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Articulo extends Model
{
    //use Sluggable;

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    /*public function sluggable()
    {
        return [
            'slug' ];
    }*/
    
    protected $table = "articulos";
    //Permite obtener campos y cuales pueden ser mostrados

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'titulo','contenido','category_id','user_id'
    ];

    //RELACIONES 
    
    /**
     * 
     * Establece la relacion en modo inverso 
     */

     public function categoria(){

        return $this->belongsTo('App\Categoria');
     }

     /**
     * 
     * Creando la relacion de uno a muchos con User de forma inversa
     * 
     */

     public function user(){
         return $this->belongsTo('App\User');
     }


     public function imagenes(){
        return $this->hasMany('App\Imagen');
    }

    public function tareas(){

        return $this->belongsToMany('App\Tarea');
    }


}
