<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[InicioController::class,'inicio'])->name('inicio');

///ALUMNOS
Route::get('/alumnos',[AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/confirm/{alumno}',[AlumnoController::class,'confirm'])->name('alumnos.confirm');
Route::delete('/alumnos/{alumno}',[AlumnoController::class,'destroy'])->name('alumnos.destroy');
Route::get('/alumnos/{alumno}/edit', [AlumnoController::class,'edit'])->name('alumnos.edit');
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos/create',[AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos',[AlumnoController::class,'store'])->name('alumnos.store');


///PROFESORES
Route::get('profesores',[ProfesorController::class,'index'])->name('profesores.index');
Route::get('/profesores/confirm/{profesor}',[ProfesorController::class,'confirm'])->name('profesores.confirm');
Route::delete('/profesores/{profesor}',[ProfesorController::class,'destroy'])->name('profesores.destroy');
Route::get('/profesores/{profesor}/edit',[ProfesorController::class,'edit'])->name('profesores.edit');
Route::put('/profesores/{profesor}',[ProfesorController::class,'update'])->name('profesores.update');
Route::get('/profesores/create',[ProfesorController::class, 'create'])->name('profesores.create');
Route::post('/profesores',[ProfesorController::class,'store'])->name('profesores.store');

///CURSOS
Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/confirm/{curso}', [CursoController::class, 'confirm'])->name('cursos.confirm');
Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('/cursos',[CursoController::class,'store'])->name('cursos.store');

Route::get('/cursos/{curso}/alumnos',[CursoController::class,'verAlumnos'])->name('cursos.verAlumnos');
Route::get('/alumnos/{alumno}/cursos',[AlumnoController::class, 'verCursosAlumno'])->name('alumnos.verCursos');

///MATRICULAR///

Route::get('/alumnos/{alumno}/matricular',[AlumnoController::class,'matricularAlumno'])->name('alumnos.matricula');
Route::put('/alumnos/{alumno}/matricular', [AlumnoController::class, 'actualizarMatricula'])->name('alumnos.matricular');