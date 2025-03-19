<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coordinador extends Model
{
    use HasFactory;

    protected $table = "coordinadores"; 

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }
    public function periodos()
    {
        return $this->hasMany(Periodo::class)/*->where('periodo_id', $periodo_id)*/;
    }

    public function proyectos($periodo_id){
        $resultados = DB::table('coordinadores')
        ->join('carreras', 'carreras.id', '=', 'coordinadores.carrera_id')
        ->join('estudiantes', 'carreras.id', '=', 'estudiantes.carrera_id')
        ->join('proyectos', 'proyectos.id', '=', 'estudiantes.proyecto_id')
        ->where('carreras.id', '=', $this->carrera_id)
        ->where('proyectos.periodo_id', '=', $periodo_id)
        ->select('proyectos.*')
        ->groupBy('proyectos.id')
        ->get();

        // Hidrata la colección de stdClass a una colección de modelos Proyecto
        return Proyecto::hydrate($resultados->toArray());
    }
}
