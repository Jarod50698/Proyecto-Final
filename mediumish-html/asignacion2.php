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
				<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<!-- Begin Menu -->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="productos.html">Productos</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="asignarVehiculos.html">Asignar Vehiculos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="interaccionesClientes.php">Interacciones con
								Clientes </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="informesVentas.php">Informes de Venta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="tareas.php">Tareas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="notificaciones.php">Notificaciones</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Inicio de sesion</a>
						</li>
					</ul>
					<!-- End Menu -->
					<!-- Begin Search -->
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
						<span class="search-icon"><svg class="svgIcon-use" width="25" height="25"
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
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 col-md-offset-2">
					<div class="mainheading">
						<div class="row post-top-meta authorpage">
							<div class="col-md-10 col-xs-12">
								<h1>Lista de Vehiculos</h1>
								<span class="author-description">Seleccione el vehiculo que desea
									asignar a uno de sus conductores.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a>
				<img class="img-fluid img-thumb" src="assets/img/demopic/il_340x270.2639110412_gfeq.avif"
					alt>
			</a>
			<div class="graybg authorpage">
				<div class="container">
					<div class="listrecent listrelated">
						<!-- begin post -->
						<div class="authorpostbox">
							<form action="registAsignaVehi.php" method="post">
								<label for="name"><b>Nombre del empleado</b></label>
								<input type="text" placeholder="Nombre Completo" name="name" id="name"
									required>
								<br>
								<br>
								<label for="placa"><b>Número de placa del vehículo</b></label>
								<input type="text" placeholder="Placa Vehiculo" name="placa" id="placa"
									required><br>
								<br>

								<button type="submit" class="btn btn-primary" name="register">Asignar Vehículo</button>
								</form>
						</div>
					</div>
				</div>
			</div>
			<div>
			<h1>Lista de asignaciones:</h1>
			<br>
			<div><table border="1" >
		<tr>
			<td>id</td>
			<td>Empleado</td>
			<td>Placa del vehículo</td>
		</tr>

		<?php 
		$inc = include "conexion.php";
		if ($inc) {
		$sql="SELECT * from asignacionvehiculo";
		$result=mysqli_query($conex,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['empleado'] ?></td>
			<td><?php echo $mostrar['placa'] ?></td>
		</tr>
	<?php 
	}}
	 ?>
	</table>
				</div>
			<!-- end post -->

			<!-- Begin Twitter Timeline
================================================== -->
			<div class="container margtop3rem">
				<a class="twitter-grid"
					href="https://twitter.com/TwitterDev/timelines/539487832448843776">Organizador
					Administrativo</a>
				<script async src="https://platform.twitter.com/widgets.js"
					charset="utf-8"></script>
			</div>
			<!-- End Twitter Timeline
================================================== -->

			<!-- Begin Footer
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
