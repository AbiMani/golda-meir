@extends('layouts.app')

@section('content')
<!--carrouserl-->
<div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
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
            <img class="d-block w-100" src="image/carrusel2.jpeg" alt="First slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel3.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel4.jpeg" alt="Third slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel5.jpeg" alt="fourd slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel6.jpeg" alt="fiferd slide">
        </div>
        <div class="carousel-item" >
            <img class="d-block w-100" src="image/carrusel1.jpeg" alt="sixerd slide">
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
    <div class="row color1 py-5 d-flex flex-row justify-content-center">
        <div class="col-xs-9 col-md-9">
            <h1>Inscripción 2021</h1>
            <p class="lead">
               En esta seccion puede ver lo necesario para el ingreso en el año 2021 
            </p>
        </div>
        <div class="col-xs-2 col-md-2">
            <a class="btn btn-dark btn-lg" href="{{ url('ofertaAcademica') }}">Oferta Academica</a>
        </div>
    </div>
    <div class="row d-flex py-5 ">
        <div class="col-xs-8 col-md-8 pl-5 pb-3 ">
            <h2 class="text-center pb-3">Noticias</h2>
            <div class="col-sm-11 col-md-12 ">
                <div class="card text-center d-flex flex-row">
                  <div class="card-body">
                    <!--Publicaciones Facebook-->
                        <div class="fb-post px-1" data-href="https://www.facebook.com/colegiogoldameir/posts/3498133363610358" data-show-text="true" data-width="350"><blockquote cite="https://www.facebook.com/colegiogoldameir/posts/3498133363610358" class="fb-xfbml-parse-ignore"><p>Esta información es importante para usted. Si quiere conocer mas de esto contacte con: Pr. Santana en colecturía. Buen día y Dios les bendiga.</p>Publicado por <a href="https://www.facebook.com/colegiogoldameir/">Colegio Golda Meir</a> en&nbsp;<a href="https://www.facebook.com/colegiogoldameir/posts/3498133363610358">Jueves, 12 de noviembre de 2020</a></blockquote></div>
                        
                    
                       <div class="fb-post px-1" data-href="https://www.facebook.com/colegiogoldameir/posts/3378465015577194" data-show-text="true" data-width="350"><blockquote cite="https://www.facebook.com/colegiogoldameir/posts/3378465015577194" class="fb-xfbml-parse-ignore"><p>Gracias a Dios por este día, Feliz dia de los Niños #diadelniño2020</p>Publicado por <a href="https://www.facebook.com/colegiogoldameir/">Colegio Golda Meir</a> en&nbsp;<a href="https://www.facebook.com/colegiogoldameir/posts/3378465015577194">Jueves, 1 de octubre de 2020</a></blockquote></div> 
                    <!--Publicaciones Facebook-->
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-xs-4 col-md-4 pr-5 d-flex flex-column justify-content-end align-self-start ">
            <h2 class="text-center py-3">Facebook</h2>
            <div>
                <div class="card text-center">
                  <div class="card-body">
                    <!-- Page Facebook-->
                    <div class="fb-page" data-href="https://www.facebook.com/colegiogoldameir" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/colegiogoldameir" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colegiogoldameir">Colegio Golda Meir</a></blockquote></div>
                    <!-- Page Facebook-->
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection