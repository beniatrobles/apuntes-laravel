<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Parser\CursorState;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "<h1>hola</h1>";
// });

// Route::get('/cursos', function() {
//     return "Aqui estaran los cursos";
// });

// Route::get('/cursos/create', function(){
//     return "En esta pagina se crean los cursos";
// });

// Route::get('/cursos/{curso}' , function ($curso) {
//     return "Aqui esta el curso: $curso";
// });

// Route::get('/cursos/{curso}/{categoria}', function($curso,$categoria){
//     return "Bienvenido al curso: $curso, de la categoria: $categoria";
// });

// Route::get('/cursos/{curso}/{categoria?}', function($curso,$categoria=null){
//     if($categoria){
//         return "Bienvenido al curso: $curso, de la categoria: $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
// });

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
    Route::get('/cursos/confirm/{curso}', [CursoController::class, 'confirm'])->name('cursos.confirm');
    Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
});
