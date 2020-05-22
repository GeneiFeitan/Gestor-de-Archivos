<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>


<table class="table table-striped" id="main-table">
	<th>Id Evento</th>
	<th>Nombre Evento</th>
	<th>Fecha</th>
	<th>Ubicación</th>
	<th>Área</th>
	<th>Eliminar</th>
  
<?php


  $evento = new Evento();
  $datos = $evento->select();

  while ($row = $datos->fetch(PDO::FETCH_ASSOC)) {
		echo '<tbody id="myTable">';

  	echo '<tr>';
  	echo '<td>',$row['id_evento'],'</td>';
  	echo '<td>',$row['nombre_evento'],'</td>';
  	echo '<td>',$row['fecha_evento'],'</td>';
  	echo '<td>',$row['ubicacion'],'</td>';
  	echo '<td>',$row['NomArea'],'</td>';
  	
		echo"<td>
		<button class=\"btn btn-danger glyphicon glyphicon-remove\"
		onclick=\"preguntarSiNoEventos($row[id_evento])\">
		
		</button>
	</td>";
		echo '</tr>';
		echo '</tbody>';

  	
  }
?>
	
</table>

<script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>