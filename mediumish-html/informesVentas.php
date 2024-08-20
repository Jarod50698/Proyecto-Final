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
                    <li class="nav-item active">
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

    <!-- Begin Top Author Page
================================================== -->

    <!-- Begin Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mainheading">
                    <h1>Informes de Ventas</h1>
                    <p class="lead">Genere informes que muestren el rendimiento de los vendedores, los ingresos por vehículo y otros datos relevantes.</p>
                </div>
                <form action="registraVenta.php" method="post" id="taskForm">
                    <div class="form-group">
                        <label for="empleado">Digite el nombre del empleado:</label>
                        <input type="text" placeholder="empleado completo" class="form-control" name="empleado" id="empleado" required>

                    </div>
                    <div class="form-group">
                        <label for="producto">Nombre de la producto:</label>
                        <input type="text" placeholder="producto" class="form-control" name="producto" id="producto" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" placeholder="Precio" class="form-control" name="precio" id="precio" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" placeholder="cantidad" class="form-control" name="cantidad" id="cantidad" required>
                    </div>
                    <div class="form-group">
                        <label for="total">Monto total:</label>
                        <input type="text" placeholder="Total" class="form-control" name="total" id="total" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Realizar venta</button>
                </form>
                <br>
                <div class="report-results mt-4">
                    <h2>Informes de ventas</h2>
                    <!-- Aquí se mostrarán los resultados del informe -->
                    <div class="task-results mt-4">
                        <div>
                            <br>
                            <div>
                                <table>
                                    <tr>
                                        <td>Nombre del empleado:</td>
                                        <td>Nombre del producto:</td>
                                        <td>Precio:</td>
                                        <td>Cantidad:</td>
                                        <td>Total:</td>
                                        <td style="border-right-style:hidden;border-top-style:hidden;"></td>
                                    </tr>
                                    <?php
                                    include "function.php";
                                    if (isset($_POST['submit'])) {
                                        $field = array("empleado" => $_POST['empleado']);
                                        $tbl = "ventas";
                                        insert($tbl, $field);
                                    }
                                    ?>
                                    <?php
                                    $sql = "select * from ventas";
                                    $result = db_query($sql);
                                    while ($row = mysqli_fetch_object($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->empleado; ?></td>
                                            <td><?php echo $row->producto; ?></td>
                                            <td><?php echo $row->precio; ?></td>
                                            <td><?php echo $row->cantidad; ?></td>
                                            <td><?php echo $row->total; ?></td>
                                            <td>

                                                <a class="btn btn-primary" href="editar4.php?id=<?php echo $row->id; ?>"><i class="fa fa-pencil fa-lg"></i></a>
                                                <a class="btn btn-primary" href="borrar4.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash-o fa-lg"></i></a>

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
        </div>
    </div>
    <div class="col-md-2"></div>
    </div>

    <!-- End Author Posts
================================================== -->

<div class="container">
			<div class="footer">
				<p class="pull-left">
					Copyright &copy; 2024 Organizador Web
				</p>
				<p class="pull-right">
					Organizador Web <a target="_blank"
						href>Administrativo</a>
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