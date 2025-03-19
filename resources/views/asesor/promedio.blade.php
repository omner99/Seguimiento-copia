@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <p>Seguimiento numero: </p><span></span> <br>
    <label for="comentario">Deje sus comentarios aqui: </label><textarea name="comentario" id="comentario"></textarea>
    <p>El promedio es de: </p> <span></span>
    <input type="submit">
@endsection