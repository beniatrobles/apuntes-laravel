@extends('layouts.plantilla')

{{-- @section('title', 'Cursos') --}}

@php
    $title = 'Cursos';
@endphp

@section('content')
    <h1 class="text-2xl">Listado de cursos</h1>

    @foreach ($cursos as $curso)
        <x-listado-curso>
            <x-slot name="name">
                {{ $curso->name }}
            </x-slot>
            <x-slot name="description">
                {{ $curso->description }}
            </x-slot>
            <x-slot name="show">
                {{ route('cursos.show', $curso) }}
            </x-slot>
            <x-slot name="eliminar">
                {{ route('cursos.confirm', $curso) }}
            </x-slot>

        </x-listado-curso>
    @endforeach


    {{ $cursos->links() }}
@endsection
