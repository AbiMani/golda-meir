@extends('layouts.app')

@section('content')
<!--carrouserl-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 100vh">
            <img class="d-block w-100" src="image/imag4.jpg" alt="First slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/imag5.jpg" alt="Second slide">
        </div>
        <div class="carousel-item" style="height: 100vh">
            <img class="d-block w-100" src="image/imag6.jpg" alt="Third slide">
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
<section class="container-fluid">
    <div class="row" style="height: 400px; background-color: #9bbd8c ">
        
        <div class="col-xs-12 col-md-8 ml-5 align-self-center">
            <h1>Inscripcion 2021</h1>
            <p class="lead">
               En esta seccion puede ver lo necesario para el ingreso en el año 2021 
            </p>
            
        </div> 
    </div>
</section>
<section class="container-fluid">
    <div class="row" style="height: 400px">
        <div class="col-xs-12 col-md-8 ml-5 align-self-center" >
            <h2>Noticias
            </h2>
            
        </div>
        
    </div>
    
</section>


@endsection