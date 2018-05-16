<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sesiones;
use App\Asistencia;
use App\Fecha;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use App\http\Requests\FechaSesionesFormRequest;
use App\http\Requests\SesionesFormRequest;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class SesionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function index(Request $request)
    {
         if ($request)
        {   

            return view('sesiones.asistencia.index2');
        }     
    }

public function crearFecha (FechaSesionesFormRequest $request)
    {
      try{
    
          DB::beginTransaction();

          $fecha= new Fecha;
          $fecha->Sesiones_idSesiones=$request->get('Sesiones_idSesiones'); 
          $fecha->Fecha=$request->get('Fecha');   
          $fecha->save();
          
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
        return Redirect::to('sesiones/asistencia');
    }

public function crearSesiones (SesionesFormRequest $request)
    {
      try{
    
          DB::beginTransaction();

          $sesiones= new Sesiones;
          $sesiones->Tipo_Sesiones_idTipo_Sesiones=$request->get('Tipo_Sesiones_idTipo_Sesiones'); 
          $sesiones->Nom_sesion=$request->get('Nom_sesion');   
          $sesiones->save();
          
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
        return Redirect::to('sesiones/asistencia');
    }

   public function show(Request $request ,$id){

   if ($request) 
   {     
$query=trim($request->get('searchText'));
$auditoria=DB::table('familia as fa')        
->where('fa.Tipo_Familia_idTipo_Familia','!=','4')
->where('fa.Nom_fam','LIKE','%'.$query.'%')
->paginate(7);
}

$asistencia=DB::table('asistencia as asiss')
->join('fecha as fe','asiss.Fecha_idFecha','=','fe.idFecha')
->where('fe.idFecha','=',$id)
->get();


$fechas=DB::table('fecha')
->where('idFecha','=',$id)
->first();
  

          return view("sesiones.asistencia.show",["auditoria"=>$auditoria,"asistencia"=>$asistencia,"fechas"=>$fechas,"searchText"=>$query]);
        
    }

    public function ReRegAsis(Request $request,$id){

       $asistencia=Asistencia::findOrFail($id); 
       $asistencia->Estado_asistencia='1';
       $asistencia->update();
       return Redirect::to('sesiones/asistencia/'.$asistencia->Fecha_idFecha);

    }


    public function EditAsis(Request $request,$id){
       $asistencia=Asistencia::findOrFail($id); 
       $asistencia->Estado_asistencia=$request->get('Estado_asistencia');
       $asistencia->update();
       return Redirect::to('sesiones/asistencia/'.$asistencia->Fecha_idFecha);

      
    }

    public function RegAsis(Request $request){
    
    try{
    
          DB::beginTransaction();
          $asistencia=new Asistencia;
          $asistencia->Estado_asistencia='1';
          $asistencia->Familia_idFamilia=$request->get('Familia_idFamilia');
       $asistencia->Fecha_idFecha=$request->get('Fecha_idFecha');
          $asistencia->save();
          
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
           return Redirect::to('sesiones/asistencia/'.$asistencia->Fecha_idFecha);
    }
   

}
