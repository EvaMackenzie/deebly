<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $mesReservations = Reservation::latest()->where('locataire_id', $user)->get();
        //dd($mesReservations);
        return view('reservation.index', compact('mesReservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //dd(request()->all());
        $user = Auth::user()->id;
        //$produit = new Products;
        $this->validate(request(), [
            'productReservation' => 'required',
            'authorProductReservation' => 'required',

        ]);
        Reservation::create([
            'product_id' => request('productReservation'),
            'user_product_id' => request('authorProductReservation'),
            'locataire_id' => $user,
        ]);

        return redirect('/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user()->id;
        $renderReservation =  Reservation::findOrFail($id);
        //dd($renderReservation->locataire_id);
        if($user == $renderReservation->locataire_id) {
            return view('reservation.show', compact('renderReservation'));
        } else {
            return view('reservation.error');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Reservation::find($id);
        $products->delete();
        $user = Auth::user()->id;
        $mesReservations = Reservation::latest()->where('locataire_id', $user)->get();
        //dd($mesReservations);
        return redirect()->route('reservation.index', compact('mesReservations'));
    }
}
