@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <p>El estudiante ya subio su calificacion</p>
    <a href="archivo.pdf" download="archivo.pdf">
        <button>Descargar PDF subido por el Estudiante</button>
    </a><br>
    <label for="">Promedio: </label>
    <input type="text"> <br>
    <input type="submit">
@endsection