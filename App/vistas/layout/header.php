<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>::MVC::</title>
	<!-- ================== LIBRERIAS DE BOOSTRAP ==================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--===============================================================-->
  <style>
    body{padding-top:100px}
  </style>
</head>

<body>
<div class="container">
	<nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SISTEMA REGISTRO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?bienvenido">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?crear-usuario">Crear Usuarios</a>
          <a class="dropdown-item" href="index.php?crear-plan-estudio">Crear Plan de Estudio</a>
          <a class="dropdown-item" href="index.php?asignar-cursos">Asignar Cursos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?estudiantes">Estudiantes</a>
          <a class="dropdown-item" href="index.php?facultad">Facultad</a>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hola: <?=$_SESSION["nombres"]?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="logout.php">Salir</a>
        </div>
      </li>
    </ul>
  </div>

</nav>
