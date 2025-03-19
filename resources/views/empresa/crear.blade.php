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
.giro{margin-top:20px; font-size: 20px;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="horizontal" style="margin-top:20px;"><p class="subtitulo">Registra la Empresa de tu residencia</p></div>
    <div class="centro"  style="margin-top:20px;">
    <form action="{{route("empresas.store")}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for='nombre' class="parrafo">Nombre de la Empresa</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}" class="llenar"><br>
        
        <label for='giro'  class="parrafo">Escoge el Giro, Ramo o Sector</label> <br>
        {{$errors->first("giro")}}

        <div style="margin-top:5px;">
        <input type='radio' name='giro' id='giro' value='industrial' >
        <label for="industrial" class="giro">Industrial</label>
        <input type='radio' name='giro' id='giro' value='servicios'style="margin-left:12px;">
        <label for="servicios" class="giro">Servicios</label> <br>
        <input type='radio' name='giro' id='giro' value='publico' >
        <label for="publico" class="giro">Publico</label>
        <input type='radio' name='giro' id='giro' value='privado' style="margin-left:12px;">
        <label for="privado" class="giro">Privado</label>
        <input type='radio' name='giro' id='giro' value='otro' style="margin-left:12px;">
        <label for="otro" class="giro">Otro</label><br>
        </div>
        
        <label for='rfc'  class="parrafo">RFC</label>
        {{$errors->first("rfc")}}
        <input type='text' name='rfc' id='rfc' value="{{old('rfc')}}" class="llenar"><br>

        <label for='direccion'  class="parrafo">Direccion</label>
        {{$errors->first("direccion")}}
        <input type='text' name='direccion' id='direccion' value="{{old('direccion')}}" class="llenar"><br>

        <label for='telefono'  class="parrafo">Telefono</label>
        {{$errors->first("telefono")}}
        <input type='tel' name='telefono' id='telefono' value="{{old('telefono')}}" class="llenar"><br>

        <label for='correo'  class="parrafo">Correo Electronico</label>
        {{$errors->first("correo")}}
        <input type='email' name='correo' id='correo' value="{{old('correo')}}" class="llenar"><br>

        <label for='titular'  class="parrafo">Nombre del Titular de la empresa</label>
        {{$errors->first("titular")}}
        <input type='text' name='titular' id='titular' value="{{old('titular')}}" class="llenar"><br>

        <label for='puesto_titular'  class="parrafo">Puesto del Titular</label>
        {{$errors->first("puesto_titular")}}
        <input type='text' name='puesto_titular' id='puesto_titular' value="{{old('puesto_titular')}}" class="llenar"><br>
       
        <!--<label for='asesor_externo'>Nombre del Asesor externo</label>
        {{$errors->first("asesor_externo")}}
        <input type='text' name='asesor_externo' id='asesor_externo' value="{{old('asesor_externo')}}"><br>

        <label for='puesto_asesor'>Puesto del Asesor</label>
        {{$errors->first("puesto_asesor")}}
        <input type='text' name='puesto_asesor' id='puesto_asesor' value="{{old('puesto_asesor')}}"><br>-->

        <label for='informacion'  class="parrafo">Informacion adicional de la empresa: </label>
        {{$errors->first("informacion")}}
        <input type='text' name='informacion' id='informacion' value="{{old('informacion')}}" class="llenar"><br>
       
        <div class="centro" style="margin-top:20px;"><input type='submit' class="boton"></div>
    </form>
    </div>
    @endsection
