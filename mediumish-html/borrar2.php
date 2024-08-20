<?php
include "function.php";
$id = $_GET['id'];

delete('tareas', 'id', $id);
header("location:tareas.php");


