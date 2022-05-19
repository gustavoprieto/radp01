<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
        //relacion uno a muchos porque un estado puede estar en varios info_equi_estado
        public function Info_equi_estado(){
            return $this->hasMany('App\Models\InfoEquipoEstado', 'estado_id');
        }
}
