<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'titre', 'jedjej', 'djehdep',
    ];

    function user(){
        return $this->belongsTo(App\User);
    }
}
