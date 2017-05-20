<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $renderProducts = Products::latest()->get();
        return view('produits.index', compact('renderProducts'));
    }

    public function show(Products $renderProduct)
    {

        //$renderProduct =  Products::find($id);
        return view('produits.show', compact('renderProduct'));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store() {
        //dd(request()->all());

        //$produit = new Products;
        $this->validate(request(), [
            'nameProduct' => 'required|max:10',
            'descProduct' => 'required',
            'priceProduct' => 'required',
        ]);



        Products::create([
            'title' => request('nameProduct'),
            'description' => request('descProduct'),
            'price' => request('priceProduct')
            //'user_id'  => Auth::user()->id
        ]);

        //Products::create(request(['title', 'description', 'price']));

        return redirect('/produits');
    }

}
