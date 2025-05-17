<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderby('name','desc')->paginate(4);
        return view('cursos.index', compact('cursos'));
        // return view('cursos.index');
    }



    ////CREAR//////////////////////////////////7
    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        // return $request->all();


        $request->validate([
            'name' => 'required|min:5|max:10',
            'description' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;

        /////SUBIR FOTO ////////
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('fotosCursos','public');

            $curso->foto = $path;
        }

        $curso->save();


        //para volver a los detalles del curso directamente
        // return redirect()->route('cursos.show', $curso->id);

        return redirect()->route('cursos.index');
    }
    ////////////////////////////////////////////////////

    public function show(Curso $curso){
        // $curso = Curso::findOrfail($id);
        return view('cursos.show',compact('curso'));
    }

    //////EDITAR//////////////////////

    public function edit(Curso $curso){
        // $curso = Curso::find($id);
        // return $curso;
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $curso ->name = $request->name;
        $curso ->description = $request->description;

        if ($request->hasFile('foto')) {
            // Eliminar la foto anterior si existe
            // if ($curso->foto && Storage::disk('public')->exists($curso->foto)) {
            //     Storage::disk('public')->delete($curso->foto);
            // }
    
            // Almacenar la nueva foto
            $path = $request->file('foto')->store('fotosCursos', 'public');
            $curso->foto = $path;
        }

        $curso-> save();

        return redirect()->route('cursos.show', $curso->id);
    }

    //////////////////////////////////////////////////////////

    //////////BORRAR//////////////////////////////////////////7

    public function confirm(Curso $curso){
        return view('cursos.confirm', compact('curso'));
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
