<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ReporteMadreController extends Controller
{

	public function __construct()
    {
        $this->middleware('is_director');
    }


    public function index (Request $request){

        if ($request)
        {    
       $query=trim($request->get('fecha'));
        $examamasi = DB::table('hca_madre as hcm')
            ->join('madre as m','m.idMadre','=','hcm.Madre_idMadre')
            ->join('familia as f','f.idFamilia','=','m.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->select('hcm.Ex_automama','hcm.Madre_idMadre','h.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcm.Ex_automama, count(*) as idexamama')
            ->where('hcm.Ex_automama','=','1')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();  

        $examamano = DB::table('hca_madre as hcm')
            ->join('madre as m','m.idMadre','=','hcm.Madre_idMadre')
            ->join('familia as f','f.idFamilia','=','m.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->select('hcm.Ex_automama','hcm.Madre_idMadre','h.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcm.Ex_automama, count(*) as idexamama')
            ->where('hcm.Ex_automama','=','1')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $examamafecha = DB::table('hca_madre as hcm')
            ->join('madre as m','m.idMadre','=','hcm.Madre_idMadre')
            ->join('familia as f','f.idFamilia','=','m.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->select('hcm.Ex_automama_Durante_fecha','hcm.Madre_idMadre','h.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcm.Ex_automama_Durante_fecha, count(*) as idexamama')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();                        


        $vacunaantest = DB::table('hca_madre as hcm')
            ->join('madre as m','m.idMadre','=','hcm.Madre_idMadre')
            ->join('familia as f','f.idFamilia','=','m.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->select('hcm.Vacuna_antite_pg','hcm.Madre_idMadre','h.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hcm.Vacuna_antite_pg, count(*) as idvacunaantest')
            ->where('hcm.Vacuna_antite_pg','=','1')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();                        

         $vacunadurante = DB::table('hc_madre as hc')
            ->join('madre as m','m.idMadre','=','hc.Madre_idMadre')
            ->join('familia as f','f.idFamilia','=','m.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->select('hc.Chequeo_idChequeo','hc.Madre_idMadre','h.Periodo_Programa_idPeriodo_Programa')
            ->selectRaw('hc.Chequeo_idChequeo, count(*) as idvacunadurnt')
            ->where('hc.Chequeo_idChequeo','=','35')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();     

        $periodo_programa= DB::table('periodo_programa')     
            ->get(); 


        return view ('reporte.madre.index',["examamasi"=>$examamasi,"examamafecha"=>$examamafecha,"examamano"=>$examamano,"vacunaantest"=>$vacunaantest,"vacunadurante"=>$vacunadurante,"periodo_programa"=>$periodo_programa,"fecha"=>$query]);

       }
    }
}
