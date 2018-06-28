<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlNutricional extends Model
{
    protected $table='control_nutricional';
    protected $primaryKey='idControl_nutricional';


    /* public $timestamps=false; es para indicar que no utilizaremos 'updated_at' o 'created_at' */
    public $timestamps=false;
   


    /*paso 4 - indicar las tablas de la base de datos al modelo*/

    protected $fillable = [
      'Cn_fecha',
      'Cn_edad',
      'Cn_peso',
      'Cn_talla',
      'Cn_hb_hto',
      'Cn_Observacion',
      'Nino_idNino',
    ];

    protected $guarded =[

    ];
}
