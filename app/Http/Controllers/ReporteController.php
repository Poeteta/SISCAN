<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Http\Requests;
use DB;
class ReporteController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_director');
    } 
 public function index(Request $request)
    {
       $modo_hospital = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamhos')
            ->where('Modo_Capta','=','hospital')
            ->first();

       $modo_campana = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamcam')
            ->where('Modo_Capta','=','campaña de salud')
            ->first();

        $modo_visita = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamvisita')
            ->where('Modo_Capta','=','visita domiciliaria')
            ->first();

        $modo_otros = DB::table('historial_familia')
            ->selectRaw('Modo_Capta, count(*) as idfamotros')
            ->where('Modo_Capta','=','otros')
            ->first();

       $tipo_nueva = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipnueva')
            ->where('Tipo_Familia','=','nueva')
            ->first();

        $tipo_continuadora = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipcon')
            ->where('Tipo_Familia','=','continuadora')
            ->first();
        
        $tipo_reingresante = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipreing')
            ->where('Tipo_Familia','=','reingresante')
            ->first();        

            return view('reporte.general.index',["modo_hospital"=>$modo_hospital,"modo_campana"=>$modo_campana,"modo_visita"=>$modo_visita,"modo_otros"=>$modo_otros,"tipo_nueva"=>$tipo_nueva,"tipo_continuadora"=>$tipo_continuadora,"tipo_reingresante"=>$tipo_reingresante]);
    }



 

}
