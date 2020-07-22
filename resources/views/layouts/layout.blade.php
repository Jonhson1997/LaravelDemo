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
        <div id="app"></div>
        <!-- ======= Mobile nav toggle button ======= -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        <!-- ======= Header ======= -->
        <header id="header">
          <div class="d-flex flex-column">

            <div class="profile">
              <img src="{{ asset('images/johnson.jpg') }}" alt="" class="img-fluid rounded-circle">
              <h1 class="text-light"><a href="index.html">Johnson</a></h1>
              <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>

            <nav class="nav-menu">
              <ul>
                <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

              </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

          </div>
        </header><!-- End Header -->
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