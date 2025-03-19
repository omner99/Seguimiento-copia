<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seguimiento;

class SeguimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seguimiento = new Seguimiento();
        $seguimiento->estudiante_id = 1;
        $seguimiento->desglose_id = 1;
        $seguimiento->desglose_type = "App\Models\Parcial";
        $seguimiento->save(); 

        $seguimiento = new Seguimiento();
        $seguimiento->estudiante_id = 1;
        $seguimiento->desglose_id = 2;
        $seguimiento->desglose_type = "App\Models\Parcial";
        $seguimiento->save(); 


        $seguimiento = new Seguimiento();
        $seguimiento->estudiante_id = 2;
        $seguimiento->desglose_id = 3;
        $seguimiento->desglose_type = "App\Models\Parcial";
        $seguimiento->save(); 

        $seguimiento = new Seguimiento();
        $seguimiento->estudiante_id = 2;
        $seguimiento->desglose_id = 4;
        $seguimiento->desglose_type = "App\Models\Parcial";
        $seguimiento->save(); 
    }

}
