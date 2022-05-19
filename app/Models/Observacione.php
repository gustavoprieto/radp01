<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacione extends Model
{
    use HasFactory;
        //realcionpolimorfica
        public function	Observacioneable(){
            return $this->morphTo();
        }
}
