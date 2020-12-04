<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MadreEstudianteCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombreMadre'=>'required',
            'apellidoMadre'=>'required',
            'numeroDuiMadre'=>'required',
            'profesionMadre'=>'required',
            'lugarTrabajoMadre'=>'required',
            'telefonoMadre'=>'required',
            'correoMadre'=>'required',
            'direccionMadre'=>'required'
        ];
    }
}
