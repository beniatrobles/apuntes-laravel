@extends('layouts.plantilla')

{{-- @section('title', 'Crear Curso') --}}

@php
    $title = 'Crear Curso';
@endphp

@section('content')
    <h1>Aqui se crearan los cursos</h1>

    <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nombre</label><br>
        <input type="text" name="name" class="border-2" value="{{old('name')}}"><br>
        @error('name')
            <p class="text-red-600">{{ $message }}</p>
        @enderror
        <label for="">Descripcion</label><br>
        <textarea name="description" cols="30" rows="10" class="border-2">{{ old('description') }}</textarea><br>
        @error('description')
            <p class="text-red-600">{{ $message }}</p>
        @enderror

        <label for="">Foto:</label>
        <input type="file" name="foto" id="foto">
        <button type="submit" class="bg-gray-500 p-2 rounded-2xl">Crear Curso</button>
    </form>

@endsection


