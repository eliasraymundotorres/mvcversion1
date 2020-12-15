<?php
    declare(strict_types=1);
    use App\Controladores\Asignacion;// falta crear
    include_once "includes/autoload.php";
?>

<h1 style="text-align: center;">ASIGNACION DE CURSOS</h1><br><br>

<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
   <div class="form-group row">
     <label class="col-sm-3 col-form-label">Cursos:</label>
     <div class="col-sm-6">
        <select class="form-control" name="cursos">
        <option value="estudiante">Calculo 1</option>
        <option value="profesor">Programacion 1</option>
        <option value="administrador">Ingenieria de Software</option>
       </select>
     </div>
    </div>
    <div class="form-group row">
     <label class="col-sm-3 col-form-label">Ciclo:</label>
     <div class="col-sm-6">
        <select class="form-control" name="ciclo">
        <?php 
         for ($i=1; $i < 11; $i++) { 
         	echo '<option value="'.$i.'">Ciclo '.$i.'</option>';
         }
         ?>
        
       </select>
     </div>
    </div>
    <br>
    <input type="submit" class="btn btn-success" name="submit" value="Guardar">
</form>
