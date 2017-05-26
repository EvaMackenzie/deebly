@extends('layouts.app')
@section('pageTitle', 'Creer une catégorie')

@section('content')
    <div class="container">
        <h1>Creer une catégorie</h1>
        @include('layouts.errors')
        <form method="post" action="/categories" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nameCategorie" class="col-sm-2 control-label">Nom de la catégorie</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nameCategorie" name="nameCategorie">
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