@extends('layouts.plantilla')
@section('title','Editar Profesor')
 
@section('content')
    <h3>Editar profesor: {{$profesor->nombreApellido}}</h3>
    <br><br>
    <form action="{{route('profesores.update',$profesor)}}" method="POST" enctype="multipart/form-data" class="formulario">
        @csrf
        @method('put')
        <label for="" class="label">Nombre</label><br>
        <input type="text" name="nombreApellido" value="{{$profesor->nombreApellido}}" class="campotexto"><br>
        <label for="" class="label">Profesion</label><br>
        <input type="text" name="profesion" value="{{$profesor->profesion}}" class="campotexto"><br>
        <label for="" class="label">Grado Academico</label><br>
        <input type="text" name="gradoAcademico" value="{{$profesor->gradoAcademico}}" class="campotexto"><br>
        <label for="" class="label">Telefono</label><br>
        <input type="text" name="telefono" value="{{$profesor->telefono}}" class="campotexto"><br>
        <label for="" class="label">Foto</label><br>
        <input type="file" name="foto" id="foto" class="selFoto">

        @if ($profesor->foto)
            <img src="{{ asset($profesor->foto)}}" alt="" width="80">
        @endif
        <br>
        <button type="submit" class="botonEditar">Actualizar</button>
        <a href="{{route('profesores.index')}}" class="botonEditar">Cancelar</a>
    </form>

@endsection