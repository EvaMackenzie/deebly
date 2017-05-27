<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'title', 'description', 'picture_url', 'price', 'user_id', 'categorie_id'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //model ->lien des produits aux categories // $comment->categories->categories
    public function categories(){
        return $this->belongsTo('App\Categories', 'categorie_id');
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class, 'product_id');
    }
}
