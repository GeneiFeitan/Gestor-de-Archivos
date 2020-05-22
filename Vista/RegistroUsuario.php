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
    <title>Document</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 	 
    <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>
<header>
<?php
  if(isset($_SESSION['nombre_usuario']) && ($idPrivilegio==2 || $idPrivilegio==1) )
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


    <form class="registro" action="../Controlador/insertUsuario.php" method="post">
  <div class="form-row">

    <div class="form-group col-md-4">
      <label for="inputNombre">Nombre</label>
      <input pattern="[A-Za-z]*"  required type="text" class="form-control" name="inputNombre" id="inputNombre" placeholder="Nombre">
    </div>

    <div class="form-group col-md-4">
      <label for="inputApePat">Apellido Paterno</label>
      <input pattern="[A-Za-z]*"  required type="text" class="form-control" name="inputApePat" id="inputApePat" placeholder="Apellido Paterno">
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputApeMat">Apellido Materno</label>
      <input pattern="[A-Za-z]*" required type="text" class="form-control" name="inputApeMat" id="inputApeMat" placeholder="Apellido Materno">
    </div>
    
  </div>

  <div class="form-group">
    <label for="inputCorreo">Fecha de Nacimiento</label>
    <input required type="date" class="form-control" name="inputFecha" id="inputFecha" placeholder="FechaNacimiento">
  </div>

  <div class="form-group">
    <label for="inputCorreo">Correo</label>
    <input required type="email" class="form-control" name="inputCorreo" id="inputCorreo" placeholder="correo">
  </div>

  <div class="form-group">
    <label for="inputTel">Telefono</label>
    <input  required pattern="[0-9]*" minlength= "7" maxlength="13" type="text" class="form-control" name="inputTel" id="inputTel" placeholder="7771234897">
  </div>

  <div class="form-row">
     <div class="form-group col-md-4">
      <label for="inputAreaTrabajo">Area de Trabajo</label>
      <select id="inputAreaTrabajo" name="inputAreaTrabajo" class="form-control" onchange="selectAreaTrabajo()">
      <option>Seleccione Area de Trabajo</option>
             <option value="Laboratorio">Laboratorio</option>
             <option value="Administracion">Administracion</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputArea">Área</label>
      <select id="inputArea" name="inputArea" class="form-control">
        <option>Seleccione Área de Trabajo...</option>
      </select>
    </div>

    
    <div class="form-group col-md-4">
      <label for="inputTipoUsuario">Tipo de Usuario</label>
      <select id="inputTipoUsuario" name="inputTipoUsuario" class="form-control">
        <option selected>Trabajador</option>
        <option>Administrador</option>
        <option>Director</option>
      </select>
    </div>

  </div>
  
   <button type="submit" class="btn btn-primary">Registrar</button>
   <button type="reset" class="btn btn-primary">Cancelar</button>
   
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
             results += '<option>Financieros</option>'; 
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