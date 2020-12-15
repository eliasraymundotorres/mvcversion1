<?php
    use App\Controladores\ControladorUsuario;
    include_once "includes/autoload.php";
?>
<h1 style="text-align: center;">LOGIN</h1>
<br><br>
<form method="post" action="">
    <input type="text" class="form-control" name="codigo" placeholder="Ingrese su codigo"><br>
    <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña"><br>
    <input type="submit" class="btn btn-primary" name="submit" value="Login"><br>
</form>
<?php
    if(isset($_POST["submit"])){
        $codigo = (int) $_POST["codigo"];
        $password = $_POST["pass"];
        $controladorUsuario = new ControladorUsuario();
        $controladorUsuario->login($codigo, $password);
    }