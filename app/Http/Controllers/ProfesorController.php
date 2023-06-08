<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
class ProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('profesor.indexProfesor',compact('profesores'));
    
    }
    public function store(Request $request){

        
    }
}
