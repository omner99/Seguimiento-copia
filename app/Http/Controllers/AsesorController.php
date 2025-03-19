<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Http\Requests\StoreAsesorRequest;
use App\Http\Requests\UpdateAsesorRequest;
use App\Providers\ConfiguracionServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Asesor::all();
        return view('asesor.listar',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asesores = Asesor::all();
        return view('asesor.crear',compact('asesores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAsesorRequest $request)
    {
        $nuevo = new Asesor;
        $nuevo->fill($request->all());
        $nuevo->save();
        return redirect()->route("asesores.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asesor $asesor)
    {
        return view('asesor.editar',compact("asesor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAsesorRequest $request, Asesor $asesor)
    {
        $asesor->fill($request->all());
        $asesor->save();
        return redirect()->route("asesores.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asesor $asesor)
    {
        $asesor->delete();
        return redirect()->route("asesores.index");
    }

public function mostrar($pagina)
    {
        // Logica para determinar qué vista devolver
        if ($pagina == 'no-calificaciones') {
            return view('asesor.avisos.no-calificacion');
        } elseif ($pagina == 'calificaciones') {
            return view('asesor.calificacion');
        } elseif ($pagina == 'proyectos-asignados') {
            return view('asesor.listar-proyecto');
        } elseif ($pagina == 'promedio') {
            return view('asesor.promedio');
        } elseif ($pagina == 'fuera-periodo') {
        return view('asesor.avisos.fuera-periodo');
        }
        else {
            return abort(404); // Si la página no existe, lanzamos un 404
        }
    }

    public function proyecto()
    {
        $asesor = Auth::getUser()->usa;
        $periodo_id = ConfiguracionServiceProvider::get('periodo_id');

        $proyectos= $asesor->proyectos($periodo_id)->get();
//        dd(get_class($asesor));
        if(get_class($asesor)=="App\Models\Externo" )
            return view('externo.listar-proyecto',compact('proyectos')); 
        else
            return view('asesor.listar-proyecto',compact('proyectos')); 

    }

}
