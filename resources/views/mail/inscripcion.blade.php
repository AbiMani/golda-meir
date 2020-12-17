<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ficha de inscripcion Golda Meir</title>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 1.54cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: #45451c;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #45451c;
            color: white;
            text-align: center;
            line-height: 35px;
        }
        h2,h3 {
          text-align: center;
          font-family: Arial, sans-serif; 
        }
        h5{
          text-align: center;
          font-family: Arial, sans-serif;
          font-size: 0.7em; 
          font-style: italic;
          margin-top: -20px;
          margin-bottom: 50px;
        }
        h4{
          font-family: Arial, sans-serif; 
        }

        h1 {
          font-size: 1.7em;
          line-height: 1.4em;
          font-weight: normal;
          text-align: center;
          margin: 0 0 10px 0;
          font-family: Arial, sans-serif; 
        }
        p{
          font-size: 12px;
          font-family: Arial, sans-serif;
          text-align: justify; 
        }

        ul,li{
          font-size: 12px;
          font-family: Arial, sans-serif;
          text-align: justify; 
        }

        .page-break {
            page-break-after: always;
        }
    </style>

    <?php 
        use App\estudiante;
        $ing = $estu->ingreso;
        $mad = $estu->madreEstudiante;
        $pad = $estu->padreEstudiante;
        $res = $estu->responsable;
        $sal = $estu->generalSalud;
        $enf = $estu->enfermedad;
        $ale = $estu->alergia;
        $fra = $estu->fractura;
        $op =$estu->operados;
        $men = $estu->mental;
        $con = $estu->contactos;

    ?>
  </head>
  <body>
    <header>
      
    </header>
    <main>
      <h2>COLEGIO GOLDA MEIR</h2>
      <h5><small>23 Avenida Norte, entre 1ª. y 3ª Calle poniente N° 1223<br>Atrás del Instituto Gral. Francisco Morazán, San Salvador<br>Código: 1050 &nbsp;&nbsp; Tel: 2508-6869 &nbsp;&nbsp; Email: info@colegiogoldameir.edu.sv</small><h5>

      <h3>FICHA DE INSCRIPCION 2021</h3>

      <!--<img width="100px" src="/storage/7ebBkPH1WbI9odrFayAVE77N8lkem3nCX5GncVs7.jpg" -->

      <h4>I. Datos de estudiante</h4>
      <p><b>Nombres:</b> {{$estu->nombre}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$estu->apellido}}&nbsp;&nbsp;<b>Fecha de nacimiento:</b> {{$estu->fechaNacimiento}} &nbsp;&nbsp;<b>Edad: </b>{{$estu->edad}}  años {{$estu->meses}} meses &nbsp;&nbsp;<b>Direccion completa de donde reside el estudiante: </b>{{$estu->direccion}} &nbsp;&nbsp;<b>Municipio: </b>{{$estu->idMunicipio}} &nbsp;&nbsp;<b>Departamento: </b>{{$estu->idDepartamento}} &nbsp;&nbsp;<b>Sexo: </b>{{$estu->sexo}}.</p>
      <p><b>Grado Cursado:</b> {{$ing->gradoCursado}} &nbsp;&nbsp; <b>Tipo Ingreso: </b>{{$ing->tipoIngreso}} &nbsp;&nbsp; <b>Grado que Cursara:</b> {{$ing->gradoACursar}}&nbsp;&nbsp; <b>Institucion de donde proviene:</b> {{$ing->nombreInstitutoAnterior}}&nbsp;&nbsp; </p>
   
      <h4>II. Datos Madre del estudiante</h4>
      <p ><b>Nombres:</b> {{$mad->nombreMadre}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$mad->apellidoMadre}}&nbsp;&nbsp;<b>Dui:</b> {{$mad->numeroDuiMadre}} &nbsp;&nbsp;<b>Profesion u oficio: </b>{{$mad->profesionMadre}} &nbsp;&nbsp;<b>Lugar donde trabaja: </b>{{$mad->lugarTrabajoMadre}} &nbsp;&nbsp;<b>Telefono: </b>{{$mad->telefonoMadre}} &nbsp;&nbsp;<b>Correo: </b>{{$mad->correoMadre}} &nbsp;&nbsp;<b>Direccion: </b>{{$mad->direccionMadre}}.</p>
       
      <h4>III. Datos Padre del estudiante</h4>
      <p ><b>Nombres:</b> {{$pad->nombrePadre}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$pad->apellidoPadre}}&nbsp;&nbsp;<b>Dui:</b> {{$pad->numeroDuiPadre}} &nbsp;&nbsp;<b>Profesion u oficio: </b>{{$pad->profesionPadre}} &nbsp;&nbsp;<b>Lugar donde trabaja: </b>{{$pad->lugarTrabajoPadre}} &nbsp;&nbsp;<b>Telefono: </b>{{$pad->telefonoPadre}} &nbsp;&nbsp;<b>Correo: </b>{{$pad->correoPadre}} &nbsp;&nbsp;<b>Direccion: </b>{{$pad->direccionPadre}}.</p>
      
      <h4>IV. Datos Responsable del estudiante</h4>
      <p ><b>Nombres:</b> {{$res->nombreRes}} &nbsp;&nbsp;<b>Apellidos:</b>  {{$res->apellidoRes}}&nbsp;&nbsp;<b>Dui:</b> {{$res->numeroDuiRes}} &nbsp;&nbsp;<b>Profesion u oficio: </b>{{$res->profesionRes}} &nbsp;&nbsp;<b>Lugar donde trabaja: </b>{{$res->lugarTrabajoRes}} &nbsp;&nbsp;<b>Telefono: </b>{{$res->telefonoRes}} &nbsp;&nbsp;<b>Correo: </b>{{$res->correoRes}} &nbsp;&nbsp;<b>Direccion: </b>{{$res->direccionRes}}.</p>
      
      
      <div class="page-break"></div>


      <h2>COLEGIO GOLDA MEIR</h2>
       <h5><small>23 Avenida Norte, entre 1ª. y 3ª Calle poniente N° 1223<br>Atrás del Instituto Gral. Francisco Morazán, San Salvador<br>Código: 1050 &nbsp;&nbsp; Tel: 2508-6869 &nbsp;&nbsp; Email: info@colegiogoldameir.edu.sv</small><h5>
      
      <h3>FICHA DE SALUD</h3>
      <p >Esta ficha es absolutamente confidencial. Solo será conocida por la Dirección del Colegio y el Docente Orientador del estudiante con el fin de lograr una mejor atención durante su jornada escolar y en caso de emergencia.</p>
      <br>
      <p><b>Nombre del estudiante: </b>{{$estu->nombre}}&nbsp;&nbsp;{{$estu->apellido}}&nbsp;&nbsp;<b>Edad: </b>{{$estu->edad}}&nbsp;&nbsp;<b>Grado: </b> {{$ing->gradoACursar}}&nbsp;&nbsp;<b>Seccion: </b>&nbsp;&nbsp;&nbsp;&nbsp;<b>Fecha de Nacimiento: </b>{{$estu->fechaNacimiento}}  </p>

      <p><b>Grupo Sanguineo: </b>{{$sal->tipoSangre}}&nbsp;&nbsp; <b>Peso: </b>{{$sal->peso}}<b>Lb.</b>&nbsp;&nbsp;<b>Talla: </b>{{$sal->talla}}&nbsp;&nbsp;
      <?php if(!is_null($enf)): ?>
          <b>Nombre de la enfermedad que padece:</b>{{$enf->nomEnf}}&nbsp;&nbsp;<b>Explique: </b>{{$enf->descripcionEnf}}&nbsp;&nbsp;<b>Tratamiento: </b>{{$enf->txEnf}}&nbsp;&nbsp;<b>Nombre del Medico:</b>{{$enf->nomMedico}}&nbsp;&nbsp; <b>Tel. Medico:</b>{{$enf->telMedico}}&nbsp;&nbsp;</p>
      <?php endif; ?> 
      <?php if(!is_null($ale)): ?>
          <p><b>Nombre del medicamento que es alergico: </b>{{$ale->mediAlergia}}&nbsp;&nbsp;<b>Explique: </b>{{$ale->descripcionAlergia}}&nbsp;&nbsp;<b>Otras alergias: </b>{{$ale->otraAlergia}}&nbsp;&nbsp;<b>Explique:</b>{{$ale->descripcionOtra}}&nbsp;&nbsp;</p>
      <?php endif; ?> 
      <?php if(!is_null($fra)): ?>
          <p><b>Area afectada por fractura: </b>{{$fra->areaAfectada}}&nbsp;&nbsp;<b>Presenta Secuelas: </b>{{$fra->secuelaFrac}}&nbsp;&nbsp;<b>Tratamiento que recibe: </b>{{$fra->txFrac}}&nbsp;&nbsp;</p>
      <?php endif; ?> 
      <?php if(!is_null($op)): ?>
          <p><b>Operacion realizada: </b>{{$op->descripcionOp}}&nbsp;&nbsp;<b>Presenta secuelas: </b>{{$op->secuelasOp}}&nbsp;&nbsp;<b>Tratamiento que recibe: </b>{{$op->txOp}}</p>
      <?php endif; ?> 
      <?php if(!is_null($men)): ?>
          <p><b>¿Ha sido diagnosticado con hiperactividad?</b></p>
          <p><b>¿Necestia algun medicamento?</b>&nbsp;&nbsp;<b>¿Cual?</b>{{$men->nomMedHipera}}&nbsp;&nbsp;</p>
          <p><b>¿Tiene algún problema de aprendizaje?</b>&nbsp;&nbsp;<b>¿Cual?</b>{{$men->desProbAprendizaje}}&nbsp;&nbsp;</p>
          <p><b>¿Se le ha diagnosticado algún problema médico grave?</b>&nbsp;&nbsp;<b>¿Cual?</b>{{$men->desProbMedicoG}}&nbsp;&nbsp;</p>
      <?php endif; ?> 

      
      
      <h4>En caso de emergencia comunicarse con:</h4>
      <p><b>1.</b>&nbsp;&nbsp;<b>Nombre: </b>{{$con[0]->nomContac}}&nbsp;&nbsp;<b>Parentesco: </b>{{$con[0]->parentescoContacto}}&nbsp;&nbsp;<b>Tel. Casa: </b>{{$con[0]->telContacto}}&nbsp;&nbsp;<b>Celular: </b>{{$con[0]->celContacto}}&nbsp;&nbsp;</p>
      <p><b>2.</b>&nbsp;&nbsp;<b>Nombre: </b>{{$con[1]->nomContac}}&nbsp;&nbsp;<b>Parentesco: </b>{{$con[1]->parentescoContacto}}&nbsp;&nbsp;<b>Tel. Casa: </b>{{$con[1]->telContacto}}&nbsp;&nbsp;<b>Celular: </b>{{$con[1]->celContacto}}&nbsp;&nbsp;</p>
      <br>
      <br>
      <br>
      <p style="text-align:center;"><b>f. ______________________</b><br><b><small>Padre/Madre/Responsable</small></b></p>
      <br>
      <br>
      <p style="text-align:center;"><b>San Salvador, _____ de ___________ de 20__</b></p>

      <footer>
       <h4>Colgio Golda Meir</h4>
      </footer>
      <div class="page-break"></div>


      <h2>COLEGIO GOLDA MEIR</h2>
      <h5><small>23 Avenida Norte, entre 1ª. y 3ª Calle poniente N° 1223<br>Atrás del Instituto Gral. Francisco Morazán, San Salvador<br>Código: 1050 &nbsp;&nbsp; Tel: 2508-6869 &nbsp;&nbsp; Email: info@colegiogoldameir.edu.sv</small><h5>


      <h3>CARTA DE COMPROMISO DEL PADRE/MADRE O RESPONSABLE</h3>

      <p>Después de haber leído el Manual de Convivencia y Reglamento del Colegio Golda Meir</p>

      <?php if($com==1): ?>
          <p><b>Yo: </b>{{$pad->nombrePadre}} &nbsp;{{$pad->apellidoPadre}} <b>con DUI No. </b>{{$pad->numeroDuiPadre}}&nbsp;&nbsp;<b>de nacionalidad </b>{{$naci}}&nbsp;<b>con domicilio en </b>{{$pad->direccionPadre}}&nbsp;&nbsp;<b>en mi calidad de padre/madre/responsable del estudiante </b>{{$estu->nombre}}&nbsp;{{$estu->apellido}}&nbsp;<b> de </b>{{$ing->gradoACursar}} <b>grado del Colegio Golda Meir.</b></p>
      <?php endif; ?> 

      <?php if($com==2): ?>
          <p><b>Yo: </b>{{$mad->nombreMadre}} &nbsp;{{$mad->apellidoMadre}} <b>con DUI No. </b>{{$mad->numeroDuiMadre}}&nbsp;&nbsp;<b>de nacionalidad </b>{{$naci}}&nbsp;<b>con domicilio en </b>{{$mad->direccionMadre}}&nbsp;&nbsp;<b>en mi calidad de padre/madre/responsable del estudiante </b>{{$estu->nombre}}&nbsp;{{$estu->apellido}}&nbsp;<b> de </b>{{$ing->gradoACursar}} <b>grado del Colegio Golda Meir.</b></p>
      <?php endif; ?>

      <?php if($com==3): ?>
          <p><b>Yo: </b>{{$res->nombreRes}} &nbsp;{{$res->apellidoRes}} <b>con DUI No. </b>{{$res->numeroDuiRes}}&nbsp;&nbsp;<b>de nacionalidad </b>{{$naci}}&nbsp;<b>con domicilio en </b>{{$res->direccionRes}}&nbsp;&nbsp;<b>en mi calidad de padre/madre/responsable del estudiante </b>{{$estu->nombre}}&nbsp;{{$estu->apellido}}&nbsp;<b> de </b>{{$ing->gradoACursar}} <b>grado del Colegio Golda Meir.</b></p>
      <?php endif; ?>

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

      <br>
      <br>
      <br>
      <p style="text-align:center;"><b>f. ______________________</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>f. ______________________</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>______________________</b><br>&nbsp;&nbsp;&nbsp;&nbsp;<b><small>Padre/Madre/Responsable</small></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><small>Director/a</small></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><small>sello</small></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
      <br>
      <br>

      <p style="text-align:center;"><b>San Salvador, _____ de ___________ de 20__</b></p>

      <footer>
      <h4>Colgio Golda Meir</h4>
    </footer>
    <div class="page-break"></div>


      <h2>COLEGIO GOLDA MEIR</h2>
      <h5><small>23 Avenida Norte, entre 1ª. y 3ª Calle poniente N° 1223<br>Atrás del Instituto Gral. Francisco Morazán, San Salvador<br>Código: 1050 &nbsp;&nbsp; Tel: 2508-6869 &nbsp;&nbsp; Email: info@colegiogoldameir.edu.sv</small><h5>


      <h3>CARTA DE AUTORIZACIÓN</h3>

      <?php if($au==1): ?>
          <p><b>Por este medio, Yo: </b>{{$pad->nombrePadre}} &nbsp;{{$pad->apellidoPadre}} <b>con DUI No. </b>{{$pad->numeroDuiPadre}}&nbsp;&nbsp;<b>Padre/madre/responsable del estudiante </b>{{$estu->nombre}}&nbsp;{{$estu->apellido}}&nbsp;<b> de </b>{{$estu->edad}} &nbsp;<b>años de edad que cursa</b> {{$ing->gradoACursar}} &nbsp;<b>grado del Colegio Golda Meir.</b></p>
      <?php endif; ?> 

      <?php if($au==2): ?>
          <p><b>Por este medio, Yo: </b>{{$mad->nombreMadre}} &nbsp;{{$mad->apellidoMadre}} <b>con DUI No. </b>{{$mad->numeroDuiMadre}}&nbsp;&nbsp;<b>Padre/madre/responsable del estudiante </b>{{$estu->nombre}}&nbsp;{{$estu->apellido}}&nbsp;<b> de </b>{{$estu->edad}} &nbsp;<b>años de edad que cursa</b> {{$ing->gradoACursar}} &nbsp;<b>grado del Colegio Golda Meir.</b></p>
      <?php endif; ?>
      <?php if($au==3): ?>
          <p><b>Por este medio, Yo: </b>{{$res->nombreRes}} &nbsp;{{$res->apellidoRes}} <b>con DUI No. </b>{{$res->numeroDuiRes}}&nbsp;&nbsp;<b>Padre/madre/responsable del estudiante </b>{{$estu->nombre}}&nbsp;{{$estu->apellido}}&nbsp;<b> de </b>{{$estu->edad}} &nbsp;<b>años de edad que cursa</b> {{$ing->gradoACursar}} &nbsp;<b>grado del Colegio Golda Meir.</b></p>
      <?php endif; ?>

      <br>  
      <p class="text-justify">Autorizo conforme al Artículo 46 de la LEY DE PROTECCIÓN INTEGRAL DE LA NIÑEZ Y ADOLESCENCIA al COLEGIO GOLDA MEIR, de la ciudad de San Salvador, a: Hacer uso de imágenes fotográficas y de video con fines de difusión, promoción e información que esta institución educativa considere convenientes sin perjudicar o denigrar en ninguna manera la Integridad e Imagen de las Niñas, Niños o Adolescentes.</p>

      <br>
      <br>
      <br>
      <p style="text-align:center;"><b>f. ______________________</b><br><b><small>Padre/Madre/Responsable</small></b></p>
      <br>
      <br>
      <p style="text-align:center;"><b>San Salvador, _____ de ___________ de 20__</b></p>
           

    </main>
    <footer>
    <h4>Colegio Golda Meir</h4>
</footer>


  </body>