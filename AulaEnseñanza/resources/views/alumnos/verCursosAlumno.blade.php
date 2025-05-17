@extends('layouts.plantilla')

@section('title', 'Ver Cursos del alumno')


@section('content')
    
<h2>ver cursos del alumno: {{$alumno->nombre}}</h2>
<div class=" formulario">
    @forelse ($alumno->cursos as $curso)
    <div class="listaAlumnos">
        <h2>{{ $curso->nombre }}</h2>
        <h3>{{$curso->profesor->nombreApellido}}</h3>
    </div>
    @empty
        <p>Este alumno no esta matriculado en ningun curso todavia.</p>
    @endforelse
</div>

<a href="{{route('alumnos.index')}}" class="botonEditar">Volver</a>
@endsection