<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function indexLibros(){
        $libros = Libro::with('autor','opiniones')->orderby('año_publicacion')->paginate(3);
        return view('libros.indexLibros',compact('libros'));
    }

    public function crear(){
        $autores = Autor::all();
        return view('libros.crearLibro',compact('autores'));

    }

    public function store(Request $request){
        $request->validate([
            'titulo' => 'required|string',
            'año_publicacion' =>'required|integer|min:1800|max:2030'
        ]);

        $libro = new Libro();
        $libro->titulo = $request->titulo;
        $libro->año_publicacion = $request->año_publicacion;
        $libro->autor_id = $request->autor;

        $libro->save();

        return redirect()->route('libros.index')->with('success','Libro creado exitosamente');
    }

    public function borrarLibro($id){
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libros.index')->with('success','Libro eliminado correctamente');
    }
}
