<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
<table class="table table-striped" id="main-table">
	<th>Id Minuta</th>
	<th>Nombre Minuta</th>
	<th>Fecha</th>
	<th>Área</th>
	<th>Eliminar</th>
  
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
  	
    echo"<td>
		<button class=\"btn btn-danger glyphicon glyphicon-remove\"
		onclick=\"preguntarSiNoMinutas($row[id_minuta])\">
		
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