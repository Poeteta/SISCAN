<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nino extends Model
{
     protected $table = 'nino';
     protected $primaryKey = 'idNino';
     public $timestamps=false;

      protected $fillable = [
      
      'Nino_nom',
      'Nino_hc',
      'Nino_dni'
      'Nino_fechan',
      'Nino_sexo',
      'Familia_idFamilia',
      
    ];

    protected $guarded =[


    ];
}
