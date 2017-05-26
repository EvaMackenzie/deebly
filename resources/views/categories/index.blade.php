@extends('layouts.app')
@section('pageTitle', 'Produits')

@section('content')
    <section class="section-white">
        <div class="container">
            <h1 class="text-center">Les catégories</h1>
            @foreach($allCategories as $categorie)
                <p>{{$categorie->name}}</p>
            @endforeach
        </div>

    </section>


@endsection

@section('footer-scripts')

@endsection