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
			
				<form action="{{route('nuevoingreso')}}" method="POST" enctype="multipart/form-data">
					<!--datos estudiante-->
					<h4>Datos personales del estudiante</h4>
					@csrf
					<div class="form-row">
						<div class="form-group col-md-4">
						    <label for="nombre" class="required">Nombres del niño/a</label>
						    <input type="text" value="{{old('nombre')}} "class="form-control" id="nombre" name="nombre" placeholder="nombre del nino">
						    @error('nombre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-4">
						    <label for="apellido" class="required">Apellidos del niño/a</label>
						    <input type="text" value="{{old('apellido')}} "class="form-control" id="apellido" name="apellido" placeholder="apellidos del nino">
						    @error('apellido')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-5 col-sm-4 col-md-2">
						    <label for="fechadenacimiento" class="required">Fecha de nacimiento</label>
						    <input type="date" name="fechanacimiento" class="form-control" id="fechadenacimiento" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
						</div>
						<div class="form-group col-2 col-sm-2 col-md-1">
						    <label for="edad" class="required">Edad</label>
						    <select class="form-control" id="edad" name="edad">
						      <option value="3">3</option>
						      <option value="4">4</option>
						      <option value="5">5</option>
						      <option value="6">6</option>
						      <option value="7">7</option>
						      <option value="8">8</option>
						      <option value="9">9</option>
						      <option value="10">10</option>
						      <option value="11">11</option>
						      <option value="12">12</option>
						      <option value="13">13</option>
						      <option value="14">14</option>
						      <option value="15">15</option>

						    </select>
						    @error('edad')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-2 col-sm-2 col-md-1">
						    <label for="meses" class="required">Meses</label>
						    <select class="form-control" id="meses" name="meses">
						      <option value="1">1</option>
						      <option value="2">2</option>
						      <option value="3">3</option>
						      <option value="4">4</option>
						      <option value="5">5</option>
						      <option value="6">6</option>
						      <option value="7">7</option>
						      <option value="8">8</option>
						      <option value="9">9</option>
						      <option value="10">10</option>
						      <option value="11">11</option>
						    </select>
						    @error('meses')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
				  	</div>
				  	<div class="form-row">
						<div class="form-group col-4 col-md-2">
						    <label for="sexo" class="required">Sexo</label>
						    <select class="form-control" id="sexo" name="sexo">
						      <option>Femenino</option>
						      <option>Masculino</option>
						    </select>
						    @error('sexo')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						<div class="form-group col-8 col-md-4">
						    <label for="direccion" class="required">Direccion</label>
						    <input type="text" value="{{old('direccion')}} "class="form-control" id="direccion" name="direccion" placeholder="direccion de residencia del niño">
						    @error('direccion')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="idDepartamento" class="required">Departamento</label>
						    <input type="text" value="{{old('idDepartamento')}} "class="form-control" id="idDepartamento" name="idDepartamento" placeholder="">
						    @error('idDepartamento')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="idmunicipio" class="required">Municipio</label>
						    <input type="text" value="{{old('idmunicipio')}} "class="form-control" id="idmunicipio" name="idMunicipio" placeholder="">
						    @error('idMunicipio')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="imageEstudiante" class="required">Foto</label>
						    <input type="file"  id="imageEstudiante" name="imageEstudiante" accept="image/*">
						    @error('imageEstudiante')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>

				  	</div>
				  	<!--fin datos estudiante-->
				  	<div class="form-row">
				  		<div class="form-group col-3 col-md-2">
						    <label for="gradoCursado" class="required">Grado Cursado</label>
						    <input type="text" value="{{old('gradoCursado')}} "class="form-control" id="gradoCursado" name="gradoCursado" placeholder="">
						    @error('gradoCursado')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-3 col-md-2">
						    <label for="gradoACursar" class="required">Grado a Cursar</label>
						    <input type="text" value="{{old('gradoACursar')}} "class="form-control" id="gradoACursar" name="gradoACursar" placeholder="">
						    @error('gradoACursar')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-3">
						    <label for="nombreInstitutoAnterior" class="required">Instituto Anterior</label>
						    <input type="text" value="{{old('nombreInstitutoAnterior')}} "class="form-control" id="nombreInstitutoAnterior" name="nombreInstitutoAnterior" placeholder="">
						    @error('nombreIsntitutoAnterior')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-2 col-sm-2 col-md-3">
						    <label for="tipoIngreso" class="required">Tipo Ingreso:</label>
						    <select class="form-control" id="tipoIngreso" name="tipoIngreso">
						      <option value="Nuevo Ingreso">Nuevo Ingreso</option>
						      <option value="Antiguo Ingreso">Antiguo Ingreso</option>
						      <option value="Reingreso">Reingreso</option>
						    </select>
						  </div>
				  	</div>
				  	<!--Datos de los madre-->
				  	<br>
				  	<h4>Datos personales de la madre del estudiante</h4>
				  	<div class="form-row">
						<div class="form-group col-md-4">
						    <label for="nombreMadre" class="required">Nombres de la madre</label>
						    <input type="text" value="{{old('nombreMadre')}} "class="form-control" id="nombreMadre" name="nombreMadre" placeholder="nombre de la madre">
						    @error('nombreMadre')
						    	<small>*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-md-4">
						    <label for="apellidoMadre" class="required">Apellidos de la madre</label>
						    <input type="text" value="{{old('apellidoMadre')}} "class="form-control" id="apellidoMadre" name="apellidoMadre" placeholder="apellidos de la madre">
						    @error('apellidoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="numeroDuiMadre" class="required">Dui</label>
						    <input type="text" value="{{old('numeroDuiMadre')}} "class="form-control" id="numeroDuiMadre" name="numeroDuiMadre" placeholder="">
						    @error('numeroDuiMadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="telefonoMadre" class="required">Numero Telefono</label>
						    <input type="text" value="{{old('telefonoMadre')}} "class="form-control" id="telefonoMadre" name="telefonoMadre" placeholder="">
						    @error('telefonoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	<div class="form-row">
						
						<div class="form-group col-md-2">
						    <label for="profesionMadre" class="required">Profesion</label>
						    <input type="text" value="{{old('profesionMadre')}} "class="form-control" id="profesionMadre" name="profesionMadre" placeholder="">
						    @error('profesionMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="lugarTrabajoMadre" class="required">Trabajo</label>
						    <input type="text" value="{{old('lugarTrabajoMadre')}} "class="form-control" id="lugarTrabajoMadre" name="lugarTrabajoMadre" placeholder="">
						    @error('lugarTrabajoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-4">
						    <label for="direccionMadre" class="required">Direccion</label>
						    <input type="text" value="{{old('direccionMadre')}} "class="form-control" id="direccionMadre" name="direccionMadre" placeholder="">
						    @error('direccionMadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-4">
						    <label for="correoMadre" class="required">Correo electronico</label>
						    <input type="text" value="{{old('correoMadre')}} "class="form-control" id="correoMadre" name="correoMadre" placeholder="">
						    @error('correoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						
				  	</div>
				  	<!--Fin Datos de los madre-->
				  	<!--Datos de los padre-->
				  	<br>
				  	<h4>Datos personales del padre del estudiante</h4>
				  	<div class="form-row">
						<div class="form-group col-md-4">
						    <label for="nombrePadre" class="required">Nombres de la padre</label>
						    <input type="text" value="{{old('nombrePadre')}} "class="form-control" id="nombrePadre" name="nombrePadre" placeholder="nombre de la padre">
						    @error('nombrePadre')
						    	<small>*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-md-4">
						    <label for="apellidoPadre" class="required">Apellidos de la padre</label>
						    <input type="text" value="{{old('apellidoPadre')}} "class="form-control" id="apellidoPadre" name="apellidoPadre" placeholder="apellidos de la padre">
						    @error('apellidoPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="numeroDuiPadre" class="required">Dui</label>
						    <input type="text" value="{{old('numeroDuiPadre')}} "class="form-control" id="numeroDuiPadre" name="numeroDuiPadre" placeholder="">
						    @error('numeroDuiPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="telefonoPadre" class="required">Numero Telefono</label>
						    <input type="text" value="{{old('telefonoPadre')}} "class="form-control" id="telefonoPadre" name="telefonoPadre" placeholder="">
						    @error('telefonoPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	<div class="form-row">
						
						<div class="form-group col-md-2">
						    <label for="profesionPadre" class="required">Profesion</label>
						    <input type="text" value="{{old('profesionPadre')}} "class="form-control" id="profesionPadre" name="profesionPadre" placeholder="">
						    @error('profesionPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="lugarTrabajoPadre" class="required">Trabajo</label>
						    <input type="text" value="{{old('lugarTrabajoPadre')}} "class="form-control" id="lugarTrabajoPadre" name="lugarTrabajoPadre" placeholder="">
						    @error('lugarTrabajoPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-4">
						    <label for="direccionPadre" class="required">Direccion</label>
						    <input type="text" value="{{old('direccionPadre')}} "class="form-control" id="direccionPadre" name="direccionPadre" placeholder="">
						    @error('direccionPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-md-4">
						    <label for="correoPadre" class="required">Correo electronico</label>
						    <input type="text" value="{{old('correoPadre')}} "class="form-control" id="correoPadre" name="correoPadre" placeholder="">
						    @error('correoPadre')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	
				  <!--Fin Datos de los padre-->
				  <!--Datos del responsable-->
				  	<br>
				  	<h4>Datos personales del Responsable</h4>
				  	<div class="form-row">
						<div class="form-group col-md-4">
						    <label for="nombreRes" class="required">Nombres de responsable</label>
						    <input type="text" value="{{old('nombreRes')}} "class="form-control" id="nombreRes" name="nombreRes" placeholder="nombre ">
						    @error('nombreRes')
						    	<small>*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-md-4">
						    <label for="apellidoRes" class="required">Apellidos de responsable</label>
						    <input type="text" value="{{old('apellidoRes')}} "class="form-control" id="apellidoRes" name="apellidoRes" placeholder="apellidos">
						    @error('apellidoRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="numeroDuiRes" class="required">Dui</label>
						    <input type="text" value="{{old('numeroDuiRes')}} "class="form-control" id="numeroDuiRes" name="numeroDuiRes" placeholder="">
						    @error('numeroDuiRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="telefonoRes" class="required">Numero Telefono</label>
						    <input type="text" value="{{old('telefonoRes')}} "class="form-control" id="telefonoRes" name="telefonoRes" placeholder="">
						    @error('telefonoRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	<div class="form-row">
						
						<div class="form-group col-md-2">
						    <label for="profesionRes" class="required">Profesion</label>
						    <input type="text" value="{{old('profesionRes')}} "class="form-control" id="profesionRes" name="profesionRes" placeholder="">
						    @error('profesionRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-2">
						    <label for="lugarTrabajoRes" class="required">Trabajo</label>
						    <input type="text" value="{{old('lugarTrabajoRes')}} "class="form-control" id="lugarTrabajoRes" name="lugarTrabajoRes" placeholder="">
						    @error('lugarTrabajoRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-4">
						    <label for="direccionRes" class="required">Direccion</label>
						    <input type="text" value="{{old('direccionRes')}} "class="form-control" id="direccionRes" name="direccionRes" placeholder="">
						    @error('direccionRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-md-4">
						    <label for="correoRes" class="required">Correo electronico</label>
						    <input type="text" value="{{old('correoRes')}} "class="form-control" id="correoRes" name="correoRes" placeholder="">
						    @error('correoRes')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						
				  	</div>
				  <!--Fin Datos de los padre-->
				  	<br>
				  	<!--Inicio ficha de estuciante-->
				  	<hr>
				  	<h4>Ficha de salud del estudiante</h4>
				  	<p class="text-justify">Esta ficha es absolutamente confidencial. Solo será conocida por la Dirección del Colegio y el Docente Orientador del estudiante con el fin de lograr una mejor atención durante su jornada escolar y en caso de emergencia.</p>
				  	<div class="form-row">
						<div class="form-group col-md-2">
						    <label for="tipoSangre" class="required">Tipo Sanguineo </label>
						    <select class="form-control" id="tipoSangre" name="tipoSangre">
						      <option value="O Positivo">O Positivo</option>
						      <option value="O Negativo">O Negativo</option>
						      <option value="A Positivo">A Positivo</option>
						      <option value="A Negativo">A Negativo</option>
						      <option value="B Positivo">B Positivo</option>
						      <option value="B Negativo">B Negativo</option>
						      <option value="AB Positivo">AB Positivo</option>
						      <option value="AB Negativo">AB Negativo</option>
						    </select>
						    @error('tipoSangre')
						    	<small>*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-md-1">
						    <label for="peso" class="required">Peso</label>
						    <input type="text" value="{{old('peso')}} "class="form-control" id="peso" name="peso" placeholder="pesos"><p> Lb</p>
						</div>
						<div class="form-group col-md-1">
						    <label for="talla" class="required">Talla</label>
						    <input type="text" value="{{old('talla')}} "class="form-control" id="talla" name="talla" placeholder="">
						    @error('talla')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						
						<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Padece alguna enfermedad?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="enfermedad" id="enfermedad1" value="si" checked>
						          <label class="form-check-label" for="enfermedad1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="enfermedad" id="enfermedad2" value="no">
						          <label class="form-check-label" for="enfermedad2">
						            No
						          </label>
						        </div>
						</fieldset>
						<div class="form-group col-md-2">
						    <label for="nombreEnfermedad" class="required">¿Cual?</label>
						    <input type="text" value="{{old('nombreEnfermedad')}} "class="form-control" id="nombreEnfermedad" name="nombreEnfermedad" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="datosEnfermedad" class="required">Explique</label>
						    <input type="text" value="{{old('datosEnfermedad')}} "class="form-control" id="datosEnfermedad" name="datosEnfermedad" placeholder="">
						</div>
				  	</div>
				  	<div class="form-row">
						<div class="form-group col-md-4">
						    <label for="tramtamientoEnf" class="required">Tratamiento</label>
						    <input type="text" value="{{old('tramtamientoEnf')}} "class="form-control" id="tramtamientoEnf" name="tramtamientoEnf" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="nombreMedico" class="required">Nombre del medico</label>
						    <input type="text" value="{{old('nombreMedico')}} "class="form-control" id="nombreMedico" name="nombreMedico" placeholder="">
						</div>
						<div class="form-group col-md-2">
						    <label for="telefonoMedico" class="required">Telefono</label>
						    <input type="text" value="{{old('telefonoMedico')}} "class="form-control" id="telefonoMedico" name="telefonoMedico" placeholder="">
						    @error('telefonoMedicoalergia')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Es alergico a medicamentos?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="alergia" id="alergia1" value="si" checked>
						          <label class="form-check-label" for="alergia1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="alergia" id="alergia2" value="no">
						          <label class="form-check-label" for="alergia2">
						            No
						          </label>
						        </div>
						</fieldset>	
				  	</div>
				  	<div class="form-row">
				  		
						<div class="form-group col-md-2">
						    <label for="alergiaMedicam" class="required">¿Cual?</label>
						    <input type="text" value="{{old('alergiaMedicam')}} "class="form-control" id="alergiaMedicam" name="alergiaMedicam" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="datosAlergia" class="required">Explique</label>
						    <input type="text" value="{{old('datosAlergia')}} "class="form-control" id="datosAlergia" name="datosAlergia" placeholder="">
						</div>
						<div class="form-group col-md-2">
						    <label for="otrasAlergias" class="required">¿Otras alergias?</label>
						    <input type="text" value="{{old('otrasAlergias')}} "class="form-control" id="otrasAlergias" name="otrasAlergias" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="datosOtrasAlergias" class="required">Explique</label>
						    <input type="text" value="{{old('datosOtrasAlergias')}} "class="form-control" id="datosOtrasAlergias" name="datosOtrasAlergias" placeholder="">
						    @error('datosOtrasAlergias')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>	
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Alguna vez ha sufrido fracturas?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="fractura" id="fractura1" value="si" checked>
						          <label class="form-check-label" for="fractura1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="fractura" id="fractura2" value="no">
						          <label class="form-check-label" for="fractura2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-md-3">
						    <label for="areaAfectada" class="required">Area afectada</label>
						    <input type="text" value="{{old('areaAfectada')}} "class="form-control" id="areaAfectada" name="areaAfectada" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="secuelas" class="required">Presenta secuelas</label>
						    <input type="text" value="{{old('secuelas')}} "class="form-control" id="secuelas" name="secuelas" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="tramtamientoFrac" class="required">Tratamiento que recibe</label>
						    <input type="text" value="{{old('tramtamientoFrac')}} "class="form-control" id="tramtamientoFrac" name="tramtamientoFrac" placeholder="">
						</div>
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Alguna vez ha sido operado?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="operado" id="operado1" value="si" checked>
						          <label class="form-check-label" for="operado1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="operado" id="operado2" value="no">
						          <label class="form-check-label" for="operado2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-md-3">
						    <label for="operadoDatos" class="required">Explique</label>
						    <input type="text" value="{{old('operadoDatos')}} "class="form-control" id="operadoDatos" name="operadoDatos" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="operadoSecuelas" class="required">Presenta secuelas</label>
						    <input type="text" value="{{old('operadoSecuelas')}} "class="form-control" id="operadoSecuelas" name="operadoSecuelas" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="operadoTratamiento" class="required">Tratamiento que recibe</label>
						    <input type="text" value="{{old('operadoTratamiento')}} "class="form-control" id="operadoTratamiento" name="operadoTratamiento" placeholder="">
						</div>
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Ha sido diagnosticado con hiperactividad?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividad" id="hiperactividad1" value="si" checked>
						          <label class="form-check-label" for="hiperactividad1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividad" id="hiperactividad2" value="no">
						          <label class="form-check-label" for="hiperactividad2">
						            No
						          </label>
						        </div>
						</fieldset>
						<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Necesita algún medicamento?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gridRadios" id="hiperactividadMedicamento1" value="si" checked>
						          <label class="form-check-label" for="hiperactividadMedicamento1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividadMedicamento" id="hiperactividadMedicamento2" value="no">
						          <label class="form-check-label" for="hiperactividadMedicamento2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-md-3">
						    <label for="hiperactividadNomMedicamento" class="required">¿Cual?</label>
						    <input type="text" value="{{old('hiperactividadNomMedicamento')}} "class="form-control" id="hiperactividadNomMedicamento" name="hiperactividadNomMedicamento" placeholder="">
						</div>
						
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-md-3">
						      <legend class="col-form-label  ">¿Tiene algún problema de aprendizaje?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="aprendizaje" id="aprendizaje1" value="si" checked>
						          <label class="form-check-label" for="aprendizaje1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="aprendizaje" id="aprendizaje2" value="no">
						          <label class="form-check-label" for="aprendizaje2">
						            No
						          </label>
						        </div>
						</fieldset>
						<div class="form-group col-md-3">
						    <label for="aprendizajeNom" class="required">¿Cual?</label>
						    <input type="text" value="{{old('aprendizajeNom')}} "class="form-control" id="aprendizajeNom" name="aprendizajeNom" placeholder="">
						</div>
						<fieldset class="form-group col-md-4">
						      <legend class="col-form-label  ">¿Se le ha diagnosticado algún problema médico grave?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="problemaEnf" id="problemaEnf1" value="si" checked>
						          <label class="form-check-label" for="problemaEnf1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="problemaEnf" id="problemaEnf2" value="no">
						          <label class="form-check-label" for="problemaEnf2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-md-2">
						    <label for="lugarTrabajoRes" class="required">¿Cual?</label>
						    <input type="text" value="{{old('lugarTrabajoRes')}} "class="form-control" id="lugarTrabajoRes" name="lugarTrabajoRes" placeholder="">
						</div>
						
				  	</div>
				  	<h5>En caso de emergencia comunicarse con:</h5>
				  	<p>1. Primer numero de contacto</p>
				  	<div class="form-row">
				  		
						<div class="form-group col-md-4">
						    <label for="nomContacto1" class="required">Nombre</label>
						    <input type="text" value="{{old('nomContacto1')}} "class="form-control" id="nomContacto1" name="nomContacto1" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="parentescoContacto1" class="required">Parentesco</label>
						    <input type="text" value="{{old('parentescoContacto1')}} "class="form-control" id="parentescoContacto1" name="parentescoContacto1" placeholder="">
						</div>
						<div class="form-group col-md-2">
						    <label for="telContacto1" class="required">Telefono Casa</label>
						    <input type="text" value="{{old('telContacto1')}} "class="form-control" id="telContacto1" name="telContacto1" placeholder="">
						</div>
						<div class="form-group col-md-2">
						    <label for="celContacto1" class="required">Telefono Celular</label>
						    <input type="text" value="{{old('celContacto1')}} "class="form-control" id="celContacto1" name="celContacto1" placeholder="">
						    @error('celContacto1')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>	
				  	</div>
				  	<p>2. Segundo numero de contacto</p>
				  	<div class="form-row">
				  		
						<div class="form-group col-md-4">
						    <label for="nomContacto2" class="required">Nombre</label>
						    <input type="text" value="{{old('nomContacto2')}} "class="form-control" id="nomContacto2" name="nomContacto2" placeholder="">
						</div>
						<div class="form-group col-md-3">
						    <label for="parentescoContacto2" class="required">Parentesco</label>
						    <input type="text" value="{{old('parentescoContacto2')}} "class="form-control" id="parentescoContacto2" name="parentescoContacto2" placeholder="">
						</div>
						<div class="form-group col-md-2">
						    <label for="telContacto2" class="required">Telefono Casa</label>
						    <input type="text" value="{{old('telContacto2')}} "class="form-control" id="telContacto2" name="telContacto2" placeholder="">
						</div>
						<div class="form-group col-md-2">
						    <label for="celContacto2" class="required">Telefono Celular</label>
						    <input type="text" value="{{old('celContacto2')}} "class="form-control" id="celContacto2" name="celContacto2" placeholder="">
						    @error('celContacto1')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>	
				  	</div>

				  <button type="submit" class="btn btn-success btn-lg">Enviar</button>
				</form>
			
		</div>	
	</div>
</div>
@endsection