@extends('layouts.app')
@section('content')
<section class="container-fluid">
	<div class="row  color2 px-5 pt-5 mt-3 d-flex justify-content-around">
		<!--<div class=" col-md-2 align-self-center">
			<img class="img-fluid" src="image/index.jpeg">
		</div>-->
		<div class="col-sm-8 col-md-8 text-justify pt-5">
			<p class="lead pt-3 ">
                Ser una institucion educativa de calidad, basada en los valores cristianos, principios morales y éticos, cimentando el amor a Dios, la formación integral y la adquisición de nuevos idiomas. Formando asi ciudadanos integros, compettentes, pensantes, transformadores y de provecho a la sociedad.
            </p>
		</div>
		<div class="col-sm-4 col-md-4 text-justify py-5 d-flex align-items-center flex-column">
			<img src="{{asset('image/mountains.png')}}" alt="Mision" width="100" height="100">
			<h1 class=" displey-3 mt-3">Visión</h1>
			
		</div>
	</div>
	<div class="row color1 px-5 py-5 justify-content-around">
		<div class="col-sm-4 col-md-4 text-justify py-5 d-flex align-items-center flex-column">
			<img src="{{asset('image/target.png')}}" alt="Mision" width="100" height="100">
			<h1 class=" displey-3 mt-3">Misión</h1>
			
		</div>
		<div class="col-sm-8 col-md-8 text-justify">
			<p class="lead pt-3">Poner al alcance de la comunidad estudiantil un centro educativo cristiano con valores, educación integral y altos estándares educativos académicos, capacitados y dotados con diferentes recursos, equipo tecnológico y cientifico especializado, para favorecer el proceso de enseñannza aprendizaje y lograr la excelencia academica.</p>	
		</div>
		
	</div>
	<div class="row color2 px-5 py-5">
		<div class="col-sm-8 col-md-8  text-justify">
			<p class="lead ">Educar con ecvelencia para la alta calidad espiritual y académica de los ciudadanos útiles a Dios y a la sociedad</p>
			<p class="lead ">Transformar por medio de la educación a los estudiantes en hombre y mujeres integros.</p>
			<p class="lead ">Desarrollar la eprsonalidad, las aptitudes y la capacidad mental y física de estos hasta el máximo de sus posibilidades.</p>
			<p class="lead ">Inculcar el respeto a los derechos humanos y a las libertades fundamentales y los principios consagrados en la Carta de las Naciones Unidas.</p>
			<p class="lead ">Inculcar el respeto a su familia, a su propia identidad cultural, a su idioma y a los valores del país donde vive, ó del que sea originario ya las civilizaciones distintas de la suya.</p>
			<p class="lead pb-4 ">Prepararle para asumir una vida responsable en una sociedad libre, con espiritu de comprensión, paz, tolerancia, igualdad e inclusión.</p>
		</div>
		<div class="col-sm-4 col-md-4 text-justify d-flex align-items-center flex-column">
			<img src="{{asset('image/success.png')}}" alt="Mision" width="100" height="100">
			<h1 class=" displey-3 mt-3">Objetivos</h1>
			
		</div>
		
	</div>
	<div class="row color1 px-5 py-5">
		<div class="col-sm-4 col-md-4 text-justify py-5 d-flex align-items-center flex-column">
			<img src="{{asset('image/popularity.png')}}" alt="Mision" width="100" height="100">
			<h1 class=" displey-3 mt-3">Nuestros Valores</h1>
			
		</div>
		<div class="col-sm-8 col-md-8 text-justify">
			<div class="row d-flex justify-content-around">
				<div class="col-md-6">
					<p class="lead pt-5 text-center">Amor</p>
					<p class="lead pt-1 text-center ">Respeto</p>
					<p class="lead pt-1 text-center ">Responsabilidad</p>
				</div>
				<div class="col-md-6">
					<p class="lead pt-5 text-center">Familia</p>
					<p class="lead pt-1 text-center ">Equidad</p>
					<p class="lead pt-1 text-center ">Integridad</p>
				</div>
			</div>
		</div>
		
	</div>
	
	
</section>
@endsection