<?php
include('../Modelo/login.php');
include('../Modelo/logout.php');



session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idPrivilegio= $_SESSION['idPrivilegio'];

?> 
 
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Eventos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>

  <body>

   
   <?php
  if(isset($_SESSION['nombre_usuario']) )
  {
    
if($idPrivilegio==3){
  include('../componentes/barraUsuario.php');
  include('menuEventos.php');
}else if($idPrivilegio==1){
  include('../componentes/barraDirector.php');
  include('menuEventos.php');

}
else if($idPrivilegio==2){
  include('../componentes/barraAdministrador.php');
  include('menuEventos.php');

}


?> 

  <div class="container">
    <h2>Evento</h2>
    <form action="../Controlador/agregarEvento.php" method="POST">
      <div class="form-group">
        <label for="id_eventos">Nombre Evento:</label>
        <input type="text" class="form-control" name="Input_nombre" id="Input_nombre" placeholder="Nombre Evento" required>
      </div>
    	<div class="form-group">
    		<label for="fecha">Fecha:</label>
    		<input type="date" class="form-control" name="Input_fecha" id="Input_fecha" placeholder="Fecha" required>
    	</div>
      <div class="form-group">
        <label for="Ubicacion">Ubicación:</label>
        <input type="text" class="form-control" name="Input_ubicacion" id="Input_ubicacion" placeholder="Ubicacion" required>
      </div>
      <div class="form-row">
     <div class="form-group col-md-4">
      <label for="inputAreaTrabajo">Área de Trabajo</label>
      <select id="inputAreaTrabajo" name="inputAreaTrabajo" class="form-control" onchange="selectAreaTrabajo()">
      <option>Seleccione Área de Trabajo</option>
             <option value="Laboratorio">Laboratorio</option>
             <option value="Administracion">Administracion</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputArea">Área</label>
      <select id="InputArea" name="InputArea" class="form-control">
        <option>Seleccione Área de Trabajo...</option>
      </select>
    </div>
    </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
      <button type="reset" class="btn btn-primary">Cancelar</button>
    </form>
  </div>

  <script>
     
     
     function selectAreaTrabajo() {
         var areaTrabajo = document.getElementById('inputAreaTrabajo');
          
         var results = ObtenerArea(areaTrabajo.value);
         
         if (results.length > 0 && results != undefined) {  
             console.log(results);
             document.getElementById('InputArea').innerHTML = results;
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

  <script type="text/javascript" src="js/validar.js"></script>

  </body>
  <?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }
  ?>
  </html>

