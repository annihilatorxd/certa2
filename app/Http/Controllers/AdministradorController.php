<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;

class AdministradorController extends Controller
{
    public function indexEstudiante(){
        $estudiantes = Estudiante::all();
        return view('administrador.indexEstudianteAdmin',compact('estudiantes'));
    
    }
    public function storeEstudiante(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;

        $estudiante->save();
        return redirect()->route('administrador.indexEstudiante');
    }
    public function indexProfesor(){
        $profesores = Profesor::all();
        return view('administrador.indexProfesorAdmin',compact('profesores'));
    
    }
    public function storeProfesor(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        

        $profesor->save();
        return redirect()->route('administrador.indexProfesor'); 
    }
}
