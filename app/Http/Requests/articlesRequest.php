<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articlesRequest extends FormRequest
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
            'title'      => 'required|max:250|min:5|unique:articles',
            'content'     => 'required|min:40',
            'image'     => 'image|required',
            'category' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required'    =>  'El titulo del articulos es requerido',
            'title.max'         =>  'El titulo no puede exceder los 250 caracteres',
            'title.unique'      =>  'El nombre del titulo ya esta registrado',
            'content.required'  =>  'El contenido del articulo es requerido',
            'content.min'       =>  'Debes ingresar mas texto en el contenido, minimo 40 caracteres',
            'image.required'    =>  'La imagen es requerida',
            'image.image'    =>  'Solo puedes subir imagenes',
            'category.required'       =>  'Debes ingresar la categoria de tu articulo',
        ];
    }
}
