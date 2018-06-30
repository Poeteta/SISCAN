<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UsuarioFormRequest;
use App\Http\Requests\EditUsuarioFormRequest;
use App\Http\Requests\EditPersonaFormRequest;
use DB;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
 
 

/* HECHO POR HANS ( NO TOCAR )*/




class UsuarioController extends Controller
{

 public function __construct()
    {
        $this->middleware('is_director');
    }


 public function index(Request $request)
    {
        if ($request)
        {   
          $query=trim($request->get('searchText'));
          $usuario=DB::table('usuario as u')
          ->join('rol as r','u.Rol_idRol','=','r.idRol')
           ->select('u.Usuario_nombre','u.Usuario_apelpa','u.Usuario_Apelma','u.Nom_user','u.Usuario_telf','u.Usuario_dni','r.Rol_nom','u.idUsuario','u.Rol_idRol')
          ->where('u.Usuario_nombre','LIKE','%'.$query.'%')
          ->orwhere('u.Usuario_dni','LIKE','%'.$query.'%')
          ->orwhere('r.Rol_nom','LIKE','%'.$query.'%')
          ->orderBy('u.idUsuario','desc')
          ->paginate(5);
            return view('seguridad.usuario.index',["usuario"=>$usuario,"searchText"=>$query]);
        }
    }






    public function create()
    {
        
        $roles=DB::table('rol')->get();

         return view("seguridad.usuario.create",["roles"=>$roles]);
    }

    public function store (UsuarioFormRequest $request)
    {
      try{
    
          DB::beginTransaction();
          $usuario=new User;
          $usuario->Usuario_apelpa=$request->get('Usuario_apelpa');
          $usuario->Usuario_Apelma=$request->get('Usuario_Apelma');
          $usuario->Usuario_nombre=$request->get('Usuario_nombre');
          $usuario->Usuario_dni=$request->get('Usuario_dni');
          $usuario->Usuario_fechan=$request->get('Usuario_fechan');
          $usuario->Usuario_telf=$request->get('Usuario_telf');

          $usuario->Nom_user=$request->get('Nom_user');
          $usuario->password=bcrypt($request->get('password'));
          $usuario->Estado_user='1';
          $usuario->Rol_idRol=$request->get('Rol_idRol');
          $usuario->save();
          DB::commit();
           }catch(\Exception $e)
           {
        DB::rollback();
           }
        return Redirect::to('seguridad/usuario')->with('msg','La cuenta se creo correctamente...');
    }




    public function show($id){
    
        $usuarioshow=DB::table('usuario as u')
          ->join('rol as r','u.Rol_idRol','=','r.idRol')
           ->select('u.Usuario_nombre','u.Usuario_apelpa','u.Usuario_Apelma','u.Nom_user','u.Usuario_telf','u.Usuario_dni','r.Rol_nom','u.idUsuario','u.Rol_idRol','u.Usuario_fechan','u.Estado_user')
        ->where('u.idUsuario','=',$id)
        ->first();
        
        $roles=DB::table('rol')->get();  

          return view("seguridad.usuario.show",["usuarioshow"=>$usuarioshow,"roles"=>$roles]);
    }

 
    public function updateUsuario(EditUsuarioFormRequest $request,$id)
    {          
       $usuarioupdate=User::findOrFail($id); 
       $usuarioupdate->Nom_user=$request->get('Nom_user');
       $usuarioupdate->Estado_user=$request->get('Estado_user');
       $usuarioupdate->Rol_idRol=$request->get('Rol_idRol');
       $usuarioupdate->update();
       return Redirect::to('seguridad/usuario/'.$id);
    }




    public function updatePersona(EditPersonaFormRequest $request,$id)
    {          
        $persona=User::findOrFail($id);  
        $persona->Usuario_apelpa=$request->get('Usuario_apelpa');
        $persona->Usuario_Apelma=$request->get('Usuario_Apelma');
        $persona->Usuario_nombre=$request->get('Usuario_nombre');
        $persona->Usuario_dni=$request->get('Usuario_dni');
        $persona->Usuario_fechan=$request->get('Usuario_fechan');
        $persona->Usuario_telf=$request->get('Usuario_telf');
        $persona->update();
        return Redirect::to('seguridad/usuario/'.$id);
    }

 
}
