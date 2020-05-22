<table class="table table-striped" id="main-table">
	<th>Id Evento</th>
	<th>Nombre Evento</th>
	<th>Fecha</th>
	<th>Ubicacion</th>
	<th>Area</th>

<?php

$evento = Evento::ningunDato();

  $datos = $evento->select();

  while ($row = $datos->fetch(PDO::FETCH_ASSOC)) {

  	echo '<tr>';
  	echo '<td>',$row['id_evento'],'</td>';
  	echo '<td>',$row['nombre_evento'],'</td>';
  	echo '<td>',$row['fecha_evento'],'</td>';
  	echo '<td>',$row['ubicacion'],'</td>';
  	echo '<td>',$row['idArea'],'</td>';
  	
   /* echo "<td> <a href=\"../Vista/update.php?accion=editar&&id=$row[id_evento]\"><img src='../img/editar.png'  width='30px' height='30px'></td>";
    echo '</tr>';*/
  	
  }
?>
	
</table>