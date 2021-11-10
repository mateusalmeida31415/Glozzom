<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap 4.6.1--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/d6b75e91c7.js" crossorigin="anonymous"></script>
    {{-- Estilo CSS --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{env('APP_NAME')}} - @yield('pagina')</title>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    
    {{-- VUE.JS --}}
    <script src="{{asset('js/app.js')}}"></script>
    {{-- POPPER.JS --}}
    <script src="{{asset('js/popper.js')}}"></script>
    {{-- JQUERY --}}
    <script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>