<?php 
namespace App\Clases;
use Includes\ConexionBD;
include_once "includes/autoload.php";

class Estudiantes{
   private $id_facultad;


    public function mostrar()
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM estudiantes as e join facultad as f on e.id_pa=f.id order by e.apellidos asc ";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}