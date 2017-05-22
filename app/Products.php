<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'title', 'description', 'picture_url', 'price', 'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
