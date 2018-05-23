<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class madre extends Model
{
    protected $table='madre';
    protected $primaryKey='idMadre';
    public $timestamps=false;

    protected $fillable = [
       'Madre_Apelpa',
       'Madre_Apelma',
       'Madre_Nom',
       'Madre_DNI',
       'Madre_HC',       
       'Madre_fechan',
       'Familia_idFamilia',
           ];

    protected $guarded = [

    ];
}
