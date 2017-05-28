<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mentions légales - Deebly</title>
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
        <li><a href="#">Qui sommes-nous ?</a></li>
        <li><a href="#">Mentions légales</a></li>
        <li><a href="#">Contact</a></li>
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
        <a href="#"><i class="icon-youtube"></i></a>
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
       {{-- <header id="fh5co-hero" data-section="home" role="banner" style="background: url('../home/images/own/volleyball.jpg') top left; background-size: cover;" >
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
                       --}}{{-- <div class="col-md-6 text-right fh5co-intro-img to-animate intro-animate-4">
                            <img src="{{ asset('home/images/iphone_6_3.png') }}" alt="Outline Free HTML5 Responsive Bootstrap Template">
                        </div>--}}{{--

                    </div>
                </div>
            </div>
        </header>--}}
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


            <div id="fh5co-features-3" data-section="benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
                            <h2 class="fh5co-lead animate-single features3-animate-1">Mentions légales</h2>
                         </div>

                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">1. Présentation du site.</h4>
                                <p class="text-justify">
                                    En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site http://www.deebly.net l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
                                    Propriétaire : Eva SELLAL – Dirigeante –  Paris
                                    Responsable publication : Eva Sellal et Alexis Bougy
                                    Le responsable publication est une personne physique ou une personne morale.
                                    Développeur full stack et coopérateur Alexis Bougy :
                                    Crédits : les mentions légales ont étés générées et offertes par Eva SELLAL
                                    Hébergeur : OVH -

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">2. Conditions générales d’utilisation du site et des services proposés.
                                </h4>
                                <p class="text-justify">
                                    L’utilisation du site http://www.deebly.net implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site http://www.deebly.net sont donc invités à les consulter de manière régulière.
                                    Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par, http://www.deebly.net qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.
                                    Le site http://www.deebly.net est mis à jour régulièrement par Eva SELLAL . De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">3. Description des services fournis.
                                </h4>
                                <p class="text-justify">
                                    Le site http://www.deebly.net a pour objet de fournir une information concernant l’ensemble des activités de la société.
                                    Eva Sellal s’efforce de fournir sur le site http://www.deebly.net des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
                                    Tous les informations indiquées sur le site http://www.deebly.net  sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site  http://www.deebly.net ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">4. Limitations contractuelles sur les données techniques.
                                </h4>
                                <p class="text-justify">
                                    Le site utilise la technologie Laravel ( framework PHP) et Javascript.
                                    Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">5. Propriété intellectuelle et contrefaçons.
                                </h4>
                                <p class="text-justify">
                                    Eva SELLAL est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.
                                    Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : Eva SELLAL.
                                    Toute exploitation non autorisée du site ou d’un des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">6. Limitations de responsabilité.
                                </h4>
                                <p class="text-justify">
                                    Eva SELLAL ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://www.deebly.net  et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.
                                    Nous ne pourront également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site http://www.deebly.net
                                    Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs.  Nos nous réservons le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, nous nous réservons également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, religieux, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">7. Gestion des données personnelles.
                                </h4>
                                <p class="text-justify">
                                    En France, les données personnelles sont notamment pro euvent êtres recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site http://www.deebly.net le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur.
                                    En tout état de cause nous ne collectons des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site http://www.deebly.net. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site http://www.deebly.net l’obligation ou non de fournir ces informations.
                                    Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.
                                    Aucune information personnelle de l’utilisateur du site  http://www.deebly.net n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers.
                                    Le site n’est pas déclaré à la CNIL car il ne recueille pas d’informations personnelles. .
                                    Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">8. Liens hypertextes et cookies.
                                </h4>
                                <p class="text-justify">
                                    Le site http://www.deebly.net  ne contient  pas de liens hypertextes vers d’autres sites.
                                    La navigation sur le site http://www.deebly.net   est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.
                                    Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :
                                    Sous Internet Explorer : onglet outil / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
                                    Sous Netscape : onglet édition / préférences. Cliquez sur Avancées et choisissez Désactiver les cookies. Validez sur Ok.

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">9. Droit applicable et attribution de juridiction.
                                </h4>
                                <p class="text-justify">
                                    Tout litige en relation avec l’utilisation du site  http://www.deebly.net est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">10. Les principales lois concernées.
                                </h4>
                                <p class="text-justify">
                                    Loi n° 78-87 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.
                                    Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.

                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="fh5co-text to-animate">
                                <h4 class="fh5co-uppercase-sm">11. Lexique.
                                </h4>
                                <p class="text-justify">
                                    Utilisateur : Internaute se connectant, utilisant le site susnommé.
                                    Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).

                                </p>
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

    <footer id="fh5co-footer" style="">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-md-push-3">
                        <h3 class="fh5co-lead">About</h3>
                        <ul>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">New Features</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4 col-md-push-3">
                        <h3 class="fh5co-lead">Support</h3>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">More Apps</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4 col-md-push-3">
                        <h3 class="fh5co-lead">More Links</h3>
                        <ul>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Frequently Ask Questions</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">More Apps</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-12 col-md-pull-9">
                        <div class="fh5co-footer-logo"><a href="index.html">Deebly</a></div>
                        <p class="fh5co-copyright"><small>&copy; 2017. All Rights Reserved. <br>	Template par <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images : <a href="http://pexels.com/" target="_blank">Pexels</a></small></p>
                        <p class="fh5co-social-icons">
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                            <a href="#"><i class="icon-youtube"></i></a>
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
