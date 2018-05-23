<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control_Nutricional extends Model
{
   protected $table='periodo_programa';
   protected $primaryKey='idPeriodo_Programa';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'Fecha_Inicio',
      'Fecha_Fin',
      
   ];

   protected $guarded =[


   ];
}