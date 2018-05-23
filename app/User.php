<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
   protected $table='usuario';
   protected $primaryKey='idUsuario';


    protected $fillable = [
        'Usuario_nombre',
        'Usuario_apelpa',
        'Usuario_Apelma',
        'Usuario_dni',
        'Usuario_fechan',
        'Usuario_telf',
        'Nom_user',
        'password',
        'Estado_user',
        'remember_token',      
        'created_at',
        'updated_at',
        'Rol_idRol',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];
}

