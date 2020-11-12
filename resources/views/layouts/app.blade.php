<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Head -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="image/x-icon" href="{{{ asset('image/favicon.ico') }}}" rel="shortcut icon"/>

    <title>Colegio Golda Meir</title>

    <!-- Fonts 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<!-- Head -->

<!-- Body -->
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top px-5">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="image/index.jpeg" width="40" height="40" class="d-inline-block" alt="logo Colegio Golda Meir">Colegio Golda Meir</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="{{ url('/') }}">Inicio</a>
                <a class="nav-item nav-link" href="{{ url('quienesSomos') }}">Quienes Somos</a>
                <a class="nav-item nav-link" href="{{ url('ofertaAcademica') }}">Oferta Academica</a>
                <a class="nav-item nav-link" href="{{ url('contacto') }}">Contacto</a>
                <a class="nav-item nav-link" href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a class="nav-item nav-link" href="#"><i class="fab fa-instagram-square fa-2x"></i></a>
            </div>
        </div>
    </nav>

    <main >

            @yield('content')
    </main>
   
    <!-- jQuery first, then Popper.js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
<!-- Body -->

<!-- Footer -->
<footer class="text-center footer-style">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <h3>Dirección</h3>
                <p>
                    23 Avenida Norte y 3a Calle poniente <br />
                    Atrás del Instituto Central de Señoritas <br/>
                    San Salvador
                </p>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Contactanos</h3>
                <div class="text-center center-block">
                    <a href=""><i id="social-fa" class="fab fa-facebook-square fa-3x social"></i></a>
                    <a href=""><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
                    <a href=""><i id="social-in"  class="fab fa-instagram-square fa-3x social"></i></a>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Trabajo FreeLancer</h3>
                <p>Tengo más de X años de experiencia en maquetación web y me apasiona lo que hago!</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<div class="footer-bottom">
        Copyright © 2020, All Rights Reserved
    </div>

</html>
