<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class evalController extends Controller
{
    public function index (){
    	return view ('evaluacion.index');
    }

    public function showfam (){
    	$fam=DB::table('familia')->get();
    	return view ('evaluacion.index',["familia"=>$fam]);
    }
}
