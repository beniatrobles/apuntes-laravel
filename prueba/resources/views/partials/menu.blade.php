<nav>
    <ul class="flex gap-20 justify-center bg-black text-amber-50 p-5">
        <li>
            <a href="{{route('home')}}">Inicio</a>
        </li>
        <li>
            <a href="{{route('cursos.index')}}">Ver Cursos</a>
        </li>
        @if (auth()->user()->role === 'admin')
        <li>
            <a href="{{route('cursos.create')}}">Crear Curso</a>
        </li>
        @endif

        <div class="flex justify-end">
            <img src="{{ auth()->user()->avatar }}" alt="" class="w-[35%] rounded-2xl">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-blue-500">Cerrar sesión</button>
            </form>
        </div>
       
    </ul>
</nav>