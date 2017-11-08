<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserHdRequest extends FormRequest
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
            'username'=>'required',
            'password'=>'required',
            'correo'=>'required|email',
            'apellidoM'=>'required',
            'apellidoP'=>'required',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required',
            'direccion'=>'required',
            'codigo_postal'=>'required',
            'celular'=>'required',
            'licencia'=>'required',
            'nombre'=>'required',
        ];
    }
}
