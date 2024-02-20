<!DOCTYPE html>

<head>
    <title>@yield('titulo', 'Docentes')</title>
</head>
<body>
    @extends('plantilla')
    @section('titulo')
    Docentes
    @endsection

    @section('contenido')
        <h1>Bienvenido a Mi Sitio Web {{$codigo}}</h1>
        <a href="{{route('alumnos')}}">Ver Alumnos</a>
    @endsection
</body>

