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
   
<div class="horizontal"><p class="subtitulo">EVALUACION POR EL ASESOR EXTERNO</p></div>
<div class="bodydiv">
        <div class="horizontal" style="margin-top:30px;"><p class="parrafo">Nombre del residente:</p> <p class="llenar"> {{$estudiante->nombre}} {{$estudiante->apellido_paterno}} {{$estudiante->apellido_materno}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Nombre del Proyecto:</p> <p class="llenar">{{$estudiante->proyecto->nombre}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Programa educativo:</p> <p class="llenar">{{$estudiante->carrera->nombre}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Periodo de realizacion:</p> <p class="llenar">{{$estudiante->proyecto->periodo->nombre}}</p> </div>
        <div class="horizontal" style="margin-top:15px;"><p class="parrafo">Calificacion parcial: </p>
    </div>  
    <h2 style="margin-top: 20px;">Califiaciones del asesor externo</h2>

    <form action="{{route('guardar-seguimientos',[$estudiante->id,'ultimo'])}}" method="post"><!-- <form action="{{route('guardar-seguimientos',[$estudiante->id,$consecutivo])}}" method="post">-->
        @csrf

    <table border="1">
        <thead>
            <th class="thfondo">Criterios a Evaluar</th>
            <th class="thfondo">Valor</th>
            <th class="thfondo">Evaluacion</th>
        </thead>
        <tbody>
            <tr>
                <td>Portada</td>
                <td>2</td>
                <td> 
                    <input type="range" name="portada_externo" class="rangeInput" id="rangeInput1" min="0" max="2" value="{{$ultimo->portadaportada_externo}}"> <br>
                    <span id="rangeValue1">2</span>
                </td>
            </tr>
            <tr>
                <td>Agradecimientos</td>
                <td>2</td>
                <td> 
                    <input type="range" name="agradecimientos_externo" class="rangeInput" id="rangeInput2" min="0" max="2" value="{{$ultimo->agradecimientos_externo}}"> <br>
                    <span id="rangeValue2">2</span>
                </td>
            </tr>
            <tr>
                <td>Resumen</td>
                <td>2</td>
                <td> 
                    <input type="range" name="resumen_externo" class="rangeInput" id="rangeInput3" min="0" max="2" value="{{$ultimo->resumen_externo}}"> <br>
                    <span id="rangeValue3">2</span>

                </td>
            </tr>
            <tr>
                <td>Índice</td>
                <td>2</td>
                <td> 
                    <input type="range" name="indice_externo" class="rangeInput" id="rangeInput4" min="0" max="2" value="{{$ultimo->indice_externo}}"><br>
                    <span id="rangeValue4">2</span>
                </td>
            </tr>
            <tr>
                <td>Introducción</td>
                <td>2</td>
                <td> 
                    <input type="range" name="introduccion_externo" class="rangeInput" id="rangeInput5" min="0" max="2" value="{{$ultimo->introduccion_externo}}"><br>
                    <span id="rangeValue5">2</span>
                </td>
            </tr>
            <tr>
                <td>Problemas a resolver (priorizándolos)</td>
                <td>5</td>
                <td> 
                    <input type="range" name="problemas_externo" class="rangeInput" id="rangeInput6" min="0" max="5" value="{{$ultimo->problemas_externo}}"><br>
                    <span id="rangeValue6">5</span>
                </td>
            </tr>
            <tr>
                <td>Objetivos</td>
                <td>2</td>
                <td> 
                    <input type="range" name="objetivos_externo" class="rangeInput" id="rangeInput7" min="0" max="2" value="{{$ultimo->objetivos_externo}}"><br>
                    <span id="rangeValue7">2</span>
                </td>
            </tr>
            <tr>
                <td>Justificación</td>
                <td>3</td>
                <td> 
                    <input type="range" name="justificacion_externo" class="rangeInput" id="rangeInput8" min="0" max="3" value="{{$ultimo->justificacion_externo}}"><br>
                    <span id="rangeValue8">3</span>
                </td>
            </tr>
            <tr>
                <td>Marco Teórico (fundamentos teóricos)</td>
                <td>10</td>
                <td> 
                    <input type="range" name="marco_teorico_externo" class="rangeInput" id="rangeInput9" min="0" max="10" value="{{$ultimo->marco_teorico_externo}}"><br>
                    <span id="rangeValue9">10</span>
                </td>
            </tr>
            <tr>
                <td>Procedimiento, descripción de las actividades realizadas</td>
                <td>5</td>
                <td> 
                    <input type="range" name="procedimiento_externo" class="rangeInput" id="rangeInputA" min="0" max="5" value="{{$ultimo->procedimiento_externo}}"><br>
                    <span id="rangeValueA">5</span>
                </td>
            </tr>
            <tr>
                <td>Resultados: planos, gráficas, prototipos, manuales, programas, análisis estadísticos, 
                    modelos matemáticos, simulaciones, normativas, regulaciones y restricciones, entre otros. 
                    Solo para proyectos que lo requieran, estudios de mercado, estudio técnico y estudio económico. **</td>
                <td>45</td>
                <td> 
                    <input type="range" name="resultados_externo" class="rangeInput" id="rangeInputB" min="0" max="45" value="{{$ultimo->resultados_externo}}"><br>
                    <span id="rangeValueB">45</span>
                </td>
            </tr>
            <tr>
                <td>Conclusiones, recomendaciones, y experiencia profesional adquirida.</td>
                <td>15</td>
                <td> 
                    <input type="range" name="conclusiones_externo" class="rangeInput" id="rangeInputC" min="0" max="15" value="{{$ultimo->conclusiones_externo}}"><br>
                    <span id="rangeValueC">15</span>
                </td>
            </tr>
            <tr>
                <td>Competencias desarrolladas y/o aplicadas</td>
                <td>3</td>
                <td> 
                    <input type="range" name="competencias_externo" class="rangeInput" id="rangeInputD" min="0" max="3" value="{{$ultimo->competencias_externo}}"><br>
                    <span id="rangeValueD">3</span>
                </td>
            </tr>
            <tr>
                <td>Fuentes de información</td>
                <td>2</td>
                <td> 
                    <input type="range" name="fuentes_externo" class="rangeInput" id="rangeInputE" min="0" max="2" value="{{$ultimo->fuentes_externo}}"><br>
                    <span id="rangeValueE">2</span>
                </td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td colspan="2">
                    <textarea name="comentarios_externo" id="" cols="30" rows="10">{{$ultimo->comentarios_externo}}</textarea>
                </td>
            </tr>
        </tbody>
    </table>

    <input type='submit' class="boton" style="margin-bottom: 20px" value="Enviar calificacion">
    </form>

    <h2>Califiaciones del asesor interno</h2>
    <table border="1">
        <thead>
            <th class="thfondo">Criterios a Evaluar</th>
            <th class="thfondo">Calificaciones dadas por el Asesor Externo</th>
        </thead>
        <tbody>
        <tr>
                <td>Portada</td>
                <td>{{$ultimo->portada_interno}}</td>
            </tr>
            <tr>
                <td>Agradecimientos</td>
                <td>{{$ultimo->agradecimientos_interno}}</td>
            </tr>
            <tr>
                <td>Resumen</td>
                <td>{{$ultimo->resumen_interno}}</td>
            </tr>
            <tr>
                <td>Índice</td>
                <td>{{$ultimo->indice_interno}}</td>
            </tr>
            <tr>
                <td>Introducción</td>
                <td>{{$ultimo->introduccion_interno}}</td>
            </tr>
            <tr>
                <td>Problemas a resolver (priorizándolos)</td>
                <td>{{$ultimo->problemas_interno}}</td>
            </tr>
            <tr>
                <td>Objetivos</td>
                <td>{{$ultimo->objetivos_interno}}</td>
            </tr>
            <tr>
                <td>Justificación</td>
                <td>{{$ultimo->justificacion_interno}}</td>
            </tr>
            <tr>
                <td>Marco Teórico (fundamentos teóricos)</td>
                <td>{{$ultimo->marco_teorico_interno}}</td>
            </tr>
            <tr>
                <td>Procedimiento, descripción de las actividades realizadas</td>
                <td>{{$ultimo->procedimiento_interno}}</td>
            </tr>
            <tr>
                <td>Resultados: planos, gráficas, prototipos, manuales, programas, análisis estadísticos, 
                    modelos matemáticos, simulaciones, normativas, regulaciones y restricciones, entre otros. 
                    Solo para proyectos que lo requieran, estudios de mercado, estudio técnico y estudio económico. **</td>
                <td>{{$ultimo->resultados_interno}}</td>
            </tr>
            <tr>
                <td>Conclusiones, recomendaciones, y experiencia profesional adquirida.</td>
                <td>{{$ultimo->conclusiones_interno}}</td>
            </tr>
            <tr>
                <td>Competencias desarrolladas y/o aplicadas</td>
                <td>{{$ultimo->competencias_interno}}</td>
            </tr>
            <tr>
                <td>Fuentes de información</td>
                <td>{{$ultimo->fuentes_interno}}</td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td>
                    {{$ultimo->comentarios_interno}}
                </td>
            </tr>
        </tbody>
    </table>

    
    



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
