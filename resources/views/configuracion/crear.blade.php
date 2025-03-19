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
.parrafo{font-size: 20px;  font-weight: bold;}
.boton{background-color: rgb(25, 118, 210); padding: 15px; border-radius: 5px; color: white; border: none; cursor: pointer; margin-top:30px;}
.boton:hover{background-color: rgb(74, 139, 204);}
.llenar{margin-top:16px; font-size: 18px; margin-left:12px;}
table{border: 2px solid rgb(19, 46, 68); border-collapse: collapse; }
th{border: 1px solid rgb(40, 95, 139);padding: 8px; }
.thcontenido{font-weight: normal;}
.thfondo{background-color: rgb(204, 216, 228);}
.bodydiv{margin-left: 20px; margin-right: 20px;}
</style>
@section('encabezado')
    
@endsection
@section('contenido')

<div style="margin-top:20px;">
<div class="horizontal"><p class="subtitulo">Crea una nueva Configuracion</p></div><br>
    <div class="centro">
    <form action="{{route("configuraciones.store")}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <label for='variable' class="parrafo">Variable</label>
        {{$errors->first("variable")}}
        <input type='text' name='variable' id='variable' value="{{old('variable')}}" class="llenar"><br>

        <label for='valor' class="parrafo">Valor</label>
        {{$errors->first("valor")}}
        <input type='text' name='valor' id='valor' value="{{old('valor')}}" class="llenar"><br>


        <label for='tipo' class="parrafo">Tipo</label>
        {{$errors->first("tipo")}}
        <select name="tipo" id="tipo" class="llenar">
            <option value="Numero">Numero</option>
            <option value="Cadena">Cadena</option>
            <option value="Bd">Bd</option>
        </select>

    <div id="campos-bd" style="display: none;">
        <div>
        <label for="tabla" class="parrafo">Tabla</label>
        <input type="text" name="tabla" id="tabla" class="llenar">
        </div>

        <div>
        <label for="campo" class="parrafo">Campo</label>
        <input type="text" name="campo" id="campo" class="llenar">
        </div>
    </div>

    <script>
        // Selecciona el elemento <select> y el contenedor de los campos adicionales
        const selectTipo = document.getElementById('tipo');
        const camposBd = document.getElementById('campos-bd');

        // Escucha el evento 'change' en el <select>
        selectTipo.addEventListener('change', function() {
            // Si el valor seleccionado es "Bd", muestra los campos adicionales
            if (selectTipo.value === 'Bd') {
                camposBd.style.display = 'block';
            } else {
                // Si no, oculta los campos adicionales
                camposBd.style.display = 'none';
            }
        });
    </script>


        <div class="centro"><input type='submit' class="boton"></div>
    </form>
    </div>
</div>
@endsection