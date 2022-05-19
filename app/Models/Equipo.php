<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
        //relacion uno a muchos porque un equipo puede estar en varios info_equi_estado
        public function Info_Equi_Estado(){
            //return $this->hasMany('App\Models\InfoEquipoEstado', 'equipo_id');
            return $this->hasMany(InfoEquipoEstado::class, 'equipo_id');
        }
    
        //relacion uno a muchos inverso porque varios equipos puede estar en un tipo_equipo
        public function Tipo_equipo(){
            return $this->belongsTo('App\Models\TipoEquipo', 'tipoequipo_id');
        }
}
