<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResumenController extends Controller
{
    public function index(Request $request)
    {
        
            return view('reporte.grafico.represumen');
        
    }
}
