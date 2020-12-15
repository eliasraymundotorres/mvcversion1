<?php
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<!DOCTYPE html>
		<html>
		<head>
		    <title>sistema de login</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<!-- vinculo a bootstrap -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<!-- Temas-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
			<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
			<link rel="stylesheet" type="text/css" href="recursos/css/style.css">
		</head>
		<body>
		 <div id="Contenedor">
		      <div class="Icon">
                    <!--Icono de usuario-->
                   <span class="glyphicon glyphicon-user"></span>
                 </div>
			<div class="ContentForm">
			 	<form action="" method="post" name="FormEntrar">
			 		<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
					  <input type="text" class="form-control" name="codigo" placeholder="Usuario" id="Correo" aria-describedby="sizing-addon1" required>
					</div>
					<br>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
					  <input type="password" name="pass" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
					</div>
					<br>
					<input class="btn btn-lg btn-success btn-block btn-signin" id="IngresoLog" type="submit" name="submit" value="Entrar">
					<div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
					<div id="mensaje"></div>
			 	</form>
			 </div>	
		 </div>
</body>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
<?php
    if(isset($_POST["submit"])){
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        $controladorUsuario = new ControladorUsuario();
        $si=$controladorUsuario->login($codigo, $password);
        if($si==true) {
        	header("Location: index.php?bienvenido");
        } else {
        	
        	?>
        	<script>
        		$('#mensaje').html('<div class="alert alert-danger">Usuario y/o Contraseña incorrecta!</div>');
        	</script>
         <?php 
        }
        
    }