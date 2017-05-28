<footer>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large  teal lighten-2">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a href="{{ url('/profil') }}" class="btn-floating teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Gerer mes produits"><i class="material-icons">zoom_in</i></a></li>
            <li><a href="{{ url('/reservation') }}" class="btn-floating teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Mes reservations"><i class="material-icons">shop_two</i></a></li>
            <li><a href="{{ url('/produits/create') }}" class="btn-floating teal lighten-2 tooltipped" data-position="left" data-delay="50" data-tooltip="Ajouter un produit"><i class="material-icons">library_add</i></a></li>
        </ul>
    </div>
    <div class="section-40 section-white">
        <div class="container-fluid">
            <p class="text-center">Copyright</p>
        </div>
    </div>
</footer>