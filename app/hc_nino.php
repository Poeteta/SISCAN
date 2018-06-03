<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hc_nino extends Model
{
   protected $table='hc_nino';
   protected $primaryKey='idHC_Nino';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'Nino_hcfecha',
      'Chequeo_idChequeo',
      'Nino_idNino',
      
   ];

   protected $guarded =[


   ];
}