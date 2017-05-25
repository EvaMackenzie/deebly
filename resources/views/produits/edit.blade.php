@extends('layouts.app')
@section('pageTitle', 'Editer un produit')


@section("content")
    <div class="container">
        <h1>Editer le produit {{$product->title}}</h1>
        @include('layouts.errors')
        <form method="post" action="{{route('produits.update', $product)}}" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="nameProduct" class="col-sm-2 control-label">Nom du produit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameProduct" name="nameProduct" value="{{$product->title}}">
                </div>
            </div>
            <div class="form-group">
                <label for="descProduct" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="descProduct" id="descProduct" class="form-control">{{$product->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="priceProduct" class="col-sm-2 control-label">Prix</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="priceProduct"  name="priceProduct" value="{{$product->price}}">
                </div>
            </div>

            {{--<div class="form-group">
                <label class="col-sm-2 control-label" for="pictureProduct">Image</label>
                <div class="col-sm-10">
                    <input type="file" id="pictureProduct" class="form-control" name="picture">
                </div>
            </div>--}}
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Appliquer les modifications</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer-scripts')@endsection