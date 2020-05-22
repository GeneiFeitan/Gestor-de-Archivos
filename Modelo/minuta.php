<?php

require_once ('conexion.php');

class Minuta{

	public $id_minuta;
	public $nombre;
	public $fecha;
	public $asistentes;
	public $informes;
	public $motivo;
	public $anuncios;
	public $area;
	public $resp1;
	public $puesto1;
	public $resp2;
	public $puesto2;

	public $resp3;
	public $puesto3;
	public $resp4;
	public $puesto4;

	public $resp5;
	public $puesto5;
	public $resp6;
	public $puesto6;

	public $resp7;
	public $puesto7;
	public $resp8;
	public $puesto8;

	public function __construct(){}

	static function soloId($id){

	 return new self($id,'','','','');

	}


	public function insert(){

		$db = Db::conectar();
		
		$insert = $db->prepare('INSERT INTO minuta VALUES(0, :nombreMin, :fecha, :asistentes, :informes, :motivo, :anuncios, :idArea, 
		:resp1, :puesto1, :resp2, :puesto2,
		:resp3, :puesto3, :resp4, :puesto4,
		:resp5, :puesto5, :resp6, :puesto6,
		:resp7, :puesto7, :resp8, :puesto8)');

		$insert->bindValue('nombreMin',$this->nombre);
		$insert->bindValue('fecha',$this->fecha);
		$insert->bindValue('asistentes',$this->asistentes);
		$insert->bindValue('informes',$this->informes);
		$insert->bindValue('motivo',$this->motivo);
		$insert->bindValue('anuncios',$this->anuncios);
		$insert->bindValue('idArea',$this->area);
		$insert->bindValue('resp1',$this->resp1);
		$insert->bindValue('puesto1',$this->puesto1);
		$insert->bindValue('resp2',$this->resp2);
		$insert->bindValue('puesto2',$this->puesto2);

		$insert->bindValue('resp3',$this->resp3);
		$insert->bindValue('puesto3',$this->puesto3);
		$insert->bindValue('resp4',$this->resp4);
		$insert->bindValue('puesto4',$this->puesto4);

		$insert->bindValue('resp5',$this->resp5);
		$insert->bindValue('puesto5',$this->puesto5);
		$insert->bindValue('resp6',$this->resp6);
		$insert->bindValue('puesto6',$this->puesto6);

		$insert->bindValue('resp7',$this->resp7);
		$insert->bindValue('puesto7',$this->puesto7);
		$insert->bindValue('resp8',$this->resp8);
		$insert->bindValue('puesto8',$this->puesto8);

		return $insert->execute();
	}

	public function select(){
		$db = Db::conectar();
		$sql = " SELECT id_minuta,nombreMin, fecha, NomArea FROM minuta INNER JOIN area ON minuta.idArea=area.idArea";

		$result = $db->query($sql);

		return $result;

	}

	public function selectId($id){

		$db = Db::conectar();
		$sql = " SELECT id_minuta,nombreMin,fecha,asistentes,informes,motivo, anuncios,NomArea,
		resp1, puesto1, resp2, puesto2,
		resp3, puesto3, resp4, puesto4,
		resp5, puesto5, resp6, puesto6,
		resp7, puesto7, resp8, puesto8		
		FROM minuta INNER JOIN area ON minuta.idArea=area.idArea WHERE id_minuta = $id ";
		$result = $db->query($sql);
		return $result;
	}

	public function eliminar(){

		$db = Db::conectar();

		$select = $db->prepare('DELETE FROM minuta WHERE id_minuta=:id_minuta');
		$select->bindValue('id_minuta',$this->id_minuta);

		return $select->execute();

	}

	public function editar(){

		$db = Db::conectar();

		$consulta = $db->prepare('UPDATE minuta SET nombreMin = :nombreMin, fecha = :fecha, asistentes = :asistentes, informes = :informes, motivo = :motivo, anuncios = :anuncios, idArea = :idArea, 
		resp1 = :resp1, puesto1 = :puesto1, resp2 = :resp2, puesto2 = :puesto2,
		resp3 = :resp3, puesto3 = :puesto3, resp4 = :resp4, puesto4 = :puesto4,
		resp5 = :resp5, puesto5 = :puesto5, resp6 = :resp6, puesto6 = :puesto6,
		resp7 = :resp7, puesto7 = :puesto7, resp8 = :resp8, puesto8 = :puesto8
	    WHERE id_minuta = :id_minuta' );
		$consulta->bindValue('id_minuta', $this->id_minuta);
		$consulta->bindValue('nombreMin',$this->nombre);
		$consulta->bindValue('fecha',$this->fecha);
		$consulta->bindValue('asistentes',$this->asistentes);
		$consulta->bindValue('informes',$this->informes);
		$consulta->bindValue('motivo',$this->motivo);
		$consulta->bindValue('anuncios',$this->anuncios);
		$consulta->bindValue('resp1',$this->resp1);
		$consulta->bindValue('puesto1',$this->puesto1);
		$consulta->bindValue('resp2',$this->resp2);
		$consulta->bindValue('puesto2',$this->puesto2);
		$consulta->bindValue('idArea',$this->area);

		$consulta->bindValue('resp3',$this->resp3);
		$consulta->bindValue('puesto3',$this->puesto3);
		$consulta->bindValue('resp4',$this->resp4);
		$consulta->bindValue('puesto4',$this->puesto4);

		$consulta->bindValue('resp5',$this->resp5);
		$consulta->bindValue('puesto5',$this->puesto5);
		$consulta->bindValue('resp6',$this->resp6);
		$consulta->bindValue('puesto6',$this->puesto6);

		$consulta->bindValue('resp7',$this->resp7);
		$consulta->bindValue('puesto7',$this->puesto7);
		$consulta->bindValue('resp8',$this->resp8);
		$consulta->bindValue('puesto8',$this->puesto8);
		
		
	    return  $consulta->execute();


	}

}

?>