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
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
