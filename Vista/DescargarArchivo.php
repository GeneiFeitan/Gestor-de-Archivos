<?php
include('../Modelo/login.php');
include('../Modelo/logout.php');



session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idPrivilegio= $_SESSION['idPrivilegio'];

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
<!--
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
-->
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
  if(isset($_SESSION['nombre_usuario']))
  {
    
if($idPrivilegio==3){
  include('../componentes/barraUsuario.php');
  include('menuArchivos.php');
  include('../componentes/tablaArchivosTrabajador.php');
}else if($idPrivilegio==1){
  include('../componentes/barraDirector.php');
  include('menuArchivos.php');
  include('../componentes/tablaArchivos.php');
}
else if($idPrivilegio==2){
  include('../componentes/barraAdministrador.php');
  include('menuArchivos.php');
  include('../componentes/tablaArchivosTrabajador.php');
}


?> 
<!--
	<div class="container">
		<div id="tabla"></div>
	</div>
-->



<?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }
  ?>





</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
	//	$('#tabla').load('../componentes/tablaArchivos.php');
    //$('#buscador').load('../componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
      
      $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>





	
