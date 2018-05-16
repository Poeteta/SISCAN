<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\madre;
use App\Http\Requests;
use DB;
class EvaluacionController extends Controller
{
   public function index (){
   	return view ('evaluacion.index');
   }

}
