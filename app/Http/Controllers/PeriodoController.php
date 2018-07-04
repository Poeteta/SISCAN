<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use App\Http\Requests\PeriodoRequest;
use Illuminate\Support\Collection;
use App\periodo_programa;

class PeriodoController extends Controller
{
    public function index()
    {
        
          $periodo=DB::table('periodo_programa')
          ->orderBy('idPeriodo_Programa','asc')
          ->paginate(6);
          return view('periodo.index',["periodo"=>$periodo]);
        
    }
    public function store(PeriodoRequest $request)
    {
      $periodos=new periodo_programa;
      $periodos->Fecha_Inicio=$request->get('Fecha_Inicio');
      $periodos->Fecha_Fin=$request->get('Fecha_Fin');
      $periodos->save();
      return Redirect::to('periodo');

    }

    public function update(PeriodoRequest $request, $id)
    {
      $periodos= periodo_programa::findOrFail($id); 
      $periodos->Fecha_Inicio=$request->get('Fecha_Inicio');
      $periodos->Fecha_Fin=$request->get('Fecha_Fin');
      $periodos->update();
      return Redirect::to('periodo');

    }
   
}