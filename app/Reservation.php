<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'product_id', 'user_product_id', 'locataire_id'
    ];

    /*public function products(){
        return $this->hasMany(Products::class);
    }*/

    public function products(){
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_product_id');
    }
}
