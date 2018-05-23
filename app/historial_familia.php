<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_Nutricional extends Model
{
   protected $table='historial_familia';
   protected $primaryKey='idHistorial_Familia';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'Tipo_Familia',
      'Modo_Capta',
      'HF_fecha',
      'Familia_idFamilia',
      'Periodo_Programa_idPeriodo_Programa',
      
   ];

   protected $guarded =[


   ];
}