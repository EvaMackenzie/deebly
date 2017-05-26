@extends("layouts.app")
@section('pageTitle', $renderProfil->name)

@section("content")
    <div class="section-40" >
        <div class="container section-white z-depth-2">
            <div class="custom-single-profile-container">
                <div class="custom-single-profile-row">
                    <div class="col-sm-4 custom-single-profile-pic">
                        <div class="">
                            <img src="{{ Gravatar::src($renderProfil->email, 400) }}" class="img-responsive center-block">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-single-profile-content">
                            <h4>{{$renderProfil->name}}</h4>
                            <h5><i class="small material-icons vmiddle">person_pin</i> Informations</h5>
                            <div class="profile-infos-margin">
                                <p>Nom : {{$renderProfil->name}}</p>
                                <p>Email : {{$renderProfil->email}}</p>
                                <p>Profil créé le : {{$renderProfil->created_at->toFormattedDateString()}}</p>
                                <p>Nombre de produits créé : </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="custom-single-profile-row">
                <div class="col s12">
                    <div class="card teal">
                        <div class="card-content white-text">
                            <span class="card-title text-center">Présentation</span>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut autem commodi debitis dicta distinctio dolores ea earum eligendi enim excepturi exercitationem facere facilis fugit illum inventore ipsa ipsum iste minima nihil officia quis, quod, quos reiciendis tempora velit voluptas voluptatibus. Amet architecto et fuga perspiciatis sit vel veniam voluptatum!</p>
                        </div>
                        <div class="card-action text-center">
                            <a href="#" class="btn grey lighten-5 grey-text">Ajouter ce profil aux favoris</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection