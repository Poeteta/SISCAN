<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Illuminate\Support\Collection;
use App\nino;
use App\control_nutricional;
use App\madre;

class ninoController extends Controller
{
    public function index( Request $request)
    {
        return view('evaluacion/generalinfon');
    }

    public function show ($id){


    	$madre=DB::table('madre')
    	->where('idMadre','=',$id)
    	->get();

        $nino=DB::table('nino')->get();


       $cn=DB::table('control_nutricional as cn')->get();

    	return view("evaluacion.generalinfon",["madre"=>$madre,"nino"=>$nino,"cn"=>$cn]);
    }
}
