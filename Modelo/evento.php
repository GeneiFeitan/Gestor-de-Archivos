<?php

require_once ('conexion.php');

class Evento{

	public $id_evento;
	public $nombre_evento;
	public $fecha;
	public $ubicacion;
	public $area;


	public function __construct(){}

	static function ningunDato(){
		return new self('','','','','');
	}

	static function soloId($id){

		return new self($id,'','','','');

	}

	public function insert(){

		$db = Db::conectar();
		
		$insert = $db->prepare('INSERT INTO Evento VALUES(0, :nombre_evento, :fecha_evento, :ubicacion, :idArea)');

		$insert->bindValue('nombre_evento',$this->nombre_evento);
		$insert->bindValue('fecha_evento',$this->fecha);
		$insert->bindValue('ubicacion',$this->ubicacion);
		$insert->bindValue('idArea',$this->area);
		return $insert->execute();
	}

	public function editar(){

		$db = Db::conectar();

		$consulta = $db->prepare('UPDATE evento SET nombre_evento = :nombre_evento, fecha_evento = :fecha_evento, ubicacion = :ubicacion, idArea = :idArea WHERE id_evento = :id_evento' );
		$consulta->bindValue('id_evento', $this->id_evento);
		$consulta->bindValue('nombre_evento', $this->nombre_evento);
		$consulta->bindValue('fecha_evento', $this->fecha);
		$consulta->bindValue('ubicacion', $this->ubicacion);
		$consulta->bindValue('idArea', $this->area);
	    
	    return  $consulta->execute();


	}


	public function eliminar(){

		$db = Db::conectar();

		$select = $db->prepare('DELETE FROM evento WHERE id_evento=:id_evento');
		$select->bindValue('id_evento',$this->id_evento);

		return $select->execute();

	}

	public function select(){
		$db = Db::conectar();
		$sql = " SELECT id_evento, nombre_evento, fecha_evento, ubicacion, NomArea FROM evento INNER JOIN area ON evento.idArea=area.idArea ";

		$result = $db->query($sql);

		return $result;

	}

	public function selectM(){
		$db = Db::conectar();
		$sql = " SELECT id_evento, nombre_evento, fecha_evento,ubicacion,NomArea FROM evento INNER JOIN area on evento.idArea=area.idArea WHERE MONTH(fecha_evento) = MONTH(CURDATE())";

		$result = $db->query($sql);

		return $result;
	}


	public function selectId($id){

		$db = Db::conectar();
		$sql = " SELECT * FROM evento WHERE id_evento = $id ";
		$result = $db->query($sql);
		return $result;


	}
}


?>