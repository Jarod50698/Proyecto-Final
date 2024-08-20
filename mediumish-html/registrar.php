<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['cantidad']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $descripcion = trim($_POST['descripcion']);
        $precio = trim($_POST['precio']);
        $cantidad = trim($_POST['cantidad']);
        $consulta = "INSERT INTO repuestos(nombre, descripcion, precio, cantidad) VALUES ('$nombre','$descripcion','$precio','$cantidad')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            
            <h3 class="ok"><a href="inventarioRepuestos.php" style='text-decoration:none;'>
                X
            </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>
          
            <h3 class="bad">  <a href="inventarioRepuestos.php" style='text-decoration:none;'>
                X
            </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>
        
        <h3 class="bad"><a href="inventarioRepuestos.php" style='text-decoration:none;'>
            X
        </a>Por favor complete los campos</h3>
<?php
    }
}
