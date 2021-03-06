@extends('layouts.app')
@section('content')
<section class="container-fluid">
	<div class=" row color1 py-5 mt-5 px-md-5 ">
		<div class=" col-md-12 d-flex flex-column flex-sm-row">
			<div class="w-25 float-left mr-5 d-none d-sm-block">
				<img src="{{asset('image/golda-meir.jpeg')}}" alt="goldaMeir" class="img-fluid mt-3 rounded" >

				<h4 class="text-center mt-4">Golda Meir</h4>
				<p class="text-justify mt-3">Fue una figura política israelí que asumiera entre 1969 y 1974 el puesto de Primera Ministra de dicho estado, siendo la primera mujer en ocupar dicho cargo. Fue una de las primeras jefas de gobierno del mundo —sólo precedida por Sirimavo Bandaranaike de Sri Lanka e Indira Gandhi de la India—, y la primera de Medio Oriente, seguida sólo por la primera ministra Tansu Çiller de Turquía. Meir fue fundadora del Estado Israelí siendo una de las firmamentes de su Declaración de Independencia el 14 de mayo de 1948. 	
				</p>
			</div>
			<div class="col-sm-9 align-self-center">
				<div class="row  colorhome  px-md-5 mt-3 d-flex justify-content-around">
		
					<div class="col-sm-12 col-md-8 text-justify order-12">
						<p class="lead ">
			                Ser una institución educativa de calidad, basada en los valores cristianos, principios morales y éticos, cimentando el amor a Dios, la formación integral y la adquisición de nuevos idiomas. Formando así ciudadanos íntegros, competentes, pensantes, transformadores y de provecho a la sociedad.
			            </p>
					</div>
					<div class="col-sm-4 col-md-4 text-justify py-2 py-sm-5 d-flex align-items-center flex-column order-1 ">
						<img src="{{asset('image/mountains.png')}}" alt="Mision" width="100" height="100 " class="img-fluid ">
						<h1 class=" display-4 mt-3 ">Visión</h1>
						
					</div>
				</div>
				<div class="row colorhome px-1 px-md-5 mt-5 d-flex justify-content-around">
					<div class="col-sm-4 col-md-4 text-justify  py-2 py-sm-5 d-flex align-items-center flex-column order-1">
						<img src="{{asset('image/target.png')}}" alt="Mision" width="100" height="100" class="img-fluid ">
						<h1 class=" display-4 mt-3">Misión</h1>
							
					</div>
					<div class="col-sm-12 col-md-8 text-justify order-12">
						<p class="lead pt-2">Poner al alcance de la comunidad estudiantil un centro educativo cristiano con valores, educación integral y altos estándares educativos académicos, capacitados y dotados con diferentes recursos, equipo tecnológico y científico especializado, para favorecer el proceso de enseñanza aprendizaje y lograr la excelencia académica.</p>	
					</div>		
				</div>	
			</div>
			
		</div>
			
	</div>
			

	

	<div class="row colorhome px-5 py-5">
		<div class="col-sm-8 col-md-6  text-center">
			<p class="lead "><i class="fab  pr-2"></i>Educar con excelencia para la alta calidad espiritual y académica de los ciudadanos útiles a Dios y a la sociedad</p>
			<hr class="my-4">
			<p class="lead "><i class="fab  pr-2"></i>Transformar por medio de la educación a los estudiantes en hombres y mujeres íntegros/as.</p>
			<hr class="my-4">
			<p class="lead "><i class="fab  pr-2"></i>Desarrollar la personalidad, las aptitudes, la capacidad mental y física de estos hasta el máximo de sus posibilidades.</p>
			<hr class="my-4">
			<p class="lead "><i class="fab  pr-2"></i>Inculcar el respeto a los derechos humanos y a las libertades fundamentales y los principios consagrados en la Carta de las Naciones Unidas.</p>
			<hr class="my-4">
			<p class="lead "><i class="fab  pr-2"></i>Inculcar el respeto a su familia, a su propia identidad cultural, a su idioma, a los valores del país donde vive, ó del que sea originario y a las civilizaciones distintas de la suya.</p>
			<hr class="my-4">
			<p class="lead  "><i class="fab  pr-2"></i>Prepararle para asumir una vida responsable en una sociedad libre, con espíritu de comprensión, paz, tolerancia, igualdad e inclusión.</p>
		</div>
		<div class="col-sm-4 col-md-4 text-justify d-flex align-items-center flex-column">
			<img src="{{asset('image/success.png')}}" alt="Mision" width="100" height="100">
			<h1 class=" display-4 mt-3">Objetivos</h1>
			
		</div>
		
	</div>
	<div class="row color1 px-5 py-5">
		<div class="col-sm-4 col-md-4 text-justify py-5 d-flex align-items-center flex-column">
			<img src="{{asset('image/popularity.png')}}" alt="Mision" width="100" height="100">
			<h1 class=" display-4 mt-3 text-center">Nuestros Valores</h1>
			
		</div>
		<div class="col-sm-8 col-md-8 text-justify">
			<div class="row d-flex justify-content-around">
				<div class="col-md-6">
					<h3 class="pt-5 text-center">Amor</h3>
					<h3 class="pt-1 text-center ">Respeto</h3>
					<h3 class="pt-1 text-center ">Responsabilidad</h3>
				</div>
				<div class="col-md-6">
					<h3 class="pt-5 text-center">Familia</h3>
					<h3 class="pt-1 text-center ">Equidad</h3>
					<h3 class="pt-1 text-center ">Integridad</h3>
				</div>
			</div>
		</div>
		
	</div>
	
	
</section>
@endsection