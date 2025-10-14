<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
  
   public function index(Request $request)
{
    if ($request->query('view') === 'list') {
        $proyectos = Proyectos::latest()->get();
        return view('projects.index', compact('proyectos'));
    }

    return view('projects.new');
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.new');
    }
    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
    Proyectos::create($request->only(['nombre', 'descripcion']));
    return redirect('proyectos/')
        ->with('success','Proyecto creado satisfactoriamente');
    }


    /**
     * Display the specified resource.
     */
  public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyectos $proyectos)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Proyectos $proyectos)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $proyectos->update($data);
        return redirect()->route('proyectos.index')->with('ok', 'Proyecto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
       public function destroy(Proyectos $proyectos)
    {
        $proyectos->delete();
        return redirect()->route('proyectos.index')->with('ok', 'Proyecto eliminado');
    }
}
