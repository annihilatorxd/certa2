<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;
class ProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        $propuestas = Propuesta::all();
        return view('profesor.indexProfesor',compact('profesores','propuestas'));
    
    }
    public function comentario(){
        return view('profesor.indexProfesor');
        
    }
}
