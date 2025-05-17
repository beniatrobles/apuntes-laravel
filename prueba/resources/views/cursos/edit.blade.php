@extends('layouts.plantilla')

{{-- @section('title', 'Crear Curso') --}}

@php
    $title = 'Crear Curso';
@endphp

@section('content')
    <h1>Aqui se editara el curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')


        <label for="">Nombre</label><br>
        <input type="text" name="name" value="{{ $curso->name }}" class="border-2"><br>
        <label for="">Descripcion</label><br>
        <textarea name="description" id="" cols="30" rows="10" class="border-2">{{ $curso->description }}</textarea><br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto">
        @if ($curso->foto)
            <img src="{{ asset('storage/' . $curso->foto) }}" alt="Imagen actual" width="150">
        @endif
        <button type="submit" class="bg-gray-500 p-2 rounded-2xl">Actualizar Curso</button>
    </form>
@endsection
