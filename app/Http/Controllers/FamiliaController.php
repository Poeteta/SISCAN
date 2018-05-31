<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Illuminate\Support\Collection;
use App\familias;
use App\HC_Madre;
use App\historial_familia;
use App\nino;
use App\madre;
use App\Sesiones;
use App\Fecha_Sesion;
use App\planificacion_Familiar;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        return view('Familia/cards');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request) 
        {
           /* $query=trim($request->get('searchText'));
          $personas=DB::table('persona as p')
          ->join('usuario as u','p.idPersona','=','u.Persona_idPersona')
          ->join('rol as r','u.Rol_idRol','=','r.idRol')
          ->join('distrito as d','p.Distrito_idDistrito','=','d.idDistrito')
          ->select('p.idPersona','p.Nom_per','p.Apel_pater','p.Apel_mat','p.Telefono','p.DNI','r.Nom_rol','u.Nom_user','u.Estado_user','d.Nom_Dist','u.idUsuario')
          ->where('u.Nom_user','LIKE','%'.$query.'%')
            ->orderBy('p.idPersona','desc')
            ->paginate(7);
            return view('seguridad.usuario.index',["personas"=>$personas,"searchText"=>$query]);*/
        }   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      try {
          DB::beginTransaction();

          $familia = new familias();
          $familia->Fam_numero=$request->get('Fam_numero');
          $familia->Fam_nom=$request->get('Fam_nom');
          $familia->Fam_direccion=$request->get('Fam_direccion');
          $familia->save();

          $historial = new historial_familia();
          $historial->Tipo_Familia=$request->get('Tipo_Familia');
          $historial->Modo_Capta=$request->get('Modo_Capta');
          $historial->Periodo_Programa_idPeriodo_Programa=1;
          $historial->Familia_idFamilia = 17;
          $historial->save();

          $madre = new madre();
          $madre->Madre_Apelpa=$request->get('Madre_Apelpa');
          $madre->Madre_Apelma=$request->get('Madre_Apelma');
          $madre->Madre_Nom=$request->get('Madre_Nom');
          $madre->Madre_DNI=$request->get('Madre_DNI');
          $madre->Madre_HC=$request->get('Madre_HC');
          $madre->Familia_idFamilia = 17;
          $madre->save();

          $idsesion = $request->get('idsesion');
          $Sesion_f1= $request->get('f1');
          $Sesion_f2= $request->get('f2');
          $Sesion_f3= $request->get('f3');
          $Sesion_f4= $request->get('f4');
          $Sesion_f5= $request->get('f5');

          $cont = 0;
          while ($cont < count($idsesion)) {
            $sesion = new Fecha_Sesion();
            $sesion->Familia_idFamilia = 17;
            $sesion->Sesiones_idSesiones = $idsesion[$cont];
            $sesion->Sesion_Fecha = $Sesion_f1[$cont];
            $sesion->Fechase = $Sesion_f2[$cont];
            $sesion->Fechatre = $Sesion_f3[$cont];
            $sesion->Fechacu = $Sesion_f4[$cont];
            $sesion->Fechaqui = $Sesion_f5[$cont];
            $sesion->save();
            $cont = $cont+1;
          }

        

         DB::commit();
        
      } catch (Exception $e) {
         DB::rollback();
         echo($e);
      }

     }

    public function show()
    {
        $sesion=DB::table('sesiones')->get();  
        $fam=DB::table('familia')->get();
        
        return view ("home",["sesion"=>$sesion]);
    }
  
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }
    
    public function destroy($id)
    {
        //
    }
    public function listarfamilia($id){
        //
    }

}