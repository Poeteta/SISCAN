<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Illuminate\Support\Collection;
use App\Evaluacion;
class evalController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {   
          $query=trim($request->get('searchText'));
          $familia=DB::table('familia as f')
          ->select('f.idFamilia','f.Fam_numero','f.Fam_nom','f.Fam_direccion')
          ->where('f.Fam_nom','LIKE','%'.$query.'%')
          ->orwhere('f.Fam_numero','LIKE','%'.$query.'%')
          ->orderBy('f.idFamilia','desc')
          ->paginate(5);
          return view('evaluacion.index',["familia"=>$familia,"searchText"=>$query]);
        }
    }
    public function store(Request $request){
        try{
            DB::beginTransaction();
            $evaluacion=new evaluacion;
            $evaluacion->Eval_Asis=$request->get('Eval_Asis');
            $evaluacion->Eval_Nino_Vac=$request->get('Eval_Nino_Vac');
            $evaluacion->Eval_Nino_SinAne=$request->get('Eval_Nino_SinAne');
            $evaluacion->Eval_Cpn=$request->get('Eval_Cpn');
            $evaluacion->Eval_Signos_Alarma=$request->get('Eval_Signos_Alarma');
            $evaluacion->Eval_Plan_Fam=$request->get('Eval_Plan_Fam');
            $evaluacion->Eval_Usa_Plan_Fam=$request->get('Eval_Usa_Plan_Fam');
            $evaluacion->Planificacion_idPlanificacion=$request->get('Planificacion_idPlanificacion');
            $evaluacion->Eval_Fam_Plan=$request->get('Eval_Fam_Plan');
            $evaluacion->Eval_Activ_Comun=$request->get('Eval_Activ_Comun');
            $evaluacion->Eval_Norm_Conv=$request->get('Eval_Norm_Conv');
            $evaluacion->Eval_Valores=$request->get('Eval_Valores');
            $evaluacion->Eval_Pract_Salud=$request->get('Eval_Pract_Salud');
            $evaluacion->Eval_Acude_Hosp=$request->get('Eval_Acude_Hosp');
            $evaluacion->Eval_Viv_Ordena=$request->get('Eval_Viv_Ordena');
            $evaluacion->Eval_Arbol=$request->get('Eval_Arbol');
            $evaluacion->Eval_Depo_Agua=$request->get('Eval_Depo_Agua');
            $evaluacion->Abandono=$request->get('Abandono');
            $evaluacion->Estado_Eval=$request->get('Estado_Eval');
            $evaluacion->Familia_idFamilia=$request->get('Familia_idFamilia');
            $evaluacion->save();
          
            DB::commit();
             }catch(\Exception $e)
             {
          DB::rollback();
             }
             return Redirect::to('evaluacion')->with('msg','Se registro correctamente...');
        }
        public function show($id){
            $fam=DB::table('familia')
            ->where('idFamilia','=',$id)
            ->first();
          return view ('evaluacion.resultado',["family"=>$fam]);
        }
}