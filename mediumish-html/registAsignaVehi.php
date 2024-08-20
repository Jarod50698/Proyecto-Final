<?php
include "conexion.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['placa'])) {
        $name = trim($_POST['name']);
        $placa = trim($_POST['placa']);
        $consulta = "INSERT INTO asignacionvehiculo(empleado, placa) VALUES ('$name','$placa')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
?>
            
            <h3 class="ok"><a href="asignarVehiculos.html" style='text-decoration:none;'>
                X
            </a>Usuario registrado satisfactoriamente</h3>
        <?php
        } else {
        ?>
          
            <h3 class="bad">  <a href="asignarVehiculos.html" style='text-decoration:none;'>
                X
            </a>El usuario no fue registrado</h3>
        <?php
        }
    } else {
        ?>
        
        <h3 class="bad"><a href="asignarVehiculos.html" style='text-decoration:none;'>
            X
        </a>Por favor complete los campos</h3>
<?php
    }
}
