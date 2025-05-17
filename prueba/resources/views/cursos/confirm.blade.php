@extends('layouts.plantilla')

@php
    $title = 'Confirmar Eliminacion';
@endphp

@section('content')
<form action="{{ route('cursos.destroy', $curso) }}" method="POST">
    @csrf
    @method('delete')
    <h1>Estas seguro que quieres eliminar el {{$curso->name}} ??</h1>
    <button type="submit" class="bg-red-400 p-1 rounded-2xl">Eliminar</button>
    <a href="{{route('cursos.index')}}" class="bg-gray-500 rounded-2xl p-1">Cancelar</a>
</form>

@endsection