@extends('layouts.plantilla')

@section('title', 'Alumnos del curso: ' . $curso->nombre)

@section('content')
    <h2>Vista ver alumnos del curso: {{ $curso->nombre }}</h2>

    <div class=" formulario">
        @forelse ($curso->alumnos as $alumno)
        <div class="listaAlumnos">
            <h2>{{ $alumno->nombre }}</h2>
            <a href="{{route('alumnos.verCursos',$alumno)}}">Cursos</a>
        </div>
        @empty
            <p>No hay alumnos inscritos en este curso.</p>
        @endforelse
    </div>

    <a href="{{route('cursos.index')}}" class="botonEditar">Volver</a>
@endsection
