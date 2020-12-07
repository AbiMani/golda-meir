<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ficha de inscripcion Golda Meir</title>
    <style type="text/css">
    	.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}
p{
	font-size: 100%;
}

body {
  position: relative;
  width: 19cm; /* 19 / 21 */  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 5px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

#simb img{
  width: 60px;
}

#luck {
  width: 720px;
  height: 120px;
}


h1 {
  color: #000000;
  font-size: 1.7em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 10px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}
/*  <---   */
#project span {   
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}
/* ---> */
#company {  
  float: right;
  text-align: right;
  width: 50%;
}

#project div,
#company div {
  white-space: nowrap;        
}


#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
  text-align: center;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}



.columna {
  width: 25%;
  float:left;
}


#c2{
  width: 15%;
  float: left;
}

#c3{
  width: 50%
  float:left;
}

@media (max-width: 500px) {
  
  .columna {
    width:auto;
    float:none;
  }
  
}

    </style>
    <?php 
        use App\estudiante;
        $ing = $estudiante->ingreso;
        $mad = $estudiante->madreEstudiante;
        $pad = $estudiante->padreEstudiante;
        $res = $estudiante->responsable;
    ?>
    
        
  </head>
  <body>
    <header class="clearfix">
      <div id="luck">
        <div class="columna">
          <div id="logo">
            <img src="{{ env('APP_URL') }}/index.jpeg" alt="logo Colegio Golda Meir" width="50" height="50">
          </div>
        </div>

        <div class="columna" id="c3">
          <center><div><h2>COLEGIO GOLDA MEIR</h2></div></center>
          <center><div>23 Avenida Norte, entre 1ª. y 3ª Calle poniente N° 1223</div></center>
          <center><div>Atrás del Instituto Gral. Francisco Morazán, San Salvador</div></center>
          <center><div>Código: 1050 &nbsp;&nbsp; Tel: 2508-6869 &nbsp;&nbsp; Email: info@colegiogoldameir.edu.sv</div></center>
        </div>
      </div>


      <h1>FICHA DE INSCRIPCIÓN 2021</h1>
      
    </header>
   
    <main>
      <h3>I. Datos de estudiante</h3>
      <p><b>Nombres:</b> {{$estudiante->nombre}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$estudiante->apellido}}&nbsp;&nbsp;<b>Fecha de nacimiento:</b> {{$estudiante->fechaNacimiento}} &nbsp;&nbsp;<b>Edad: </b>{{$estudiante->edad}}  años {{$estudiante->meses}} meses &nbsp;&nbsp;<b>Direccion completa de donde reside el estudiante: </b>{{$estudiante->direccion}} &nbsp;&nbsp;<b>Municipio: </b>{{$estudiante->idMunicipio}} &nbsp;&nbsp;<b>Departamento: </b>{{$estudiante->idDepartamento}} &nbsp;&nbsp;<b>Sexo: </b>{{$estudiante->sexo}}.</p>
     <p><b>Grado Cursado:</b> {{$ing->gradoCursado}} &nbsp;&nbsp; <b>Tipo Ingreso: </b>{{$ing->tipoIngreso}} &nbsp;&nbsp; <b>Grado que Cursara:</b> {{$ing->gradoACursar}}&nbsp;&nbsp; <b>Institucion de donde proviene:</b> {{$ing->nombreInstitutoAnterior}}&nbsp;&nbsp; </p>
    
     <h3>II. Datos Madre del estudiante</h3>
      <p><b>Nombres:</b> {{$mad->nombreMadre}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$mad->apellidoMadre}}&nbsp;&nbsp;<b>Dui:</b> {{$mad->numeroDuiMadre}} &nbsp;&nbsp;<b>Profesion u oficio: </b>{{$mad->profesionMadre}} &nbsp;&nbsp;<b>Lugar donde trabaja: </b>{{$mad->lugarTrabajoMadre}} &nbsp;&nbsp;<b>Telefono: </b>{{$mad->telefonoMadre}} &nbsp;&nbsp;<b>Correo: </b>{{$mad->correoMadre}} &nbsp;&nbsp;<b>Direccion: </b>{{$mad->direccionMadre}}.</p>
       
     <h3>III. Datos Padre del estudiante</h3>
      <p><b>Nombres:</b> {{$pad->nombrePadre}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$pad->apellidoPadre}}&nbsp;&nbsp;<b>Dui:</b> {{$pad->numeroDuiPadre}} &nbsp;&nbsp;<b>Profesion u oficio: </b>{{$pad->profesionPadre}} &nbsp;&nbsp;<b>Lugar donde trabaja: </b>{{$pad->lugarTrabajoPadre}} &nbsp;&nbsp;<b>Telefono: </b>{{$pad->telefonoPadre}} &nbsp;&nbsp;<b>Correo: </b>{{$pad->correoPadre}} &nbsp;&nbsp;<b>Direccion: </b>{{$pad->direccionPadre}}.</p>
      
     <h3>IV. Datos Responsable del estudiante</h3>
      <p><b>Nombres:</b> {{$res->nombreRes}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$res->apellidoRes}}&nbsp;&nbsp;<b>Dui:</b> {{$res->numeroDuiRes}} &nbsp;&nbsp;<b>Profesion u oficio: </b>{{$res->profesionRes}} &nbsp;&nbsp;<b>Lugar donde trabaja: </b>{{$res->lugarTrabajoRes}} &nbsp;&nbsp;<b>Telefono: </b>{{$res->telefonoRes}} &nbsp;&nbsp;<b>Correo: </b>{{$res->correoRes}} &nbsp;&nbsp;<b>Direccion: </b>{{$res->direccionRes}}.</p>

      

      
    </main>
    
  </body>
