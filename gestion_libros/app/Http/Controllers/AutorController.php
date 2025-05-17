<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function indexAutores(){
        $autores = Autor::with('libros')->get();
        return view('autores.indexAutores', compact('autores'));
    }

    public function detallesAutor($id){
        $autor = Autor::with('libros')->findOrFail($id);
        return view('autores.detallesAutor',compact('autor'));

    }
}
