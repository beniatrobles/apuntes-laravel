<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
{
    $buscar = $request->input('buscar');

    $cursos = Curso::with('profesor')
        ->when($buscar, function ($query, $buscar) {
            return $query->where('nombre', 'like', '%' . $buscar . '%');
        })
        ->orderBy('nombre', 'asc')
        ->paginate(5)
        ->appends(['buscar' => $buscar]); // Para mantener el término en la paginación

    return view('cursos.indexCursos', compact('cursos', 'buscar'));
}

    public function confirm(Curso $curso)
    {
        return view('cursos.confirm', compact('curso'));
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso ' . $curso->nombre .  ' eliminado correctamente');
    }

    public function edit(Curso $curso)
    {
        $profesores = Profesor::all();
        return view('cursos.editCurso', compact('curso', 'profesores'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horasAcademicas = $request->horasAcademicas;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('fotosCursos'), $nombreFoto);
            $curso->foto = 'fotosCursos/' . $nombreFoto;
        }

        $curso->profesor_id = $request->profesor;

        $curso->save();

        return redirect()->route('cursos.index')->with('success', 'El curso se ha editado correctamente');
    }


    public function create()
    {
        $profesores = Profesor::all();
        return view('cursos.crearCurso', compact('profesores'));
    }


    public function store(Request $request){

        // dd('Entró al método store');

        // dd($request->all());
        $request->validate([
            'nombre' => 'required|string',
            'nivel' => 'required',
            'horasAcademicas' => 'required|integer',
            'profesor' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:5120'
        ]);

        $curso = new Curso();
        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->horasAcademicas = $request->horasAcademicas;
        $curso->profesor_id = $request->profesor;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('fotosCursos'), $nombreFoto);
            $curso->foto = 'fotosCursos/' . $nombreFoto;
        }

        $curso->save();

        return redirect()->route('cursos.index')->with('success',' Curso creado corrrectamente');

    }

    public function verAlumnos(Curso $curso){

        return view('cursos.verAlumnosCurso' , compact('curso'));

    }
}
