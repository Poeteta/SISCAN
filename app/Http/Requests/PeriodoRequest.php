<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PeriodoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolx
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
         
          'Fecha_Inicio'=>'required',
          'Fecha_Fin'=>'required',
         
        ];

    }
}
