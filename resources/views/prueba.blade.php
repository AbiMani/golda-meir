@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row mt-5 pt-5">
		<div class="col-sm-12 col-md-12 mt-2">
			<h2 class="display-4 text-center">Formulario de Inscripción</h2>
			
		</div>
		
		
	</div>
	<div class="row my-4" >
		
		<div class="col-md-12 mt-2">
			
				<form action="{{route('archivo')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<input type="file" name="file">
				

				<button type="submit" class="btn btn-success btn-lg">Enviar</button>
				</form>
			
		</div>	
	</div>
</div>
@endsection