<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_Nutricional extends Model
{
   protected $table='examen_sangre';
   protected $primaryKey='idExamen_Sangre';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'Sangre_Periodo',
      'Sangre_fecha',
      'Sangre_cantidad',
      'Sangre_resultado',
      'Madre_idMadre',
      
   ];

   protected $guarded =[


   ];
}