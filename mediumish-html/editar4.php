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
        select_id('ventas', 'id', $id);
        ?>
        <form action="" method="post">
            <input type="text" value="<?php echo $row->empleado; ?>" name="empleado">
            <input type="text" value="<?php echo $row->producto; ?>" name="producto">
            <input type="text" value="<?php echo $row->precio; ?>" name="precio">
            <input type="text" value="<?php echo $row->cantidad; ?>" name="cantidad">
            <input type="text" value="<?php echo $row->total; ?>" name="total">
            <input type="submit" name="submit">
        </form>

        <?php

        if (isset($_POST['submit'])) {
            $field = array("empleado" => $_POST['empleado'], "producto" => $_POST['producto'], "precio" => $_POST['precio'], "cantidad" => $_POST['cantidad'], "total" => $_POST['total']);
            $tbl = "ventas";
            edit($tbl, $field, 'id', $id);
            header("location:informesVentas.php");
        }
        ?>
    </div>
</body>

</html>