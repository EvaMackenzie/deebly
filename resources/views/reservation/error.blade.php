@extends('layouts.app')
@section('pageTitle', 'Editer un produit')


@section("content")
    <section class="section-40">
        <div class="container">
            <div class="alert alert-danger">
                Vous n'avez pas reservé ce produit
            </div>
            <a href="/profil" class="text-center btn btn-primary">Retour au profil</a>
            <a href="/produits" class="text-center btn btn-primary">Retour aux produits</a>
            <a href="/reservation" class="text-center btn btn-primary">Retour à mes reservations</a>
        </div>
    </section>

@endsection

@section('footer-scripts')@endsection