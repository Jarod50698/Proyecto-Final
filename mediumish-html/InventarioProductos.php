<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seguimiento del Inventario de Repuestos y Accesorios">
    <meta name="author" content="Tu Nombre">
    <link rel="icon" href="assets/img/descarga.png">
    <title>Inventario de Repuestos y Accesorios</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/mediumish.css" rel="stylesheet">
    <style>
        input {
            width: calc(100% - 20px);
            padding: 9px;
            margin: auto;
            margin-top: 12px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #48e;
            color: #fff;
            width: calc(80% - 20px);
            margin: 0 10%;
            margin-top: 22px;
            border: none;
        }

        .ok {
            text-align: center;
            width: 100%;
            padding: 12px;
            background-color: #1e6;
            color: #fff;
        }

        .bad {
            text-align: center;
            width: 100%;
            padding: 12px;
            background-color: #a22;
            color: #fff;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <!-- Begin Nav -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="principal.html">
                <img src="assets/img/images.png" alt="logo">
            </a>
            <!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link"
                            href="productos.html">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="asignarVehiculos.html">Asignar
                            Vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="interaccionesClientes.php">Interacciones
                            con
                            Clientes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="informesVentas.php">Informes de Venta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tareas.php">Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="notificaciones.php">Notificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Inicio de
                            sesion</a>
                    </li>
                </ul>
                <!-- end menu -->
                <!-- begin search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                    <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                            <path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path>
                        </svg></span>
                </form>
                <!-- end search -->
            </div>
        </div>
    </nav>
    <!-- End Nav -->

    <!-- Begin Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mainheading">
                    <h1>Inventario de Repuestos y Accesorios</h1>
                    <p class="lead">Realice un seguimiento del inventario de repuestos y accesorios.</p>
                </div>
                <form action="registProduc.php" method="post" id="taskForm">
                    <div class="form-group">
                        <label for="nombre">Digite el nombre del producto:</label>
                        <input type="text" placeholder="nombre completo" class="form-control" name="nombre" id="nombre" required>

                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion del producto:</label>
                        <input type="text" placeholder="descripcion" class="form-control" name="descripcion" id="descripcion" required>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" placeholder="marca" class="form-control" name="marca" id="marca" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" placeholder="cantidad" class="form-control" name="cantidad" id="cantidad" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio del producto:</label>
                        <input type="text" placeholder="precio" class="form-control" name="precio" id="precio" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Agregar producto</button>
                </form>
                <br>

                <div class="inventory-results mt-4">
                    <h2>Resultados del Inventario</h2>
                    <div class="task-results mt-4">
                        <div>
                            <br>
                            <div>
                                <table>
                                    <tr>
                                        <td>Nombre del producto:</td>
                                        <td>Descripción del producto:</td>
                                        <td>Marca:</td>
                                        <td>Cantidad:</td>
                                        <td>Precio:</td>
                                        <td style="border-right-style:hidden;border-top-style:hidden;"></td>
                                    </tr>
                                    <?php
                                    include "function.php";
                                    if (isset($_POST['submit'])) {
                                        $field = array("nombre" => $_POST['nombre']);
                                        $tbl = "productos";
                                        insert($tbl, $field);
                                    }
                                    ?>
                                    <?php
                                    $sql = "select * from productos";
                                    $result = db_query($sql);
                                    while ($row = mysqli_fetch_object($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->nombre; ?></td>
                                            <td><?php echo $row->descripcion; ?></td>
                                            <td><?php echo $row->marca; ?></td>
                                            <td><?php echo $row->cantidad; ?></td>
                                            <td><?php echo $row->precio; ?></td>
                                            <td>

                                                <a class="btn btn-primary" href="editar6.php?id=<?php echo $row->id; ?>"><i class="fa fa-pencil fa-lg"></i></a>
                                                <br> <a class="btn btn-primary" href="borrar6.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash-o fa-lg"></i></a>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
</body>
<!-- End Main Content -->

<!-- Begin Footer -->
<div class="container">
    <div class="footer">
        <p class="pull-left">
            Copyright &copy; 2024 Tu Empresa
        </p>
        <p class="pull-right">
            Tema por <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
        </p>
        <div class="clearfix"></div>
    </div>
</div>
<!-- End Footer -->

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

</html>