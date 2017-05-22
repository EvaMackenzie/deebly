<div class="well well-lg">
    <a href="/produits/{{$product->id}}">
        <h2>{{$product->title}}</h2>
    </a>
    <p>{{$product->created_at->diffForHumans() }}</p>
    <img src="/uploads/images/{{$product->picture_url}}" alt="">

    @if(Auth::user()->id == $product->user_id){{--test si auther de l'annonce est l'utilisateur connecté ( affiche button--}}
        <form action="{{route('deleteProduit',['id'=>$product->id])}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Supprimer">
        </form>
    @endif
</div>