<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contraseña'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $consulta = "INSERT INTO usuarios(nombre, email, contraseña) VALUES ('$name','$email','$contraseña')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            
            <h3 class="ok"><a href="registro.php" style='text-decoration:none;'>
                X
            </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>
          
            <h3 class="bad">  <a href="registro.php" style='text-decoration:none;'>
                X
            </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>
        
        <h3 class="bad"><a href="registro.php" style='text-decoration:none;'>
            X
        </a>Por favor complete los campos</h3>
<?php
    }
}
