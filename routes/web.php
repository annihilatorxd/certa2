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
Route::get('/estudiante/estado',[EstudianteController::class,'estado'])->name('estudiante.estado');
Route::post('/estudiante',[EstudianteController::class,'store'])->name('estudiante.store');

Route::get('/administrador/estudiantes',[AdministradorController::class,'indexEstudiante'])->name('administrador.indexEstudiante');
Route::post('/administrador/estudiantes',[AdministradorController::class,'storeEstudiante'])->name('administrador.storeEstudiante');

Route::get('/administrador/administradorprofesor',[AdministradorController::class,'indexProfesor'])->name('administrador.indexProfesor');
Route::post('/administradorprofesor',[AdministradorController::class,'storeProfesor'])->name('administrador.storeProfesor');

Route::get('/profesor',[ProfesorController::class,'index'])->name('profesor.indexProfesor');
Route::post('/profesorComentario',[ProfesorController::class,'comentario'])->name('profesor.comentario');
Route::post('/profesorComentario',[ProfesorController::class,'store'])->name('profesor.store');

