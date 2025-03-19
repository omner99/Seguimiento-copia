<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Externo extends Model
{
    use HasFactory;
    protected $fillable=['titulo','nombre', 'apellido_paterno', 'apellido_materno', 'correo_electronico', 'puesto'];

    public function proyectos($periodo_id)
    {
        return $this->hasMany(Proyecto::class)->where('periodo_id', $periodo_id);
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class,'id','usa_id')->where('usa_type',get_class($this))->withDefault([
            'nombre_usuario' => 'Sin cuenta',
        ]);;
    }

}
