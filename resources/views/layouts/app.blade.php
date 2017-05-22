<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        @include('layouts.nav')
        @yield('content')
    </div>
    @include('layouts.footer')
    @yield('footer-scripts')
    <!-- Scripts -->
    <!--Import jQuery before materialize.js-->

   {{-- <script src="{{ asset('js/app.js') }}"></script>--}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
