<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$renderProducts = Products::latest()->get();
        $renderProducts = Products::latest()->paginate(6);
        //dd($renderProducts);
        return view('produits.index', compact('renderProducts'));
    }

    public function show($id)
    {

        $renderProduct =  Products::findOrFail($id);
        return view('produits.show', compact('renderProduct'));
    }

    public function create()
    {
        return view('produits.create');
    }

    public function store()
    {
        //dd(request()->all());
        $user = Auth::user()->id;
        //$produit = new Products;
        $this->validate(request(), [
            'nameProduct' => 'required|max:30',
            'descProduct' => 'required',
            'priceProduct' => 'required',
            'picture' => 'required',
        ]);

        $file = Input::file('picture');
        $extension = $file->getClientOriginalExtension();//
        $filename = rand(1111111, 9999999) . '.' . $extension;

        Image::make($file)->save(public_path('/uploads/images/' . $filename));


        Products::create([
            'title' => request('nameProduct'),
            'description' => request('descProduct'),
            'price' => request('priceProduct'),
            'picture_url' => $filename,
            'user_id' => $user,
            //'user_id'  => Auth::user()->id
        ]);

        //Products::create(request(['title', 'description', 'price']));

        return redirect('/produits');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->id;
        $product   = Products::find($id);
        //dd($user);
        if ($user == $product->user_id) {
            return view('produits.edit')->with(compact('product'));
        } else {
            return view('produits.errorEdit');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nameProduct' => 'required|max:30',
            'descProduct' => 'required',
            'priceProduct' => 'required',
        ]);
        $productUpdate = Products::findOrFail($id);

        $productUpdate->update([
            'title' => $request->nameProduct,
            'description' => $request->descProduct,
            'price' => $request->priceProduct,
        ]);
        return redirect()->route('produits.show', $productUpdate);
    }



    public function destroy($id)
    {
        //$id_product = $id;
        //$products = Products::where('id', '=', $id)->get();

        /*foreach ($products as $product) {
            $image_product = $product->picture_url;
            $path_image = public_path() . '/uploads/images/' . $image_product;
            unlink($path_image);

        }*/
        $products = Products::find($id);
        $products->delete();
        return back();

    }
}
/*


}
}
