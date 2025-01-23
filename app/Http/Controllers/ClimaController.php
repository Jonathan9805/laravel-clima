<?php

namespace App\Http\Controllers;

use App\Models\Clima;
use App\Services\ClimaService;
use Illuminate\Http\Request;

class ClimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $climas = Clima::all();
        return view('climas.index', compact('climas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('climas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ciudad' => 'required|string',
        ]);
    
        $datosClima = ClimaService::obtenerClima($request->ciudad);
    
        if (!$datosClima || !isset($datosClima['name'])) {   
            return redirect()->back()->with('error', 'Ciudad inválida. Por favor, ingrese una ciudad válida.');
        }
    
        Clima::create([
            'ciudad' => $datosClima['name'],
            'temperatura' => $datosClima['main']['temp'],
            'temperatura_max' => $datosClima['main']['temp_max'],
            'temperatura_min' => $datosClima['main']['temp_min'],
            'humedad' => $datosClima['main']['humidity'],
        ]);
    
        return redirect()->route('climas.index')->with('success', 'Clima agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clima = Clima::with('comentarios')->findOrFail($id);
        return view('climas.edit', compact('clima'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clima = Clima::findOrFail($id);

    $request->validate([
        'ciudad' => 'required|string',
        'comentario' => 'required|string',
    ]);

    $datosClima = ClimaService::obtenerClima($request->ciudad);

    if (!$datosClima || !isset($datosClima['name'])) {
        return redirect()->back()->with('error', 'Ciudad inválida. Por favor, ingrese una ciudad válida.');
    }
    
    $clima->update([
        'ciudad' => $datosClima['name'],
        'temperatura' => $datosClima['main']['temp'],
        'temperatura_max' => $datosClima['main']['temp_max'],
        'temperatura_min' => $datosClima['main']['temp_min'],
        'humedad' => $datosClima['main']['humidity'],
    ]);

    if ($clima->comentarios->isNotEmpty()) {
        $comentario = $clima->comentarios->last();
        $comentario->update([
            'contenido' => $request->comentario,
        ]);
    }

    return redirect()->route('climas.index')->with('success', 'Clima y comentario actualizados exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clima = Clima::findOrFail($id);
        $clima->delete();
        return redirect()->route('climas.index')->with('success', 'Clima eliminado exitosamente.');
    }
}
