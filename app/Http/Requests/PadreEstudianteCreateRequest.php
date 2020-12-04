<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PadreEstudianteCreateRequest extends FormRequest
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
            'nombrePadre'=>'required',
            'apellidoPadre'=>'required',
            'numeroDuiPadre'=>'required',
            'profesionPadre'=>'required',
            'lugarTrabajoPadre'=>'required',
            'telefonoPadre'=>'required',
            'correoPadre'=>'required',
            'direccionPadre'=>'required'
        ];
    }
}
