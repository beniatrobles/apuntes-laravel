<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


///Autores
Route::get('/',[AutorController::class,'indexAutores'])->name('autores.index');
Route::get('/autor/crear',[AutorController::class,'crear'])->name('autores.crear');
Route::post('/autor/crear',[AutorController::class,'store'])->name('autores.store');
Route::get('/autor/{id}',[AutorController::class,'detallesAutor'])->name('autores.detalles');
Route::get('/autor/{autor}/confirmar',[AutorController::class,'confirmarBorrado'])->name('autores.confirmar');
Route::delete('/autor/{autor}',[AutorController::class,'destroy'])->name('autores.destroy');
Route::get('/autor/{id}/editar',[AutorController::class,'editar'])->name('autores.editar');
Route::put('/autor/{autor}',[AutorController::class,'update'])->name('autores.update');

///Libros

Route::get('/libros/index',[LibroController::class,'indexLibros'])->name('libros.index');
Route::get('/libros/crear',[LibroController::class,'crear'])->name('libros.crear');
Route::post('/libros/crear',[LibroController::class,'store'])->name('libros.store');