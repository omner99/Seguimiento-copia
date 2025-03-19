@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')

 <form action="{{route('coordinadores.asignarAsesor3',$proyecto->id)}}" method="post">
  @method('PUT')
  <select name="asesor_id" size="10">
    @foreach ($asesores as $asesor)
      <option value="{{$asesor->id}}">{{$asesor->nombre}}</option>
    @endforeach  
  </select>
  <input type="submit" value="ASIGNAR">
  @csrf
 </form>
@endsection