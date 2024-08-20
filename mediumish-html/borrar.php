<?php
include "function.php";
$id = $_GET['id'];

delete('tareas', 'id', $id);
header("location:tareas.php");

delete('notificaciones', 'id', $id);
header("location:notificaciones.php");

delete('interacciones', 'id', $id);
header("location:interaccionesClientes.php");

delete('ventas', 'id', $id);
header("location:informesVentas.php");

delete('productos', 'id', $id);
header("location:inventarioProductos.php");
