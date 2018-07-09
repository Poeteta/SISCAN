<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ReporteNinosController extends Controller
{

	public function __construct()
    {
        $this->middleware('is_director');
    }

     public function index(Request $request){
        if ($request)
        {    
       $query=trim($request->get('fecha')); 
       
       $tbc = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','1')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
        $hepatitis = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','2')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $pentalvente = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','3')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
        $polio = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','4')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $rotavirus = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','5')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
         $neumococo = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','6')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
         $spr = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','7')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

         $dpt = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','8')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
          $amarilica = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','9')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();                           
           $influenza = DB::table('hc_nino as hcn')
            ->join('nino as n','n.idNino','=','hcn.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hcn.Chequeo_idChequeo','hcn.idHC_Nino','hf.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcn.Chequeo_idChequeo, count(*) as idcount')
            ->where('hcn.Chequeo_idChequeo','=','10')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

            $sulfatoferroso = DB::table('hc_nino as hc')
            ->join('nino as n','n.idNino','=','hc.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select('hc.Chequeo_idChequeo')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->get();

$problemas_salud = DB::table('problemas_salud as hc')
            ->join('nino as n','n.idNino','=','hc.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select(DB::raw('count(*) as user_count, hc.Nino_idNino'))
            ->where('hc.Nino_idNino', '<>', 0)
            ->groupBy('hc.Nino_idNino')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->get();

          $periodo_programa= DB::table('periodo_programa')     
            ->get();
            
$control_nutricional = DB::table('control_nutricional as hc')
            ->join('nino as n','n.idNino','=','hc.Nino_idNino')
            ->join('historial_familia as hf','hf.Familia_idFamilia','=','n.Familia_idFamilia')
            ->select(DB::raw('count(*) as user_count, hc.Nino_idNino'))
            ->where('hc.Nino_idNino', '<>', 0)
            ->groupBy('hc.Nino_idNino')
            ->where('hf.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->get();

           $fechareporteinicio = DB::table('periodo_programa')
           ->where('idPeriodo_Programa','LIKE','%'.$query.'%') 
           ->orderBy('Fecha_Inicio','asc') 
           ->first(); 

           $fechareportecierre = DB::table('periodo_programa')
            ->where('idPeriodo_Programa','LIKE','%'.$query.'%') 
           ->orderBy('Fecha_Inicio','desc') 
           ->first(); 

           return view ('reporte.nino.index',["fecha"=>$query,"tbc"=>$tbc,"hepatitis"=>$hepatitis,"pentalvente"=>$pentalvente,"polio"=>$polio,"rotavirus"=>$rotavirus,"neumococo"=>$neumococo,"spr"=>$spr,"dpt"=>$dpt,"amarilica"=>$amarilica,"influenza"=>$influenza,"sulfatoferroso"=>$sulfatoferroso,"problemas_salud"=>$problemas_salud,"periodo_programa"=>$periodo_programa,"control_nutricional"=>$control_nutricional,"fechareporteinicio"=>$fechareporteinicio,"fechareportecierre"=>$fechareportecierre]);
         

     }
     }
}
