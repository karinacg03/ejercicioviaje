<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViajeController extends Controller
{
    // Mostrar una lista de los viajes
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    // Mostrar el formulario para crear un nuevo viaje
    public function create()
    {
        return view('viajes.create');
    }

    // Almacenar un nuevo viaje en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'num_plaza' => 'required|integer',
            'fecha' => 'required|date',
            'otros_datos' => 'required'
        ]);

        Viaje::create($request->all());

        return redirect()->route('viajes.index')->with('success', 'Viaje creado con éxito.');
    }

    // Mostrar un viaje específico
    public function show(Viaje $viaje)
    {
        return view('viajes.show', compact('viaje'));
    }

    // Mostrar el formulario para editar un viaje
    public function edit(Viaje $viaje)
    {
        return view('viajes.edit', compact('viaje'));
    }

    // Actualizar un viaje específico en la base de datos
    public function update(Request $request, Viaje $viaje)
    {
        $request->validate([
            'codigo' => 'required',
            'num_plaza' => 'required|integer',
            'fecha' => 'required|date',
            'otros_datos' => 'required'
        ]);

        $viaje->update($request->all());

        return redirect()->route('viajes.index')->with('success', 'Viaje actualizado con éxito.');
    }

    // Eliminar un viaje específico de la base de datos
    public function destroy(Viaje $viaje)
    {
        $viaje->delete();

        return redirect()->route('viajes.index')->with('success', 'Viaje eliminado con éxito.');
    }
}

