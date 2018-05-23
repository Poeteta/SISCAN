<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problemas_Salud extends Model
{
   protected $table='problemas_salud';
   protected $primaryKey='idProblemas_Salud';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Problema_fecha',
      'Problema_atendido',
      'Problema_enfermedad',
      'Problema_hospital',
      'Nino_idNino',
      
   ];

   protected $guarded =[


   ];
}