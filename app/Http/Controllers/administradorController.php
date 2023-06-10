<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\propuestas;

class administradorController extends Controller
{
    public function propuestas()
    {
        $propuestas = propuestas::all();

        return view('administrador.index',compact('propuestas'));
    }

    
    public function index()
    {
        $propuestas = propuestas::all();

        return view('administrador.index', compact('propuestas'));
    }

    public function actualizar(Request $request)
    {
        $id = $request->input('id');
        $propuesta = propuestas::findOrFail($id);
    
        $propuesta->estado = $request->estado;
        $propuesta->timestamps = false;
        $propuesta->save();
    
        return redirect()->back()->with('success', 'Estado actualizado correctamente');
    }

}
