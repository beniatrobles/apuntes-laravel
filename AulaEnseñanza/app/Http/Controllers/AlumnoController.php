<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(Request $request)
    {
        // Comprobar si hay una búsqueda
        $buscar = $request->input('buscar');

        // Si se pasa un término de búsqueda, filtrar por nombre
        if ($buscar) {
            $alumnos = Alumno::where('nombre', 'like', "%{$buscar}%")->paginate(4);
        } else {
            // Si no hay término de búsqueda, mostrar todos los alumnos
            $alumnos = Alumno::paginate(4);
        }

        return view('alumnos.indexAlumnos', compact('alumnos', 'buscar'));
    }


    public function confirm(Alumno $alumno)
    {
        return view('alumnos.confirm', compact('alumno'));
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'El alumno ' . $alumno->nombre . ' se ha eliminado correctamente ');
    }


    public function edit(Alumno $alumno)
    {
        return view('alumnos.editAlumno', compact('alumno'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $alumno->nombre = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('fotosAlumnos'), $nombreFoto);
            $alumno->foto = 'fotosAlumnos/' . $nombreFoto;
        }


        $alumno->save();

        return redirect()->route('alumnos.index')->with('success', 'El alumno ' . $alumno->nombre . ' se ha editado correctamente ');
    }


    public function create()
    {
        return view('alumnos.crearAlumno');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|min:5|max:25',
            'edad' => 'required|integer|min:1|max:100',
            'telefono' => 'nullable|string|max:9',
            'direccion' => 'nullable|string|max:75',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = $foto->getClientOriginalName();
            $foto->move(public_path('fotosAlumnos'), $nombreFoto);
            $alumno->foto = 'fotosAlumnos/' . $nombreFoto;
        }

        $alumno->save();


        return redirect()->route('alumnos.index')->with('success', 'El alumno ' . $alumno->nombre . ' se ha creado correctamente ');
    }

    public function verCursosAlumno(Alumno $alumno)
    {

        return view('alumnos.verCursosAlumno', compact('alumno'));
    }


    public function matricularAlumno($id)
    {

        // $alumno->load('cursos')  si le paso el Model Alumno directamente
        $alumno = Alumno::with('cursos')->findOrFail($id);
        $cursos = Curso::all();

        return view('alumnos.matricularAlumno', compact('alumno', 'cursos'));
    }


    public function actualizarMatricula(Request $request, Alumno $alumno)
    {
        // Sincronizar los cursos seleccionados
        $alumno->cursos()->sync($request->cursos); // <-- importante: el name="cursos[]"

        return redirect()->route('alumnos.index')->with('success', 'Matrícula actualizada');
    }
}
