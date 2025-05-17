@php
    $title='Login'
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <title>@yield('title')</title> --}}
    <x-title>
        {{$title ?? 'No se ha definido el title'}}
    </x-title>
 
</head>
<body>
    @include('partials.headerLogin')
    <div class="flex flex-col items-center mt-[150px]">
        <h2 class="text-5xl m-4">Inciar Sesion</h2>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <label for="" class="text-2xl">Email: </label><br>
            <input type="email" name="email" required class="border-2"><br>
            <label for="" class="text-2xl">Password:</label><br>
            <input type="password" name="password" required class="border-2"><br><br>
            <button type="submit" class="border-2 bg-gray-400 p-2 rounded-xl ">Entrar</button>

        </form>
    </div>
    @include('partials.footer')
</body>
</html>

