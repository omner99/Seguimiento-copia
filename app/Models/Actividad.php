<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = "actividades";
    protected $connection = 'mysql';
    protected $fillable = ["id", "orden", "nombre", "semanas","descripcion", "proyecto_id"];


    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
