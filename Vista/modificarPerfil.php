<?php
include('../Modelo/login.php');
include('../Modelo/logout.php');



session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idPrivilegio= $_SESSION['idPrivilegio'];

$apePat= $_SESSION['ApePat'];
$apeMat= $_SESSION['ApeMat'];
$fechaNac= $_SESSION['fechaNac'];
$correo= $_SESSION['correo'];
$telefono= $_SESSION['telefono'];
$contra= $_SESSION['Contra'];


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../js/validarContra.js" ></script>
    <link rel="stylesheet" href="../css/stylecontra.css">

    <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>
<header>
<?php
  if(isset($_SESSION['nombre_usuario']) )
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
</header>


    <form class="registro" action="../Controlador/updateUsuario.php" method="post">
  
    <div class="form-group col-md-5" hidden>
      <label for="inputNombre">Id</label>
      <input required type="text" value="<?php echo $idUsuario ?>" class="form-control" name="inputId" id="inputId" placeholder="Nombre">
    </div>

    <div class="form-group col-md-5">
      <label for="inputNombre">Id</label>
      <input required type="text" disabled value="<?php echo $idUsuario ?>" class="form-control" name="inputIds" id="inputIds" placeholder="Nombre">
    </div>
  <div class="form-row">

  

    <div class="form-group col-md-4">
      <label for="inputNombre">Nombre</label>
      <input required type="text" value="<?php echo $nombreUsuario ?>" class="form-control" name="inputNombre" id="inputNombre" placeholder="Nombre">
    </div>

    <div class="form-group col-md-4">
      <label for="inputApePat">Apellido Paterno</label>
      <input required type="text" value="<?php echo $apePat ?>" class="form-control" name="inputApePat" id="inputApePat" placeholder="Apellido Paterno">
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputApeMat">Apellido Materno</label>
      <input required type="text" value="<?php echo $apeMat ?>" class="form-control" name="inputApeMat" id="inputApeMat" placeholder="Apellido Materno">
    </div>
    
  </div>

  <div class="form-group">
    <label for="inputCorreo">Fecha de Nacimiento</label>
    <input required type="date" value="<?php echo $fechaNac ?>" class="form-control" name="inputFecha" id="inputFecha" placeholder="correo">
  </div>

  <div class="form-group">
    <label for="inputCorreo">Correo</label>
    <input required type="email" value="<?php echo $correo ?>" class="form-control" name="inputCorreo" id="inputCorreo" placeholder="correo">
  </div>

  <div class="form-group">
    <label for="inputTel">Telefono</label>
    <input required type="number" value="<?php echo $telefono ?>" class="form-control" name="inputTel" id="inputTel" placeholder="7771234897">
  </div>
  
  <div class="form-group">
      <label for="inputNombre">Contraseña</label>
      <input required type="password" value="<?php echo $contra ?>" class="form-control" name="inputContra" id="inputContra" placeholder="Nombre">
    </div>

    <div class="form-group">
      <label for="inputNombre">Confirmar Contraseña</label>
      <input required type="password" class="form-control" name="inputContra2" id="inputContra2" placeholder="Nombre">
    </div>
    <div id="error2"> </div>
          </div>
  
  
   <button id="ok" type="submit" class="btn btn-primary">Actualizar</button>
   
</form>


<script>
     
     
     function selectAreaTrabajo() {
         var areaTrabajo = document.getElementById('inputAreaTrabajo');
          
         var results = ObtenerArea(areaTrabajo.value);
         
         if (results.length > 0 && results != undefined) {  
             console.log(results);
             document.getElementById('inputArea').innerHTML = results;
         } else {
             console.log('No hay nada');
         }
     }
     
     function ObtenerArea(param) {
         var results = '';
         
         if (param == 'Laboratorio' ) {
             results = '<option>Anaplasma</option>';
             results += '<option>Artropodologia</option>';
             results += '<option>Babesia</option>';
             results += '<option>Helmintologia</option>';
                         
         } else if (param == 'Administracion') {
             results = '<option>Recursos Humanos</option>';
             results += '<option>Financierosicali</option>'; 
             results += '<option>Materiales</option>'; 
             results += '<option>Sistemas</option>'; 
            
             
         }
         return results;
     }
</script>


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
     <?php 
      echo $_SESSION['idPrivilegio'];
      ?>
    if($_SESSION['idPrivilegio']==3){

      $('#barra').load('../componentes/barraDirector.php');

    }
    
		
	});
</script>