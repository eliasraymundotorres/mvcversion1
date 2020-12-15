<?php
use App\Clases\Facultad as Facultad;
include_once "includes/autoload.php";
include_once "includes/logger.php"; // identificarse

include_once "App/vistas/layout/header.php";

 $request = $_SERVER["QUERY_STRING"];

 switch ($request) {
 	case 'bienvenido':
 	     include_once "App/vistas/bienvenido.php";
 	     break;
 	case 'crear-usuario':
 		 include_once "App/vistas/uCrear.php";
 		break;
    case 'crear-plan-estudio';
        include_once "App/vistas/planCrear.php";
 	    break;
 	case 'asignar-cursos';
        include_once "App/vistas/cursosAsignar.php";
 	    break;
 	case 'estudiantes';
        include_once "App/vistas/RepEstudiantes.php";
 	    break;
 	case 'facultad';
        include_once "App/vistas/RepFacultad.php";
 	    break;
 	default:
 		echo 'No existe información';
 		break;
 }  

include_once "App/vistas/layout/footer.php";






