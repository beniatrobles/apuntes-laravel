@extends('layouts.plantilla')

@section('title','Editar pruebas')
@section('content')
        
@endsection


<h1>Editar pruebas para la opinión de {{ $opinion->nombre_usuario }}</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form action="{{ route('opiniones.actualizarPruebas', $opinion) }}" method="POST">
    @csrf

    @foreach($pruebas as $prueba)
        <div>
            <label>
                <input 
                    type="checkbox" 
                    name="pruebas[]" 
                    value="{{ $prueba->id }}"
                    {{ $opinion->pruebas->contains($prueba->id) ? 'checked' : '' }}
                >
                {{ $prueba->nombre }}
            </label>
        </div>
    @endforeach

    <button type="submit">Guardar</button>
</form>

<a href="{{route('opiniones.crear')}}" class="botonG">Volver</a>