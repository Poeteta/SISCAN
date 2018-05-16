<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReporteFamiliaController extends Controller
{
    public function index(){
        return view ('reporte.reportefam');
    }
}
