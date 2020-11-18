@extends('layouts.app')
@section('content')
<div class="container-fluid" >

	<div class="row cardmy py-5" >

		<div class="col-sm-12 col-md-6 py-5">
			<div class="card text-center cardPar ">
			  <div class="card-body">
			  	<h3 class="card-title font-weight-bold text-uppercase">Parvularia</h3>
			    <p class="card-text">Kinder 5 y Preparatoria</p>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6 ">
			    		<h5 class="font-weight-bold">Horario Matutino</h5>
			    	</div>
			    	<div class="col-md-6">
			    		<h5>7:00 a.m. a 11:45 a.m.</h5>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Matricula</h5>
			    	</div>
			    	<div class="col-md-6">
			    		<h5>$105.00</h5>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Cuota Mensual</h5>
			    		<p>Enero a Noviembre</p>
			    	</div>
			    	<div class="col-md-6">
			    		<h5>$45.00</h5>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="card text-center cardPri">
			  <div class="card-body">
			  	<h3 class="card-title font-weight-bold text-uppercase">Primaria</h3>
			    <p class="card-text">1 a 6 Grado</p>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Horario Matutino</h5>
			    		
			    	</div>
			    	<div class="col-md-6">
			    		<h5>7:00 a.m. a 12:00 a.m.</h5>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Matricula</h5>
			    	</div>
			    	<div class="col-md-6">
			    		<h5>$175.00</h5>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-3">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Cuota Mensual</h5>
			    		<p>Enero a Noviembre</p>
			    	</div>
			    	<div class="col-md-6">
			    		<h5>$55.00</h5>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class=" px-5 card-deck">
		  <div class="card">
		    <img class="card-img-top img-fluid" src="image/verde.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-center">Formación Integral</h5>
		      <p class="card-text">Nuestro programa de estudio esta actualizado conforme a los reqiosotps exigidos por el MINED, procurando obtener el máximo de renidmiento en cada uno de sus estudiantes.</p>
		      
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top img-fluid" src="image/verde.png" alt="Card image cap">
		    <div class="text-center">
		    	<img src="image/english.png" alt="" class="cardimage" height="100px" width="100px">
		    </div>
		    <div class="card-body">
		      <h5 class="card-title text-center">Idioma Ingles</h5>
		      <p class="card-text">La formación educativa en el idioma ingles aporta a los estudiantes ir más allá del aprendizaje de materias basicas expendiendo sus conomientos.</p>
		      
		    </div>
		  </div>
		  <div class="card">
		    <img class="card-img-top img-fluid" src="image/verde.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-center">Educación Cristiana</h5>
		      <p class="card-text">La base para alcanzar la transformación de los estudiantes es el conocimiento de valores morales y espirituales por medio de las Sagradas Escrituras.</p>
		      
		    </div>
		  </div>
		</div>
	</div>
	<div class="row flex-row">
		<div class=" py-5 px-5 card-deck d-flex justify-content-center">
		  <div class="card col-md-4">
		    <img class="card-img-top" src="image/verde.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-center">Educación Musical</h5>
		      <p class="card-text">Como parte del desarrollo de los talentos dedicamos tiempo de nuestros estudios para la educación musical, consientes de la necesidad de desarrollar potencial hacia la música.</p>
		      
		    </div>
		  </div>
		  <div class="card col-md-4">
		    <img class="card-img-top" src="image/verde.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title text-center">Educación Física</h5>
		      <p class="card-text">Para la oprima educación integral en los estudiantes desarrollen adecuadamente sus habilidades fisicas-deportivas en sus respectivos niveles, mejorando y reforzando su sicomotricidad.</p>
		      
		    </div>
		  </div>
		</div>
	</div>
</div>
<div class="jumbotron pt-5 mt-5 rounded-0">
	<div class="container-fluid d-flex flex-row">
		<div class="col-md-9">
			<h1 class="display-4 pb-2">Requisitos de Admisión Obligatorios</h1>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Aquitir, llenar y entregar la hoja de matricula</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Certificado escolar del año anterior</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Constancia de buena conducta</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Partida de Nacimiento Original</p>

			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>1 fotografia del alumno</p>

			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Fotocopia DUI padre y madre y/o responsable</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Leer instructivo escolar</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Ficha del alumno debidamente llena</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Realizar curso de admisión</p>
			<p class="lead text-center"><i class="fas fa-check fa-1x pr-1"></i>Telefono movil para uso de plataforma</p>


			<hr class="my-4">
			<h5>Importante</h5>
			<p>Es importante presentar todos los requisitos a la hora de realizar la matrícula</p>
			<p>Para retirar documentos debe estar solvente de todo pago</p>
			<p>Por ser una institución cristina, se hace énfasis en los valores cristianos y se considera igual de importante que las materias básicas</p>
		</div>
		<div class="col-md-3 d-flex align-items-center flex-column align-self-center">
			<div class="pb-3">
				<a class="btn btn-danger btn-lg " href="#" >Llenar Ficha de Inscripción</a>
			</div>
			<div>
				<a class="btn btn-light " href="#">Descargar Ficha de Inscripción</a>
			</div>
			
			
		</div>	 	
	</div>
</div>
@endsection