<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.menu')
    @yield('content')
    @include('partials.footer')
</body>
</html>