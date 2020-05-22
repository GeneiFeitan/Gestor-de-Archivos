<?php
include ('../Controlador/getM.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Editar Minuta</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../img/CENIDPAVET.ico">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h3>Editar Minuta</h3>
    <form action="../Controlador/updateMinuta.php" method="POST">

     <div class="form-group">
        <label for="nombre_evento">Id Minuta:</label>
        <input type="text" class="form-control" value="<?php echo($datos["id_minuta"])?>" name="Input_id" id="Input_id" readonly  required>
      </div>
      <div class="form-group">
        <label for="nombre_evento">Nombre Minuta:</label>
        <input type="text" class="form-control" value="<?php echo($datos["nombreMin"])?>" name="Input_nombre" id="Input_nombre"  required>
      </div>
      <div class="form-group">
        <label for="fecha">Fecha:</label>
        <input type="date" class="form-control"  name="Input_fecha" id="Input_fecha" value="<?php echo($datos["fecha"])?>"  required>
      </div>
      <div class="form-group">
        <label for="Ubicacion">Asistentes:</label>
        <input type="text" class="form-control" name="Input_asistentes" id="Input_asistentes" value="<?php echo($datos["asistentes"])?>"  required>
      </div>
      <div class="form-group">
        <label for="Ubicacion">Informes:</label>
        <input type="text" class="form-control" name="Input_info" id="Input_info" value="<?php echo($datos["informes"])?>"  required>
      </div>
      <div class="form-group">
        <label for="Ubicacion">Motivo:</label>
        <input type="text" class="form-control" name="Input_motivo" id="Input_motivo" value="<?php echo($datos["motivo"])?>" required>
      </div>
      <div class="form-group">
        <label for="Ubicacion">Anuncios:</label>
        <input type="text" class="form-control" name="Input_anuncios" id="Input_anuncios" value="<?php echo($datos["anuncios"])?>"  required>
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 1:</label>
        <input type="text" class="form-control" name="Input_resp1" id="Input_resp1" value="<?php echo($datos["resp1"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto1" id="Input_puesto1" value="<?php echo($datos["puesto1"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 2:</label>
        <input type="text" class="form-control" name="Input_resp2" id="Input_resp2" value="<?php echo($datos["resp2"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto2" id="Input_puesto2" value="<?php echo($datos["puesto2"])?>" >
      </div>



      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 3:</label>
        <input type="text" class="form-control" name="Input_resp3" id="Input_resp3"  value="<?php echo($datos["resp3"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto3" id="Input_puesto3"  value="<?php echo($datos["puesto3"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 4:</label>
        <input type="text" class="form-control" name="Input_resp4" id="Input_resp4"  value="<?php echo($datos["resp4"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto4" id="Input_puesto4"  value="<?php echo($datos["puesto4"])?>" >
      </div>


       <div class="form-group">
        <label for="id_eventos">Nombre Responsable 5:</label>
        <input type="text" class="form-control" name="Input_resp5" id="Input_resp5"  value="<?php echo($datos["resp5"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto5" id="Input_puesto5"  value="<?php echo($datos["puesto5"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 6:</label>
        <input type="text" class="form-control" name="Input_resp6" id="Input_resp6"  value="<?php echo($datos["resp6"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto6" id="Input_puesto6"  value="<?php echo($datos["puesto"])?>" >
      </div>


       <div class="form-group">
        <label for="id_eventos">Nombre Responsable 7:</label>
        <input type="text" class="form-control" name="Input_resp7" id="Input_resp7"  value="<?php echo($datos["resp7"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto7" id="Input_puesto7"  value="<?php echo($datos["puesto7"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Nombre Responsable 8:</label>
        <input type="text" class="form-control" name="Input_resp8" id="Input_resp8" value="<?php echo($datos["resp8"])?>" >
      </div>
      <div class="form-group">
        <label for="id_eventos">Puesto:</label>
        <input type="text" class="form-control" name="Input_puesto8" id="Input_puesto8"  value="<?php echo($datos["puesto8"])?>" >
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
      <select  id="InputArea" name="InputArea" class="form-control">
        <option>Seleccione Área de Trabajo...</option>
      </select>
    </div>
    </div>
      <button type="submit" class="btn btn-primary">Editar</button>
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
             results += '<option>Financierosicali</option>'; 
             results += '<option>Materiales</option>'; 
             results += '<option>Sistemas</option>'; 
            
             
         }
         return results;
     }
</script>

</body>
</html>

