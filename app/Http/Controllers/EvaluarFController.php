<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Evaluacion;
use App\familia;
use App\Historial_Familia;
use DB;
/*use App\Http\Request\EvaluarFRequest;*/

class EvaluarFController extends Controller
{
    public function index (Request $request)
    {
    	if ($request)
        {   
          $query=trim($request->get('searchText'));
          $evaluaciones=DB::table('familia as f')
          
          ->join('historial_familia as hf','hf.Familia_idFamilia','=','f.idFamilia')
          ->select('f.Fam_nom','hf.Tipo_Familia', 'f.idFamilia')
          ->where('f.Fam_nom','LIKE','%'.$query.'%')
            ->orderBy('f.Fam_nom')
            ->paginate(7);

             $evalu=DB::table('evaluacion')->get();
            return view('EvaluarF.EvaluarF',["evaluaciones"=>$evaluaciones,"searchText"=>$query,"evalu"=>$evalu]);
        }
    	
    }
    /*public function store (EvaluarFRequest $request)
    {
        DB::beginTransaction();
          
    	$evaluacion=new Evaluacion;
    	$evaluacion->Eval_Asis=$request->get('Eval_Asis'),
        $evaluacion->Eval_Nino_Vac=$request->get('Eval_Nino_Vac'),
        $evaluacion->Eval_Nino_SinAne=$request->get('Eval_Nino_SinAne'),
        $evaluacion->Eval_Cpn=$request->get('Eval_Cpn'),
        $evaluacion->Eval_Signos_Alarma=$request->get('Eval_Signos_Alarma'),
        $evaluacion->Eval_Plan_Fam=$request->get('Eval_Plan_Fam'),
        $evaluacion->Eval_Usa_Plan_Fam=$request->get('Eval_Usa_Plan_Fam'),
        $evaluacion->Planificacion_idPlanificacion=$request->get('Planificacion_idPlanificacion'),
        $evaluacion->Eval_Activ_Comun=$request->get('Eval_Activ_Comun'),
        $evaluacion->Eval_Norm_Conv=$request->get('Eval_Norm_Conv'),
        $evaluacion->Eval_Valores=$request->get('Eval_Valores'),
        $evaluacion->Eval_Pract_Salud=$request->get('Eval_Pract_Salud'),
        $evaluacion->Eval_Acude_Hosp=$request->get('Eval_Acude_Hosp'),
        $evaluacion->Eval_Viv_Ordena=$request->get('Eval_Viv_Ordena'),
        $evaluacion->Eval_Arbol=$request->get('Eval_Arbol'),
        $evaluacion->Eval_Depo_Agua=$request->get('Eval_Depo_Agua'),
        $evaluacion->Abandono=$request->get('Abandono'),
        $evaluacion->Estado_Eval=$request->get('Estado_Eval'),
        $evaluacion->Familia_idFamilia=$request->get('Familia_idFamilia'),
        $evaluacion->save();
    }*/
}