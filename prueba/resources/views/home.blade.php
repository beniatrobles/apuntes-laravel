@extends('layouts.plantilla')

{{-- @section('title', 'Home') --}}

@php
    $title = 'Home'
    
@endphp



@section('content')

    <h1>Esto son componentes</h1>

    <div class="flex flex-col gap-6">

        <x-curso-card>
            <x-slot name='title'>
                Curso Laravel

            </x-slot>

            <x-slot name='description'>
                Curso para aprender Laravel desde 0.
            </x-slot>

            <x-slot name='link'>
                https://laravel.com/docs/12.x

            </x-slot>


        </x-curso-card>
        <x-curso-card>
            <x-slot name='title'>
                Curso VUE

            </x-slot>

            <x-slot name='description'>
                Curso para aprender VUE desde 0.
            </x-slot>

            <x-slot name='link'>
                https://vuejs.org/guide/introduction.html

            </x-slot>


        </x-curso-card>

    </div>


@endsection
