@extends('Plantilla2')
@section('titulo')
Estudiantes
@endsection
@section('contenido')
<form>
    <input type ="text" name="name_student" placeholder="Nombre">
    <input type ="text" name="id_student" placeholder="Matricula">
    <input type ="email" name="email_student" placeholder="Correo">
    <input type ="password" name="password_student" placeholder="Contraseña">
</form>
@endsection