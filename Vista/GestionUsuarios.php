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

	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
  <link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
	<script src="../librerias/jquery-3.2.1.min.js"></script>
  <script src="../js/funciones.js"></script>
	<script src="../librerias/bootstrap/js/bootstrap.js"></script>
	<script src="../librerias/alertifyjs/alertify.js"></script>
  <script src="../librerias/select2/js/select2.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 	 
    <link rel="stylesheet" href="../css/GestionUsuario.css">
	
</head>

<body>
<?php
  if(isset($_SESSION['nombre_usuario']) && ($idPrivilegio==1) )
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

	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>
	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellido" class="form-control input-sm">
        	<label>Email</label>
        	<input type="text" name="" id="email" class="form-control input-sm">
        	<label>telefono</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
          <label for="inputApePat">Apellido Paterno</label>
          <input type="text" class="form-control" name="apePatU" id="apePatU">
        	<label>Apellido Materno</label>
        	<input type="text" name="" id="apeMatU" class="form-control input-sm">
          <label>Fecha de Nacimiento</label>
          <input type="date" class="form-control" name="fechau" id="fechau">
        	<label>Email</label>
        	<input type="text" name="" id="emailu" class="form-control input-sm">
        	<label>telefono</label>
        	<input type="text" name="" id="telefonou" class="form-control input-sm">
          <label>Area de Trabajo</label>
          <select id="AreaTrabajou" name="AreaTrabajou" class="form-control" onchange="selectAreaTrabajo()">
            <option>Seleccione Area de Trabajo</option>
             <option value="Laboratorio">Laboratorio</option>
             <option value="Administracion">Administracion</option>
           </select>
           <label for="Areau">Area</label>
      <select id="Areau" name="Areau" class="form-control">
        <option>Seleccione Area de Trabajo...</option>
      </select>
      <label>Tipo de Usuario</label>
      <select id="TipoUsuariou" name="TipoUsuariou" class="form-control">
        <option selected>Trabajador</option>
        <option>Administrador</option>
        <option>Director</option>
      </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
<?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }
  ?>


<script>
     
     
     function selectAreaTrabajo() {
         var areaTrabajo = document.getElementById('AreaTrabajou');
          
         var results = ObtenerArea(areaTrabajo.value);
         
         if (results.length > 0 && results != undefined) {  
             console.log(results);
             document.getElementById('Areau').innerHTML = results;
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


</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('../componentes/tabla.php');
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