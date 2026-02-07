<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Quazi Global')</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- CSS -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/lightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @stack('css')
    </head>
<body>

    @include('layout.inc.header')

    <main class="page-wrapper">
        @yield('content')
    </main>

    @include('layout.inc.footer')


    <!-- JS -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/stellar.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/particles.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/masonry.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/stickysidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('js')


</body>
</html>