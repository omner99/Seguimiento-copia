<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['usa_id','usa_type','nombre_usuario','contraseña'];
    public function usa()
    {
        return $this->morphTo();
    }

    public function estudiante(){
        return$this->hasOne(Estudiante::class);
    }

}
