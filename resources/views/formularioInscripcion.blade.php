@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row mt-5 pt-5">
		<div class="col-sm-12 col-md-12 mt-2">
			<h2 class="display-4 text-center">Formulario de Inscripción</h2>
		</div>
		
	</div>
	<div class="row my-4" >
		<form>
		  <div class="form-group">
		    <label for="nombreninoa">Nombre del niño/a</label>
		    <input type="text" class="form-control" id="nombreninoa" placeholder="nombre del nino">
		  </div>
		  <div class="form-group">
		    <label for="fechadenacimiento">fecha de nacimiento</label>
		    <input type="date" class="form-control" id="fechadenacimiento" p>
		  </div>
		  <button type="submit" class="btn btn-success">Enviar</button>
		</form>
		
	</div>
	
	
</div>
@endsection