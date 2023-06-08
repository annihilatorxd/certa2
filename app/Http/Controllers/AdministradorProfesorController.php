<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
class AdministradorProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('administradorprofesor.AdministradorProfesor',compact('profesores'));
    
    }
    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $Profesor->email = $request->email;

        $profesor->save();
        return redirect()->route('administrador.AdministradorProfesor'); 
    }
}
