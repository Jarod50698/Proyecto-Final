<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['empleado']) >= 1 && strlen($_POST['descripcion']) && strlen($_POST['fechalimit']) !== null) {
        $empleado = trim($_POST['empleado']);
        $descripcion = trim($_POST['fechalimit']);
        $fechalimit = date('Y-m-d', strtotime(trim($_POST['fechalimit'])));
        $consulta = "INSERT INTO tareas(empleado, descripcion,fechalimit) VALUES ('$empleado','$descripcion','$fechalimit')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>

            <h3 class="ok"><a href="tareas.php" style='text-decoration:none;'>
                    X
                </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>

            <h3 class="bad"> <a href="tareas.php" style='text-decoration:none;'>
                    X
                </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>

        <h3 class="bad"><a href="tareas.php" style='text-decoration:none;'>
                X
            </a>Por favor complete los campos</h3>
<?php
    }
}
