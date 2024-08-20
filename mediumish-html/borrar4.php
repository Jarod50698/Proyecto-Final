<?php
include "function.php";
$id = $_GET['id'];

delete('ventas', 'id', $id);
header("location:informesVentas.php");

