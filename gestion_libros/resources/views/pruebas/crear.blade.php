@extends('layouts.plantilla')

@section('title', 'Crear Prueba')

@section('content')
    <h1>Subir nueva Prueba</h1>

    <form action="{{ route('pruebas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div>
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto" accept="image/*" required>
        </div>

        <button type="submit">Guardar</button>
    </form>

@endsection
