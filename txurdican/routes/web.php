<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mascotas.inicio');
})->name('inicio');


Route::get('/sinAdoptar',[MascotaController::class,'sinAdoptar'])->name('mascotas.sinAdoptar');
Route::get('/mascota/{id}/detalles',[MascotaController::class,'detallesMascota'])->name('mascotas.detallesMascota');
Route::put('/mascota/{id}/cambiarSituacion',[MascotaController::class,'cambiarSituacion'])->name('mascotas.cambiarSituacion');
Route::put('/mascota/{id}/cambiarSituacion2',[MascotaController::class,'cambiarSituacion2'])->name('mascotas.cambiarSituacion2');
Route::get('/mascotas/modificaciones',[MascotaController::class,'modificacionesMascota'])->name('mascotas.modificacionesMascota');
Route::put('/mascotas/{id}/update',[MascotaController::class,'updateMascota'])->name('mascotas.updateMascota');