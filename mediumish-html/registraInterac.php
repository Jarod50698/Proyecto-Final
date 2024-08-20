<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['cliente']) >= 1 && strlen($_POST['tipo']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['detalles']) >= 1) {
        $cliente = trim($_POST['cliente']);
        $tipo = trim($_POST['tipo']);
        $fecha = trim($_POST['fecha']);
        $detalles = trim($_POST['detalles']);
        $consulta = "INSERT INTO interacciones(cliente, tipo, fecha, detalles) VALUES ('$cliente','$tipo','$fecha','$detalles')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>

            <h3 class="ok"><a href="interaccionesClientes.php" style='text-decoration:none;'>
                    X
                </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>

            <h3 class="bad"> <a href="interaccionesClientes.php.php" style='text-decoration:none;'>
                    X
                </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>

        <h3 class="bad"><a href="interaccionesClientes.php.php" style='text-decoration:none;'>
                X
            </a>Por favor complete los campos</h3>
<?php
    }
}
