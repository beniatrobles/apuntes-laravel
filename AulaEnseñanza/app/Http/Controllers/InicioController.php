<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio(){
        $alumnos=Alumno::all();
        $profesores=Profesor::all();
        $cursos=Curso::all();
        return view('inicio',compact('alumnos','profesores','cursos'));
    }
}
