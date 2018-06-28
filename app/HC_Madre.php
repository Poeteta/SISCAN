<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hc_madre extends Model
{
   protected $table='hc_madre';
   protected $primaryKey='idHC_Madre';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'Madre_hcfecha',
      'Chequeo_idChequeo',
      'Madre_idMadre',
      
   ];

   protected $guarded =[


   ];
}