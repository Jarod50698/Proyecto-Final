<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion'])&& strlen($_POST['marca'])&& strlen($_POST['cantidad'])&& strlen($_POST['precio'])) {
        $nombre = trim($_POST['nombre']);
        $descripcion = trim($_POST['descripcion']);
        $marca = trim($_POST['marca']);
        $cantidad = trim($_POST['cantidad']);
        $precio = trim($_POST['precio']);
        $consulta = "INSERT INTO productos(nombre, descripcion,marca,cantidad,precio) VALUES ('$nombre','$descripcion','$marca','$cantidad','$precio')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>

            <h3 class="ok"><a href="InventarioProductos.php" style='text-decoration:none;'>
                    X
                </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>

            <h3 class="bad"> <a href="InventarioProductos.php" style='text-decoration:none;'>
                    X
                </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>

        <h3 class="bad"><a href="InventarioProductos.php" style='text-decoration:none;'>
                X
            </a>Por favor complete los campos</h3>
<?php
    }
}
