<?php
include "function.php";
$id = $_GET['id'];


delete('notificaciones', 'id', $id);
header("location:notificaciones.php");

