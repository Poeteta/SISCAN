<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Programa;
use App\Familia;

use App\Tipo_Familia;
use App\Modo_Captacion;
use App\Evaluacion;

use App\Http\EvaluarRequest;
use DB;

class EvaluarController extends Controller
{
	public function index(Request $request)
    {
     
       return view ("evaluar.evaluar");
    }
    public function create(){
    	return view('Evaluar.evaluar');
    }
    public function show($id){
    	return view('Evaluar.evaluar',['familia'=>Familia::findOrFail($id)]);
    }


}