<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EditPersonaFormRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\User;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use DB;
use Validator;

class PerfilController extends Controller
{   
	public function __construct()
    {
        $this->middleware('auth');
    }
     public function index( Request $request)
    {
        $id_tra = Auth::user()->idUsuario;

        $usuarioshow=DB::table('usuario as u')
          ->join('rol as r','u.Rol_idRol','=','r.idRol')
           ->select('u.Usuario_nombre','u.Usuario_apelpa','u.Usuario_Apelma','u.Nom_user','u.Usuario_telf','u.Usuario_dni','r.Rol_nom','u.idUsuario','u.Rol_idRol','u.Usuario_fechan','u.Estado_user')
        ->where('u.idUsuario','=',$id_tra)
        ->first();

        return view('perfil.index',['usuarioshow'=>$usuarioshow]);
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
        return Redirect::to('perfil');
    }


 public function updatePassword(Request $request)
    {
       $oldPassword = $request->input('oldPassword');
       $newPassword = $request->input('newPassword');
        if (!Hash::check($oldPassword, Auth::User()->password)) {
            return back()->with('msg','Ups!! Contraseña no cambiada. Ingrese Correctamente su contraseña actual...');  //when user enter wrong password as current password
        } else {
            $request->User()->fill(['password' => Hash::make($newPassword)])->save(); //updating password into user table
            return back()->with('msg','Tu contraseña se actulizo correctamente...');
        }
        // echo 'here update query for password';
    }


}
