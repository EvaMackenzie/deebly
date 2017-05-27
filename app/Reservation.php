<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'product_id', 'user_product_id', 'locataire_id'
    ];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
