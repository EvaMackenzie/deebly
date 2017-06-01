@extends('layouts.app')
@section('pageTitle', $renderProduct->title)

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
                   {{-- <h1>{{$isReserved}}</h1>--}}
                    <p>Ajouter le {{$renderProduct->created_at->toFormattedDateString()}}</p>
                    <h1 class="show-product-title">{{$renderProduct->title}}</h1>
                    <p class="show-product-price">{{$renderProduct->price}}€</p>
                    <hr>
                    <p>{{$renderProduct->description}}</p>
                    @if($isReserved == 0)
                    <form method="post" action="/reservation" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="productReservation" value="{{$renderProduct->id}}">
                        <input type="hidden" name="authorProductReservation" value="{{$renderProduct->user_id}}">
                        <button type="submit" class="btn btn-primary btn-lg">Reserver !</button>
                    </form>
                     @else
                        <a class="btn disabled">Ce produit est déjà reservé</a>
                      @endif
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