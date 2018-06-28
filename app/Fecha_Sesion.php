<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class fecha_sesion extends Model
=======
class Fecha_Sesion extends Model
>>>>>>> 415a58e82799f00d43b6aad160a3bd9221e6829b
{
   protected $table='fecha_sesion';
   protected $primaryKey='idFecha_Sesion';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Fechaun',
      'Fechado',
      'Fechatre',
      'Fechacu',
      'Fechaqui',
      'Sesiones_idSesiones',
      'Familia_idFamilia',
      'Fechase',
      'Fechatre',
      'Fechacu',
      'Fechaqui',
  
   ];

   protected $guarded =[


   ];
}