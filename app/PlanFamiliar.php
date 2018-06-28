<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planificacion extends Model
{
   protected $table='planificacion';
   protected $primaryKey='idPlanificacion';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Planificacion_nom',
      
   ];

   protected $guarded =[


   ];
}