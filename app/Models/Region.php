<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
       //la tabla con la cual el modelo se relaciona
       protected $table = "regions";
       //la calve primaria de la tabla
       protected $primaryKey="region_id";
       //anular campos de auditoria
       public $timestamps = false;
    use HasFactory;
    //Relacion entrev region y paises 1-m
    public function paises(){
        return $this->hasMany(Country::class, 'region_id');
    }
}
