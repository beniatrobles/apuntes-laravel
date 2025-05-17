<?php

namespace App\Http\Controllers;

use App\Models\Profesion;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->input('buscar');

        if($buscar){
            $profesores = Profesor::where('nombreApellido','like',"%{$buscar}%")->orderby('nombreApellido','desc')->paginate(3);

        }else{
            $profesores = Profesor::orderby('nombreApellido', 'desc')->paginate(3);
        }

        return view('profesors.indexProfesores', compact('profesores','buscar'));

        // $profesores = Profesor::orderby('nombreApellido', 'desc')->paginate(3);
        // return view('profesors.indexProfesores', compact('profesores'));
    }

    public function confirm(Profesor $profesor)
    {
        return view('profesors.confirm', compact('profesor'));
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesores.index')->with('success', 'Profesor ' . $profesor->nombreApellido . ' borrado correctamente');
    }

    public function edit(Profesor $profesor)
    {

        return view('profesors.editProfesor', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor)
    {
        $profesor->nombreApellido = $request->nombreApellido;
        $profesor->profesion = $request->profesion;
        $profesor->gradoAcademico = $request->gradoAcademico;
        $profesor->telefono = $request->telefono;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('fotosProfesores'), $nombreFoto);
            $profesor->foto = 'fotosProfesores/' . $nombreFoto;
        }


        $profesor->save();

        return redirect()->route('profesores.index')->with('success', 'El profesor ' . $profesor->nombreApellido . ' se ha editado correctamente');
    }


    public function create()
    {

        $profesiones = Profesion::all();
        return view('profesors.crearProfesor', compact('profesiones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreApellido' => 'required|string|min:5|max:25',
            'profesion' => 'required',
            'gradoAcademico' => 'required|string',
            'telefono' => 'nullable|string|max:9',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120'
        ]);

        $profesor = new Profesor();
        $profesor->nombreApellido = $request->nombreApellido;
        $profesion = Profesion::find($request->profesion);
        $profesor->profesion = $profesion->nombre;
        $profesor->gradoAcademico = $request->gradoAcademico;
        $profesor->telefono = $request->telefono;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('fotosProfesores'), $nombreFoto);
            $profesor->foto = 'fotosProfesores/' . $nombreFoto;
        }

        $profesor->save();

        return redirect()->route('profesores.index')->with('success', 'Profesor creado correctamente');
    }
}
