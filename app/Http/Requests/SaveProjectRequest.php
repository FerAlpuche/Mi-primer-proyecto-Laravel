<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return false;
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
            'url' => 'required',
            'description' => 'required',


        ];
    }
}
