@extends("layouts.app")

@section("content")
    <div class="section-40">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#test1">Mon profil</a></li>
                        <li class="tab col s3"><a href="#test2">Mes annonces</a></li>
                        <li class="tab col s3"><a href="#test3">Mes locations</a></li>
                        <li class="tab col s3"><a href="#test4">Statistiques</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <div class="section-40">
                        <div class="col-sm-3">
                            <img src="{{ Gravatar::src($myProfil->email, 200) }}" class="img-responsive center-block">
                            <div class="profile-sidebar-button">
                                <a class="waves-effect waves-light btn btn-block white-text"><i class="material-icons left">mode_edit</i>Modifer</a>
                                <a class="waves-effect waves-light btn btn-block red white-text"><i class="material-icons left">delete</i>Supprimer</a>
                            </div>
                            <div class="">
                                <p>Profil créé le :</p>
                                <p>{{$myProfil->created_at->toFormattedDateString()}}</p>
                                <p>Dernière modification :</p>
                                <p>{{$myProfil->updated_at->toFormattedDateString()}}</p>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div>
                                <h4 class="text-center">{{$myProfil->name}}</h4>
                                <h5><i class="small material-icons vmiddle">person_pin</i> Informations</h5>
                                <div class="profile-infos-margin">
                                    <p>Nom : {{$myProfil->name}}</p>
                                    <p>Anniversaire :</p>
                                    <p>Email : {{$myProfil->email}}</p>
                                    <p>Téléphone : </p>

                                </div>
                            </div>
                            <div class="profile-infos-bloc">
                                <h5><i class="small material-icons vmiddle">person_pin</i> Description</h5>
                                <div class="profile-infos-margin">
                                    <p class="text-justify"></p>
                                </div>
                            </div>
                            <div class="profile-infos-bloc">
                                <h5><i class="small material-icons vmiddle">person_pin</i> Contact</h5>
                                <div class="profile-infos-margin">
                                    <p>Adresse :</p>
                                    <p>Code postal :</p>
                                    <p>Ville : </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="test2" class="col s12">
                    <div class="section-40">
                    <table class="striped responsive-table">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date d'ajout</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                            <td>$0.87</td>
                        </tr>
                        </tbody>
                    </table>
                        </div>
                </div>
                <div id="test3" class="col s12">Test 3</div>
                <div id="test4" class="col s12">Test 4</div>
            </div>
        </div>
    </div>

@endsection