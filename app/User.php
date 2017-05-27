<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products(){
        return $this->hasMany('App\Products'); // pour page profil ( permet de lier deux modeles ss avoir a faire dappel permet dans controlleur.
        //affiche tous les annonces users etc
       /* $products = Auth::user()->product();
        foreach ($products as $product){
        }*/
    }
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
