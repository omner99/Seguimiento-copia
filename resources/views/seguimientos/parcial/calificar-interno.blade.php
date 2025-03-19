@extends('plantillas.app')
<style>
.cmenor{background-color: rgb(40, 95, 139);}
.cmayor{background-color: rgb(19, 46, 68);}
.linea{background-color: rgb(10, 105, 163); height: 4px; border-radius: 2px; width: 90%;} 
.hderecho {display: flex; justify-content: right; }
.horizontal {display: flex; justify-content: center; width: 100%;}
.centro{display: flex; justify-content: center;}
.titulo{text-align:center; font-size: 50px; font-weight: bold;}
.subtitulo{text-align:center; font-size: 45px; font-weight: bold; margin-top:20px; margin-bottom:20px;}
.parrafo{font-size: 20px;  font-weight: bold;}
.boton{background-color: rgb(25, 118, 210); padding: 15px; border-radius: 5px; color: white; border: none; cursor: pointer; margin-top:30px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{margin-top:16px; font-size: 18px; margin-left:12px;}
table{border: 2px solid rgb(19, 46, 68); border-collapse: collapse; }
th{border: 1px solid rgb(40, 95, 139);padding: 8px; }
.thcontenido{font-weight: normal;}
.thfondo{background-color: rgb(204, 216, 228);}
.bodydiv{margin-left: 20px; margin-right: 20px;}
textarea{padding: 10px;}
</style>
@section('encabezado')
    <a href="{{route('Cambiar_Contraseña')}}">Cambiar la Contraseña</a>
@endsection
@section('contenido')

<div class="horizontal"><p class="subtitulo">EVALUACION POR EL ASESOR INTERNO</p></div>
<div class="bodydiv">
        <div class="horizontal" style="margin-top:30px;"><p class="parrafo">Nombre del residente:</p> <p class="llenar"> {{$estudiante->nombre}} {{$estudiante->apellido_paterno}} {{$estudiante->apellido_materno}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Nombre del Proyecto:</p> <p class="llenar">{{$estudiante->proyecto->nombre}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Programa educativo:</p> <p class="llenar">{{$estudiante->carrera->nombre}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Periodo de realizacion:</p> <p class="llenar">{{$estudiante->proyecto->periodo->nombre}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Calificacion Parcial: </p>
    </div>  
    <h2>Califiaciones del asesor externo</h2>
    <table border="1">
        <thead>
            <th class="thfondo">Criterios a Evaluar</th>
            <th class="thfondo">Calificaciones dadas por el Asesor Externo</th>
        </thead>
        <tbody>
            <tr>
                <td>Asiste puntualmente en el horario establecido.</td>
                <td>{{$segui->puntualidad_externo}}</td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>{{$segui->equipo_externo}}</td>
            </tr>
            <tr>
                <td>Tiene iniciativa para colaborar.</td>
                <td>{{$segui->iniciativa_externo}}</td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>{{$segui->mejoras_externo}}</td>
            </tr>
            <tr>
                <td>Cumple con los objetivos correspondientes al proyecto.</td>
                <td>{{$segui->objetivos_externo}}</td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos 
                establecidos en el cronograma.</td>
                <td>{{$segui->orden_externo}}</td>
            </tr>
            <tr>
                <td>Demuestra liderazgo en su actuar.</td>
                <td>{{$segui->liderazgo_externo}}</td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>{{$segui->conocimiento_externo}}</td>
            </tr>
            <tr>
                <td>Demuestra un comportamiento ético (es disciplinado, acata órdenes, respeta a sus compañeros de trabajo, entre otros).</td>
                <td>{{$segui->etico_externo}}</td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td>
                    {{$segui->comentarios_externo}}
                </td>
            </tr>
        </tbody>
    </table>
    <h2 style="margin-top: 20px;">Califiaciones del asesor interno</h2>

    <form action="{{route('guardar-seguimientos',[$estudiante->id,$consecutivo])}}" method="post">
        @csrf

    <table border="1">
        <thead>
            <th class="thfondo">Criterios a Evaluar</th>
            <th class="thfondo">Valor</th>
            <th class="thfondo">Evaluacion</th>
        </thead>
        <tbody>
            <tr>
                <td>Asistió puntualmente a las reuniones de asesoría.</td>
                <td>10</td>
                <td> 
                    <input type="range" name="puntualidad_interno" class="rangeInput" id="rangeInput1" min="0" max="10" value="{{$segui->puntualidad_interno}}"> <br>
                    <span id="rangeValue1">10</span>
                </td>
            </tr>
            <tr>
                <td>Demuestra conocimiento en el área de su especialidad.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="conocimiento_interno" class="rangeInput" id="rangeInput2" min="0" max="20" value="{{$segui->conocimiento_interno}}"> <br>
                    <span id="rangeValue2">20</span>
                </td>
            </tr>
            <tr>
                <td>Trabaja en equipo y se comunica de forma efectiva (oral y escrita).</td>
                <td>15</td>
                <td> 
                    <input type="range" name="equipo_interno" class="rangeInput" id="rangeInput3" min="0" max="15" value="{{$segui->equipo_interno}}"> <br>
                    <span id="rangeValue3">15</span>

                </td>
            </tr>
            <tr>
                <td>Es dedicado y proactivo en las actividades encomendadas.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="dedicado_interno" class="rangeInput" id="rangeInput4" min="0" max="20" value="{{$segui->dedicado_interno}}"><br>
                    <span id="rangeValue4">20</span>
                </td>
            </tr>
            <tr>
                <td>Es ordenado y cumple satisfactoriamente con las actividades encomendadas en los tiempos 
                establecidos en el cronograma.</td>
                <td>20</td>
                <td> 
                    <input type="range" name="orden_interno" class="rangeInput" id="rangeInput5" min="0" max="20" value="{{$segui->orden_interno}}"><br>
                    <span id="rangeValue5">20</span>
                </td>
            </tr>
            <tr>
                <td>Propone mejoras al proyecto.</td>
                <td>15</td>
                <td> 
                    <input type="range" name="mejoras_interno" class="rangeInput" id="rangeInput6" min="0" max="15" value="{{$segui->mejoras_interno}}"><br>
                    <span id="rangeValue6">15</span>
                </td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td colspan="2">
                    <textarea name="comentarios_interno" id="" cols="30" rows="10">{{$segui->comentarios_interno}}</textarea>
                </td>
            </tr>
        </tbody>
    </table>

    <input type='submit' class="boton" style="margin-bottom: 20px" value="Enviar calificacion">
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
