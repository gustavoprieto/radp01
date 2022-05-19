<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    
    //relacion uno a muchos porque un permiso puede tener varios permiso_role
    public function Permiso_role(){
        return $this->hasMany('App\Models\Permiso_Rol', 'permiso_id');

    }
}
