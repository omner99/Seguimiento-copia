@extends('plantillas.app')
@section('encabezado')
    
@endsection
@section('contenido')
 lista de proyectos
 <form action="{{route('coordinadores.asignarAsesor2')}}" method="post">
  <select name="proyecto_id" size="10">
    @foreach ($proyectos as $proyecto)
      <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
    @endforeach  
  </select>
  <input type="submit" value="ASIGNAR">
  @csrf
</form>
@endsection

