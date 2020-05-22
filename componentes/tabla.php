
<?php 
	session_start();
	require('../Modelo/usuario.php');
	

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Gestion de Usuarios</h2>
	<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>

		<table class="table table-hover table-condensed table-bordered">
		<caption>
			
		</caption>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>ApePat</th>
				<th>ApeMat</th>
				<th>telefono</th>
				<th>correo</th>
				<th>FechaNac</th>
				<th>Estado</th>
				<th>TimeLogin</th>
				<th>timeLogout</th>
				<th>Área</th>
				<th>Privilegio</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>

			<?php 

					$usuario = new Usuario();
					$datos = $usuario->select();

					while ($row = $datos->fetch(PDO::FETCH_ASSOC)) {
							
						//Llena un arreglo para pasar los datos por el boton
						$datitos=$row['idUsuario']."||".
							   $row['Nombre']."||".
							   $row['Contra']."||".
							   $row['ApePat']."||".
							   $row['ApeMat']."||".
							   $row['telefono']."||".
							   $row['correo']."||".
							   $row['fechaNac']."||".
							   $row['NomArea']."||".
							   $row['nombrePri'];

			 ?>
						 <tbody id="myTable">

			<tr>
				<td><?php echo $row['idUsuario']?></td>
				<td><?php echo $row['Nombre']?></td>
				<td><?php echo $row['ApePat']?></td>
				<td><?php echo $row['ApeMat']?></td>
				<td><?php echo $row['telefono']?></td>
				<td><?php echo $row['correo']?></td>
				<td><?php echo $row['fechaNac']?></td>
				<td><?php echo $row['estado']?></td>
				<td><?php echo $row['timeLogin']?></td>
				<td><?php echo $row['timeLogout']?></td>
				<td><?php echo $row['NomArea']?></td>
				<td><?php echo $row['nombrePri']?></td>

				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datitos?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove"
					onclick="preguntarSiNo(<?php echo $row['idUsuario']?>)">
					
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