<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }

    public function periodo()
    {
        return $this->hasOne(Periodo::class);
    }

    public function coordinador()
    {
        return $this->hasOne(Coordinador::class);
    }
}
