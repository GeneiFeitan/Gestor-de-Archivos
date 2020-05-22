<?php
include('../Modelo/login.php');
include('../Modelo/logout.php');



session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idPrivilegio= $_SESSION['idPrivilegio'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/estilo.css">

    <title>Inicio</title>
</head>
<body>
<?php
  if(isset($_SESSION['nombre_usuario']))
  {
    
if($idPrivilegio==3){
  include('../componentes/barraUsuario.php');
}else if($idPrivilegio==1){
  include('../componentes/barraDirector.php');
}
else if($idPrivilegio==2){
  include('../componentes/barraAdministrador.php');
}


?> 

<div class="container" >

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/inicio1.jpeg" alt="First slide" style="height:500px">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="../img/inicio2.jpeg" alt="First slide" style="height:500px">
    </div>
    <div class="carousel-item">
    <img id="Carrusel" class="d-block w-100" src="../img/inicio3.jpeg" alt="First slide" style="height:500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- Esta es la parte del footer que es lo que esta abajo de la pagina donde mostraremos las redes sociales -->
<footer>
       <div class="contenedor">
           <p class="copy">Inifap &copy; 2018</p>
           <div class="sociales">
                <a class="icon-facebook" target="_blank" href="https://es-la.facebook.com/"></a>
               <a class="icon-instagram" target="_blank" href="https://www.instagram.com/?hl=es-la"></a>
               <a class="icon-twitter" target="_blank" href="https://twitter.com/?lang=es"></a>
               <a class="icon-mail-alt" target="_blank" href="https://www.google.com/intl/es-419/gmail/about/#"></a>
           </div>
       </div>
   </footer>
</body>
<?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }
  ?>
</html>