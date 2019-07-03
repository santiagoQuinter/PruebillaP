<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cliente extends FormRequest
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
            'cedula'=>'required|integer',
            'nombre'=>'required|min:4',         
        ];
    }

    public function messages()
{
    return [
        'cedula.required' => 'La cédula es obligatoria',
        'cedula.integer' => 'La cédula debe ser un entero',
        'nombre.required'  => 'El nombre es obligatorio',
        'nombre.min'=>'El nombre debe tener como mínimo 6 caracteres',
    ];
}

}
