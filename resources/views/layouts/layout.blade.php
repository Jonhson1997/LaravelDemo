<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Styles -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('template/assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('template/assets/css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </body>
</html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Vendor JS Files -->
<script src="{{ asset('template/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('template/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/typed.js/typed.min.js') }}"></script>
<script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('template/assets/js/main.js') }}"></script>