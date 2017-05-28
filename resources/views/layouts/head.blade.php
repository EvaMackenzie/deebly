<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('pageTitle') - Deebly</title>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/images.css') }}" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('home/images/own/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('home/images/own/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('home/images/own/favicons/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('home/images/own/favicons/manifest.json') }}">
<link rel="mask-icon" href="{{ asset('home/images/own/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>