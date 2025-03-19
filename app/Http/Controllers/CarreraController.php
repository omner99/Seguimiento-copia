<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarreraRequest;
use App\Http\Requests\UpdateCarreraRequest;
use App\Models\Carrera;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarreraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrera $carrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarreraRequest $request, Carrera $carrera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrera $carrera)
    {
        //
    }

    public function mostrar($pagina)
    {
        // Logica para determinar qué vista devolver
        if ($pagina == 'estatus') {
            return view('coordinador.estatus-estudiante');
        }
        elseif ($pagina == 'asignar') {
            return view('coordinador.asignar-asesor');
        }
        else {
            return abort(404); // Si la página no existe, lanzamos un 404
        }
    }
}
