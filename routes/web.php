<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AdministradorProfesorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Rutas de estudiante */
Route::get('/',[InicioController::class,'index'])->name('inicio.index');

Route::get('/estudiante',[EstudianteController::class,'index'])->name('estudiante.indexEstudiante');
Route::post('/estudiante',[EstudianteController::class,'store'])->name('estudiante.store');

Route::get('/administrador',[AdministradorController::class,'index'])->name('administrador.indexAdministrador');
Route::post('/administrador',[AdministradorController::class,'store'])->name('administrador.store');
Route::get('/administrador/administradorprofesor',[AdministradorProfesorController::class,'index'])->name('administrador.AdministradorProfesor');

Route::get('/profesor',[ProfesorController::class,'index'])->name('profesor.indexProfesor');
