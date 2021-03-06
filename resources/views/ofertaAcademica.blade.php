@extends('layouts.app')
@section('content')
<div class="container-fluid" >

	<div class="row cardmy py-5" >

		<div class="col-sm-12 col-md-6 py-5">
			<div class="card text-center cardPar ">
			  <div class="card-body">
			  	<h3 class="card-title font-weight-bold text-uppercase">Parvularia</h3>
			  	<hr class="my-4">
			    <h4 class="card-text">Kinder 5 y Preparatoria</h4>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6 ">
			    		<h4 class="font-weight-bold">Horario Matutino</h4>
			    	</div>
			    	<div class="col-md-6">
			    		<h4>7:00 a.m. a 11:45 a.m.</h4>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h4 class="font-weight-bold">Matricula</h4>
			    	</div>
			    	<div class="col-md-6">
			    		<h4>$105.00</h4>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h4 class="font-weight-bold">Cuota Mensual</h4>
			    		<p>Enero a Noviembre</p>
			    	</div>
			    	<div class="col-md-6">
			    		<h4>$45.00</h4>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="card text-center cardPri">
			  <div class="card-body">
			  	<h3 class="card-title font-weight-bold text-uppercase">Primaria</h3>
			  	<hr class="my-4">
			    <h4 class="card-text">1 a 6 Grado</h4>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6">
			    		<h4 class="font-weight-bold">Horario Matutino</h4>
			    		
			    	</div>
			    	<div class="col-md-6">
			    		<h4>7:00 a.m. a 12:00 a.m.</h4>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h4 class="font-weight-bold">Matricula</h4>
			    	</div>
			    	<div class="col-md-6">
			    		<h4>$175.00</h4>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h4 class="font-weight-bold">Cuota Mensual</h4>
			    		<p>Enero a Noviembre</p>
			    	</div>
			    	<div class="col-md-6">
			    		<h4>$55.00</h4>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class=" px-5 card-deck">
		  <div class="card">
		    <img class="card-img-top img-fluid" src="image/formacion.jpg" alt="" style="background-color: #474711; height: 160px; ">
		    <!--<div class="text-center">
		    	<img src="image/evaluation.png" alt="" class="cardimage rounded-circle" height="100px" width="100px">
		    </div>-->
		    <div class="card-body">
		      <h4 class="card-title text-center text-uppercase font-weight-bold">Formación Integral</h4>
		      <p class="card-text text-justify">Nuestro programa de estudio esta actualizado conforme a los requisitos exigidos por el MINED, procurando obtener el máximo de rendimiento en cada uno de sus estudiantes.</p>
		      
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top img-fluid" src="image/idioma.jpg" alt="" style="background-color: #474711; height: 160px;">
		    <!--<div class="text-center">
		    	<img src="image/blackboard.png" alt="" class="cardimage rounded-circle" height="100px" width="100px">
		    </div>-->
		    <div class="card-body">
		      <h4 class="card-title text-center text-uppercase font-weight-bold">Idioma Ingles</h4>
		      <p class="card-text text-justify">La formación educativa en el idioma ingles aporta a los estudiantes ir más allá del aprendizaje de materias basicas extendiendo sus conomientos.</p>
		      
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top img-fluid" src="image/cristiana.jpg" alt="" style="background-color: #474711; height: 160px;">
		    <!--<div class="text-center">
		    	<img src="image/bible(1).png" alt="" class="cardimage rounded-circle" height="100px" width="100px " style="background-color: #f34f35">
		    </div>-->
		    <div class="card-body">
		      <h4 class="card-title text-center text-uppercase font-weight-bold">Educación Cristiana</h4>
		      <p class="card-text text-justify">La base para alcanzar la transformación de los estudiantes es el conocimiento de valores morales y espirituales por medio de las Sagradas Escrituras.</p>
		      
		    </div>
		  </div>
		</div>
	</div>

	<div class="row d-flex justify-content-center">
		<div class="col-md-9 pt-5 pb-3 px-5 card-deck ">
		  <div class="card ">
		    <img class="card-img-top img-fluid" src="image/musica.jpg" alt="" style="background-color: #474711; height: 160px; ">
		    <!--<div class="text-center">
		    	<img src="image/electric-guitar.png" alt="" class="cardimage rounded-circle" height="100px" width="100px">
		    </div>-->
		    <div class="card-body">
		      <h4 class="card-title text-center text-uppercase font-weight-bold">Educación Musical</h4>
		      <p class="card-text text-justify">Como parte del desarrollo de los talentos dedicamos tiempo de nuestros estudios para la educación musical, consientes de la necesidad de desarrollar potencial hacia la música.</p>
		      
		    </div>
		  </div>
		  <div class="card ">
		    <img class="card-img-top img-fluid" src="image/fisica.jpg" alt="" style="background-color: #474711; height: 160px;">
		    <!--<div class="text-center">
		    	<img src="image/running.png" alt="" class="cardimage rounded-circle" height="100px" width="100px">
		    </div>-->
		    <div class="card-body">
		      <h4 class="card-title text-center text-uppercase font-weight-bold">Educación Física</h4>
		      <p class="card-text text-justify">Para la óptima educación integral en los estudiantes y para que desarrollen adecuadamente sus habilidades fisicas-deportivas en sus respectivos niveles, mejorando y reforzando su sicomotricidad.</p>
		      
		    </div>
		  </div>
		</div>
	</div>
</div>
<div class="jumbotron pt-5 mt-5 rounded-0  " >
	<div class="container-fluid d-flex flex-sm-row flex-column">
		<div class="col-sm-6 col-md-9">
			<h1 class="display-4 pb-2">Requisitos de Admisión Obligatorios</h1>

			<p class="lead ml-4"><i class="fas  pr-1"></i>Aquirir, llenar y entregar la hoja de matrícula</p>
			<hr class="my-2">
			<p class="lead ml-4"><i class="fas pr-1"></i>Certificado escolar del año anterior</p><hr class="my-2">
			<p class="lead ml-4"><i class="fas  pr-1"></i>Constancia de buena conducta</p><hr class="my-2">
			<p class="lead ml-4"><i class="fas  pr-1"></i>Partida de Nacimiento Original</p><hr class="my-2">

			<p class="lead ml-4"><i class="fas  pr-1"></i>1 fotografía del alumno</p><hr class="my-2">

			<p class="lead ml-4"><i class="fas  pr-1"></i>Fotocopia DUI padre y madre y/o responsable</p><hr class="my-2">
			<p class="lead ml-4"><i class="fas  pr-1"></i>Leer instructivo escolar</p><hr class="my-2">
			<p class="lead ml-4"><i class="fas  pr-1"></i>Ficha del alumno debidamente llena</p><hr class="my-2">
			<p class="lead ml-4"><i class="fas  pr-1"></i>Realizar curso de admisión</p><hr class="my-2">
			<p class="lead ml-4"><i class="fas  pr-1"></i>Teléfono móvil para uso de plataforma</p>


			<hr class="my-4">
			<h3>Importante</h3>
			<h4>Presentar todos los requisitos a la hora de realizar la matrícula</h4>
			<h4>Para retirar documentos debe estar solvente de todo pago</h4>
			<h4>Por ser una institución cristina, se hace énfasis en los valores cristianos y se considera igual de importante que las materias básicas</h4>
		</div>
		<div class="col-md-3 d-flex align-items-center flex-column align-self-center">
			<div class="pb-3 ">
				<a class="btn btn-danger btn-lg text-uppercase" href="{{ url('formularioInscripcion') }}" ><i class="fas fa-file-signature pr-2"></i>Llenar Ficha de Inscripción</a>
			</div>
			<div class="pb-3 col-md-8">
				<a class="btn btn-outline-primary  btn-sm text-uppercase " href="{{url('download')}}"><i class="fas fa-file-word pr-2"></i>Descargar Ficha de Inscripción (DOCX)</a>
			</div>
			<div class="col-md-8">
				<a class="btn btn-outline-danger  btn-sm text-uppercase " href="{{url('downloadPDF')}}"><i class="fas fa-file-pdf pr-2 fa-2x pull-left"></i>Descargar Ficha de Inscripción (PDF)</a>
			</div>
			
			
		</div>	 	
	</div>
</div>
@endsection