<div class="well well-lg">
    <a href="/produits/{{$product->id}}">
        <h2>{{$product->title}}</h2>
    </a>
    <p>{{$product->created_at->diffForHumans() }}</p>
</div>