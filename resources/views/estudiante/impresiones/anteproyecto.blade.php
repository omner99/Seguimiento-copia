<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
        <table style="justify-content: center; width: 100%; margin-top: 0;">
        <thead>
            <th>
            <img src="img/logo.png" style="width: 90px; height: 80px;"/>
            </th>
            <th>
            <h3>INSTITUTO TECNOLÓGICO DE TUXTLA GUTIÉRREZ</h3>
            <h4>ANTEPROYECTO DE RESIDENCIA PROFESIONAL</h4>
            </th>
        </thead>
        </table>
        <p class="centrar" style="margin-top: 0px; padding-top: 0px;">____________________________________________________________________________________________</p>
        
        <table style="width: 100%;">
            <tr>
                <th style="width: 30%;"></th>
                <th style="text-align: right;  font-weight: bold; width: 50%;">NUM. DEL REGISTRO DEL PROYECTO:</th>
                <th style="text-align: right; width: 20%;"> ___________________</th><!--Cambiar-->
            </tr>
        </table>
        <p class="inciso">a) Nombre del proyecto: </p>
        <p>{{$estudiante->proyecto->nombre}}</p>

        <p class="inciso">b) Objetivo del proyecto: </p>
        <p>{{$estudiante->proyecto->objetivo_general}}</p>
        
        <p class="inciso">c) Justificación: </p>
        <p>{{$estudiante->proyecto->justificacion}}</p>

        <p class="inciso">d) Cronograma preliminar de actividades: </p>



        <div class="cuadro">
            <table  class="tabla" border="1">
                <thead>
                    <tr>
                        <th style="width: 15%;"></th>
                        @for ($i = 1 ; $i <= 16; $i++)
                            <th>{{$i}}</th>  
                        @endfor
                    </tr>
                </thead>
                <tbody>
                @php
                    $anterior = 0;
                @endphp
                @forelse ($estudiante->proyecto->actividades as $actividad)
                    <tr>
                        <td>{{$actividad->nombre}}</td>
                        @for ($i = 0; $i < $anterior; $i++)
                            <td> </td>                                                        
                        @endfor
                        @for ($i = 1 ; $i <= 16-$anterior; $i++)
                            @if ($i <= $actividad->semanas)
                                <td>X</td>
                            @else
                                <td> </td>                                
                            @endif
                        @endfor
                        @php
                        $anterior = $anterior + $actividad->semanas ;
                    @endphp
    
                    </tr>
                    @empty
                        <tr>
                            <th colspan="3">Sin actividades</th>
                        </tr>
                @endforelse 
                </tbody>    
                </table>
        </div>
        
        <p class="inciso">e) Descripción detallada de las actividades</p>
        <p class="bold" style="margin-left: 10px;">Definir requisitos:</p>
        <ul>
            @foreach ($estudiante->proyecto->actividades as $actividad)
            <li style="margin-left: 20px; margin-right: 20px;">{{$actividad->nombre}}: Durante {{$actividad->semanas}} semanas se realizara: {{$actividad->descripcion}}</li>
            @endforeach
        </ul>

        <table class="tabla" style="margin-top: 40px;">
            <tr>
                <th style="width: 50%;"></th>
                <th style="width: 50%;" class="bold">Vto. Bno.</th>
            </tr>
        </table>
        <table class="tabla" style="margin-top: 60px;">
            <tr>
                <th style="width: 50%;">{{$estudiante->nombre}} {{$estudiante->apellido_paterno}} {{$estudiante->apellido_materno}}</th>
                <th style="width: 50%;">{{$estudiante->proyecto->asesor->nombre}} {{$estudiante->proyecto->asesor->apellido_paterno}} {{$estudiante->proyecto->asesor->apellido_materno}}</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 50%;">_____________________________</th>
                <th style="width: 50%;">_____________________________</th>
            </tr>
        </table>
        <table class="tabla">
            <tr>
                <th style="width: 50%;">Nombre y firma del Residente</th>
                <th style="width: 50%;">Nombre del Docente Asesor </th>
            </tr>
        </table>
        <table class="tabla" style="margin-top: 40px;">
            <tr>
                <th style="width: 50%;"></th>
                <th style="width: 50%;">Fecha: </th>
            </tr>
        </table>

</body>
</html>