{{--<div class="well well-lg">
    <a href="/produits/{{$product->id}}">
        <h2>{{$product->title}}</h2>
    </a>
    <p>{{$product->created_at->diffForHumans() }}</p>
    <img src="/uploads/images/{{$product->picture_url}}" alt="">

    @if(Auth::user()->id == $product->user_id)--}}{{--test si auther de l'annonce est l'utilisateur connecté ( affiche button--}}{{--
        <form action="{{route('deleteProduit',['id'=>$product->id])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Supprimer">
        </form>
    @endif
</div>--}}

<div class="col-md-4">
    <div class="card">
        <div class="card-image card-image-crop">
            <span class="card-image-helper"></span>
            <img src="/uploads/images/{{$product->picture_url}}" class="card-image-vertical">
            {{--<span class="card-title">{{$product->title}}</span>
            <a class="btn-floating halfway-fab waves-effect waves-light teal" href="/produits/{{$product->id}}"><i class="material-icons">visibility</i></a>
       --}} </div>
        <div class="card-content">
            <div class="card-content-title">
                <a href="{{route('produits.show',$product)}}"><h3>{{$product->title}}</h3></a>
            </div>
            <p>{{$product->created_at->diffForHumans() }}</p>
            <p>{{$product->price}}€</p>


            <p>{{$product->categories->name}}</p>
            <p>{{$product->user->name}}</p>

        </div>
       {{-- <div class="card-action">
            <a href="/produits/{{$product->id}}">Voir</a>
            --}}{{--<a href="#">Supprimer</a>--}}{{--
            <form action="{{route('deleteProduit',['id'=>$product->id])}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" name="submit" value="Supprimer">
            </form>
        </div>--}}
        <div class="card-action card-action-custom">
            <a href="#" class=""><i class="material-icons">add</i></a>
            <a href="#" class="pull-right card-action-link">Lire plus</a>
        </div>
    </div>
</div>