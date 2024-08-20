<?php
$inc = include "conexion.php";
if ($inc) {
    $consulta = "SELECT * FROM asignacionvehiculo";
    $resultado =  mysqli_query($conex, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $id = $row['id'];
            $name = $row['empleado'];
            $placa = $row['placa'];
?>
            <div>
                <h2><?php echo $name; ?></h2>
            </div>
            <div>
                <p>
                <b>ID: </b><?php echo $id; ?> <br>
                <b>Nombre del empleado: </b><?php echo $name; ?> <br>
                <b>Placa del vehículo: </b><?php echo $placa; ?> <br>
                </p>

            </div>
<?php
        }
    }
}
?>