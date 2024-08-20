<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Editar Registros Mysql Mediante Funcion</title>
    <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 4px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .main-wrapper {
            width: 50%;

            background: #E0E4E5;
            border: 1px solid #292929;
            padding: 25px;
        }

        hr {
            margin-top: 5px;
            margin-bottom: 5px;
            border: 0;
            border-top: 1px solid #eee;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <h2>Editar Registros con Función PHP </h2>
        <br><br>
        <?php
        include "function.php";
        $id = $_GET['id'];
        select_id('interacciones', 'id', $id);
        ?>
        <form action="" method="post">
            <input type="text" value="<?php echo $row->cliente; ?>" name="cliente">
            <input type="text" value="<?php echo $row->tipo; ?>" name="tipo">
            <input type="text" value="<?php echo $row->fecha; ?>" name="fecha">
            <input type="text" value="<?php echo $row->detalles; ?>" name="detalles">
            <input type="submit" name="submit">
        </form>

        <?php

        if (isset($_POST['submit'])) {
            $field = array("cliente" => $_POST['cliente'], "tipo" => $_POST['tipo'], "fecha" => $_POST['fecha'], "detalles" => $_POST['detalles']);
            $tbl = "interacciones";
            edit($tbl, $field, 'id', $id);
            header("location:interaccionesClientes.php");
        }
        ?>
    </div>
</body>

</html>