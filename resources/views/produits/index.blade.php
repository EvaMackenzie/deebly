@extends('layouts.app')
@section('pageTitle', 'Produits')

@section('content')
    <div class="container">
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