<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    
    //relacion uno a muchos porque un role puede tener varios permiso_role
    public function Permiso_role(){
        return $this->hasMany('App\Models\Permiso_Rol', 'permiso_id');
    }

    //relacion uno a muchos porque un role puede tener varios role_usuario
    public function Rol_usuario(){
        return $this->hasMany('App\Models\RolUsuario', 'rol_id');
    }
}
