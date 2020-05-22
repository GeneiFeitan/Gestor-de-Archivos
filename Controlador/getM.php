<?php

include ('../Modelo/minuta.php');

if ((isset($_GET['accion'])) && (isset($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];

	$minuta = new Minuta();
	$array = $minuta->selectId($id);
	$datos = $array->fetch(PDO::FETCH_ASSOC);

}

?>