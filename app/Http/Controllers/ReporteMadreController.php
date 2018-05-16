<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReporteMadreController extends Controller
{
    public function index (){
        return view ('reporte.reportemadre');
    }
}
