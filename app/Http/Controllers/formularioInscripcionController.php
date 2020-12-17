<?php

namespace App\Http\Controllers;
use App\estudiante;
use App\ingreso;
use App\madreEstudiante;
use App\padreEstudiante;
use App\responsable;
use App\generalSalud;
use App\enfermedad;
use App\alergia;
use App\fractura;
use App\operado;
use App\mental;
use App\contacto;
use PDF;
use Illuminate\Http\Request;
use App\Mail\InscripcionReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
//use Dompdf\Dompdf;
//use Dompdf\Options;

class formularioInscripcionController extends Controller
{
    public function index()
    {
        return view('formularioInscripcion');
    }

    public function store(Request $request){    
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'sexo' => 'required',
            'edad' => 'required|numeric',
            'meses' => 'required|numeric',
            'direccion' => 'required|max:255',
            'idDepartamento' => 'required',
            'idMunicipio' => 'required|max:255',
            //'imageEstudiante' => 'required|image',
            'gradoCursado' => 'required|max:255',
            'gradoACursar' => 'required|max:255',
            'nombreInstitutoAnterior' => 'required|max:255',
            'tipoIngreso' => 'required|max:255',
            'nombreMadre' => 'required|max:255',
            'apellidoMadre' => 'required|max:255',
            'numeroDuiMadre' => 'required|numeric|max:99999999',
            'profesionMadre' => 'required|max:255',
            'lugarTrabajoMadre' => 'required|max:255',
            'telefonoMadre' => 'required|numeric|max:99999999',
            'correoMadre' => 'required|email',
            'direccionMadre' => 'required|max:255',
            'nombrePadre' => 'required|max:255',
            'apellidoPadre' => 'required|max:255',
            'numeroDuiPadre' => 'required|numeric|max:99999999',
            'profesionPadre' => 'required|max:255',
            'lugarTrabajoPadre' => 'required|max:255',
            'telefonoPadre' => 'required|numeric|max:99999999',
            'correoPadre' => 'required|email',
            'direccionPadre' => 'required|max:255',
            'nombreRes' => 'required|max:255',
            'apellidoRes' => 'required|max:255',
            'numeroDuiRes' => 'required|numeric|max:99999999',
            'profesionRes' => 'required|max:255',
            'lugarTrabajoRes' => 'required|max:255',
            'telefonoRes' => 'required|numeric|max:99999999',
            'correoRes' => 'required|email',
            'direccionRes' => 'required|max:255',
            'peso'=>'required',
            'talla'=>'required',
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

        /*if($request->hasFile('imageEstudiante')){
            $file = $request->file('imageEstudiante');
            $nombreImage=$file->getClientOriginalName();
            Storage::disk('public')->put('/$nombreImage',$file);
            $file->move('images',$nombreImage);
            $estudiante->ruta=$nombreImage;

        }*/

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

        $salud = new generalSalud;
        $salud->tipoSangre=$request->get('tipoSangre');
        $salud->peso=$request->get('peso');
        $salud->talla=$request->get('talla');
        $salud->estGS_id=$idEstu;
        $salud->save();

        $enf=$request->get('enfermedad');

        if($request->enfermedad=='1'){
            $enfermedad = new enfermedad;
            $enfermedad->nomEnf= $request->get('nomEnf');
            $enfermedad->descripcionEnf=$request->get('descripcionEnf');
            $enfermedad->txEnf=$request->get('txEnf');
            $enfermedad->nomMedico=$request->get('nomMedico');
            $enfermedad->telMedico=$request->get('telMedico');
            $enfermedad->estEn_id=$idEstu;
            $enfermedad->save();
        }
        if($request->alergia=='1'){
            $alergia = new alergia;
            $alergia->mediAlergia= $request->get('mediAlergia');
            $alergia->descripcionAlergia=$request->get('descripcionAlergia');
            $alergia->otraAlergia=$request->get('otraAlergia');
            $alergia->descripcionOtra=$request->get('descripcionOtra');
            $alergia->estA_id=$idEstu;
            $alergia->save();
        }
        if($request->fractura=='1'){
            $fractura = new fractura;
            $fractura->areaAfectada= $request->get('areaAfectada');
            $fractura->secuelaFrac=$request->get('secuelaFrac');
            $fractura->txFrac=$request->get('txFrac');
            $fractura->estFr_id=$idEstu;
            $fractura->save();
        }
        if($request->operado=='1'){
            $operado = new operado;
            $operado->descripcionOp= $request->get('descripcionOp');
            $operado->secuelasOp=$request->get('secuelasOp');
            $operado->txOp=$request->get('txOp');
            $operado->estOp_id=$idEstu;
            $operado->save();
        }
        if($request->hiperactividad=='1'){
            if($request->hiperactividadMedicamento=='1'){
                $mental = new mental;
                $mental->nomMedHipera== $request->get('nomMedHipera');
                if($request->aprendizaje=='1'){
                    $mental->desProbAprendizaje=$request->get('desProbAprendizaje');
                }
                if($request->problemaEnf=='1'){
                    $mental->desProbMedicoG=$request->get('desProbMedicoG');
                }
                $mental->estM_id=$idEstu;
                $mental->save(); 
            }
        }
        $contc = new contacto;
        $contc->nomContac=$request->get('nomContacto1');
        $contc->parentescoContacto=$request->get('parentescoContacto1');
        $contc->telContacto=$request->get('telContacto1');
        $contc->celContacto=$request->get('celContacto1');
        $contc->estCont_id=$idEstu;
        $contc->save();
        $contc = new contacto;
        $contc->nomContac=$request->get('nomContacto2');
        $contc->parentescoContacto=$request->get('parentescoContacto2');
        $contc->telContacto=$request->get('telContacto2');
        $contc->celContacto=$request->get('celContacto2');
        $contc->estCont_id=$idEstu;
        $contc->save();

        if($request->com!=='1'){
            if ($request->com!=='2') {
                $com='3';
            } else {
                $com='2';
            }
        }else{
            $com='1';
        }
        $naci=$request->get('nacionalidad');

        if($request->aut!=='1'){
            
            if ($request->aut=='2') {
                $au='2';
            } else {
                $au='3';
            }
        }else{
            $au='1';
        }
        
        //$options =new Options();
        //$options->set('isRemoteEnable',TRUE);

        //$pdf= new Dompdf($options);

        //$pdf->set_paper("letter", "portrait")
        //creacion de pdf
        $pdf = PDF::loadView("mail.inscripcion", compact('estu','com','naci','au'))->output();

        //Nombre del Documento.
        $nombreArchivo = "inscripcion-".$request->nombre.".pdf";
        $subject=$request->nombre;
        //almacena pdf en storage
        Storage::disk('public')->put($nombreArchivo,$pdf);
        //envio de email
        Mail::send('mail.emailInscripcion', compact('estu'), function ($mail) use ($nombreArchivo,$subject) {
           $mail->to('nayomi.viana@gmail.com');
           $mail->attach(public_path(). "/storage/".$nombreArchivo);
           $mail->subject("Nueva Inscripcion de alumno/a ".$subject);
        });

        //$mailable = new InscripcionReceived($estu);
        //Mail::to("maryybetr@gmail.com")->send($mailable);

        return redirect()->route('ofertaAcademica');
    }
    public function download_formulario(){
        $pathToFile = "FICHAAÑO 2021.docx";
        return response()->download($pathToFile);
    }
}
