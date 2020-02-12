<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    public function utente()
    {
        return $this->belongsTo('App\Utente', 'IdUtente');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'IdFuncionario');
    }
}
