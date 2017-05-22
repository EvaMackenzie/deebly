@extends('layouts.app')
@section('pageTitle', '1 produit')

@section('content')
    <div class="section-40">
        <div class="container">
            <h1>{{$renderProduct->title}}</h1>
            <p>Ajouter le {{$renderProduct->created_at->toFormattedDateString()}}</p>
            <hr>
            
            <div class="row">
                <div class="col-md-6">
                    <img src="/uploads/images/{{$renderProduct->picture_url}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h2>Description</h2>
                    <hr>
                    <p>{{$renderProduct->description}}</p>
                </div>
                <div class="col-md-4">
                    <h2>Prix</h2>
                    <hr>
                    <p>{{$renderProduct->price}}€</p>
                    <a href="#" class="btn btn-primary btn-lg">Reserver !</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer-scripts')
@endsection