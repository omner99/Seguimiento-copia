@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <h2>Reportes de Proyecto</h2>

    <form action="">

        <label for="numero">Reporte Numero</label>
        <input type="text" name='nameproyecto' id='nameproyecto'><br>

        <label for="dia">Dia de Incio</label>
        <input type="date" name='diainicio' id='diainicio'><br> <!-- type de tipo date, existe? -->

        <label for="dia">Dia de Cierre</label>
        <input type="date" name='diainicio' id='diainicio'><br> <!-- type de tipo date, existe? -->

        <input type="submit">
    </form>

    @extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')