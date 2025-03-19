<?php

namespace Database\Seeders;
use App\Models\Actividad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $nueva = new Actividad();
        $nueva->orden = "1";
        $nueva->nombre = "analisis";
        $nueva->semanas = 2;
        $nueva->descripcion = "Identificar y contactar a los responsables.";
        $nueva->proyecto_id = 1;
        $nueva->save();

        $nueva = new Actividad();
        $nueva->orden = "3";
        $nueva->nombre = "diseño";
        $nueva->semanas = 4;
        $nueva->descripcion = "Maquetar y graficar";
        $nueva->proyecto_id = 1;
        $nueva->save();

        $nueva = new Actividad();
        $nueva->orden = "6";
        $nueva->nombre = "implementacion";
        $nueva->semanas = 6;
        $nueva->descripcion = "Desarollar la vista del log in";
        $nueva->proyecto_id = 1;
        $nueva->save();

        $nueva = new Actividad();
        $nueva->orden = "3";
        $nueva->nombre = "Entrevistas";
        $nueva->semanas = "1";
        $nueva->descripcion = "Identificar y contactar a los responsables.";
        $nueva->proyecto_id = 3;
        $nueva->save(); 

        $nueva = new Actividad();
        $nueva->orden = "1";
        $nueva->nombre = "Definir requisitos";
        $nueva->semanas = "2";
        $nueva->descripcion = "Analizar y registrar los requisitos funcionales y no funcionales del sistema.";
        $nueva->proyecto_id = 3;
        $nueva->save(); 


    }
}
