<?php
include "function.php";
$id = $_GET['id'];


delete('interacciones', 'id', $id);
header("location:interaccionesClientes.php");

