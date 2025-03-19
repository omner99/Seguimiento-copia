<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nueva = new Carrera();
        $nueva->nombre = "Ingenierias";
        $nueva->save();

        $nueva = new Carrera();
        $nueva->nombre = "Mecanica";
        $nueva->save();

        $nueva = new Carrera();
        $nueva->nombre = "Electronica";
        $nueva->save();

        $nueva = new Carrera();
        $nueva->nombre = "Industrial";
        $nueva->save();

        $nueva = new Carrera();
        $nueva->nombre = "Electrica";
        $nueva->save();
    }

    
}
