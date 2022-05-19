<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso_Rol extends Model
{
    use HasFactory;
    
    //relacion uno a muchos inverso porque varios persmiso_role pueden pertenecer a un permiso 
    public function Permiso(){
        return $this->belongsTo('App\Models\Permiso', 'permiso_id');
    }
   
    //relacion uno a muchos inverso porque varios permisos_role pueden pertenecer a un rol    
    public function Role(){
        return $this->hasMany('App\Models\Rol', 'role_id');
    }
}
