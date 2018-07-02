<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Illuminate\Support\Collection;
use App\periodo_programa;

class PeriodoController extends Controller
{
    public function index(Request $request)
    {
        if ($request)
        {   
          $query=trim($request);
          $periodo=DB::table('periodo_programa as p')
          ->select('p.idPeriodo_Programa','p.Fecha_Inicio', 'p.Fecha_Fin')
          ->where('p.Fecha_Inicio','LIKE','%'.$query.'%')
          ->orderBy('p.idPerido_Programa','desc')
          ->paginate(5);
          return view('periodo.index',["periodo"=>$periodo,"searchText"=>$query]);
        }
    }
   
}