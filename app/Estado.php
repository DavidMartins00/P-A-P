<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function utente()
    {
        return $this->hasMany('App/Utente','id');
    }
}
