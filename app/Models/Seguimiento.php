<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    
    /*
    public function parciales(){
        return $this->hasMany(Parcial::class);
    }*/
    public function parciales()//model
    {
        //return $this->morphMany(Seguimiento::class, 'desglose');
        //return $this->morphToMany(Seguimiento::class,'desglose',"tabla");
        return $this->morphMany(Parcial::class, 'desglose');
    }
    public function parcial( $cual = 1)//model
    {
        //return $this->morphMany(Seguimiento::class, 'desglose');
        //return $this->morphToMany(Seguimiento::class,'desglose',"tabla");
        return $this->morphMany(Parcial::class, 'desglose')->where('orden',$cual);
    }

/*    public function desgloses()//model
    {
        return $this->morphMany(Parcial::class);
    }

*/
    public function ultimos(){
        return $this->hasMany(Ultimo::class);
    }
}
