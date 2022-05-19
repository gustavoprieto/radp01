<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoEquipoEstado extends Model
{
    use HasFactory;
        //relacion uno a muchos inverso porque varios info_equi_estado pueden pertenecer a un equipo    
        public function Equipo(){
            return $this->belongsTo('App\Models\Equipo', 'equipo_id');
        }
    
        //relacion uno a muchos inverso porque varios info_equi_estado pueden tener a un estado    
        public function Estado(){
            return $this->belongsTo('App\Models\Estado', 'estado_id');
        }

        //relacion uno a muchos porque un estado puede estar en varios info_equi_estado
        public function Informe(){
            return $this->belongsTo('App\Models\Informe', 'informes_id');
        }

        //relacion polimorfica uno a muchos
        public function Observaciones(){
            return $this->morphTo('App\Models\Observacione', 'Observacioneable');
        }
}
