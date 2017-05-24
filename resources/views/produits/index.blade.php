@extends('layouts.app')
@section('pageTitle', 'Produits')

@section('content')
    <div class="container">
        <h3 class="text-right">{{$renderProducts->total()}} produits dispo à la location</h3>
        <div class="row">
            @foreach($renderProducts as $product)
                @include('produits.renderProduits')
            @endforeach
        </div>
        <div class="text-center">
            {{$renderProducts->links('vendor.pagination.productsPagination')}}
        </div>
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large  teal lighten-2">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Gerer mes produits"><i class="material-icons">zoom_in</i></a></li>
            <li><a class="btn-floating teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Mes reservations"><i class="material-icons">shop_two</i></a></li>
            <li><a href="{{ url('/produits/create') }}" class="btn-floating teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Ajouter un produit"><i class="material-icons">library_add</i></a></li>
        </ul>
    </div>
@endsection

@section('footer-scripts')

@endsection