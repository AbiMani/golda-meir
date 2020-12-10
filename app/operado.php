<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operado extends Model
{
    protected $table=  'operados';

    protected $primaryKey= 'idOperados';

    public $timestamps=true;

    protected $fillable= [
    	'descripcionOp',
    	'descripcionOp',
    	'secuelasOp',
        'txOp',
        'estudiante_id'

    ];
}
