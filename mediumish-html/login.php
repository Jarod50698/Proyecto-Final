<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Registrarse</title>
<style>
  body {
  background-image: url('assets/img/demopic/images\ \(1\).jpg');
}
</style>
</head>

<body>
  <form action="ingresar.php" method="post">
    <h1>Ingresar</h1>
    <p>Por favor indique su correo electronico y contraseña.</p>
    <br><br>
    <label for="email"><b>Correo electronico</b></label>
    <input type="text" placeholder="Correo Electronico" name="email" id="email" required>

    <label for="contraseña"><b>Contraseña</b></label>
    <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña" required>

    <input type="submit" name="register">

    <p>Desea crear un usuario? <a href="registro.php">Registrarse</a>.</p>

  </form>

  </form>

</body>

</html>