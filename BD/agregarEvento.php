<?php

require_once('conexion.php');

$id_evento = $_POST['id_evento'];
$nombre_evento = $_POST['nombre_evento'];
$fecha = $_POST['fecha'];
$ubicacion = $_POST['ubicacion'];
$area = $_POST['area'];
try {

 $consulta = $gdb->prepare("INSERT INTO post(id_eventos,nombre_evento,fecha,ubicacion,id_area) VALUES (:id_evento, :nombre_evento, :fecha, :ubicacion, :area)");
        $consulta->bindParam(':id_evento', $id_evento);
		$consulta->bindParam(':nombre_evento', $nombre_evento);
		$consulta->bindParam(':fecha', $fecha);
		$consulta->bindParam(':ubicacion', $ubicacion);
		$consulta->bindParam(':area', $area);
		$consulta->execute();

	
} catch (PDOException $e) {

	echo 'ERROR!: ' . $e->getMessage() . '<br/>';
	die();
	
}
 
 

?>