@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
    <h2>actualiza los datos de la empresa</h2>

    <form action="{{route("empresas.update",$empresa->id)}}" method="POST" enctype="application/x-www-form-urlencoded" >
        @csrf
        @method('PUT')
        <label for='nombre'>Nombre</label>
        <input type='text' name='nombre' id='nombre' value="{{$empresa->nombre}}"><br>

        <label for='giro'>Escoge el Giro, Ramo o Sector</label> <br>
        <label for='giro'>giro actual:</label>
        <input type='text' name='giro' id='giro'value="{{$empresa->giro}}" readonly><br>

        <input type='radio' name='giro' value="industrial"> <!-- $empresa->giro == 'industrial' ? 'checked' : '' -->
        <label for="industrial">Industrial</label>
        <input type='radio' name='giro' value="servicios"> <!-- $empresa->giro -->
        <label for="servicios">Servicios</label> <br>
        <input type='radio' name='giro' value="publico">
        <label for="publico">Publico</label>
        <input type='radio' name='giro' value="privado">
        <label for="privado">Privado</label>
        <input type='radio' name='giro' value="otro">
        <label for="otro">Otro</label><br>
        <label for='rfc'>RFC</label>
        <input type='text' name='rfc' id='rfc'value="{{$empresa->rfc}}"><br>
        <label for='direccion'>Direccion</label>
        <input type='text' name='direccion' id='direccion'value="{{$empresa->direccion}}"><br>
        <label for='telefono'>Telefono</label>
        <input type='tel' name='telefono' id='telefono'value="{{$empresa->telefono}}"><br>
        <label for='correo'>Correo Electronico</label>
        <input type='email' name='correo' id='correo'value="{{$empresa->correo}}"><br>
        <label for='titular'>Nombre del Titular de la empresa</label>
        <input type='text' name='titular' id='titular'value="{{$empresa->titular}}"><br>
        <label for='puesto_titular'>Puesto del Titular</label>
        <input type='text' name='puesto_titular' id='puesto_titular'value="{{$empresa->puesto_titular}}"><br>
        <label for='asesor_externo'>Nombre del asesor externo</label>
        <input type='text' name='asesor_externo' id='asesor_externo'value="{{$empresa->asesor_externo}}"><br>
        <label for='puesto_asesor'>Puesto del asesor externo</label>
        <input type='text' name='puesto_asesor' id='puesto_asesor'value="{{$empresa->puesto_asesor}}"><br>
        <label for='informacion'>Informacion adicional de la empresa:</label>
        <input type='text' name='informacion' id='informacion'value="{{$empresa->informacion}}"><br>
        <input type='submit'>
    </form>

    @endsection