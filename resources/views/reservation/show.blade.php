@extends('layouts.app')
@section('pageTitle', 'Reservation '.$renderReservation->products->title)

@section('content')
    <div class="section-40">

        <div class="container">
           {{--<form action="{{route('deleteProduit',['id'=>$renderReservation->id])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="submit" value="Supprimer">
            </form>--}}


            <div class="row">
                <div class="col-md-6">
                    <img src="/uploads/images/{{$renderReservation->products->picture_url}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h1 class="show-product-title">{{$renderReservation->products->title}}</h1>
                    <p class="show-product-price">{{$renderReservation->products->price}}€</p>
                    <hr>
                    <h4>Votre contact pour la reservation : </h4>
                    <div class="userView">
                        <a href="#!user"><img class="circle" src="{{ Gravatar::src($renderReservation->users->email) }}"></a>
                        <p class="black-text">{{ $renderReservation->users->name }}<br />{{ $renderReservation->users->email }}</p>
                    </div>
                    <form action="{{route('reservation.destroy',['id'=>$renderReservation->id])}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-primary red">Annuler ma reservation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection