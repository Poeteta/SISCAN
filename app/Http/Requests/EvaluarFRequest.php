<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EvaluarFRequest extends Request
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
            
          'Eval_Asis'=>'required|max:1',
          'Eval_Nino_Vac'=>'required|max:1',
          'Eval_Nino_SinAne'=>'required|max:1',
          'Eval_Cpn'=>'required|max:1',
          'Eval_Signos_Alarma'=>'required|max:1',
          'Eval_Plan_Fam'=>'required|max:1',
          'Eval_Usa_Plan_Fam'=>'required|max:1',
          'Planificacion_idPlanificacion'=>'required|max:1',
          'Eval_Fam_Plan'=>'required|max:1',
          'Eval_Activ_Comun'=>'required|max:1',
          'Eval_Norm_Conv'=>'required|max:1',
          'Eval_Valores'=>'required|max:1',
          'Eval_Pract_Salud'=>'required|max:1',
          'Eval_Acude_Hosp'=>'required|max:1',
          'Eval_Viv_Ordena'=>'required|max:1',
          'Eval_Arbol'=>'required|max:1',
          'Eval_Depo_Agua'=>'required|max:1',
          'Abandono'=>'required|max:20',
          'Estado_Eval'=>'required|max:1',
          'Familia_idFamilia'=>'required',
        ];
    }
}
