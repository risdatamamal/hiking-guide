<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('themekit/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('themekit/scripts/main.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('themekit/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/glide.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/contact-form.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/media-box.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/social.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin.css') }}">
    <link rel="icon" href="{{ asset('media/favicon.png') }}">
</head>

<body class="page-main">
    <div id="preloader"></div>
    @include('include.navbar')
    @yield('content')
    @include('include.footer-app')
</body>

</html>
