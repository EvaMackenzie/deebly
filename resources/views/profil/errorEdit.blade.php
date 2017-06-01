@extends('layouts.app')
@section('pageTitle', 'Editer un profil')


@section("content")
    <section class="section-40">
        <div class="container">
            <div class="alert alert-danger">
                <strong>Attention !</strong> Vous ne pouvez pas modifier ce profil
            </div>
            <a href="/profil" class="text-center btn btn-primary">Retour au profil</a>
            <a href="/produits" class="text-center btn btn-primary">Retour aux produits</a>
        </div>
    </section>

@endsection

@section('footer-scripts')@endsection