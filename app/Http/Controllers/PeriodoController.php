<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeriodoRequest;
use App\Http\Requests\UpdatePeriodoRequest;
use App\Models\Configuracion;
use App\Models\Periodo;
use App\Providers\ConfiguracionServiceProvider;
use Illuminate\Support\Facades\Auth;
class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //LISTAR
        $periodos = Periodo::all();
        $actual = ConfiguracionServiceProvider::get('periodo_id');
        $configuracion = Configuracion::where('variable','periodo_id')->first();
        return view('coordinador.periodo.listar',compact('periodos','actual','configuracion')); // return view('coordinador.periodo.listar', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //MOSTRAR FORMULARIO PARA CREAR
        return view('coordinador.periodo.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeriodoRequest $request)
    {
        //GUARDAR LOS DATOS QUE VIENEN DEL FORMULARIO DE CREAR
        $nuevo = new Periodo;
        $nuevo->fill($request->all());
        $nuevo->save();
        return redirect()->route("periodos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        //MOSTRAR UN PERIODO EN ESPECIFICO
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        //MOSTRAR EL FORMULARIO PARA EDITAR UN PERIODO
       // $usuario = Auth::user();
        //echo  $usuario->usa->nombre .  "quiere modificar el periodo";
        return view('coordinador.periodo.editar',compact("periodo"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeriodoRequest $request, Periodo $periodo)
    {
        //ACTUALIZAR LA BASE DE DATOS CON LOS DATOS QUE VIENEN DEL FORMULARIO DE EDITAR UN PERIODO
        $periodo->fill($request->all());
        $periodo->save();
        return redirect()->route("periodos.index"); //""

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        //ELIMINAR EL PERIODO QUE ME DIGAN
        $periodo->delete();
        return redirect()->route("periodos.index");

    }
}
