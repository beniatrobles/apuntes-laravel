<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.menu')
    @yield('content')
    @include('partials.footer')
</body>
</html>