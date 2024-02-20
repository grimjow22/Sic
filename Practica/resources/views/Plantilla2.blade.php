<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <header>
        <main>
            @yield('contenido')
        </main>
        <footer>
            <p>Todos los derechos reservados</p>
        </footer>
    </header>
</body>
</html>