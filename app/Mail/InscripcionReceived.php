<?php

namespace App\Mail;
use PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\estudiante;

class InscripcionReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $estu;
    //public $nombre;
    public function __construct($estu)
    {
        $this->estu=$estu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
       $estudiante=$this->estu;
      /*   $pdf = PDF::loadView("mail.inscripcion", ["estudiante"=>$estu]);
        return $this
            ->attachData($pdf->output(), "formulario_inscripcion.pdf")
            ->subject("Formulario de inscripcion");*/
        return $this
            ->view('mail.inscripcion', compact('estudiante'))
            ->subject("formulario inscripcion")
            ->with([
                "estudiante" => $this->estu,
                
            ]);
    }
}
