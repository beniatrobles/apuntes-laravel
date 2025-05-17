<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AutorController::class,'indexAutores'])->name('autores.index');
Route::get('/autor/{id}',[AutorController::class,'detallesAutor'])->name('autores.detalles');