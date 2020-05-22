<?php 
include('../Modelo/evento.php');




session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idPrivilegio= $_SESSION['idPrivilegio'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Evento</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../librerias/jquery-3.2.1.min.js"></script>
  <script src="../js/funciones.js"></script>
	<script src="../librerias/bootstrap/js/bootstrap.js"></script>
	<script src="../librerias/alertifyjs/alertify.js"></script>
  <script src="../librerias/select2/js/select2.js"></script>
  


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 	 
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
  
</head>
<body>

  <?php
  if(isset($_SESSION['nombre_usuario']) )
  {
    
if($idPrivilegio==3){
  include('../componentes/barraUsuario.php');
  include('menuEventos.php');
  include('tablaEliminar.php');
}else if($idPrivilegio==1){
  include('../componentes/barraDirector.php');
  include('menuEventos.php');
  include('tablaEliminar.php');
}
else if($idPrivilegio==2){
  include('../componentes/barraAdministrador.php');
  include('menuEventos.php');
  include('tablaEliminar.php');
}


?> 
<div class="container">
		<div id="tabla"></div>
	</div>
<?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }
  ?>


</body>
</html>