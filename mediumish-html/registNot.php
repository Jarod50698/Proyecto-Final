<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['emisor']) >= 1 && strlen($_POST['descripcion'])) {
        $emisor = trim($_POST['emisor']);
        $descripcion = trim($_POST['descripcion']);
        $consulta = "INSERT INTO notificaciones(emisor, descripcion) VALUES ('$emisor','$descripcion')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>

            <h3 class="ok"><a href="notificaciones.php" style='text-decoration:none;'>
                    X
                </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>

            <h3 class="bad"> <a href="notificaciones.php" style='text-decoration:none;'>
                    X
                </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>

        <h3 class="bad"><a href="notificaciones.php" style='text-decoration:none;'>
                X
            </a>Por favor complete los campos</h3>
<?php
    }
}
