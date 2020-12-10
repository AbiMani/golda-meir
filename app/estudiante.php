<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table=  'estudiantes';

    protected $primaryKey= 'idEstudiante';

    public $timestamps=true;

    protected $fillable= [
    	'nombre',
    	'apellido',
    	'fechaNacimiento',
        'sexo',
    	'edad',
    	'meses',
    	'direccion',
    	'idDepartamento',
    	'idMunicipio',
        'ruta'

    ];

//relacion uno a uno
    public function ingreso(){
        return $this->hasOne('App\ingreso', 'estudiante_id','idEstudiante');
    }

    public function madreEstudiante(){
        return $this->hasOne('App\madreEstudiante','estuMa_id','idEstudiante');
    }
    public function padreEstudiante(){
        return $this->hasOne('App\padreEstudiante','estuPa_id','idEstudiante');
    }
    public function responsable(){
        return $this->hasOne('App\responsable','estuRes_id','idEstudiante');
    }
    public function enfermedad(){
        return $this->hasOne('App\enfermedad','estEn_id','idEstudiante');
    }
    public function alergia(){
        return $this->hasOne('App\alergia','estA_id','idEstudiante');
    }
    public function fractura(){
        return $this->hasOne('App\fractura','estFr_id','idEstudiante');
    }
    public function operados(){
        return $this->hasOne('App\operado','estOp_id','idEstudiante');
    }
    public function generalSalud(){
        return $this->hasOne('App\generalSalud','estGS_id','idEstudiante');
    }
    public function mental(){
        return $this->hasOne('App\mental','estM_id','idEstudiante');
    }
//relacion uno a muchos
    public function contactos(){
        return $this->hasMany('App\contacto','estCont_id','idEstudiante');
    }
    

}
