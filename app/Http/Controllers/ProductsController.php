<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
use App\Reservation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        Lang::getLocale();
        App::setLocale('fr');
        setlocale(LC_TIME, 'fr');
        //Carbon::setLocale('fr');
        Carbon::setLocale(config('app.locale'));
    }

    public function index()
    {
        //$renderProducts = Products::latest()->get();
        $renderProducts = Products::latest()->with('categories')->paginate(6);
       //$renderProducts->load('categories');
        //dd($renderProducts);
        return view('produits.index', compact('renderProducts'));
    }

    public function show($id)
    {

        $renderProduct =  Products::findOrFail($id);
        //dd($renderProduct->id);
        $reservation = Reservation::where('product_id', $renderProduct->id)->first();
        //dd($reservation);
        if (empty($reservation)) {
            $isReserved = 0;
        } else {
            $isReserved = 1;
        }
        return view('produits.show', compact('renderProduct', 'isReserved'));
    }

    public function create()
    {
        $allCat = Categories::all();
        return view('produits.create', compact('allCat'));
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
            'catProduct' => 'required',
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
            'categorie_id' => request('catProduct'),
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
        $allCat = Categories::all();
        //dd($user);
        if ($user == $product->user_id) {
            return view('produits.edit')->with(compact('product', 'allCat'));
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
            'catProduct' => 'required',
        ]);
        $productUpdate = Products::findOrFail($id);

        $productUpdate->update([
            'title' => $request->nameProduct,
            'description' => $request->descProduct,
            'price' => $request->priceProduct,
            'categorie_id' => $request->catProduct,

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
