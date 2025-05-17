<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.menu')
    <div class="main-content">
        @yield('content') 
    </div>
    @include('partials.footer')
</body>
</html>