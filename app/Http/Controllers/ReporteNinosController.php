<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReporteNinosController extends Controller
{
     public function index(){
         return view ('reporte.reporteninos');
     }
}
