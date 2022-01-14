<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // Se ejecuta al principio para determinar si el usuario esta autorizado para hacerlo
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //Severifican las reglas de validaciòn
    public function rules()
    {

        return [
            
            'title' => 'required',
            //Para evitar registros duplicados
            'url' => [
                'required', 
                Rule::unique('projects')->ignore( $this->route('project'))
            ],
            'image' => [
                //if ternario
                // Si devuelve true es una edicion y si es falso se esta creando
                $this->route('project') ? 'nullable' : 'required', 
                'mimes:jpg,png,svg', //verificara el tipo de archivo, eneste caso que sea una imagen "jpg, svg, png"
                //'dimensions:width=600,height=400', //Solo permitira guardar imagenes que tengan dichas dimensiones
                //'size', 'max:2000'
            ], 
            'description' => 'required',


        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un titulo'
        ];
    }
}
