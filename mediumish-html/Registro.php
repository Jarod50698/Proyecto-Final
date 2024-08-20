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
    <form action="registrarUsuario.php" method="post">
    <h1>Registrarse</h1>
    <p>Agregue sus datos personales.</p>
    <br><br>
    <label for="name"><b>Nombre Completo</b></label>
        <input type="text" placeholder="Nombre Completo" name="name" id="name" required>

        <label for="email"><b>Correo electronico</b></label>
        <input type="text" placeholder="Correo Electronico" name="email" id="email" required>

        <label for="contraseña"><b>Contraseña</b></label>
        <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña" required>

        <input type="submit" name="register">

    <p>Ya tienes un usuario? <a href="login.php">Iniciar Sesión</a>.</p>

</form>

    
</body>

</html>
