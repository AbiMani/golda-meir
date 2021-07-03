@extends('layouts.app')

@section('content')
<!--carrouserl-->
<div id="carouselExampleIndicators" class="carousel slide pt-5 mt-3 " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="">
            <img class="d-block w-100" src="image/anuncio_pagina_web2021_1.JPG" alt="First slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel3.jpeg" alt="Third slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel4.jpeg" alt="fouth slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel5.jpeg" alt="fifth slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel6.jpeg" alt="sixth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<!--carrouserl-->
<div class="container-fluid">
    <div class="row colorhome py-5 ">
        <div class="col-sm-9 col-md-8">
            <h1 class="display-4">Inscripción 2022</h1>
            <h4 >
               En esta sección puede ver lo necesario para nuevo ingreso en el año 2022 
            </h4>
            <!--<img width="100px" src="/storage/7ebBkPH1WbI9odrFayAVE77N8lkem3nCX5GncVs7.jpg" >-->
        </div>
        <div class="col-sm-2 col-md-2">
            <a class="btn btn-dark btn-lg text-uppercase" href="{{ url('ofertaAcademica') }}">Oferta Academica</a>
        </div>
    </div>
    <div class="row d-flex py-5 px-md-5 d-flex flex-row justify-content-around">
        <div class="col-sm-4 col-md-4 px-5">
            <h3 class="display-4 text-center py-3">Facebook</h3>
            <div class="fac-container">
                        <!-- Page Facebook-->
                        <div class="fb-page" data-href="https://www.facebook.com/colegiogoldameir" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegiogoldameir" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegiogoldameir">Colegio Golda Meir</a></blockquote></div>
                        <!-- Page Facebook-->
                        
                    </div>
        </div>
        <div class="col-sm-4 col-md-4 pt-3 px-5">
            <h3 class="display-4 text-center pb-3">Noticias</h3>
            <div class="fac-container">
                <div class="fb-post" data-href="https://www.facebook.com/colegiogoldameir/posts/3625712220852471" data-width="300" data-show-text="true"><blockquote cite="https://www.facebook.com/colegiogoldameir/posts/3625712220852471" class="fb-xfbml-parse-ignore"><p>50% descuento en matricula para parvularia y basica de primer grado a sexto, mas 11 mensualidades de enero a noviembre. a partir de Enero de 2021. Mas info: www.colegiogoldameir.com</p>Publicado por <a href="https://www.facebook.com/colegiogoldameir/">Colegio Golda Meir</a> en&nbsp;<a href="https://www.facebook.com/colegiogoldameir/posts/3625712220852471">Viernes, 1 de enero de 2021</a></blockquote></div>

  
            </div>
        </div>
        <div class="col-sm-4 col-md-4 px-5 pt-5 mt-5">
           <div class="fac-container">
                <div class="fb-post" data-href="https://www.facebook.com/colegiogoldameir/posts/3540074796082881" data-show-text="true" data-width="350"><blockquote cite="https://www.facebook.com/colegiogoldameir/posts/3540074796082881" class="fb-xfbml-parse-ignore"><p>Estimados Padres y Madres de Familia, el sábado 28 de Noviembre de 2020 a las 8 am. estaremos subiendo un video donde...</p>Publicado por <a href="https://www.facebook.com/colegiogoldameir/">Colegio Golda Meir</a> en&nbsp;<a href="https://www.facebook.com/colegiogoldameir/posts/3540074796082881">Viernes, 27 de noviembre de 2020</a></blockquote></div>
            </div>
        </div>
        
    </div>
</div>
@endsection