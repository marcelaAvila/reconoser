<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
            'ciudad' => 'required',
            'pais' => 'required',
            'celular' => 'required',
            'imagen' => 'required',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
            'estadoBT' => 'required|boolean',
            'estadoWF' => 'required|boolean'
        ];
    }
}
