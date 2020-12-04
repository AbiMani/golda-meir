<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingreso extends Model
{
    protected $table=  'ingresos';

    protected $primaryKey= 'idIngreso';

    public $timestamps=true;

    protected $fillable= [
    	'gradoCursado',
    	'gradoACursar',
    	'nombreInstitutoAnterior',
    	'tipoIngreso',
    	'estudiante_id'
    ];

    public function estudiante(){
    	return $this->belongsto('App\estudiante','estudiante_id','idEstudiante');
    }
}
