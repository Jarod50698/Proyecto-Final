<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content>
    <link rel="icon" href="assets/img/descarga.png">
    <title>Organizador Web</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/mediumish.css" rel="stylesheet">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <!-- Begin Nav
================================================== -->
    <nav
        class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button"
            data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="principal.html">
                <img src="assets/img/images.png" alt="logo">
            </a>
            <!-- End Logo -->
            <div class="collapse navbar-collapse"
                id="navbarsExampleDefault">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
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
                    <li class="nav-item active">
                        <a class="nav-link"
                            href="notificaciones.php">Notificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Inicio de
                            sesion</a>
                    </li>
                </ul>
                <!-- End Menu -->
                <!-- Begin Search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text"
                        placeholder="Search">
                    <span class="search-icon"><svg class="svgIcon-use"
                            width="25" height="25"
                            viewbox="0 0 25 25">
                            <path
                                d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path>
                        </svg></span>
                </form>
                <!-- End Search -->
            </div>
        </div>
    </nav>
    <!-- End Nav
================================================== -->

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mainheading">
                    <h1>Notificaciones</h1>
                    <p class="lead">Revise las notificaciones personales de usuario.</p>
                </div>
                <form action="registNot.php" method="post" id="taskForm">
                    <div class="form-group">
                        <label for="emisor">Digite el nombre del emisor:</label>
                        <input type="text" placeholder="Emisor" class="form-control" name="emisor" id="emisor" required>

                    </div>
                    <div class="form-group">
                        <label for="tarea">Descripción de la notificación:</label>
                        <input type="text" placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Notificar</button>
                </form>
                <br>
                <div class="inventory-results mt-4">
                    <div class="task-results mt-4">
                        <div>
                            <h1>Lista de Notificaciones:</h1>
                            <br>
                            <div>
                                <table>
                                    <tr>
                                        <td>Emisor:</td>
                                        <td>Descripción de la notificación:</td>
                                        <td style="border-right-style:hidden;border-top-style:hidden;"></td>
                                    </tr>
                                    <?php
                                    include "function.php";
                                    if (isset($_POST['submit'])) {
                                        $field = array("emisor" => $_POST['emisor']);
                                        $tbl = "notificaciones";
                                        insert($tbl, $field);
                                    }
                                    ?>
                                    <?php
                                    $sql = "select * from notificaciones";
                                    $result = db_query($sql);
                                    while ($row = mysqli_fetch_object($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->emisor; ?></td>
                                            <td><?php echo $row->descripcion; ?></td>
                                            <td>

                                                <a class="btn btn-primary" href="editar3.php?id=<?php echo $row->id; ?>"><i class="fa fa-pencil fa-lg"></i></a>
                                                <a class="btn btn-primary" href="borrar3.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash-o fa-lg"></i></a>

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
            <div id="notificaciones"></div>
        </div>
    </div>
    <div class="col-md-2"></div>
    </div>
    </div>




    <!-- Begin Footer
================================================== -->
    <div class="container">
        <div class="footer">
            <p class="pull-left">
                Copyright &copy; 2024 Organizador Web
            </p>
            <p class="pull-right">
                Organizador Web <a target="_blank"
                    href="">Administrativo</a>
            </p>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Footer
================================================== -->

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>