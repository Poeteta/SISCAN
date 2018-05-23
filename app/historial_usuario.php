<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_Nutricional extends Model
{
   protected $table='historial_usuario';
   protected $primaryKey='idHistorial_Usuario'

   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'HU_Fecha',
      'Usuario_idUsuario',
      'Periodo_Programa_idPeriodo_Programa',
      
   ];

   protected $guarded =[


   ];
}