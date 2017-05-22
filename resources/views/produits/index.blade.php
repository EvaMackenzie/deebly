@extends('layouts.app')
@section('pageTitle', 'Produits')

@section('content')
    <div class="container">
        <h3 class="text-right">{{$renderProducts->total()}} produits dispo à la location</h3>

        @foreach($renderProducts as $product)
            @include('produits.renderProduits')
        @endforeach
        <div class="text-center">
            {{$renderProducts->links('vendor.pagination.productsPagination')}}
        </div>
    </div>

@endsection

@section('footer-scripts')

@endsection