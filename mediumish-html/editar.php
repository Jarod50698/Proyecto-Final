<?php
//llamar la conexion
require_once 'conexion.php';
//conectar a la base de datos escuela con mysqli
$conex = mysqli_connect("localhost", "root", "", "organizadorAdministrativo");

?>
<!-- crear un formulario para editar registros en la tabla alumnos -->
<form action="editar.php" method="post">
    <?php
    // consultar un registro de la tabla alumnos
    $query = "SELECT * FROM tareas WHERE id = " . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($conex, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <label for="empleado">Empleado:</label>
        <input type="text" name="empleado" id="empleado" value="<?php echo $row['empleado']; ?>">
        <br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']; ?>">
        <br>
        <br>
        <label for="fechalimit">Fecha Limite:</label>
        <input type="date" name="fechalimit" id="fechalimit" value="<?php echo $row['fechalimit']; ?>">
        <br>
        <input type="submit" value="Guardar" name="guardar">
        <?php
    }
    ?>
</form>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE tareas SET empleado='" . $_POST['empleado'] . "', descripcion='" . $_POST['descripcion'] . "', fechalimit='" . $_POST['fechalimit'] . "' WHERE id=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($conex, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: index.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($conex);
?>