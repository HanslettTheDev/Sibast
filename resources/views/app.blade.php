<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'SIBAST') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <link rel="stylesheet" href='/assets/css/bootstrap.min.css' />
        <link rel="stylesheet" href='/assets/css/all-fontawesome.min.css' />
        <link rel="stylesheet" href='/assets/css/animate.min.css' />
        <link rel="stylesheet" href='/assets/css/magnific-popup.min.css' />
        <link rel="stylesheet" href='/assets/css/owl.carousel.min.css' />
        <link rel="stylesheet" href='/assets/css/style.css' />

         @vite('resources/js/app.js')
        @inertiaHead
    </head>
   <body>


    @inertia

    <!-- js -->
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/modernizr.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/jquery.appear.min.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/counter-up.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/main.js"></script>
   </body>
</html>
