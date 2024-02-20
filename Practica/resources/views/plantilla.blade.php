<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Docente - Universidades Tecnológicas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4; /* Fondo general claro */
        }
        header {
            background-color: #049483; /* Verde principal del logo */
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #048c73; /* Verde secundario del logo */
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            display: inline-block;
        }
        nav a:hover {
            background-color: #5fb4a4; /* Verde claro para hover */
        }
        main {
            padding: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .card {
            background: white; /* Fondo de card en blanco para contraste */
            color: #0e0b0e; /* Texto casi negro para legibilidad */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: calc(33% - 20px);
            box-sizing: border-box;
        }
        .card h3 {
            color: #048c73; /* Verde oscuro para títulos */
            margin-top: 0;
        }
        footer {
            background-color: #0e0b0e; /* Casi negro para el pie de página */
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Portal Docente - Universidades Tecnológicas</h1>
</header>

<nav>
    <a href="docente_inicio.html">Inicio</a>
    <a href="docente_estudiantes.html">Estudiantes</a>
    <a href="docente_contacto.html">Contacto</a>
</nav>

<main>
    <div class="card" style="border-left: 5px solid #049483;">
        <h3>Perfil Docente</h3>
        <p>Administra tu perfil, consulta horarios y gestiona tus cursos.</p>
    </div>
    <div class="card" style="border-left: 5px solid #048c73;">
        <h3>Asistencia y Calificaciones</h3>
        <p>Registra la asistencia y calificaciones de tus estudiantes de manera eficiente.</p>
    </div>
    <div class="card" style="border-left: 5px solid #5fb4a4;">
        <h3>Materiales Didácticos</h3>
        <p>Accede y comparte recursos y materiales didácticos con otros docentes y estudiantes.</p>
    </div>
</main>

<footer>
    <p>&copy; 2024 Portal de Estancias Universitarias. Todos los derechos reservados.</p>
</footer>

</body>
</html>
