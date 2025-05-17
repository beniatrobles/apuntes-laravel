<div class="backgroundMenu">
    <nav>
        <ul class="lista">
            <li><a href="{{ route('inicio') }}" class="enlaceMenu"><b>Inicio</b></a></li>
            <li><a href="{{ route('alumnos.index') }}" class="enlaceMenu"><b>Alumnos</b></a>

                <ul class="submenu">
                    <li><a href="{{route('alumnos.index')}}">Listado de alumnos</a></li>
                    <li><a href="{{route('alumnos.create')}}">Agregar Alumno</a></li>
                </ul>

            </li>
            <li><a href="{{ route('profesores.index') }}" class="enlaceMenu"><b>Profesores</b></a>

                <ul class="submenu">
                    <li><a href="{{ route('profesores.index') }}">Listado de profesores</a></li>
                    <li><a href="{{route('profesores.create')}}">Agregar Profesor</a></li>
                </ul>

            </li>
            <li><a href="{{ route('cursos.index') }}" class="enlaceMenu"><b>Cursos</b></a>

                <ul class="submenu">
                    <li><a href="{{ route('cursos.index') }}">Listado de cursos</a></li>
                    <li><a href="{{ route('cursos.create')}}">Agregar Curso</a></li>
                </ul>


            </li>
        </ul>
    </nav>
</div>
