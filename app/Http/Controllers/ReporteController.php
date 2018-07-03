<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Http\Requests;
use App;
use DB;
use PDF;
class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_director');
    } 
 public function index(Request $request)
    {   

        if ($request){    

       $query=trim($request->get('fecha'));     
       $modo_hospital = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamhos')
            ->where('Modo_Capta','=','Hospital')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

       $modo_campana = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamcam')
            ->where('Modo_Capta','=','Campaña Salud')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $modo_visita = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamvisita')
            ->where('Modo_Capta','=','visita domiciliaria')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $modo_otros = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamotros')
            ->where('Modo_Capta','=','otros')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

       $tipo_nueva = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipnueva')
            ->where('Tipo_Familia','=','nueva')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $tipo_continuadora = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipcon')
            ->where('Tipo_Familia','=','continuadora')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
        
        $tipo_reingresante = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipreing')
            ->where('Tipo_Familia','=','reingresante')
            ->where('Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $evaluacionapro = DB::table('evaluacion as e')
            ->join('familia as f','f.idFamilia','=','e.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->selectRaw('e.Estado_Eval, count(*) as idcontevalapro')
            ->where('e.Estado_Eval','=','1')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $evaluaciondesapro = DB::table('evaluacion as e')
            ->join('familia as f','f.idFamilia','=','e.Familia_idFamilia')
            ->join('historial_familia as h','h.Familia_idFamilia','=','f.idFamilia')
            ->selectRaw('e.Estado_Eval, count(*) as idcontevaldesapro')
            ->where('e.Estado_Eval','=','0')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $asisalimentacion = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSeAli')
            ->where('fs.Sesiones_idSesiones','=','2')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $asissexrepro = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSesexpro')
            ->where('fs.Sesiones_idSesiones','=','1')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();  

        $asishigiambi = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSehigiambi')
            ->where('fs.Sesiones_idSesiones','=','3')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();  
            
        $asishabivida = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSehabivida')
            ->where('fs.Sesiones_idSesiones','=','4')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $asissegvial = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSesegvial')
            ->where('fs.Sesiones_idSesiones','=','5')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();
        
        $asissalmen = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSesalmen')
            ->where('fs.Sesiones_idSesiones','=','6')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();

        $asisTBC = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSesTBC')
            ->where('fs.Sesiones_idSesiones','=','7')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first(); 

         $asisdengue = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSesdengue')
            ->where('fs.Sesiones_idSesiones','=','8')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first(); 

         $asisactifisi = DB::table('fecha_sesion as fs')
            ->join('historial_familia as h','h.Familia_idFamilia','=','fs.Familia_idFamilia')
            ->selectRaw('fs.Sesiones_idSesiones, count(*) as idcontSesactifisi')
            ->where('fs.Sesiones_idSesiones','=','9')
            ->where('h.Periodo_Programa_idPeriodo_Programa','LIKE','%'.$query.'%')
            ->first();          



        $periodo_programa= DB::table('periodo_programa')     
            ->get();       

            return view('reporte.general.index',["modo_hospital"=>$modo_hospital,"modo_campana"=>$modo_campana,"modo_visita"=>$modo_visita,"modo_otros"=>$modo_otros,"tipo_nueva"=>$tipo_nueva,"tipo_continuadora"=>$tipo_continuadora,"tipo_reingresante"=>$tipo_reingresante,"periodo_programa"=>$periodo_programa,"fecha"=>$query,"evaluacionapro"=>$evaluacionapro,"evaluaciondesapro"=>$evaluaciondesapro,"asisalimentacion"=>$asisalimentacion,"asissexrepro"=>$asissexrepro,"asishigiambi"=>$asishigiambi,"asishabivida"=>$asishabivida,"asissegvial"=>$asissegvial,"asissalmen"=>$asissalmen,"asisTBC"=>$asisTBC,"asisdengue"=>$asisdengue,"asisactifisi"=>$asisactifisi]);
    }
 }



}
