<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActividadRequest;
use App\Http\Requests\UpdateActividadRequest;
use App\Models\Actividad;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listar
        $todos = Actividad::all();
        return view('actividad.listar',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //MOSTRAR FORMULARIO PARA CREAR
        $actividades = Actividad::all();
        return view('actividad.crear',compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActividadRequest $request)
    {
        //
        $nueva = new Actividad();
        $nueva->nombre = "mantenimiento";
        $nueva->semanas = 2;
        $nueva->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActividadRequest $request, Actividad $actividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}
