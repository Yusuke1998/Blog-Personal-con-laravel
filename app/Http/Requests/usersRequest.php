<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequest extends FormRequest
{
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
            'name'      => 'required|max:20|min:5',
            'email'     => 'required|max:40|min:10|unique:users',
            'password'  => 'required|min:8|max:20',
            'type'      => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required'     => 'El nombre es requerido',
            'name.max'          => 'Superaste el numero de caracteres para el nombre',
            'name.min'          => 'Debes escribir un nombre un poco mas largo',
            'email.required'    => 'El correo electronico es requerido',
            'email.max'         => 'Superaste el numero de caracteres para el correo',
            'email.unique'      =>  'Este email ya esta registrado, intenta con otro o intenta recuperar tu contraseña',
            'email.min'         => 'Debes escribir un correo un poco mas largo',
            'password.required' => 'La contraseña es requerida',
            'password.min'      => 'Debes esciribir una contraseña que supere los 8 caracteres',
            'password.max'      => 'Has superado la cantidad maxima de caracteres para la contrasela',
            'type.required'     => 'El campo "Tipo de usuario", es requido'

        ];
    }
}
