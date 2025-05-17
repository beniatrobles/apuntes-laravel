<div class="componenteCursos">
    <h3>{{ $nombre }}</h3>
    <h4>{{ $nivel }}</h4>
    <h4>{{ $horas }} horas</h4>
    <img src="{{ $foto }}" alt="" width="150">
    <div class="profesorImp">
        <h3>Profesor:{{ $profesor }}</h3>
    </div>
    <br>
    <div>
        <a href="{{route('cursos.edit', $curso)}}" class="botonEditar">Editar Curso</a>
        <a href="{{route('cursos.confirm', $curso)}}" class="botonEliminar">Borrar Curso</a>
        <a href="{{route('cursos.verAlumnos',$curso)}}" class="botonEditar">Ver alumnos del Curso</a>
    </div>

</div>
