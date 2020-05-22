<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
<table class="table table-striped" id="main-table">
	<th>Id Minuta</th>
	<th>Nombre Minuta</th>
	<th>Fecha</th>
	<th>Área</th>
	<th>Reporte</th>
  <th>Editar</th>

<?php

$minuta = new Minuta();

  $datos = $minuta->select();

  while ($row = $datos->fetch(PDO::FETCH_ASSOC)) {
		echo '<tbody id="myTable">';

  	echo '<tr>';
  	echo '<td>',$row['id_minuta'],'</td>';
  	echo '<td>',$row['nombreMin'],'</td>';
  	echo '<td>',$row['fecha'],'</td>';
  	echo '<td>',$row['NomArea'],'</td>';
  	
    echo "<td> <a target='_blank' href=\"../Controlador/reporteMinuta.php?accion=reporte&&id=$row[id_minuta]\"><img src='../img/pdf.png' width='35px' height='35px'></td>";
    echo "<td> <a href=\"../Vista/updateMinuta.php?accion=editar&&id=$row[id_minuta]\"><img src='../img/editar.png'  width='30px' height='30px'></td>";
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