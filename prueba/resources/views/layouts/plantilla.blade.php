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
    @include('partials.menu')
    @yield('content')
    @include('partials.footer')
</body>
</html>