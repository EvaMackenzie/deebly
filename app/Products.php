<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'title', 'description', 'picture_url', 'price', 'user_id', 'categorie_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    //model ->lien des produits aux categories
    public function categories(){
        return $this->belongsTo('App\Categories');
    }
}
