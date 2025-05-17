@php
    $alumnoRandom = $alumnos->random();
    $profesorRandom = $profesores->random();
    $cursoRandom = $cursos->random();
@endphp




@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <h1>Esto es el inicio</h1>
    <h3>Bienvenido a nuestra plataforma. Esta web está diseñada para gestionar un aula de enseñanza, facilitando la
        organización de cursos, el
        seguimiento del progreso de los estudiantes, y la administración de tareas y recursos educativos. Nuestro objetivo
        es
        ofrecer una herramienta intuitiva y eficaz tanto para docentes como para alumnos.</h3>

        <br><br><br>

    <div class="ejemplo">
        <div class="alumnoinicio">
            <h2>{{$alumnoRandom->nombre}}</h2>
            <img src="{{asset ($alumnoRandom->foto)}}" alt="{{$alumnoRandom->nombre}}" width="150">
            
        </div>
        <div class="profesorinicio">
            <h2>{{$profesorRandom->nombreApellido}}</h2>
            <img src="{{asset($profesorRandom->foto)}}" alt="{{$profesorRandom->nombreApellido}}" width="150">
        </div>
        <div class="cursoinicio">
            <h2>{{$cursoRandom->nombre}}</h2>
            <img src="{{$cursoRandom->foto}}" alt="{{$cursoRandom->nombre}}" width="150">
        </div>
    </div>
@endsection
