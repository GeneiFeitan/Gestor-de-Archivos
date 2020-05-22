
<?php 
	session_start();
	require('../Modelo/archivo.php');
	

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Archivos</h2>
	<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>

		<table class="table table-hover table-condensed table-bordered">
		
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>fecha</th>
				
				<th>Área de trabajo</th>
				<th>Descripcion</th>
                <th>Descargar</th>
			    

			</tr>

			<?php 

					$archivo = new Archivo();
					$datos = $archivo->selectPorArea();

					$datoArea=$archivo->selectArea();


					while ($row = $datos->fetch(PDO::FETCH_ASSOC)) {
							
						//Llena un arreglo para pasar los datos por el boton
						$datitos=$row['idArchivos']."||".
							   $row['NombreArchivo']."||".
                               $row['fecha']."||".
                               $row['Nombre']."||".
							   $row['NomArea']."||".
							   $row['descripcion'];

			 ?>
						 <tbody id="myTable">
			<tr>
				<td><?php echo $row['idArchivos']?></td>
				<td><?php echo $row['NombreArchivo']?></td>
				<td><?php echo $row['fecha']?></td>
				
				<td><?php echo $datoArea?></td>
				<td><?php echo $row['descripcion']?></td>

               <td>
					<button class="btn btn-success glyphicon glyphicon-remove"
					onclick="preguntarSiNoDescarga(<?php echo $row['idArchivos']?>)">
					
					</button>
				</td>
							
				
			</tr>
							</tbody>
			
			<?php 
					}
			 ?>
		</table>
	</div>
</div>

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