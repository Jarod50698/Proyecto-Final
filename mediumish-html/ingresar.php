<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$_SESSION['email']  = $email;

$conexion = mysqli_connect("localhost", "root", "", "organizadorAdministrativo");

$consulta = "SELECT*FROM usuarios where email= '$email' and contraseña= '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:principal.html");
}else{
?>
<?php
include "login.php";
?>
<h1 class="bag">Error en la autenticación.</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
