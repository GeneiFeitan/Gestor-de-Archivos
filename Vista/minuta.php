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
    <title>Minuta</title>
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
  include('MenuMinutasUsuarioN.php');
}else if($idPrivilegio==1){
  include('../componentes/barraDirector.php');
  include('menuMinuta.php');}
else if($idPrivilegio==2){
  include('../componentes/barraAdministrador.php');
  include('menuMinuta.php');
}


?> 
   
  <div class="container">
    <h2>Generar Minuta</h2>
    <form action="../Controlador/agregarMinuta.php" method="POST">
      <div class="form-group">
        <label for="id_eventos">Nombre Minuta:</label>
        <input type="text" class="form-control" name="Input_nombre" id="Input_nombre" placeholder="Nombre Minuta" required>
      </div>
    	<div class="form-group">
    		<label for="fecha">Fecha:</label>
    		<input type="date" class="form-control" name="Input_fecha" id="Input_fecha" placeholder="Fecha" required>
    	</div>
      <div class="form-group">
        <label for="Ubicacion">Asistentes:</label>
        <input type="text" class="form-control" name="Input_asistentes" id="Input_ubicacion" placeholder="Asistentes" required>
      </div>
      <div class="form-group">
        <label for="area">Información:</label>
        <input type="text" class="form-control" name="Input_info" id="Input_area" placeholder="Informacion" required>
      </div>
      <div class="form-group">
        <label for="area">Motivo:</label>
        <input type="text" class="form-control" name="Input_motivo" id="Input_area" placeholder="Motivo" required>
      </div>
      <div class="form-group">
        <label for="area">Anuncios:</label>
        <input type="text" class="form-control" name="Input_anuncios" id="Input_anuncios" placeholder="Anuncios" required>
      </div>


      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 1:</label>
        <input type="text" class="form-control" name="Input_resp1" id="Input_resp1"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto1" id="Input_puesto1"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 2:</label>
        <input type="text" class="form-control" name="Input_resp2" id="Input_resp2" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto2" id="Input_puesto2"  >
      </div>

       <div class="form-group">
        <label for="id_eventos">Nombre Responsable 3:</label>
        <input type="text" class="form-control" name="Input_resp3" id="Input_resp3"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto3" id="Input_puesto3"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 4:</label>
        <input type="text" class="form-control" name="Input_resp4" id="Input_resp4"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto4" id="Input_puesto4" >
      </div>


       <div class="form-group">
        <label for="id_eventos">Nombre Responsable 5:</label>
        <input type="text" class="form-control" name="Input_resp5" id="Input_resp5"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto5" id="Input_puesto5" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 6:</label>
        <input type="text" class="form-control" name="Input_resp6" id="Input_resp6"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto6" id="Input_puesto6"  >
      </div>


       <div class="form-group">
        <label for="id_eventos">Nombre Responsable 7:</label>
        <input type="text" class="form-control" name="Input_resp7" id="Input_resp7" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto7" id="Input_puesto7" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 8:</label>
        <input type="text" class="form-control" name="Input_resp8" id="Input_resp8"  >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto8" id="Input_puesto8"  >
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

      <button type="submit" class="btn btn-primary">Crear</button>
      <button type="reset" class="btn btn-primary">Cancelar</button>
    </form>
  </div>


  <script type="text/javascript" src="js/validar.js"></script>
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

  </body>
  <?php
}
else{
    header("location:../index.php");
    ob_end_flush();
  }
  ?>
  </html>


