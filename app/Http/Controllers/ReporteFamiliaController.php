<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReporteFamiliaController extends Controller
{
    public function index(){

        $tipo_reingresante = DB::table('historial_familia')
            ->selectRaw('Tipo_Familia, count(*) as idtipreing')
            ->where('Tipo_Familia','=','reingresante')
            ->first();        

            return view('reporte.general.index',["modo_hospital"=>$modo_hospital,"modo_campana"=>$modo_campana,"modo_visita"=>$modo_visita,"modo_otros"=>$modo_otros,"tipo_nueva"=>$tipo_nueva,"tipo_continuadora"=>$tipo_continuadora,"tipo_reingresante"=>$tipo_reingresante]);

        return view ('reporte.familiar.index');
    }
}
