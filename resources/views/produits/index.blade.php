@extends('layouts.app')
@section('pageTitle', 'Produits')

@section('content')
    <div class="container section-20">
        {{--<h3 class="text-right">{{$renderProducts->total()}} produits disponibles à la location</h3>--}}
        <div class="row">
            @foreach($renderProducts as $product)
                @include('produits.renderProduits')
            @endforeach
        </div>
        <div class="text-center">
            {{$renderProducts->links('vendor.pagination.productsPagination')}}
        </div>
    </div>

@endsection

@section('footer-scripts')

@endsection