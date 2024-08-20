<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['empleado']) >= 1 && strlen($_POST['producto']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['cantidad']) >= 1 && strlen($_POST['total']) >= 1) {
        $empleado = trim($_POST['empleado']);
        $producto = trim($_POST['producto']);
        $precio = trim($_POST['precio']);
        $cantidad = trim($_POST['cantidad']);
        $total = trim($_POST['total']);
        $consulta = "INSERT INTO ventas(empleado, producto, precio, cantidad, total) VALUES ('$empleado','$producto','$precio','$cantidad','$total')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>

            <h3 class="ok"><a href="informesVentas.php" style='text-decoration:none;'>
                    X
                </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>

            <h3 class="bad"> <a href="informesVentas.php.php" style='text-decoration:none;'>
                    X
                </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>

        <h3 class="bad"><a href="informesVentas.php.php" style='text-decoration:none;'>
                X
            </a>Por favor complete los campos</h3>
<?php
    }
}
