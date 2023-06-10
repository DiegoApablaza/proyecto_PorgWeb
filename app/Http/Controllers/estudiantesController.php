<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiantes;
use App\Models\propuestas;
use Carbon\Carbon;

class estudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = estudiantes::all();
        $propuestas = propuestas::all();

        return view('administrador.index', compact('estudiantes','propuestas'));
    }

    public function select()
    {
        $estudiantes = estudiantes::all();

        return view('estudiantes.index', compact('estudiantes'));
    }

    public function mostrarForm(Request $request)
    {
        $estudiantes = estudiantes::where('rut', $request->rut)->first();
        $propuestas = propuestas::all();
        return view('estudiantes.propuesta', compact('estudiantes','propuestas'));
    }

    public function guardarForm(Request $request)
    {
        $propuestas = new propuestas();
        $propuestas ->fecha = Carbon::now()->toDateString();
        $propuestas ->documento = $request->input('documento');
        $propuestas ->estado = 0;
        $propuestas ->estudiante_rut = $request->rut;
        $propuestas ->timestamps = false;
        $propuestas ->save();
        return redirect()->route('estudiantes.index');

    }
    
    public function crear()
    {
        return view('administrador.createEstudiante');
    }

    public function añadir(Request $request)
    {
        $estudiantes = new estudiantes();
        $estudiantes ->rut = $request->rut;
        $estudiantes ->nombre = $request->nombre;
        $estudiantes ->apellido = $request->apellido;
        $estudiantes ->email = $request->email;
        $estudiantes->timestamps = false;
        $estudiantes->save();
        return redirect()->route('administrador.tabla');
    }
    
}
