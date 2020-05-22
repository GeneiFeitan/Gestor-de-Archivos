<!DOCTYPE html>
<html lang="en">
<head>
	<title>Logging</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	 <link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
</head>
<body>

	<div class="contenedor-form">
		<div class="toggle">
		</div>

		<div class="formulario">
			<h2>Iniciar Sesion</h2>
			<form  action="../Modelo/login.php" method="post">
				<input type="text" id="inputUsusuario_loguario" name="usuario_log" placeholder="Usuario" required>
				<input type="password" id="contraseña_log" name="contraseña_log" placeholder="Contraseña" required>
				<input type="submit" value="Iniciar Sesion">
			</form>
		</div>

		<div class="formulario" >
			<h2>Crear Cuenta</h2>
			<form action="" method="post">
				<input type="text" id="inputUsuario" name="inputUsuario" placeholder="Usuario" required>
				<input type="password" id="inputContra" name="inputContra" placeholder="Contraseña" required>
				<input type="email" id="inputCorreo" name="inputCorreo" placeholder="Correo" required>
				<input type="text" id="inputTelefono" name="inputTelefono" placeholder="Telefono">
				<input type="submit" value="Registrarse">
			</form>
		</div>

		<div class="reset-password">
			<a href="#">Olvide Contraseña</a>
		</div>
	</div>

	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>






