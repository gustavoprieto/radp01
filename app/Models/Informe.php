<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;    //relacion uno a muchos inverso porque varios informes pueden pertenecer a un usuario   
    public function User(){
        return $this->belongsTo('App\Models\User', 'usuario_id');
    }

        //relacion uno a muchos inverso porque varios informes pueden pertenecer a un turno   
        public function Turno(){
            return $this->belongsTo('App\Models\Turno', 'turno_id');
        }

        //relacion polimorfica uno a muchos
        public function Observaciones(){
            return $this->morphTo('App\Models\Observacione', 'Observacioneable');
        }

}
