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
            background-color: #f4f4f4; 
            overflow-x: hidden; 
        }
        header {
            background-color: #049483; 
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #048c73; 
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
            background-color: #5fb4a4; 
        }
        main {
            padding: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding-bottom: 120px; 
        }
        .card {
            background: #fff; 
            color: #333; 
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: calc(33% - 40px);
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            color: #333;
            margin-top: 0;
        }
        footer {
            background-color: #048c73; 
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
            position: relative; 
            clear: both; 
            margin-top: -120px; 
        }
        .dashboard-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .dashboard-table th, .dashboard-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .dashboard-table th {
            background-color: #049483;
            color: white;
        }
        .dashboard-table tr:hover {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<header>
    <h1>Sistema De Estadias</h1>
</header>

<nav>
    <a href="docente_inicio.html">Inicio</a>
    <a href="docente_estudiantes.html">Estudiantes</a>
    <a href="docente_contacto.html">Contacto</a>
</nav>

<main class="dashboard">
    <div class="card" style="border-left: 5px solid #049483;">
        <h3>Perfil Docente</h3>
        <p>Administra tu perfil, consulta horarios y gestiona tus cursos.</p>
    </div>
    <div class="card" style="border-left: 5px solid #048c73;">
        <h3>Asistencia</h3>
        <p>Agenda Las Citas De Tus Asesorados</p>
    </div>
    <div class="card" style="border-left: 5px solid #5fb4a4;">
        <h3>Materiales Didácticos</h3>
        <p>Accede y comparte recursos y materiales didácticos con otros docentes y estudiantes.</p>
    </div>
    <table class="dashboard-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Actividades realizadas</th>
                <th>Proyecto</th>
                <th>Hacer</th>
                <th>Saber</th>
                <th>Ser</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gustavo Gutierrez</td>
                <td>3</td>
                <td>Ecommerce</td>
                <td>AU</td>
                <td>DE</td>
                <td>AU</td>
            </tr>
            <tr>
                <td>Isha Mia</td>
                <td>5</td>
                <td>Taller Mecanico</td>
                <td>SA</td>
                <td>SA</td>
                <td>SA</td>
            </tr>
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2024 Portal Docente - Universidades Tecnológicas. Todos los derechos reservados.</p>
    <div>
        <a href="#">Términos y Condiciones</a> |
        <a href="#">Política de Privacidad</a>
    </div>
    <div>
        <p>Portal Docente - Universidades Tecnológicas</p>
        <p>Correo electrónico: info@universidadestecnologicas.edu</p>
    </div>
</footer>

</body>
</html>
