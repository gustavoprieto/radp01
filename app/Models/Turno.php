<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;
        //relacion uno a muchos porque un turno puede estar en  varios informes
        public function Informe(){
            return $this->belongsTo('App\Models\Informe', 'turno_id');
        }
}
