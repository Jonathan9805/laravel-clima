<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'clima_id' => 'required|exists:climas,id',
            'contenido' => 'required|string',
        ]);

        Comentario::create([
            'clima_id' => $request->clima_id,
            'contenido' => $request->contenido,
        ]);
        
        return redirect()->back()->with('success', 'Comentario agregado exitosamente.');
    }
}


