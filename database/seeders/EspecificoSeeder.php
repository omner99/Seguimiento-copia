<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especifico;

class EspecificoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especifico = new Especifico();
        $especifico->orden = "1";
        $especifico->texto = "Analizar y registrar los requisitos funcionales y no funcionales del sistema";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "2";
        $especifico->texto = "Especificar qué tipo de contenido tendrá el sistema en referencia al texto y elementos 
multimedia.";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "3";
        $especifico->texto = "Determinar qué tecnologías se utilizarán para construir el programa, como lenguajes 
de programación, API´S y herramientas se usarán para desarrollar el software. ";
        $especifico->save(); 

        $especifico = new Especifico();
        $especifico->orden = "4";
        $especifico->texto = "Definir la disposición general de los componentes del sistema web, como 
encabezados, menús, contenido principal, barras laterales y pie de página.  ";
        $especifico->save(); 

        $especifico = new Especifico();
        $especifico->orden = "5";
        $especifico->texto = "Diseñar y organizar los elementos con los que interactúa el usuario como botones, 
formularios, enlaces.";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "6";
        $especifico->texto = "Definir cómo se verán los diferentes elementos en términos de color, tamaño, fuentes y espaciado.  ";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "7";
        $especifico->texto = "Utilizar herramientas de desarrollo y control de versiones. ";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "8";
        $especifico->texto = "Utilizar frameworks y librerías de JavaScript y CSS para facilitar y agilizar el desarrollo.";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "9";
        $especifico->texto = "Asegurar que la página web funcione correctamente en diferentes navegadores y versiones.";
        $especifico->save();

        $especifico = new Especifico();
        $especifico->orden = "10";
        $especifico->texto = "Implementar la lógica de manejo de las operaciones y procesos del sitio web.";
        $especifico->save();

         
    }

}
