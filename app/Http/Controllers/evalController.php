<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class evalController extends Controller
{
    public function index (){
    	return view ('evaluacion.index');
    }
}
