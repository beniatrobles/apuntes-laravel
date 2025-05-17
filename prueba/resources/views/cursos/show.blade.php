@extends('layouts.plantilla')

{{-- @section('title', 'Ver Curso: ' . $curso->name) --}}

@php
    $title = $curso->name;
@endphp

@section('content')
    <div class="bg-blue-200 w-[35%]">
        <h1 class="text-3xl">Curso: {{ $curso->name }}</h1>

        <a href="{{ route('cursos.edit', $curso) }}" class="underline">Editar Curso</a>
    </div>
    <div class="bg-blue-100 p-5 w-[35%]">
        <h3>Descripcion:
            {{ $curso->description }}
        </h3>
    </div>
    @if ($curso->foto)
        <img src="{{ asset('storage/' . $curso->foto) }}" alt="Imagen del curso" class="w-[50%]">
    @endif
    <br><br>
    <a href="{{ route('cursos.index') }}" class="underline">Volver a Cursos</a>
@endsection
