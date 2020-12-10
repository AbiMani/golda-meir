<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'sexo' => 'required',
            'edad' => 'required|numeric',
            'meses' => 'required|numeric',
            'direccion' => 'required|max:255',
            'idDepartamento' => 'required',
            'idMunicipio' => 'required|max:255',
            'imageEstudiante' => 'required|image',
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
            'peso'=>'required',
            'talla'=>'required',
        ];
    }
}
