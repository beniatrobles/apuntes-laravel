<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[InicioController::class,'inicio'])->name('spotify.inicio');
Route::get('/buscar',[SongController::class,'verCanciones'])->name('spotify.buscar');
Route::get('/podcast',[PodcastController::class, 'indexPodcast'])->name('spotify.podcast');
Route::post('/podcast',[PodcastController::class, 'login']);

Route::post('/logout', [PodcastController::class, 'logout'])->name('logout');