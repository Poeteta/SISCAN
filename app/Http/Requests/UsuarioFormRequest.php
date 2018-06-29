<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioFormRequest extends Request
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
         
          'Usuario_apelpa'=>'required|max:45',
          'Usuario_Apelma'=>'required|max:45',
          'Usuario_nombre'=>'required|max:45',
          'Usuario_dni'=>'required|max:11',
          'Usuario_fechan'=>'required',
          'Usuario_telf'=>'required|max:11',
          
          'Nom_user'=>'required|max:45',
          'password'=>'required',          
          'Rol_idRol'=>'required',
         
        ];

    }
}
