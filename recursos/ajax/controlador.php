<?php 
use App\Clases\Estudiantes;
require_once "../../includes/autoload.php";

$objEstudiante = new Estudiantes();

$codigo=$_POST['codigo'];

$mostrar = $objEstudiante->alumnoDni($codigo);

 var_dump($mostrar);

 ?>