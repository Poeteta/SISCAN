<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_chequeo extends Model
{
   protected $table='tipo_chequeo';
   protected $primaryKey='iTipo_Chequeo';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      
      'Tipo_Chequeo',
      
   ];

   protected $guarded =[


   ];
}