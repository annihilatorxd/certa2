<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(){
        return view('profesor.indexProfesor');
    
    }
    public function store(Request $request){

        
    }
}
