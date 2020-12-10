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
						<div class="form-group col-6 col-md-4">
						    <label for="nombre" class="required">Nombres del niño/a</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nombre')}} "class="form-control" id="nombre" name="nombre" placeholder="nombre del nino" required>
						    @error('nombre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-4">
						    <label for="apellido" class="required">Apellidos del niño/a</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('apellido')}} "class="form-control" id="apellido" name="apellido" placeholder="apellidos del nino">
						    @error('apellido')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-sm-4 col-md-2">
						    <label for="fechadenacimiento" class="required">Fecha de nacimiento</label><sub class="red ">*</sub>
						    <input type="date" name="fechanacimiento" class="form-control" id="fechadenacimiento" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
						</div>
						<div class="form-group col-3 col-sm-2 col-md-1">
						    <label for="edad" class="required">Edad</label><sub class="red ">*</sub>
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
						  <div class="form-group col-3 col-sm-2 col-md-1">
						    <label for="meses" class="required">Meses</label><sub class="red ">*</sub>
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
						    <label for="sexo" class="required">Sexo</label><sub class="red ">*</sub>
						    <select class="form-control" id="sexo" name="sexo">
						      <option>Femenino</option>
						      <option>Masculino</option>
						    </select>
						    @error('sexo')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						<div class="form-group col-8 col-md-4">
						    <label for="direccion" class="required">Direccion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('direccion')}} "class="form-control" id="direccion" name="direccion" placeholder="direccion de residencia del niño">
						    @error('direccion')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="idDepartamento" class="required">Departamento</label><sub class="red ">*</sub>
						    <select class="form-control" id="idDepartamento" name="idDepartamento">
						      <option value="Ahuachapán">Ahuachapán</option>
						      <option value="Sonsonate">Sonsonate</option>
						      <option value="Santa Ana">Santa Ana</option>
						      <option value="San Salvador">San Salvador</option>
						      <option value="La Libertad">La Libertad</option>
						      <option value="Chalatenango">Chalatenango</option>
						      <option value="Cuscatlán">Cuscatlán</option>
						      <option value="Cabañas">Cabañas</option>
						      <option value="La Paz">La Paz</option>
						      <option value="San Vicente">San Vicente</option>
						      <option value="Usulután">Usulután</option>
						      <option value="San Miguel">San Miguel</option>
						      <option value="Morazán">Morazán</option>
						      <option value="La Unión">La Unión</option>
						    </select>
						    @error('idDepartamento')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="idmunicipio" class="required">Municipio</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('idmunicipio')}} "class="form-control" id="idmunicipio" name="idMunicipio" placeholder="">
						    @error('idMunicipio')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<!--<div class="form-group col-6 col-md-2">
						    <label for="imageEstudiante" class="required">Foto</label>
						    <input type="file"  id="imageEstudiante" name="imageEstudiante" accept="image/*">
						    @error('imageEstudiante')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>-->

				  	</div>
				  	<!--fin datos estudiante-->
				  	<div class="form-row">
				  		<div class="form-group col-6 col-md-2">
						    <label for="gradoCursado" class="required">Grado Cursado</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('gradoCursado')}} "class="form-control" id="gradoCursado" name="gradoCursado" placeholder="">
						    @error('gradoCursado')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-2">
						    <label for="gradoACursar" class="required">Grado a Cursar</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('gradoACursar')}} "class="form-control" id="gradoACursar" name="gradoACursar" placeholder="">
						    @error('gradoACursar')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-3">
						    <label for="nombreInstitutoAnterior" class="required">Instituto Anterior</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nombreInstitutoAnterior')}} "class="form-control" id="nombreInstitutoAnterior" name="nombreInstitutoAnterior" placeholder="">
						    @error('nombreIsntitutoAnterior')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-sm-3 col-md-3"><sub class="red ">*</sub>
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
						<div class="form-group col-6 col-md-4">
						    <label for="nombreMadre" class="required">Nombres de la madre</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nombreMadre')}} "class="form-control" id="nombreMadre" name="nombreMadre" placeholder="nombre de la madre">
						    @error('nombreMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-4">
						    <label for="apellidoMadre" class="required">Apellidos de la madre</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('apellidoMadre')}} "class="form-control" id="apellidoMadre" name="apellidoMadre" placeholder="apellidos de la madre">
						    @error('apellidoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="numeroDuiMadre" class="required">Dui</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('numeroDuiMadre')}} "class="form-control" id="numeroDuiMadre" name="numeroDuiMadre" placeholder="">
						    @error('numeroDuiMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6  col-md-2">
						    <label for="telefonoMadre" class="required">Numero Telefono</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('telefonoMadre')}} "class="form-control" id="telefonoMadre" name="telefonoMadre" placeholder="">
						    @error('telefonoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	<div class="form-row">
						
						<div class="form-group col-6 col-md-2">
						    <label for="profesionMadre" class="required">Profesion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('profesionMadre')}} "class="form-control" id="profesionMadre" name="profesionMadre" placeholder="">
						    @error('profesionMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group  col-6 col-md-2">
						    <label for="lugarTrabajoMadre" class="required">Trabajo</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('lugarTrabajoMadre')}} "class="form-control" id="lugarTrabajoMadre" name="lugarTrabajoMadre" placeholder="">
						    @error('lugarTrabajoMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-4">
						    <label for="direccionMadre" class="required">Direccion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('direccionMadre')}} "class="form-control" id="direccionMadre" name="direccionMadre" placeholder="">
						    @error('direccionMadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group  col-6 col-md-4">
						    <label for="correoMadre" class="required">Correo electronico</label><sub class="red ">*</sub>
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
						<div class="form-group col-6 col-md-4">
						    <label for="nombrePadre" class="required">Nombres de la padre</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nombrePadre')}} "class="form-control" id="nombrePadre" name="nombrePadre" placeholder="nombre de la padre">
						    @error('nombrePadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-4">
						    <label for="apellidoPadre" class="required">Apellidos de la padre</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('apellidoPadre')}} "class="form-control" id="apellidoPadre" name="apellidoPadre" placeholder="apellidos de la padre">
						    @error('apellidoPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="numeroDuiPadre" class="required">Dui</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('numeroDuiPadre')}} "class="form-control" id="numeroDuiPadre" name="numeroDuiPadre" placeholder="">
						    @error('numeroDuiPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group  col-6 col-md-2">
						    <label for="telefonoPadre" class="required">Numero Telefono</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('telefonoPadre')}} "class="form-control" id="telefonoPadre" name="telefonoPadre" placeholder="">
						    @error('telefonoPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	<div class="form-row">
						
						<div class="form-group col-6 col-md-2">
						    <label for="profesionPadre" class="required">Profesion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('profesionPadre')}} "class="form-control" id="profesionPadre" name="profesionPadre" placeholder="">
						    @error('profesionPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="lugarTrabajoPadre" class="required">Trabajo</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('lugarTrabajoPadre')}} "class="form-control" id="lugarTrabajoPadre" name="lugarTrabajoPadre" placeholder="">
						    @error('lugarTrabajoPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-4">
						    <label for="direccionPadre" class="required">Direccion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('direccionPadre')}} "class="form-control" id="direccionPadre" name="direccionPadre" placeholder="">
						    @error('direccionPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-4">
						    <label for="correoPadre" class="required">Correo electronico</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('correoPadre')}} "class="form-control" id="correoPadre" name="correoPadre" placeholder="">
						    @error('correoPadre')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	
				  <!--Fin Datos de los padre-->
				  <!--Datos del responsable-->
				  	<br>
				  	<h4>Datos personales del Responsable</h4>
				  	<div class="form-row">
						<div class="form-group col-6 col-md-4">
						    <label for="nombreRes" class="required">Nombres de responsable</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nombreRes')}} "class="form-control" id="nombreRes" name="nombreRes" placeholder="nombre ">
						    @error('nombreRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div>
						  <div class="form-group col-6 col-md-4">
						    <label for="apellidoRes" class="required">Apellidos de responsable</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('apellidoRes')}} "class="form-control" id="apellidoRes" name="apellidoRes" placeholder="apellidos">
						    @error('apellidoRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="numeroDuiRes" class="required">Dui</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('numeroDuiRes')}} "class="form-control" id="numeroDuiRes" name="numeroDuiRes" placeholder="">
						    @error('numeroDuiRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="telefonoRes" class="required">Numero Telefono</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('telefonoRes')}} "class="form-control" id="telefonoRes" name="telefonoRes" placeholder="">
						    @error('telefonoRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
				  	</div>
				  	<div class="form-row">
						
						<div class="form-group col-6 col-md-2">
						    <label for="profesionRes" class="required">Profesion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('profesionRes')}} "class="form-control" id="profesionRes" name="profesionRes" placeholder="">
						    @error('profesionRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="lugarTrabajoRes" class="required">Trabajo</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('lugarTrabajoRes')}} "class="form-control" id="lugarTrabajoRes" name="lugarTrabajoRes" placeholder="">
						    @error('lugarTrabajoRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-4">
						    <label for="direccionRes" class="required">Direccion</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('direccionRes')}} "class="form-control" id="direccionRes" name="direccionRes" placeholder="">
						    @error('direccionRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-4">
						    <label for="correoRes" class="required">Correo electronico</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('correoRes')}} "class="form-control" id="correoRes" name="correoRes" placeholder="">
						    @error('correoRes')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						
				  	</div>
				  <!--Fin Datos de los padre-->
				  	<br>
				  	<!--Inicio ficha de Salud estudiante-->
				  	<hr>
				  	<h4>Ficha de salud del estudiante</h4>
				  	<p class="text-justify">Esta ficha es absolutamente confidencial. Solo será conocida por la Dirección del Colegio y el Docente Orientador del estudiante con el fin de lograr una mejor atención durante su jornada escolar y en caso de emergencia.</p>
				  	<div class="form-row">
						<div class="form-group col-5 col-md-2">
						    <label for="tipoSangre" class="required">Tipo Sanguineo </label><sub class="red ">*</sub>
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
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						  </div> 
						  <div class="form-group col-4 col-md-2">
						    <label for="peso" class="required">Peso: </label><sub class="red ">*</sub>
						    <div>
						    	<input type="text" value="{{old('peso')}} "class="form-control" id="peso" name="peso" placeholder=""><small class="form-text text-muted">Lb.</small>
						    </div>
						    
						    @error('peso')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-4 col-md-1">
						    <label for="talla" class="required">Talla</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('talla')}} "class="form-control" id="talla" name="talla" placeholder="">
						    @error('talla')
						    	<small class="text-danger">*{{$message}}</small>
						    @enderror
						</div>
						
						<fieldset class="form-group col-6 col-md-3">
						      <legend class="col-form-label  ">¿Padece alguna enfermedad? <sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="enfermedad" id="enfermedad1" value="1" checked>
						          <label class="form-check-label" for="enfermedad1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="enfermedad" id="enfermedad2" value="0">
						          <label class="form-check-label" for="enfermedad2">
						            No
						          </label>
						        </div>
						</fieldset>
						<div class="form-group col-6 col-md-2">
						    <label for="nomEnf" class="required">¿Cual?</label>
						    <input type="text" value="{{old('nomEnf')}} "class="form-control" id="nomEnf" name="nomEnf" placeholder="">
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="descripcionEnf" class="required">Explique</label>
						    <input type="text" value="{{old('descripcionEnf')}} "class="form-control" id="descripcionEnf" name="descripcionEnf" placeholder="">
						</div>
				  	</div>
				  	<div class="form-row">
						<div class="form-group col-6 col-md-4">
						    <label for="txEnf" class="required">Tratamiento</label>
						    <input type="text" value="{{old('txEnf')}} "class="form-control" id="txEnf" name="txEnf" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="nomMedico" class="required">Nombre del medico</label>
						    <input type="text" value="{{old('nomMedico')}} "class="form-control" id="nomMedico" name="nomMedico" placeholder="">
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="telMedico" class="required">Telefono Medico</label>
						    <input type="text" value="{{old('telMedico')}} "class="form-control" id="telMedico" name="telMedico" placeholder="">
						</div>
						<fieldset class="form-group col-6 col-md-3">
						      <legend class="col-form-label  ">¿Es alergico a medicamentos? <sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="alergia" id="alergia1" value="1" checked>
						          <label class="form-check-label" for="alergia1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="alergia" id="alergia2" value="0">
						          <label class="form-check-label" for="alergia2">
						            No
						          </label>
						        </div>
						</fieldset>	
				  	</div>
				  	<div class="form-row">
				  		
						<div class="form-group col-6 col-md-2">
						    <label for="mediAlergia" class="required">¿Cual?</label>
						    <input type="text" value="{{old('mediAlergia')}} "class="form-control" id="mediAlergia" name="mediAlergia" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="descripcionAlergia" class="required">Explique</label>
						    <input type="text" value="{{old('descripcionAlergia')}} "class="form-control" id="descripcionAlergia" name="descripcionAlergia" placeholder="">
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="otraAlergia" class="required">¿Otras alergias?</label>
						    <input type="text" value="{{old('otraAlergia')}} "class="form-control" id="otraAlergia" name="otraAlergia" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="descripcionOtra" class="required">Explique</label>
						    <input type="text" value="{{old('descripcionOtra')}} "class="form-control" id="descripcionOtra" name="descripcionOtra" placeholder="">
						    
						</div>	
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-7 col-md-3">
						      <legend class="col-form-label  ">¿Alguna vez ha sufrido fracturas?<sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="fractura" id="fractura1" value="1" checked>
						          <label class="form-check-label" for="fractura1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="fractura" id="fractura2" value="0">
						          <label class="form-check-label" for="fractura2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-5 col-md-3">
						    <label for="areaAfectada" class="required">Area afectada</label>
						    <input type="text" value="{{old('areaAfectada')}} "class="form-control" id="areaAfectada" name="areaAfectada" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="secuelaFrac" class="required">Presenta secuelas</label>
						    <input type="text" value="{{old('secuelaFrac')}} "class="form-control" id="secuelaFrac" name="secuelaFrac" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="txFrac" class="required">Tratamiento que recibe</label>
						    <input type="text" value="{{old('txFrac')}} "class="form-control" id="ttxFrac" name="txFrac" placeholder="">
						</div>
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-6 col-md-3">
						      <legend class="col-form-label  ">¿Alguna vez ha sido operado?<sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="operado" id="operado1" value="1" checked>
						          <label class="form-check-label" for="operado1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="operado" id="operado2" value="0">
						          <label class="form-check-label" for="operado2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-6 col-md-3">
						    <label for="descripcionOp" class="required">Explique</label>
						    <input type="text" value="{{old('descripcionOp')}} "class="form-control" id="descripcionOp" name="descripcionOp" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="secuelasOp" class="required">Presenta secuelas</label>
						    <input type="text" value="{{old('secuelasOp')}} "class="form-control" id="secuelasOp" name="secuelasOp" placeholder="">
						</div>
						<div class="form-group col-6 col-md-3">
						    <label for="txOp" class="required">Tratamiento que recibe</label>
						    <input type="text" value="{{old('txOp')}} "class="form-control" id="txOp" name="txOp" placeholder="">
						</div>
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-6 col-md-3">
						      <legend class="col-form-label  ">¿Ha sido diagnosticado con hiperactividad?<sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividad" id="hiperactividad1" value="1" checked>
						          <label class="form-check-label" for="hiperactividad1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividad" id="hiperactividad2" value="0">
						          <label class="form-check-label" for="hiperactividad2">
						            No
						          </label>
						        </div>
						</fieldset>
						<fieldset class="form-group col-6 col-md-3">
						      <legend class="col-form-label  ">¿Necesita algún medicamento?</legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividadMedicamento" id="hiperactividadMedicamento1" value="1" checked>
						          <label class="form-check-label" for="hiperactividadMedicamento1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="hiperactividadMedicamento" id="hiperactividadMedicamento2" value="0">
						          <label class="form-check-label" for="hiperactividadMedicamento2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group col-md-3">
						    <label for="nomMedHipera" class="required">¿Cual?</label>
						    <input type="text" value="{{old('nomMedHipera')}} "class="form-control" id="nomMedHipera" name="nomMedHipera" placeholder="">
						</div>
						
				  	</div>
				  	<div class="form-row">
				  		<fieldset class="form-group col-6 col-md-3">
						      <legend class="col-form-label  ">¿Tiene algún problema de aprendizaje?<sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="aprendizaje" id="aprendizaje1" value="1" checked>
						          <label class="form-check-label" for="aprendizaje1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="aprendizaje" id="aprendizaje2" value="0">
						          <label class="form-check-label" for="aprendizaje2">
						            No
						          </label>
						        </div>
						</fieldset>
						<div class="form-group col-6 col-md-3">
						    <label for="desProbAprendizaje" class="required">¿Cual?</label>
						    <input type="text" value="{{old('desProbAprendizaje')}} "class="form-control" id="desProbAprendizaje" name="desProbAprendizaje" placeholder="">
						</div>
						<fieldset class="form-group col-6 col-md-4">
						      <legend class="col-form-label  ">¿Se le ha diagnosticado algún problema médico grave?<sub class="red ">*</sub></legend> 
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="problemaEnf" id="problemaEnf1" value="1" checked>
						          <label class="form-check-label" for="problemaEnf1">
						            Si
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="problemaEnf" id="problemaEnf2" value="0">
						          <label class="form-check-label" for="problemaEnf2">
						            No
						          </label>
						        </div>
						</fieldset>	
						<div class="form-group  col-6 col-md-2">
						    <label for="desProbMedicoG" class="required">¿Cual?</label>
						    <input type="text" value="{{old('desProbMedicoG')}} "class="form-control" id="desProbMedicoG" name="desProbMedicoG" placeholder="">
						</div>
						
				  	</div>
				  	<h5>En caso de emergencia comunicarse con:</h5>
				  	<p>1. Primer numero de contacto</p>
				  	<div class="form-row">
				  		
						<div class="form-group col-8 col-md-4">
						    <label for="nomContacto1" class="required">Nombre</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nomContacto1')}} "class="form-control" id="nomContacto1" name="nomContacto1" placeholder="">
						    @error('nomContacto1')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-4 col-md-3">
						    <label for="parentescoContacto1" class="required">Parentesco</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('parentescoContacto1')}} "class="form-control" id="parentescoContacto1" name="parentescoContacto1" placeholder="">
						    @error('parentescoContacto1')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="telContacto1" class="required">Telefono Casa</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('telContacto1')}} "class="form-control" id="telContacto1" name="telContacto1" placeholder="">
						    @error('telContacto1')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="celContacto1" class="required">Telefono Celular</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('celContacto1')}} "class="form-control" id="celContacto1" name="celContacto1" placeholder="">
						    @error('celContacto1')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>	
				  	</div>
				  	<p>2. Segundo numero de contacto</p>
				  	<div class="form-row">
				  		
						<div class="form-group col-8 col-md-4">
						    <label for="nomContacto2" class="required">Nombre</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('nomContacto2')}} "class="form-control" id="nomContacto2" name="nomContacto2" placeholder="">
						    @error('nomContacto2')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-4 col-md-3">
						    <label for="parentescoContacto2" class="required">Parentesco</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('parentescoContacto2')}} "class="form-control" id="parentescoContacto2" name="parentescoContacto2" placeholder="">
						    @error('parentescoContacto2')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="telContacto2" class="required">Telefono Casa</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('telContacto2')}} "class="form-control" id="telContacto2" name="telContacto2" placeholder="">
						    @error('telContacto2')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
						<div class="form-group col-6 col-md-2">
						    <label for="celContacto2" class="required">Telefono Celular</label><sub class="red ">*</sub>
						    <input type="text" value="{{old('celContacto2')}} "class="form-control" id="celContacto2" name="celContacto2" placeholder="">
						    @error('celContacto2')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>	
				  	</div>
					<!--Fin ficha de estuciante-->

				  	<!--Inicio carta compromiso-->
				  	<hr>
				  	<h4>Carta de Compromiso del Padre/Madre o Responsable</h4>
				  	<p class="text-justify">Después de haber leído el Manual de Convivencia y Reglamento del Colegio Golda Meir</p>

				  	<div class="form-inline">
				  		
						<div class="form-group ">
						    <label for="com" class="required">Yo </label>
						    <select class="form-control mx-sm-3" id="com" name="com">
						      <option value="1">Padre</option>
						      <option value="2">Madre</option>
						      <option value="3">Responsable</option>
						    </select>
						    <label for="dui" class="required ">Con Dui No.</label>
						    <input type="text" value="{{old('dui')}} "class="form-control mx-sm-3" id="dui" name="dui" placeholder="">
						    @error('parentescoContacto2')
						    	<small>*{{$message}}</small>
						    @enderror
						    <label for="nacionalidad" class="required">De Nacionalidad</label>
						    <input type="text" value="{{old('nacionalidad')}} "class="form-control mx-sm-3" id="nacionalidad" name="nacionalidad" placeholder="">
						    @error('nacionalidad')
						    	<small>*{{$message}}</small>
						    @enderror

						    <label for="domicilio" class="required">Domicilio</label>
						    <input type="text" value="{{old('domicilio')}} "class="form-control mx-sm-3" id="domicilio" name="domicilio" placeholder="">
						    @error('domicilio')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
	
				  	</div>
				  	<br>
				  	<div class="form-inline">
				  		
						<div class="form-group">
						    <label for="alumno" class="required">En mi responsabilidad de Padre/Madre/Responsable del estudiante </label>
						    <input type="text" value="{{old('alumno')}} "class="form-control mx-sm-3" id="alumno" name="alumno" placeholder="">
						    <label for="grado" class="required">De</label>
						    <input type="text" value="{{old('grado')}} "class="form-control mx-sm-3" id="grado" name="grado" placeholder=""><label>grado del Colegio Golda Meir.</label>
						    @error('grado')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
	
				  	</div>
				  	<br>	
				  	<p class="text-justify" >Me comprometo a: </p>
				  	<ul >
				  		<li>Asistir puntualmente a todas las reuniones generales, entrega de notas, escuela de padres y entrevistas de padres de familia a las que sea convocado.</li>
				  		<li>Proporcionarle a mi hijo o hija los libros, cuadernos, lista de útiles de trabajo que necesita y un teléfono celular de gama media para trabajar con plataforma a disposición de el(los) estudiante(s).</li>
				  		<li>Estar pendiente que mi hijo o hija cumpla con sus tareas escolares.</li>
				  		<li>Aceptar las sanciones dictaminadas según el reglamento del Colegio en caso de indisciplina cometidos por mi hijo o hija.</li>
				  		<li>Respetar los procedimientos y horarios de entrada, salida y visita fijados por el Colegio e informar de cualquier cambio imprevisto.</li>
				  		<li>Respetar a todas las personas del Colegio, evitando incurrir en actos de violencia o faltas de respeto de palabra u obra, difamación, calumnia y/o injuria.</li>
				  		<li>Colaborar y participar activamente en las actividades que organice el Colegio en beneficio de los estudiantes.</li>
				  	</ul>
				  	<p>Nota:</p>
				  	<ul>
				  		<li>Las colegiaturas se pagaran los primeros diez días de cada mes (De enero  a noviembre).El pago tardío generara penalidad $5 de recargo.</li>
				  		<li>Por exámenes bimensuales diferidos se pagará una penalidad de $3.00 cada uno.</li>
				  		<li>No habrá reservaciones de matrícula solo de palabra.</li>
				  		<li>Una vez el estudiante se ha matriculado no se hará devoluciones de matrícula o colegiatura.</li>
				  		<li>La impuntualidad de colegiaturas podrá ocasionar los siguientes inconvenientes a su hijo o hija:</li>
				  		<ul>
				  			<li>No examinarse durante el periodo ordinario de exámenes.</li>
				  			<li>No podrá solicitar documentos como: constancia de conducta y solvencia económica.</li>
				  			<li>A ser suspendido temporalmente.</li>
				  		</ul>
				  	</ul>
				  	<p class="text-justify">DECLARO BAJO JURAMENTO:  que antes de llenar esta ficha de inscripción, he leído debidamente la hoja adjunta de compromisos económicos que he adquirido los cuales acepto en todo su texto y me comprometo a cumplir.</p>
				  	<!--Fin carta compromiso-->

				  	<!--Inicio carta autorizacion-->
				  	<hr>
				  	<h4>Carta de Autorización</h4>

				  	<div class="form-inline">
				  		
						<div class="form-group">
						    <label for="aut" class="required">Yo </label>
						    <select class="form-control mx-sm-3" id="aut" name="aut">
						      <option value="1">Padre</option>
						      <option value="2">Madre</option>
						      <option value="3">Responsable</option>
						    </select>
						    <label for="dui" class="required ">Con Dui No.</label>
						    <input type="text" value="{{old('dui')}} "class="form-control mx-sm-3" id="dui" name="dui" placeholder="">
						    @error('parentescoContacto2')
						    	<small>*{{$message}}</small>
						    @enderror
						    <label for="alumno" class="required">En mi responsabilidad de Padre/Madre/Responsable del estudiante </label>
						    <input type="text" value="{{old('alumno')}} "class="form-control mx-sm-3" id="alumno" name="alumno" placeholder="">
						</div>
	
				  	</div>
				  	<br>
				  	<div class="form-inline">
				  		
						<div class="form-group">
						    <label for="grado" class="required">De</label>
						    <input type="text" value="{{old('grado')}} "class="form-control mx-sm-3" id="grado" name="grado" placeholder=""><label>años de edad </label>
						    @error('grado')
						    	<small>*{{$message}}</small>
						    @enderror
						    <label for="grado" class="required">Que cursa</label>
						    <input type="text" value="{{old('grado')}} "class="form-control mx-sm-3" id="grado" name="grado" placeholder=""><label>grado del Colegio Golda Meir.</label>
						    @error('grado')
						    	<small>*{{$message}}</small>
						    @enderror
						</div>
	
				  	</div>
				  	<br>	
				  	<p class="text-justify">Autorizo conforme al Artículo 46 de la LEY DE PROTECCIÓN INTEGRAL DE LA NIÑEZ Y ADOLESCENCIA al COLEGIO GOLDA MEIR, de la ciudad de San Salvador, a: Hacer uso de imágenes fotográficas y de video con fines de difusión, promoción e información que esta institución educativa considere convenientes sin perjudicar o denigrar en ninguna manera la Integridad e Imagen de las Niñas, Niños o Adolescentes.</p>
				  <button type="submit" class="btn btn-success btn-lg">Enviar</button>
				</form>
			
		</div>	
	</div>
</div>
@endsection