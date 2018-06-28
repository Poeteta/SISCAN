<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hca_Madre extends Model
{
   protected $table='hca_madre';
   protected $primaryKey='idHCA_Madre';


   /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
   public $timestamps=false;
   


/*paso 4 - indicar las tablas de la base de datos al modelo*/

   protected $fillable = [
      'Gestante_Inicio',
      'Gestante_Final',
      'Planificacion_idPlanificacion',
      'CPN_Antes_pg',
      'CPN_cantidad',
      'Papanicolau_Antes_pg',
      'Papanicolau_Durante_Fecha',
      'Papanicolau_resul',
      'Ex_automama',
      'Ex_automama_Durante_fecha',
      'Ex_automama_sospechoso',
      'Vacuna_antite_pg',
      'Vacuna_cantidad',
      'Madre_idMadre',
      
   ];

   protected $guarded =[


   ];
}