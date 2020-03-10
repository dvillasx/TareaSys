<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
