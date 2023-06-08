<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
class AdministradorProfesorController extends Controller
{
    public function index(){
        /* $estudiantes = Estudiante::all(); */
        return view('administradorprofesor.AdministradorProfesor'/* ,compact('estudiantes') */);
    
    }
    /* public function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;

        $estudiante->save();
        return redirect()->route('administrador.AdministradorProfesor'); */
    /* } */
}
