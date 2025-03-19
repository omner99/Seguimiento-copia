@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <p>Busca tu proyecto en la lista</p><br>

    
    <select name="buscar_proyecto" id="escoger_asesor" size="3"> 
            <option value="">Sistematización del seguimiento de los procesos de residencia profesional</option>
            <option value="">API para la automatización de proceso de titulación del Tecnm</option>
            <option value="">Sistema de control para colecta de agua de lluvia</option>
    </select>
    <label for='buscar_proyecto'> : Si no esta aqui dale de alta </label><a href="#">+</a> <br>

    <input type="submit">

@endsection