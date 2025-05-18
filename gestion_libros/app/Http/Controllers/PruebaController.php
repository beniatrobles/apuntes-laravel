<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function indexPruebas()
    {
        $pruebas = Prueba::all();
        return view('pruebas.indexPruebas', compact('pruebas'));
    }

    public function create()
    {
        return view('pruebas.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Guardar imagen en storage/app/public/fotos
        $path = $request->file('foto')->store('fotos', 'public');

        // // Crear la prueba
        // Prueba::create([
        //     'nombre' => $request->nombre,
        //     'foto' => basename($path), // solo el nombre del archivo
        // ]);

        $prueba = new Prueba();
        $prueba->nombre = $request->nombre;
        $prueba->foto = basename($path);
        $prueba->save();


        //Para guardar la ruta relativa (ej. /fotos/a1.jpg), haz esto:
        // $path = $request->file('foto')->store('fotos', 'public');
        // $prueba->foto = '/' . $path; // ✅ guarda '/fotos/a1.jpg'

        return redirect()->route('pruebas.index')->with('success', 'Prueba creada correctamente.');
    }
}
