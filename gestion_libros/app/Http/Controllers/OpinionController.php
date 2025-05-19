<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Opinion;
use App\Models\Prueba;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function crearOpinion()
    {
        $libros = Libro::all();
        $opiniones = Opinion::all();
        return view('opiniones.crearOpinion', compact('libros','opiniones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|string',
            'valoracion' => 'required|integer',
            'comentario' => 'required|string',
            'libro' => 'required|exists:libros,id'
        ]);

        $opinion = new Opinion();
        $opinion->nombre_usuario = $request->nombre_usuario;
        $opinion->valoracion = $request->valoracion;
        $opinion->comentario = $request->comentario;
        $opinion->id_libro = $request->libro;

        $opinion->save();

        //buscar la id del libro antes de mostrar el success
        $libro = Libro::find($opinion->id_libro);

        return redirect()->route('libros.index')->with('success', 'Opinion del libro: ' . $libro->titulo . ' realizada.');
    }


    public function editarPruebas(Opinion $opinion)
    {
        $pruebas = Prueba::all();
        return view('pruebas.editar_pruebas', compact('opinion', 'pruebas'));
    }

    public function actualizarPruebas(Request $request, Opinion $opinion)
    {
        // Sincroniza solo las pruebas seleccionadas
        $opinion->pruebas()->sync($request->input('pruebas', []));

        return redirect()->route('opiniones.editarPruebas', $opinion)->with('success', 'Pruebas actualizadas.');
    }
}
