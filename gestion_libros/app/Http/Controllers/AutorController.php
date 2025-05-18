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

    public function confirmarBorrado(Autor $autor){
        return view('autores.confirmar',compact('autor'));
    }

    public function destroy(Autor $autor){
        $autor->delete();
        return redirect()->route('autores.index')->with('success', 'Autor' .$autor->nombre. ' ha sido borrado correctamente');
    }


    public function crear(){
        return view('autores.crearAutor');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|string|min:2|max:10',
            'pais' => 'required|string|min:2|max:10'
        ]);


        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->pais = $request->pais;

        $autor->save();

        return redirect()->route('autores.index')->with('success','Autor creado exitosamente');

    }

    public function editar($id){
        $autor = Autor::findOrFail($id);
        return view('autores.editarAutor',compact('autor'));
    }
}
