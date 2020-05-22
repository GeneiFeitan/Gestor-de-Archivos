
<?php 
	 require('../Modelo/usuario.php');

	 $usuario=new Usuario();
	
	 $usuario->idUsuario=$_POST['id'];
	 $usuario->elimina();
 ?>