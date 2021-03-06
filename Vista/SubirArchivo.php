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
    <title>Título</title>
    <meta charset="UTF-8" />
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/subirArchivo.css">
  
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
   
    <form class="archi" action="../Controlador/subeDirector.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <textarea name="comentarios" id="comentarios" rows="5" cols="40"></textarea>
            <label for="" class="formulario__label">Descripción</label>
        </div>

        <div class="form-row">
     <div class="form-group col-md-4">
      <label for="inputAreaTrabajo">Area de Trabajo</label>
      <select id="inputAreaTrabajo" name="inputAreaTrabajo" class="form-control" onchange="selectAreaTrabajo()">
      <option>Seleccione Area de Trabajo</option>
             <option value="Laboratorio">Laboratorio</option>
             <option value="Administracion">Administracion</option>
             <option value="Todos">Todos</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputArea">Área</label>
      <select id="inputArea" name="inputArea" class="form-control">
        <option>Seleccione Área de Trabajo...</option>
      </select>
    </div>
        
        <div class="drag-drop">
            <input type="file" name="archivo" />
            <span class="fa-stack fa-2x">
                <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                <i class="fa fa-circle fa-stack-1x top medium"></i>
                <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
            </span>
            <span class="desc">Añadir archivos</span>
        </div>
        <button type="submit" class="btn-primary">Enviar</button>
        <button type="reset" class="btn-primary">Cancelar</button>
    </form>
    <?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }


  
  ?>
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
            
             
         }else if (param == 'Todos') {
             results = '<option>Todos</option>';
              
         }
         return results;
     }
</script>
</body>
</html>