<?php

namespace App\Http\Controllers;
use App\estudiante;
use App\ingreso;
use App\madreEstudiante;
use App\padreEstudiante;
use App\responsable;
use PDF;
use Illuminate\Http\Request;
use App\Mail\InscripcionReceived;
use Illuminate\Support\Facades\Mail;

class formularioInscripcionController extends Controller
{
    public function index()
    {
        return view('formularioInscripcion');
    }

    public function store(Request $request){    
        $request->validate([
            'imageEstudiante' => 'required|image'
        ]);


    	$estudiante = new estudiante;
    	$estudiante->nombre=$request->get('nombre');
    	$estudiante->apellido=$request->get('apellido');
    	$estudiante->fechaNacimiento=$request->get('fechanacimiento');
    	$estudiante->sexo=$request->get('sexo');
    	$estudiante->edad=$request->get('edad');
    	$estudiante->meses=$request->get('meses');
    	$estudiante->direccion=$request->get('direccion');
    	$estudiante->idDepartamento=$request->get('idDepartamento');
    	$estudiante->idMunicipio=$request->get('idMunicipio');

        if($request->hasFile('imageEstudiante')){
            $file = $request->file('imageEstudiante');
            $nombreImage=$file->getClientOriginalName();
            $file->move('images',$nombreImage);
            $estudiante->ruta=$nombreImage;
        }

    	$estudiante->save();

        $idEstu= $estudiante->idEstudiante;
        $estu=estudiante::findOrFail($idEstu);

        $ingreso = new ingreso;
        $ingreso->gradoCursado=$request->get('gradoCursado');
        $ingreso->gradoACursar=$request->get('gradoACursar');
        $ingreso->nombreInstitutoAnterior=$request->get('nombreInstitutoAnterior');
        $ingreso->tipoIngreso=$request->get('tipoIngreso');
        $ingreso->estudiante_id=$idEstu;
        $ingreso->save();


        $madre = new madreEstudiante;
        $madre->nombreMadre=$request->get('nombreMadre');
        $madre->apellidoMadre=$request->get('apellidoMadre');
        $madre->numeroDuiMadre=$request->get('numeroDuiMadre');
        $madre->profesionMadre=$request->get('profesionMadre');
        $madre->lugarTrabajoMadre=$request->get('lugarTrabajoMadre');
        $madre->telefonoMadre=$request->get('telefonoMadre');
        $madre->correoMadre=$request->get('correoMadre');
        $madre->direccionMadre=$request->get('direccionMadre');
        $madre->estuMa_id=$idEstu;
        $madre->save();

        $padre = new padreEstudiante;
        $padre->nombrePadre=$request->get('nombrePadre');
        $padre->apellidoPadre=$request->get('apellidoPadre');
        $padre->numeroDuiPadre=$request->get('numeroDuiPadre');
        $padre->profesionPadre=$request->get('profesionPadre');
        $padre->lugarTrabajoPadre=$request->get('lugarTrabajoPadre');
        $padre->telefonoPadre=$request->get('telefonoPadre');
        $padre->correoPadre=$request->get('correoPadre');
        $padre->direccionPadre=$request->get('direccionPadre');
        $padre->estuPa_id=$idEstu;
        $padre->save();

        $responsable = new responsable;
        $responsable->nombreRes=$request->get('nombreRes');
        $responsable->apellidoRes=$request->get('apellidoRes');
        $responsable->numeroDuiRes=$request->get('numeroDuiRes');
        $responsable->profesionRes=$request->get('profesionRes');
        $responsable->lugarTrabajoRes=$request->get('lugarTrabajoRes');
        $responsable->telefonoRes=$request->get('telefonoRes');
        $responsable->correoRes=$request->get('correoRes');
        $responsable->direccionRes=$request->get('direccionRes');
        $responsable->estuRes_id=$idEstu;
        $responsable->save();

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView("mail.inscripcion", ["estudiante"=>$estu]);
        //Mail::send('mail.emailInscripcion', compact('estu'), function ($mail) use ($pdf) {
         //   $mail->to('maryybetr@gmail.com');
        //    $mail->attachData($pdf->output(), 'inscripcion.pdf');
         //   $mail->subject("formulario inscripcion");
        //});

        //$mailable = new InscripcionReceived($estu);
        //Mail::to("maryybetr@gmail.com")->send($mailable);

        return $pdf->download('inscripcion.pdf');
        return redirect()->route('ofertaAcademica');
    }
}
