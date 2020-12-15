<?php
    declare(strict_types=1);
    use App\Clases\Facultad;
    include_once "includes/autoload.php";

?>
<h1 style="text-align: center;">FACULTADES REGISTRADOS</h1><br><br>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<th>CODIGO</th>
			<th>NOMBRES</th>
		</thead>
		<tbody>
			<?php 
          $objFac = new Facultad();
           $Facultades = $objFac->mostrar();
           foreach ($Facultades as $key => $value) {
              ?>
             <tr>
             	<td><?=$value['id']?></td>
             	<td><?=$value['nombre']?></td>
             </tr> 
            <?php 
              }   
			 ?>
		</tbody>
	</table>
</div>