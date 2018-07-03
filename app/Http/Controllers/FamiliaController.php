<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use DB;
use Response;
use Session;
use Illuminate\Support\Collection;
use App\familias;
use App\HC_Madre;
use App\historial_familia;
use App\nino;
use App\madre;
use App\Sesiones;
use App\Fecha_Sesion;
use App\PlanFamiliar;
use App\ControlNutricional;
use App\hca_Madre;
use App\Cpn;
use App\hc_nino;
use App\Problemas_Salud;  

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

          /* Get last id inserted */
          $id = $familia->id;
          /* */

          $historial = new historial_familia();
          $historial->Tipo_Familia=$request->get('Tipo_Familia');
          $historial->Modo_Capta=$request->get('Modo_Capta');
          $historial->Periodo_Programa_idPeriodo_Programa=1;
          $historial->Familia_idFamilia = $id;
          $historial->save();

          $madre = new madre();
          $madre->Madre_Apelpa=$request->get('Madre_Apelpa');
          $madre->Madre_Apelma=$request->get('Madre_Apelma');
          $madre->Madre_Nom=$request->get('Madre_Nom');
          $madre->Madre_DNI=$request->get('Madre_DNI');
          $madre->Madre_HC=$request->get('Madre_HC');
          $madre->Familia_idFamilia = $id;
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
            $sesion->Familia_idFamilia = $id;
            $sesion->Sesiones_idSesiones = $idsesion[$cont];
            $sesion->Sesion_Fecha = $Sesion_f1[$cont];
            $sesion->Fechase = $Sesion_f2[$cont];
            $sesion->Fechatre = $Sesion_f3[$cont];
            $sesion->Fechacu = $Sesion_f4[$cont];
            $sesion->Fechaqui = $Sesion_f5[$cont];
            $sesion->save();
            $cont = $cont+1;
          }


          /* Get last id inserted from madre*/
          $idma = $madre->idMadre;
          /* */

          $historialmadre = new hca_Madre();
          $historialmadre->Gestante_Inicio=$request->get('Gestante_Inicio');
          $historialmadre->Gestante_Final=$request->get('Gestante_Final');
          $historialmadre->Planificacion_idPlanificacion=1;
          $historialmadre->CPN_Antes_Pg=$request->get('CPN_Antes_pg');
          $historialmadre->CPN_cantidad=$request->get('CPN_cantidad');
          $historialmadre->Papanicolau_Antes_pg=$request->get('Papanicolau_Antes_pg');
          $historialmadre->Papanicolau_Durante_Fecha=$request->get('Papanicolau_Durante_Fecha');
          $historialmadre->Papanicolau_resul=$request->get('Papanicolau_resul');
          $historialmadre->Ex_automama=$request->get('Ex_automama');
          $historialmadre->Ex_automama_Durante_fecha=$request->get('Ex_automama_Durante_fecha');
          $historialmadre->Ex_automama_sospechoso=$request->get('Ex_automama_sospechoso');
          $historialmadre->Vacuna_antite_pg=$request->get('Vacuna_antite_pg');
          $historialmadre->Vacuna_cantidad=$request->get('Vacuna_cantidad');
          $historialmadre->Madre_idMadre=$idma;
          $historialmadre->save();

          $cpn_numero = $request->get('Cpn_numero');
          $cpn_fecha = $request->get('Cpn_fecha');
          $cpn_responsable = $request->get('Cpn_responsable');
          $conta = 0;
          while ($conta < count($cpn_numero)){
            $cpn = new cpn();
            $cpn->Madre_idMadre=$idma;
            $cpn->cpn_numero=$cpn_numero[$conta];
            $cpn->cpn_fecha=$cpn_fecha[$conta];
            $cpn->cpn_responsable=$cpn_responsable[$conta];
            $cpn->save();
            $conta = $conta+1;
          }

          /* Insert side of Kids */
          $Nino_nom = $request->get('Nino_nom');
          $Nino_hc = $request->get('Nino_hc');
          $Nino_dni= $request->get('Nino_dni');
          $Nino_fechan = $request->get('Nino_fechan');
          $Nino_sexo = $request->get('Nino_sexo');
          $contan=0;
          while ($contan < count($Nino_hc)) {
             $nino = new nino();
             $nino->Familia_idFamilia = $id;
             $nino->Nino_nom = $Nino_nom[$contan];
             $nino->Nino_hc = $Nino_hc[$contan];
             $nino->Nino_dni = $Nino_dni[$contan];
             $nino->Nino_fechan = $Nino_fechan[$contan];
             $nino->Nino_sexo = $Nino_sexo[$contan];
             $nino->save();
             $contan = $contan+1;

             /* Get last id from nino */
             $idni = $nino->idNino;
             
             /* Insert Vacunas on View, Chequeo on Database */
             $inp = Input::all();
             for ($idh = 0; $idh < count(Input::get('Chequeo_idChequeo')); $idh++)
             {
                $hcnino = new hc_nino;
                $hcnino->Nino_idNino = $idni;
                $hcnino->Nino_hcfecha = $inp['Nino_hcfecha'][$idh];
                $hcnino->Chequeo_idChequeo = $inp['Chequeo_idChequeo'][$idh];
                $hcnino->save();
             }

             $input = Input::all();
             for ($idx = 0; $idx < count(Input::get('Cn_fecha')); $idx++)
             {
                $cn = new ControlNutricional;
                $cn->Nino_idNino = $idni;
                $cn->Cn_fecha = $input['Cn_fecha'][$idx];
                $cn->Cn_edad = $input['Cn_edad'][$idx];
                $cn->Cn_peso = $input['Cn_peso'][$idx];
                $cn->Cn_talla = $input['Cn_talla'][$idx];
                $cn->Cn_hb_hto = $input['Cn_hb_hto'][$idx];
                $cn->Cn_Observacion = $input['Cn_Observacion'][$idx];
                $cn->save();
             }
             
             $inpp = Input::all();
             for ($i=0; $i < count(Input::get('Problema_fecha')); $i++) { 
                $prosa = new Problemas_Salud();
                $prosa->Nino_idNino = $idni;
                $prosa->Problema_fecha = $inpp['Problema_fecha'][$i];
                $prosa->Problema_atendido = $inpp['Problema_atendido'][$i];
                $prosa->Problema_enfermedad = $inpp['Problema_enfermedad'][$i];
                $prosa->Problema_hospital = $inpp['Problema_hospital'][$i];
                $prosa->save();
             }


          }
          
    
         DB::commit();
        
      } catch (Exception $e) {
         DB::rollback();
         echo($e);
      }

      return redirect('home')->with('status', 'Familia Registrada Exitosamente!');

     }

    public function show()
    {
        $sesion=DB::table('sesiones')->get();  
        $fam=DB::table('familia')->get();
        $chequeo=DB::table('chequeo')->get();
  
        
        return view ("home",["sesion"=>$sesion,"chequeo"=>$chequeo]);
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