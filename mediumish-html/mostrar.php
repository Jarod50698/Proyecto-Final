<?php
$inc = include "conexion.php";
if ($inc) {
    $consulta = "SELECT * FROM repuestos";
    $resultado =  mysqli_query($conex, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $cantidad = $row['cantidad'];
?>
            <div>
                <h2><?php echo $nombre; ?></h2>
            </div>
            <div>
                <p>
                <b>ID: </b><?php echo $id; ?> <br>
                <b>Nombre del repuesto: </b><?php echo $nombre; ?> <br>
                <b>Descripción: </b><?php echo $descripcion; ?> <br>
                <b>Precio: </b><?php echo $precio; ?> <br>
                <b>Cantidad: </b><?php echo $cantidad; ?> <br>
                </p>

            </div>
<?php
        }
    }
}
?>