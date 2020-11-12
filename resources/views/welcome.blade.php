@extends('layouts.app')

@section('content')
<!--carrouserl-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 100vh">
            <img class="d-block w-100" src="image/carrusel2.png" alt="First slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/carrusel3.png" alt="Second slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/carrusel4.png" alt="Third slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/carrusel5.png" alt="fourd slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/carrusel6.png" alt="fiferd slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/carrusel1.png" alt="sixerd slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--carrouserl-->
<div class="container-fluid">
    <div class="row color1">
        <div class="col-10">
            <h1>Inscripcion 2021</h1>
            <p class="lead">
               En esta seccion puede ver lo necesario para el ingreso en el año 2021 
            </p>
        </div>
        
    </div>
    <div class="row color2">
        <div class="col-8 align-self-center">
            <h2>Noticias
            </h2>
        </div>
        <div class="col-2 align-self-center">
            <h2>Facebook</h2>
        </div>
    </div>
</div>
@endsection