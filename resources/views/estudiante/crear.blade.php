<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        .cmenor{background-color: rgb(40, 95, 139);}
        .cmayor{background-color: rgb(19, 46, 68);}
        .linea{background-color: rgb(10, 105, 163); height: 4px; border-radius: 2px; width: 90%;} 
        .hderecho {display: flex; justify-content: right; }
        .horizontal {display: flex; justify-content: center; width: 100%;}
        .centro{display: flex; justify-content: center; width: 100%;}
        .titulo{text-align:center; font-size: 50px; font-weight: bold;}
        .parrafo{font-size: 25px; margin-top: 20px;}
        .boton{background-color: rgb(25, 118, 210); width: 120px; height: 30px; border-radius: 5px; color: white; border: none; cursor: pointer;}
        .boton:hover{background-color: rgb(74, 139, 204);}
        .llenar{height: 20px; font-size: 15px; margin-top: 20px;}
        *{margin: 0; padding: 0;}
    </style>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="hderecho" style="width: 100%; height: 20px; ">
    <div class="cmenor" style="width: 20%;"></div>
    <div class="cmayor" style="width: 80%; "></div>
</div>

<div class="horizontal">
    <p class="titulo">Registro</p>
</div>
<div class="horizontal">
    <div class="linea"></div>
</div>

<div class="centro" style="margin-top: 60px; ">
    <form action="{{route("estudiantes.store")}}" method="POST" enctype="application/x-www-form-urlencoded" id="form1">
        @csrf

        <label for='nombre' class="parrafo">Nombre/s</label>
        {{$errors->first("nombre")}}
        <input type='text' name='nombre' id='nombre' value="{{old('nombre')}}" class="llenar"><br>
        
        <label for='apellido_paterno' class="parrafo">Apellido Paterno</label>
        {{$errors->first("apellido_paterno")}}
        <input type='text' name='apellido_paterno' id='apellido_paterno' value="{{old('apellido_paterno')}}" class="llenar"><br>

        <label for='apellido_materno' class="parrafo">Apellido Materno</label>
        {{$errors->first("apellido_materno")}}
        <input type='text' name='apellido_materno' id='apellido_materno' value="{{old('apellido_materno')}}" class="llenar"><br>

        <label for='correo_electronico' class="parrafo">Correo Electronico</label>
        @foreach ($errors->get('correo_electronico') as $texto) 
            <li>{{$texto}}</li>
        @endforeach
        <input type='text' name='correo_electronico' id='correo_electronico' value="{{old('correo_electronico')}}" class="llenar"><br>

        <label for='numero_de_control' class="parrafo">Numero de control</label>
        @foreach ($errors->get('numero_de_control') as $texto) 
            <li>{{$texto}}</li>
        @endforeach
        <input type='text' name='numero_de_control' id='numero_de_control' value="{{old('numero_de_control')}}" class="llenar"><br>

        <label for='telefono' class="parrafo">Telefono</label>
        @foreach ($errors->get('telefono') as $texto) 
            <li>{{$texto}}</li>
        @endforeach
        <input type='tel' name='telefono' id='telefono' value="{{old('telefono')}}" class="llenar"><br>

        <label for='carrera_id' class="parrafo">Carrera</label>
        <select name="carrera_id" id="carrera_id" class="llenar">
            @foreach ($carreras as $carrera)
                <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
            @endforeach
        </select>
        <br>

        <label for='direccion' class="parrafo">Direccion</label>
        {{$errors->first("direccion")}}
        <input type='text' name='direccion' id='direccion' value="{{old('direccion')}}" class="llenar"><br>

        <label for='institucion_seguiridad_social' class="parrafo">Institucion seguiridad social</label>
        <select name="institucion_seguiridad_social" id="institucion_seguridad_social" size="3" >
            <option value="IMSS">IMSS</option>
            <option value="ISSSTE">ISSSTE</option>
            <option value="OTROS">OTROS</option>
        </select>
        <br>


        <label for='numero_de_seguridad_social'class="parrafo">Numero de seguridad social</label>
        {{$errors->first("numero_de_seguridad_social")}}
        <input type='text' name='numero_de_seguridad_social' id='numero_de_seguridad_social' value="{{old('numero_de_seguridad_social')}}" class="llenar"><br>

        <label for='contraseña' class="parrafo">Contraseña</label>
        {{$errors->first("contraseña")}}
        <input type='text' name='contraseña' id='contraseña' value="{{old('contraseña')}}" class="llenar"><br>

        <div  class="centro" style="margin-top: 60px; ">
            <input type='submit' id="submitButton" class="boton"  style="margin-bottom: 30px">
        </div>
    
    </form>

</div>
</body>
</html>

