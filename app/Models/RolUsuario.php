<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    use HasFactory;
            //relacion uno a muchos inverso porque varios role_usuario pueden tener a un role    
            public function Role(){
                return $this->belongsTo('App\Models\Rol', 'rol_id');
            }
        
            //relacion uno a muchos inverso porque varios role_usuario pueden tener a un usuario    
            public function User(){
                return $this->belongsTo('App\Models\User', 'users_id');
            }
}
