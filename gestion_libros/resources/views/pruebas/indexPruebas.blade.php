@extends('layouts.plantilla')

@section('title', 'Pruebas')

@section('content')
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    <h1>Pruebas</h1>
    <a href="{{route('pruebas.create')}}" class="botonG">Crear Prueba</a>
    <h2>Foto de prueba: <img src="{{ asset('storage/p1.jpg') }}" alt="" width="50"></h2>
    <br><br><br>
    @foreach ($pruebas as $prueba)
        <p>{{ $prueba->nombre }}</p>
        <img src="{{ asset('storage/fotos/' . $prueba->foto) }}" alt="" width="50">
    @endforeach


    
@endsection
