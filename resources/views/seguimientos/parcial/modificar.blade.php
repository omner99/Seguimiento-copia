@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <p>Nombre del residente: {{$estudiante->nombre}}</p>
    <p>Nombre del Proyecto: {{$estudiante->proyecto->nombre}}</p>
    <p>Programa educativo: {{$estudiante->carrera->nombre}}</p>
    <p>Periodo de realizacion:</p>
    <p>Calificacion parcial: </p>
 
    <form action="{{route('asesor.guardar-seguimientos',[$estudiante->id,$consecutivo])}}" method="post">
        @csrf

    <table border="1">
        <thead>
            <th>Criterios a Evaluar</th>
            <th>Valor</th>
            <th>Evaluacion</th>
        </thead>
        <tbody>
            <tr>
                <td>Asistió puntualmente a las reuniones de asesoría.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="puntualidad" class="rangeInput" id="rangeInput1" min="0" max="10" value="10" > <br>
                    <span id="rangeValue1">10</span>
                </td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="conocimiento" class="rangeInput" id="rangeInput2" min="0" max="20" value="20"> <br>
                    <span id="rangeValue2">20</span>
                </td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>15</td>
                <td> 
                    <input type="range" name="equipo" class="rangeInput" id="rangeInput3" min="0" max="15" value="15" > <br>
                    <span id="rangeValue3">15</span>

                </td>
            </tr>
            <tr>
                <td>Es dedicado y proactivo en las actividades encomendadas.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="dedicado" class="rangeInput" id="rangeInput4" min="0" max="20" value="20"><br>
                    <span id="rangeValue4">20</span>
                </td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos 
                establecidos en el cronograma.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="orden" class="rangeInput" id="rangeInput5" min="0" max="10" value="10"><br>
                    <span id="rangeValue5">10</span>
                </td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>15</td>
                <td> 
                    <input type="range" name="mejoras" class="rangeInput" id="rangeInput6" min="0" max="15" value="15"><br>
                    <span id="rangeValue6">15</span>
                </td>
            </tr>
        </tbody>
    </table>
    <input type='submit'>
    </form>
    


    <script>
        // Selecciona todos los inputs de tipo "range" con la clase "rangeInput"
        const rangeInputs = document.querySelectorAll('.rangeInput');

        rangeInputs.forEach(input => {
            const valueDisplay = document.getElementById(`rangeValue${input.id.slice(-1)}`);
            // Actualiza el valor mostrado al cambiar el input
            input.addEventListener('input', function() {
                valueDisplay.textContent = input.value;
            });
            // Muestra el valor inicial al cargar la página
            valueDisplay.textContent = input.value;
        });
    </script>

@endsection