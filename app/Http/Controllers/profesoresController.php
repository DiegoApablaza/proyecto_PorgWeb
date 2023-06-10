<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profesores;
use App\Models\propuestas;

class profesoresController extends Controller
{
    public function index()
    {
        $profesores = profesores::all();

        return view('administrador.index',compact('profesores'));
    }
    public function crear()
    {
        return view('administrador.createProfesor');
    }
    public function añadir(Request $request)
    {
        $profesores = new profesores();
        $profesores ->nombre = $request -> nombre;
        $profesores ->apellido = $request->apellido;
        $profesores ->email = $request->email;
        $profesores ->timestamps = false;
        $profesores ->save();
        $pestaña = 'profesores';
        return redirect()->route('administrador.tabla',compact('pestaña'));
    }

    public function propuestas(){

        $propuestas.$propuestas = propuestas::all();

        return view('profesores.propuestas', compact('propuestas'));

    }

    public function select()
    {
        $profesores = profesores::all();

        return view('profesores.index',compact('profesores'));
    }

    public function mostrarForm(Request $request)
    {
        $profesores = profesores::where('id', $request->id)->first();
        return view('profesores.propuestas', compact('profesores'));
    }

    public function mostrarPropuestas(Request $request)
    {
        $estudiantes = estudiantes::where('rut', $request->rut)->first();
        $propuestas = propuestas::all();
        return view('estudiantes.propuesta', compact('estudiantes','propuestas'));
    }

}
