<?php
require_once('conexion.php');


	$usuario_log=$_POST['usuario_log'];// CONTENER EN UNA VARIABLE LO ESCRITO EN EL INPUT USUARIO_LOG
	$contrasena_log=$_POST['contraseña_log'];//CONTENER EN UNA VARIABLE LO ESCRITO EN EL INPUT CONTRASEÑA_LOG
	$db=Db::conectar();
	$loginUsuario=$db->prepare("SELECT * FROM usuario WHERE idUsuario=:usuario_log AND Contra=:contrasena_log");// BUSCAR EL USUARIO
	$loginUsuario->bindParam(':usuario_log', $usuario_log, PDO::PARAM_STR);
	$loginUsuario->bindParam(':contrasena_log', $contrasena_log, PDO::PARAM_STR);
	$loginUsuario->execute();

	if($loginUsuario->rowCount()>0)// SI LA QUERY ARROJA UN REGISTRO EXISTENTE...
	{	
		date_default_timezone_set('America/Mexico_City');
		$ultimaCon=date('Y-M-D G:i:s');
		$actualizarUs=$db->prepare("UPDATE usuario SET estado='conectado', timeLogin=:ultimaCon WHERE idUsuario=:usuario_log");
		$actualizarUs->bindParam(':ultimaCon', $ultimaCon, PDO::PARAM_STR);
		$actualizarUs->bindParam(':usuario_log', $usuario_log, PDO::PARAM_STR);
		$actualizarUs->execute();

		header("Location: ../Vista/inicio.php");// ACCEDER AL INICIO

		$infoUsuario = $loginUsuario->fetch(PDO::FETCH_ASSOC);//GENERAR LA VARIABLE DE SESIÓN
		session_start();
		$_SESSION['nombre_usuario']=$infoUsuario['Nombre'];
		$_SESSION['idUsuario']=$infoUsuario['idUsuario'];
		$_SESSION['IdPrivilegio']=$infoUsuario['idPrivilegio'];
		$_SESSION['Contra']=$infoUsuario['Contra'];
		$_SESSION['ApePat']=$infoUsuario['ApePat'];
		$_SESSION['ApeMat']=$infoUsuario['ApeMat'];
		$_SESSION['telefono']=$infoUsuario['telefono'];
		$_SESSION['correo']=$infoUsuario['correo'];
		$_SESSION['fechaNac']=$infoUsuario['fechaNac'];
		$_SESSION['idArea']=$infoUsuario['idArea'];
		$_SESSION['idPrivilegio']=$infoUsuario['idPrivilegio'];

	}

	if($loginUsuario->rowCount()<0)
	{
		echo"<script>
                alert('Usuario o Contraseña Incorrectos');
                window.location= '../Vista/formulario.php'
    </script>";//ALERTA DE QUE EL USUARIO NO ESTA REGISTRADO
	}
	


?>