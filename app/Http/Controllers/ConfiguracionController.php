<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfiguracionRequest;
use App\Http\Requests\UpdateConfiguracionRequest;
use App\Models\Configuracion;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Configuracion::all();
        return view('configuracion.listar',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $configuraciones = Configuracion::all();
        return view('configuracion.crear',compact('configuraciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConfiguracionRequest $request)
    {
        $nuevo = new Configuracion;

        $nuevo->fill($request->all());
        $nuevo->save();
        return redirect()->route("configuraciones.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Configuracion $configuracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Configuracion $configuracion)
    {
        return view('configuracion.editar',compact("configuracion"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConfiguracionRequest $request, Configuracion $configuracion)
    {
        $configuracion->fill($request->all());
        $configuracion->save();
        return redirect()->route("configuraciones.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Configuracion $configuracion)
    {
        $configuracion->delete();
        dd($configuracion);
        return redirect()->route("configuraciones.index");
    }
}
