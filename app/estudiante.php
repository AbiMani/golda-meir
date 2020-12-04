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
    
    

}
