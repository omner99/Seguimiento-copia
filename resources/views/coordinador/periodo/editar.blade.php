@extends('plantillas.app')
<style>
.cmenor{background-color: rgb(40, 95, 139);}
.cmayor{background-color: rgb(19, 46, 68);}
.linea{background-color: rgb(10, 105, 163); height: 4px; border-radius: 2px; width: 90%;} 
.hderecho {display: flex; justify-content: right; }
.horizontal {display: flex; justify-content: center; width: 100%;}
.centro{display: flex; justify-content: center;}
.titulo{text-align:center; font-size: 50px; font-weight: bold;}
.subtitulo{text-align:center; font-size: 45px; font-weight: bold;}
.parrafo{font-size: 20px;  font-weight: bold; margin-top: 20px;}
.boton{background-color: rgb(25, 118, 210); color: white; border: none; cursor: pointer; margin-top:10px;margin-bottom:10px; margin-left:5px;  margin-right:5px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{margin-top:20px; font-size: 18px; margin-left:12px;}
table{border: 2px solid rgb(19, 46, 68); border-collapse: collapse; margin-top:20px; }
th{border: 1px solid rgb(40, 95, 139);padding: 8px; }
.thcontenido{font-weight: normal;}
.thfondo{background-color: rgb(204, 216, 228);}
.bodydiv{margin-left: 20px; margin-right: 20px;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')
<div style="margin-top:20px;">
<div class="horizontal" style="margin-top:20px;"><p class="subtitulo">Actuliza los datos del Periodo</p></div>
    <div class="centro" style="margin-top:20px;">
    <form action="{{route("periodos.update",$periodo->id)}}" method="POST" enctype="application/x-www-form-urlencoded" >
        @csrf
        @method('PUT')
        <label class="parrafo" for='nombreperiodo' >Nombre del Periodo </label>
        <input class="llenar" type='text' name='nombre' id='nombreperiodo' value="{{$periodo->nombre}}"><br>

        <label class="parrafo" for='fechainicio'>Fecha de Inicio </label>
        <input class="llenar" type='date' name='fecha_inicio' id='fechainicio'  value="{{$periodo->fecha_inicio}}"><br>

        <label class="parrafo" for='fechaconclucion'>Fecha de Conclusion </label>
        <input class="llenar" type='date' name='fecha_final' id='fechaconclusion'  value="{{$periodo->fecha_final}}"><br>

        <label class="parrafo" for="">Rango de Fechas del 1° Reporte </label>
        <label class="parrafo" for="">del</label> 
        <input class="llenar" type='date' name='fecha_inicio_1er_reporte' id='fechainicio'  value="{{$periodo->fecha_inicio_1er_reporte}}">
        <label class="parrafo" for="">al </label> 
        <input class="llenar" type='date' name='fecha_final_1er_reporte' id='fechainicio' value="{{$periodo->fecha_final_1er_reporte}}"><br>

        <label class="parrafo" for="">Rango de Fechas del 2° Reporte </label>
        <label class="parrafo" for="">del</label> 
        <input class="llenar" type='date' name='fecha_inicio_2do_reporte' id='fechainicio' value="{{$periodo->fecha_inicio_2do_reporte}}">
        <label class="parrafo" for="">al </label> 
        <input class="llenar" type='date' name='fecha_final_2do_reporte' id='fechainicio' value="{{$periodo->fecha_final_2do_reporte}}"><br>

        <label class="parrafo" for="">Rango de Fechas del Reporte Final </label>
        <label class="parrafo" for="">del</label> 
        <input class="llenar" type='date' name='fecha_inicio_reporte_final' id='fechainicio' value="{{$periodo->fecha_inicio_reporte_final}}">
        <label class="parrafo" for="">al </label> 
        <input class="llenar" type='date' name='fecha_final_reporte_final' id='fechainicio' value="{{$periodo->fecha_final_reporte_final}}"><br>
        <div class="centro"><input class="boton" type='submit' style="margin-top: 30px;"></div>
    </form>
    </div>

    @endsection