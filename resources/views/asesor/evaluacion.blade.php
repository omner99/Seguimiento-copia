@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')

    <h2>Evaluacion de Periodo</h2>

    <form action="">
        <label for="numero">Numero del Periodo:</label>
        <input type="text" name='numeroperido' id='numeroperido'><br>

        <label for="residente">Nombre del Residente:</label>
        <input type="text" name='nombre' id='nombre'><br>

        <label for="ncontrol">Numero de Control:</label>
        <input type="text" name='numerocontrol' id='numerocontrol'><br>

        <label for="proyecto">Nombre del Proyecto:</label>
        <input type="text" name='nombreproyecto' id='nombreproyecto'><br>

        <label for="realizacion">Perido de realiazacion de la residencia profesional:</label>
        <input type="text" name='periodoproyecto' id='periodoproyecto'><br>

        <label for="parcial">Calificiacion Parcial (Promedio de ambas evaluaciones):</label>
        <input type="text" name='calificacionparcial' id='calificacionparcial'><br>

    </form>

    @endsection