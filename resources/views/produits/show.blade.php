@extends('layouts.app')
@section('pageTitle', '1 produit')

@section('content')
    <div class="section-40">

        <div class="container">
            {{--<form action="{{route('deleteProduit',['id'=>$renderProduct->id])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="submit" value="Supprimer">
            </form>--}}

            
            <div class="row">
                <div class="col-md-6">
                    <img src="/uploads/images/{{$renderProduct->picture_url}}" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <p>Ajouter le {{$renderProduct->created_at->toFormattedDateString()}}</p>
                    <h1 class="show-product-title">{{$renderProduct->title}}</h1>
                    <p class="show-product-price">{{$renderProduct->price}}€</p>
                    <hr>
                    <p>{{$renderProduct->description}}</p>
                    <a href="#" class="btn btn-primary btn-lg">Reserver !</a>
                </div>
            </div>
            <div class="row">

            </div>
            </div>
        </div>
    </div>
@endsection


@section('footer-scripts')
@endsection