<?php
    declare(strict_types=1);
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>

<h3 style="text-align: center;">FORMULARIO DE USUARIO</h3>
<br><br>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
   <div class="form-group row">
     <label class="col-sm-3 col-form-label">Nombres:</label>
     <div class="col-sm-6">
        <input type="text" class="form-control" name="nombres" placeholder="Ingrese nombres">
     </div>
    </div>
    <div class="form-group row">
     <label class="col-sm-3 col-form-label">Apellidos:</label>
     <div class="col-sm-6">
        <input type="text" class="form-control" name="apellidos" placeholder="Ingrese apellidos">
     </div>
    </div>
    <div class="form-group row">
     <label class="col-sm-3 col-form-label">Codigo:</label>
     <div class="col-sm-6">
        <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Ingrese Codigo/DNI">
     </div>
    </div>
    <div class="form-group row">
     <label class="col-sm-3 col-form-label">Contraseña:</label>
     <div class="col-sm-6">
        <input type="password" class="form-control" name="password" placeholder="Ingrese Contraseña">
     </div>
    </div>
    <div class="form-group row">
     <label class="col-sm-3 col-form-label">Tipo:</label>
     <div class="col-sm-6">
        <select class="form-control" name="tipo">
        <option value="estudiante">Estudiante</option>
        <option value="profesor">Profesor</option>
        <option value="administrador">Administrador</option>
       </select>
     </div>
    </div>
    <br>
    <input type="submit" class="btn btn-success" name="submit" value="Guardar">
</form>
<br><br>
<button class="btn btn-danger" onclick="validar()">Validar</button>
<?php
if(isset($_POST["submit"])){
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $codigo = (int)$_POST["codigo"];
    $password = $_POST["password"];
    $tipo = $_POST["tipo"];

    $controladorUsuario = new ControladorUsuario();
    echo $controladorUsuario->crearUsuario($nombres, $apellidos, $codigo, $password, $tipo);
}

