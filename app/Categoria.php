<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    // protected $fillable = ['nombre_categoria'];
    public $timestamps = false;
    

    public function tareas()
    {
        return $this->hasMany(Tarea::class);
        // return $this->hasMany('App\Tarea');
    }
}
