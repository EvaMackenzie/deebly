@extends('layouts.app')
@section('pageTitle', 'Creer un produit')

@section('content')
    <div class="container">
        <h1>Creer un produit</h1>
        @include('layouts.errors')
        <form method="post" action="/produits" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nameProduct" class="col-sm-2 control-label">Nom du produit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameProduct" name="nameProduct">
                </div>
            </div>

            <div class="form-group">
                    <label for="catProduct" class="col-sm-2 control-label">Catégorie</label>
                    <select class="col-sm-10" name="catProduct">
                        @foreach($allCat as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
            </div>


            {{--categories rajoutées--}}
           {{-- <div class="form-group">
                <label for="nameProduct" class="col-sm-2 control-label">Categories</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameCategories" name="nameCategories">
                </div>
            </div>--}}

            <div class="form-group">
                <label for="descProduct" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="descProduct" id="descProduct" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="priceProduct" class="col-sm-2 control-label">Prix</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="priceProduct"  name="priceProduct">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="pictureProduct">Image</label>
                <div class="col-sm-10">
                    <input type="file" id="pictureProduct" class="form-control" name="picture">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Soumettre</button>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('footer-scripts')
@endsection