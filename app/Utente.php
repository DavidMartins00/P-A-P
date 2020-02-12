<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{   
    public function visita()
    {
        return $this->hasMany('App\Visita');
    }
}
