<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha_Sesion extends Model
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
  
   ];

   protected $guarded =[


   ];
}