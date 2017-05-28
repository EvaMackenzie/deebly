<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deebly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('home/css/icomoon.css') }}">
    <!-- Simple Line Icons-->
    <link rel="stylesheet" href="{{ asset('home/css/simple-line-icons.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
    <!-- Salvattore -->
    <link rel="stylesheet" href="{{ asset('home/css/salvattore.css') }}">
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <!-- Modernizr JS -->
    <script src="{{ asset('home/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('home/js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>

<div id="fh5co-offcanvass">
    <ul>
        <li><a href="/" data-nav-section="home">Accueil</a></li>
        @if (Route::has('login'))
            @if (Auth::check())
                <li><a href="{{ url('/produits') }}">Accès aux locations</a></li>
            @else
                <li><a href="{{ url('/login') }}">Se connecter</a></li>
                <li> <a href="{{ url('/register') }}">S'inscrire</a></li>
            @endif
        @endif
        <li><a href="">Qui sommes-nous ?</a></li>
        <li><a href="{{ url('/mentions-legales') }}">Mentions légales</a></li>
        @if (Route::has('login'))
            @if (Auth::check())
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: darkred;">
                        Se deconnecter
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        @endif
        {{--<li><a href="#" data-nav-section="features">Features</a></li>
        <li><a href="#" data-nav-section="design">Design</a></li>
        <li><a href="#" data-nav-section="testimonies">Testimonies</a></li>
        <li><a href="#" data-nav-section="products">Products</a></li>
        <li><a href="#" data-nav-section="benefits">Benefits</a></li>
        <li><a href="#" data-nav-section="pricing">Pricing</a></li>
        <li><a href="#" data-nav-section="faqs">FAQs</a></li>--}}
    </ul>
    <h3 class="fh5co-lead">Suivez nous !</h3>
    <p class="fh5co-social-icons">
        <a href="#"><i class="icon-twitter"></i></a>
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
    </p>
</div>

<div id="fh5co-menu" class="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><span>Menu</span> <i></i></a>
                <a href="/" class="navbar-brand"><span>Deebly</span></a>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-page">
    <div id="fh5co-wrap">
        <header id="fh5co-hero" data-section="home" role="banner" style="background: url('../home/images/own/volleyball.jpg') top left; background-size: cover;" >
            <div class="fh5co-overlay"></div>
            <div class="fh5co-intro">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 fh5co-text">
                            <h2 class="to-animate intro-animate-1">DEEBLY : location de matériel de sport estival citadin entre particuliers</h2>
                            <p class="to-animate intro-animate-2">Deebly permet aux passionnés de sport estival d’accéder au matériel dont ils ont besoin, partout sur Paris, Bordeaux, Lyon et Nice</p>
                            <p class="to-animate intro-animate-3">
                            @if (Route::has('login'))
                                @if (Auth::check())
                                    <a href="{{ url('/produits') }}" class="btn btn-primary btn-md">Accès aux locations</a>
                                @else
                                    <a href="{{ url('/login') }}" class="btn btn-primary btn-md">Se connecter</a>
                                    <a href="{{ url('/register') }}" class="btn btn-primary btn-md">S'inscrire</a>
                                @endif
                            @endif
                            </p>
                        </div>
                       {{-- <div class="col-md-6 text-right fh5co-intro-img to-animate intro-animate-4">
                            <img src="{{ asset('home/images/iphone_6_3.png') }}" alt="Outline Free HTML5 Responsive Bootstrap Template">
                        </div>--}}

                    </div>
                </div>
            </div>
        </header>
        <!-- END .header -->

        <div id="fh5co-main">
                {{--<div id="fh5co-clients">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="{{ asset('home/images/client_1.png') }}" alt="Free HTML5 Template"></figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="{{ asset('home/images/client_2.png') }}" alt="Free HTML5 Template"></figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="{{ asset('home/images/client_3.png') }}" alt="Free HTML5 Template"></figure>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 to-animate">
                                <figure class="fh5co-client"><img src="{{ asset('home/images/client_4.png') }}" alt="Free HTML5 Template"></figure>
                            </div>
                        </div>
                    </div>
                </div>--}}
            <div id="fh5co-features" data-section="features">


                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <h2 class="fh5co-lead to-animate">Que pouvez vous faire avec Deebly ?</h2>
                            <p class="fh5co-sub to-animate">La plateforme collaborative Deebly a été développée par des passionnés de sport  afin de répondre à chacun de vos besoins. Notre objectif : vous donner la possibilité de pouvoir louer un kit de pétanque, des raquettes de ping pong, un canoé de façon ponctuelle. Nous pensons que la liberté de pratique n’est pas dans la possession mais dans l’usage.</p>
                            <h2 class="fh5co-sub to-animate">
                                Donc : en mettant en relation un propriétaire et un loueur de matériel n’est ce pas une veritable une alternative à l’achat ?
                            </h2>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                            <a href="#" class="fh5co-feature to-animate">
                                <span class="fh5co-feature-icon"><i class="icon-user-following"></i></span>
                                <h3 class="fh5co-feature-lead">Se connecter</h3>
                                <p class="fh5co-feature-text">Et accéder à l'interface de service</p>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                            <a href="#" class="fh5co-feature to-animate">
                                <span class="fh5co-feature-icon"><i class="icon-eye"></i></span>
                                <h3 class="fh5co-feature-lead">Choisir</h3>
                                <p class="fh5co-feature-text">Le matériel de son choix, la durée de location</p>
                            </a>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                            <a href="#" class="fh5co-feature to-animate">
                                <span class="fh5co-feature-icon"><i class="icon-pencil"></i></span>
                                <h3 class="fh5co-feature-lead">Renseigner</h3>
                                <p class="fh5co-feature-text">Son profil pour réceptionner le matériel</p>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                            <a href="#" class="fh5co-feature to-animate">
                                <span class="fh5co-feature-icon"><i class="icon-bag"></i></span>
                                <h3 class="fh5co-feature-lead">Payer</h3>
                                <p class="fh5co-feature-text">Et amusez vous<br>tout l'été !</p>
                            </a>
                        </div>
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <p class="fh5co-sub to-animate">
                                Le numéro du propriétaire vous sera envoyé par mail avec un lieu de rendez-vous.
                            </p>
                        </div>

                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-4 col-md-offset-4 text-center to-animate">
                            @if (Route::has('login'))
                                @if (Auth::check())
                                    <a href="{{ url('/produits') }}" class="btn btn-primary ">Accès aux locations</a>
                                @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mg-right-5">
                                                <a href="{{ url('/login') }}" class="btn btn-primary">Se connecter</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="mg-left-5">
                                                <a href="{{ url('/register') }}" class="btn btn-primary ">S'inscrire</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>


            </div>



            <div id="fh5co-features-2" data-section="design">
                <div class="fh5co-features-2-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                                <h2 class="fh5co-lead to-animate">Deebly répond à vos besoins</h2>
                                <p class="fh5co-sub to-animate">Notre plateforme offre enfin cette nouvelle liberté de pouvoir louer un kit de pétanque, des raquettes de tennis, des palmes etc de façon ponctuelle.
                                </p>
                            </div>
                            <div class="col-md-4 fh5co-text-wrap">
                                <div class="row text-center">
                                    <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-3 padding-top-50">
                                        <span class="fh5co-icon"><i class="icon-screen-desktop"></i></span>
                                        <h4 class="fh5co-uppercase-sm">Permettre aux internautes de reserver 24h/24 </h4>
                                        <p>24/24h 7J/7j sur Deebly.fr</p>
                                    </div>
                                    <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-4 padding-top-50">
                                        <span class="fh5co-icon"><i class="icon-speech"></i></span>
                                        <h4 class="fh5co-uppercase-sm">Recueillir les avis des clients</h4>
                                        <p>Qui ont participé à vos activités</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 col-md-push-4 fh5co-text-wrap">
                                <div class="row text-center">
                                    <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-5 padding-top-50">
                                        <span class="fh5co-icon"><i class="icon-calendar"></i></span>
                                        <h4 class="fh5co-uppercase-sm">Louer du matériel de sport </h4>
                                        <p>Une journée, une semaine, dix jours ?</p>
                                    </div>
                                    <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 fh5co-text animate-object features-2-animate-6 padding-top-50">
                                        <span class="fh5co-icon"><i class="icon-people"></i></span>
                                        <h4 class="fh5co-uppercase-sm">Mettre en relation des passionnés de sport</h4>
                                        <p>Et faire du sport sans avoir à stocker le matériel chez soi</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 col-md-pull-4 fh5co-image animate-object features-2-animate-2">
                                <p class="text-center">
                                    <img src="{{ asset('home/images/own/iphone_deebly.jpg') }}" class="" alt="Outline Free HTML5 Responsive Bootstrap Template">
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div id="fh5co-testimony" data-section="testimonies">
                <div class="container">
                    <div class="row animate-box">

                        <div class="owl-carousel">

                            <div class="item">
                                <div class="col-md-3 col-sm-3 col-xs-4 col-xxs-12">
                                    <figure class="fh5co-vcard"><img src="{{ asset('home/images/marine.jpg') }}" alt="#" class="img-responsive"></figure>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-8 col-xxs-12">
                                    <blockquote>
                                        <p>&ldquo;Super concept, un bon service, j'ai déjà loué des palmes, un kayak et un kit de pétanque. Des gens dispo, du matos correspondant aux annonces.
                                            Merci! :)&rdquo;</p>
                                    </blockquote>
                                    <p class="fh5co-author fh5co-uppercase-sm"><span>Marie Vrn</span>, 28/05/2017.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-3 col-sm-3 col-xs-4 col-xxs-12">
                                    <figure class="fh5co-vcard"><img src="{{ asset('home/images/finn.jpg') }}" alt="#" class="img-responsive"></figure>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-8 col-xxs-12">
                                    <blockquote>
                                        <p>&ldquo; Service et plateforme au top ! vraiment bien. J'ai pu faire un tour en Normandie avec un fixie loué pour la journée, c'etait super. Hyper réactif, matos fourni avec pompe pour regonfler et conseils prodigués.
                                            Expérience à renouveler. Vivement l'app pour téléphone !</p>
                                    </blockquote>
                                    <p class="fh5co-author fh5co-uppercase-sm"><span>Tom Wiltz</span>, 29/05/2017.</p>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-3 col-sm-3 col-xs-4 col-xxs-12">
                                    <figure class="fh5co-vcard"><img src="{{ asset('home/images/clara.jpg') }}" alt="#" class="img-responsive"></figure>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-8 col-xxs-12">
                                    <blockquote>
                                        <p>&ldquo;I rent 2  volley-ball nets  in Vincennes for the weekend. I loved the concept and the collaborative service dedicated to sharing sport stuff.
                                            It's easy and effective&rdquo;</p>
                                    </blockquote>
                                    <p class="fh5co-author fh5co-uppercase-sm"><span>Clara Schoumann</span>, 31/05/2017.</p>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>


            <div id="fh5co-counter" class="fh5co-bg-section" style="background-image: url('../home/images/own/kayak.jpg'); background-attachment: fixed;">
                <div class="fh5co-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fh5co-hero-wrap">
                                <div class="fh5co-hero-intro text-center to-animate counter-animate">
                                    <div class="col-md-4 text-center">
                                        <span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="17"></span>
                                        <span class="fh5co-counter-label">Communes</span>

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <span class="fh5co-counter js-counter" data-from="0" data-to="387" data-speed="5000" data-refresh-interval="34"></span>
                                        <span class="fh5co-counter-label">Locations</span>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <span class="fh5co-counter js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="4"></span>
                                        <span class="fh5co-counter-label">Catégories</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-features-3" data-section="benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <h2 class="fh5co-lead animate-single features3-animate-1">Louer du matériel estival
                            </h2>
                        </div>

                        <div class="col-sm-6 text-center fh5co-text-wrap">
                            <div class="fh5co-text to-animate">
                                <span class="fh5co-icon"><i class="icon-support"></i></span>
                                <h4 class="fh5co-uppercase-sm">Etape 1 : Trouvez le matériel qu’il vous faut</h4>
                                <p>
                                    Choisissez quel type de matériel vous voulez parmi 3 catégories : Mer, Montagne et Urbain.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center fh5co-text-wrap">
                            <div class="fh5co-text to-animate">
                                <span class="fh5co-icon"><i class="icon-plus"></i></span>
                                <h4 class="fh5co-uppercase-sm">Etape 2 : Faites votre demande de location</h4>
                                <p>
                                    Indiquez la date de location souhaitée et procédez au paiement pour valider votre demande. Vous serez débité uniquement si le propriétaire accepte votre réservation. La caution ne sera pas débitée.
                                </p>
                            </div>
                        </div>

                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-sm-6 text-center fh5co-text-wrap">
                            <div class="fh5co-text to-animate">
                                <span class="fh5co-icon"><i class="icon-heart"></i></span>
                                <h4 class="fh5co-uppercase-sm">Etape 3 : Demande de location validée
                                </h4>
                                <p>
                                    Une fois validée, vous recevrez l’adresse du lieu de rendez vous ainsi que le numéro du propriétaire pour fixer les derniers détails.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center fh5co-text-wrap">
                            <div class="fh5co-text to-animate">
                                <span class="fh5co-icon"><i class="icon-like"></i></span>
                                <h4 class="fh5co-uppercase-sm">Etape 4 : Jouez !
                                </h4>
                                <p>
                                    Une fois la location du matériel terminée et le matériel rendu, évaluez votre expérience avec le propriétaire en lui attribuant une note ou commentaire.
                                </p>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div id="fh5co-products" data-section="products">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <h2 class="fh5co-lead animate-single product-animate-1">Un large choix de locations !</h2>
                            <p class="fh5co-sub animate-single product-animate-2">En choissisant Deebly, vous trouverez tout ce qu'il vous faut pour vous amuser entre amis et profiter du temps estival !</p>
                        </div>


                        @foreach($products as $product)


                            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                                <a href="#" class="fh5co-figure to-animate image-popup">
                                    <figure>
                                        <img src="uploads/images/{{$product->picture_url}}" alt="Free HTML5 Responsive Template" class="img-responsive">
                                    </figure>
                                    <h3 class="fh5co-figure-lead">{{$product->title}}</h3>
                                    <p class="fh5co-figure-text">{{$product->created_at->diffForHumans() }}</p>
                                    <p class="fh5co-figure-text">{{$product->price}}€</p>
                                </a>
                            </div>

                        @endforeach


                        <div class="clearfix visible-sm-block"></div>

                        <div class="fh5co-spacer fh5co-spacer-sm"></div>

                        <div class="col-md-4 col-md-offset-4 text-center to-animate">
                            @if (Route::has('login'))
                                @if (Auth::check())
                                    <a href="{{ url('/produits') }}" class="btn btn-primary ">Accès aux locations</a>
                                @else
                                    <a href="{{ url('/register') }}" class="btn btn-primary">S'inscrire</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

            </div>



            <div class="fh5co-bg-section cta" id="fh5co-cta" style="background-image: url('../home/images/own/petanque.jpg'); background-attachment: fixed;">
                <div class="fh5co-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fh5co-hero-wrap">
                                <div class="fh5co-hero-intro text-center">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                                            <h2 class="fh5co-lead to-animate">Essayer Deebly dès aujourd'hui !</h2>
                                            <p class="fh5co-sub to-animate">Et louer le matériel que vous souhaitez pour passer un été sportif dans la bonne humeur</p>
                                            <div class="to-animate">
                                                @if (Route::has('login'))
                                                    @if (Auth::check())
                                                        <a href="{{ url('/produits') }}" class="btn btn-primary ">Accès aux locations</a>
                                                    @else
                                                        <a href="{{ url('/register') }}" class="btn btn-primary">S'inscrire</a>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--<div id="fh5co-pricing" data-section="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <h2 class="fh5co-lead animate-single pricing-animate-1">Plans built for every one</h2>
                            <p class="fh5co-sub animate-single pricing-animate-2">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>

                        <div class="col-md-3 to-animate">
                            <a href="#" class="fh5co-figure">
                                <span class="fh5co-price">$1<span>/month</span></span>
                                <h3 class="fh5co-figure-lead">Starter</h3>
                                <p class="fh5co-figure-text">Far far away behind the word mountains</p>
                            </a>
                        </div>
                        <div class="col-md-3 to-animate">
                            <a href="#" class="fh5co-figure">
                                <span class="fh5co-price">$25<span>/month</span></span>
                                <h3 class="fh5co-figure-lead">Regular</h3>
                                <p class="fh5co-figure-text">Far far away behind the word mountains</p>
                            </a>
                        </div>
                        <div class="col-md-3 to-animate">
                            <a href="#" class="fh5co-figure active pricing-feature">
                                <span class="fh5co-price">$59<span>/month</span></span>
                                <h3 class="fh5co-figure-lead">Plus</h3>
                                <p class="fh5co-figure-text">Far far away behind the word mountains</p>
                            </a>
                        </div>
                        <div class="col-md-3 to-animate">
                            <a href="#" class="fh5co-figure">
                                <span class="fh5co-price">$125<span>/month</span></span>
                                <h3 class="fh5co-figure-lead">Enterprise</h3>
                                <p class="fh5co-figure-text">Far far away behind the word mountains</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>--}}

            <div id="fh5co-faqs"  data-section="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <h2 class="fh5co-lead animate-single faqs-animate-1">F.A.Q</h2>
                            <p class="fh5co-sub animate-single faqs-animate-2">Vos questions les plus fréquentes</p>
                        </div>
                    </div>
                </div>





                <div class="container">
                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>Qui peut déposer des annonces ?</h3>
                        <div class="faq-body">
                            <p>  Tous les particuliers majeurs et propriétaires de matériel qui souhaitent rentabiliser leur investissement. Mais aussi tous les professionnels de la location qui souhaitent bénéficier des avantages de Deebly, sous réserve qu'il nous informe de leur présence en nous contactant par email à contact@deebly.net</p>
                        </div>
                    </div>
                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>Quel matériel je peux proposer à la location sur le site ?</h3>
                        <div class="faq-body">
                            <p>Pour le moment, notre plateforme propose à la location les sports estivaux de la catégorie : mer, montagne, urbain et extrême. Si vous souhaitez déposer un article qui ne fait pas partie d’une de ces catégories, écrivez-nous et nous vous contacterons lorsque nous ouvrirons cette nouvelle catégorie.
                            </p>
                        </div>
                    </div>

                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>Est-ce que ça me coûte quelque chose de déposer une annonce?</h3>
                        <div class="faq-body">
                            <p>Pas du tout ! Que vous soyez un particulier ou un professionnel de la location, déposer une annonce est entièrement gratuit et vous prendra moins de 3 minutes. De plus, aucune commission ni frais de gestion ne sont facturés pour le propriétaire lors d’une location.
                                Vous pouvez déposer gratuitement vos annonces sur Deeblu. Seul les annonces en « vedette » sont payantes. La consultation et mise en relation avec le loueur est TOTALEMENT GRATUITE
                            </p>
                        </div>
                    </div>

                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>Puis-je proposer mon matériel à la vente ?</h3>
                        <div class="faq-body">
                            <p>Malheureusement nous ne sommes pas vendeur, nous sommes une plateforme collaborative. Donc nous n’acceptons pas les annonces qui concernent des ventes de matériel. Si vous recherchez un bon site pour vendre votre matériel, n’hésitez pas à nous contacter on vous aiguillera.
                            </p>
                        </div>
                    </div>


                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>A quel prix dois-je mettre mon matériel ?</h3>
                        <div class="faq-body">
                            <p>C’est vous qui décidez du prix auquel vous désirez louer votre matériel. Nous demandons simplement un minimum de 5€, que ce soit pour deux heures, un jour, ou une semaine.
                            </p>
                        </div>
                    </div>

                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3> Que se passe-t-il si j’annule une réservation ?</h3>
                        <div class="faq-body">
                            <p>Si vous ne pouvez honorer votre engagement, vous devez annuler la réservation immédiatement via votre espace personnel, afin que le locataire soit averti au plus vite et trouve une autre solution. Si l’annulation est liée à un événement climatique qui pourrait mettre en danger le locataire durant la période de location, Deebly ne pénalise pas le propriétaire. Si en revanche, vous annulez à plusieurs reprises sans motifs, pourra se voir contraint de faire descendre votre annonce dans le bas des résultats de recherche et ou de la supprimer.
                            </p>
                        </div>
                    </div>

                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3> Que se passe-t-il si quelqu'un se blesse, ou crée des dégâts avec mon matériel?</h3>
                        <div class="faq-body">
                            <p> La personne qui loue votre matériel est la seule responsable de son utilisation et de tout dommage (corporel et incorporel) qu’elle pourrait causer avec. Néanmoins, comme le stipule nos conditions générales de vente et d’utilisation, le propriétaire doit proposer un article en bon état de fonctionnement, afin que le loueur ne court aucun danger lorsqu’il utilise le matériel.
                            </p>
                        </div>
                    </div>

                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>Que faire en cas d'autre problème ?</h3>
                        <div class="faq-body">
                            <p>Nous contacter</p>
                        </div>
                    </div>

                    <div class="faq-accordion to-animate">
                        <span class="faq-accordion-icon-toggle"><i class="icon-arrow-down"></i></span>
                        <h3>A quoi correspond la caution ?</h3>
                        <div class="faq-body">
                            <p>La caution constitue une sécurité en plus de l’assurance pour le propriétaire. Cette caution est réalisée par empreinte bancaire via notre prestataire de paiement Paypal. Elle est fixée par le propriétaire suivant la valeur et l’état de son bien, pour chaque location effectuée sur le site Deebly, et peut être prélevée si besoin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            {{--<div id="fh5co-subscribe">
                <div class="container">
                    <div class="row animate-box">
                        <form action="#" method="post">
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>--}}


        </div>
    </div>

    <footer id="fh5co-footer" style="">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-md-push-3">
                        <h3 class="fh5co-lead">Deebly</h3>
                        <ul>
                            <li><a href="#">Qui sommes nous</a></li>
                            <li><a href="#">Contactez nous</a></li>
                            <li><a href="#">Partenaires </a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-4 col-md-push-3">
                        <h3 class="fh5co-lead">Help!</h3>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="">Mode d'emploi</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-4 col-md-push-3">
                        <p> <i>Nous sommes une bande de passionnés de sport, unis par un objectif commun : faire en sorte que chacun puisse faire du sport où et quand il veut.<i> </p>
                    </div>

                    <div class="col-md-3 col-sm-12 col-md-pull-9">
                        <div class="fh5co-footer-logo"><a href="index.html">Deebly</a></div>
                        <p class="fh5co-copyright"><small>&copy; 2017. Deebly 2017 <br>
                            <a href="https://twitter.com/"><i class="icon-twitter"></i></a>
                            <a href="https://www.facebook.com/sellal.eva"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>


<!-- jQuery -->
<script src="{{ asset("home/js/jquery.min.js") }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset("home/js/jquery.easing.1.3.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("home/js/bootstrap.min.js") }}"></script>
<!-- Waypoints -->
<script src="{{ asset("home/js/jquery.waypoints.min.js") }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset("home/js/jquery.magnific-popup.min.js") }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset("home/js/owl.carousel.min.js") }}"></script>
<!-- toCount -->
<script src="{{ asset("home/js/jquery.countTo.js") }}"></script>
<!-- Main JS -->
<script src="{{ asset("home/js/main.js") }}"></script>




</body>
</html>
