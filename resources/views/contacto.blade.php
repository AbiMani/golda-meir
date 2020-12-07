@extends('layouts.app')
@section('content')
<script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 8,
        });
      }
    </script>
<div class="conte">
	<div class="row ">
		<img src="image/contacto.jpg" alt="Snow" style="width:100%; height: 350px;">
	<div class="centered"><h1 class="display-2">Contacto</h1></div>
		
	</div>	
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6 my-5">
			<div class="card text-center ">
			  <div class="card-body">
			  	<h3 class="card-title font-weight-bold text-uppercase">Horario de Oficina</h3>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Lunes a Viernes</h5>	
			    	</div>
			    	<div class="col-md-6">
			    		<h5>7:00 a.m. a 5:00 p.m.</h5>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Dirección</h5>	
			    	</div>
			    	<div class="col-md-6">
			    		<h5>23 Avenida Norte y 3a Calle poniente
                    Atrás del Instituto Central de Señoritas <br/>
                    San Salvador</h5>
			    	</div>
			    </div>
			    <div class="d-flex flex-row mt-4">
			    	<div class="col-md-6">
			    		<h5 class="font-weight-bold">Telefono</h5>	
			    	</div>
			    	<div class="col-md-6">
			    		<h5>2508-6869</h5>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 my-5">
			<div class="card text-center ">
			  <div class="card-body">
			    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15505.080382373262!2d-89.2033988!3d13.7020846!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d8401e2af442f2e!2sColegio%20Golda%20Meir!5e0!3m2!1ses!2ssv!4v1607205560128!5m2!1ses!2ssv" width="500" height="270" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			  </div>
			</div>
		</div>

	</div>	
</div>
@endsection