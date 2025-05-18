<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AutorController::class,'indexAutores'])->name('autores.index');
Route::get('/autor/crear',[AutorController::class,'crear'])->name('autores.crear');
Route::post('/autor/crear',[AutorController::class,'store'])->name('autores.store');
Route::get('/autor/{id}',[AutorController::class,'detallesAutor'])->name('autores.detalles');
Route::get('/autor/{autor}/confirmar',[AutorController::class,'confirmarBorrado'])->name('autores.confirmar');
Route::delete('/autor/{autor}',[AutorController::class,'destroy'])->name('autores.destroy');
Route::get('/autor/{id}/editar',[AutorController::class,'editar'])->name('autores.editar');


