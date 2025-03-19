<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;
    protected $table = "asesores";
    protected $fillable = ["nombre", "apellido_paterno", "apellido_materno","correo_electronico", "profesion", "carrera","numero_cedula"];

    public function proyectos($periodo_id)
    {
        return $this->hasMany(Proyecto::class)->where('periodo_id', $periodo_id);
    }
}
