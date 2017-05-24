{{--
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li> </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>--}}
<ul id="dropdown1" class="dropdown-content dropdown-menu-fix">
    <li><a href="#!"><i class="material-icons">person_pin</i>Mon profil</a></li>
    <li><a href="#!"><i class="material-icons">settings</i>Paramètres</a></li>
    <li class="divider"></li>
    <li> <a class="deconnection" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            <i class="material-icons">not_interested</i>Quitter
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>

<nav class="grey lighten-4" role="navigation">
    <div class="nav-wrapper section-nav">
        <a href="{{ url('/') }}" class="brand-logo logo-menu logo-menu-deebly"><span class="">Deebly</span></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down menu-1">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Se connecter</a></li>
                <li><a href="{{ route('register') }}">S'inscrire</a></li>
            @else
               {{-- <li>
                    <a class="deconnection" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        Deconnection
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>--}}
                <li><a class="dropdown-button padding-profile-pic" href="#!" data-activates="dropdown1"><img src="{{ Gravatar::src(Auth::user()->email) }}" alt="" class="circle max-w-35">{{ Auth::user()->name }}<i class="material-icons right fix-margin-dropdown">arrow_drop_down</i></a></li>

            @endif

        </ul>
        <ul class="side-nav" id="mobile-demo">
            @if(Auth::check())
            <li><div class="userView">
                    <div class="background">
                        <img src="{{ asset('images/office.jpg')}}">
                    </div>
                    <a href="#!user"><img class="circle" src="{{ Gravatar::src(Auth::user()->email) }}"></a>
                    <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                    <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                </div></li>
            @endif
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Se connecter</a></li>
                <li><a href="{{ route('register') }}">S'inscrire</a></li>
            @else
                {{--<li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        Deconnection
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>--}}
                    <li><a href="#!"><i class="material-icons">person_pin</i>Mon profil</a></li>
                    <li><a href="#!"><i class="material-icons">settings</i>Paramètres</a></li>
                    <li class="divider"></li>
                    <li> <a class="deconnection" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="material-icons">not_interested</i>Quitter
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
            @endif
        </ul>
    </div>
</nav>