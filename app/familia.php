<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familia extends Model
{
    protected $table='familia';
    protected $primarykey='idFamilia';

    public $timestamps=false;

    protected $fillable = [
      'Fam_numero',
      'Fam_nom',
      'Fam_direccion',
      'Fam_telf',
     
   ];

   protected $guarded =[


   ];
}
