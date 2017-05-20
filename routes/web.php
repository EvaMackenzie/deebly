<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('profil','ProfileController');

Route::get('/produits', 'ProductsController@index');
Route::get('/produits/create', 'ProductsController@create');
Route::get('/produits/{renderProduct}', 'ProductsController@show');
Route::post('/produits', 'ProductsController@store');

Route::resource('annonce','AnnonceController');