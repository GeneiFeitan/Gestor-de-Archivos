<?php

require ('../Modelo/minuta.php');

 if ((isset($_GET['accion']))  && (isset($_GET['id'])) && ($_GET['accion'] == 'reporte')){

  $id = $_GET['id'];
  $minuta = new Minuta;
  $datos = $minuta->selectId($id);
}

if ((isset($_GET['accion']))  && (isset($_GET['id'])) && ($_GET['accion'] == 'eliminar')) {

	$minuta = new Minuta();
	$minuta->id_minuta=$_GET['id'];
	$array = $minuta->eliminar();


	if ($array) {
		echo"<script>
                alert('Minuta Eliminada Correctamente');
                window.location= '../Vista/EliminarMinuta.php'
    </script>";
	}else{
		echo"<script>
                alert('Error al Eliminar Minuta');
                window.location= '../Vista/EliminarMinuta.php'
    </script>";
	}


}
  ?>