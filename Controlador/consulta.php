<?php
  
  require('../Modelo/evento.php');

  $evento = new Evento();

  $datos = $evento->select();

  while ($row = $datos->fetch_array()) {

  	echo '<tr>';

  	echo '<td>',$row['nombre_evento'],'</td>';
  	echo '<td>',$row['fecha'],'</td>';
  	echo '<td>',$row['ubicacion'],'</td>';
  	echo '<td>',$row['area'],'</td>';

  	echo '</tr>';
  	
  }





?>