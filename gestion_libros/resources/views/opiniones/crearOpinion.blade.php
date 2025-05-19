@extends('layouts.plantilla')

@section('title','Crear opinion')

@section('content')
    <h1>Crear Opinion</h1>
    <form action="{{route('opiniones.store')}}" method="POST">
        @csrf
         <label for="">Libro</label><br>
         <select name="libro" id="">
            @foreach ($libros as $libro)
                <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                
            @endforeach
         </select><br>
        <label for="">Tu Nombre:</label><br>
        <input type="text" name="nombre_usuario" value="{{old('nombre_usuario')}}"><br>
         @error('nombre_usuario')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
        <label for="">Valoracion</label><br>
        <select name="valoracion" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="">Comentario</label><br>
        <textarea name="comentario" id="" cols="50" rows="10"></textarea><br><br>
        <button type="submit" class="botonG">Crear opinion</button>
    </form>

    @foreach ($opiniones as $opinion)
        <h4>{{$opinion->valoracion}}--{{$opinion->nombre_usuario}}

            -- <a href="{{route('opiniones.editarPruebas',$opinion)}}" class="botonG">Ver Pruebas</a>
        </h4>
       
    @endforeach

@endsection