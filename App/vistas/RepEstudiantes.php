<?php
    declare(strict_types=1);
    use App\Clases\Estudiantes;
    include_once "includes/autoload.php";

?>
<h1 style="text-align: center;">ESTUDIANTES REGISTRADOS</h1><br><br>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<th>CODIGO</th>
			<th>NOMBRES</th>
			<th>TELEFONO</th>
			<th>CORREO</th>
			<th>FACULTAD</th>
		</thead>
		<tbody>
			<?php 
          $objEst = new Estudiantes();
           $Alumnos = $objEst->mostrar();
           foreach ($Alumnos as $key => $value) {
              ?>
             <tr>
             	<td><?=$value['codigo']?></td>
             	<td><?=$value['apellidos'].', '.$value['nombres']?></td>
             	<td><?=$value['telefono']?></td>
             	<td><?=$value['correo']?></td>
             	<td><?=$value['nombre']?></td>
             </tr> 
            <?php 
              }   
			 ?>
		</tbody>
	</table>
</div>
