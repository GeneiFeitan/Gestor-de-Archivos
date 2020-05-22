<?php

require_once 'Copia de conexion.php';

class Evento{

	private $id_evento;
	private $nombre_evento;
	private $fecha;
	private $ubicacion;
	private $area;
	constant(TABLA) = 'evento';

	public function __construct($id_evento = null,$nombre_evento,$fecha,$ubicacion,$area){
		$this->id_evento = $id_evento;
		$this->nombre_evento = $nombre_evento;
		$this->fecha = $fecha;
		$this->ubicacion = $ubicacion;
		$this->area = $area;
	}

	public function __destruct(){
		echo "objeto destruido";
	}

	public function get_IdEvento(){
		return $this->id_evento;
	}

	public function get_NombreEvento(){
		return $this->nombre_evento;
	}

	public function get_Fecha(){
		return $this->fecha;
	}

	public function get_Ubicacion(){
		return $this->ubicacion;
	}

	public function get_Area(){
		return $this->area;
	}

	public function set_NombreEvento($nombre_evento){
		$this->nombre_evento = $nombre_evento;
	}

	public function set_Fecha($fecha){
		$this->fecha = $fecha;
	}

	public function set_Ubicacion($ubicacion){
		$this->ubicacion = $ubicacion;
	}

	public function set_Area($area){
		$this->area = $area;
	}


	
	public function guardar(){

		$conexion = new Conexion();
		//INSERTA
		$consulta = $conexion->prepare('INSERT INTO' . self::TABLA . '(nombre_evento, fecha, ubicacion, area) VALUES(:nombre_evento, :fecha, :ubicacion, :area) ');
		$consulta->bindParam(':nombre_evento', $this->nombre_evento);
		$consulta->bindParam(':fecha', $this->fecha);
		$consulta->bindParam(':ubicacion', $this->ubicacion);
		$consulta->bindParam(':area', $this->area);
		$this->id_evento = $conexion->lastInsertIn();

		

		$conexion = null;
		
	}

	public function editar(){

		$conexion = new Conexion();
		echo 'conectado correctamente';

		if($this->id_evento){ //MODIFICA
			$consulta = $conexion->prepare('UPDATE' . self::TABLA . 'SET nombre_evento = :nombre_evento, fecha = :fecha, ubicacion = :ubicacion, area = :area WHERE id_evento = :id_evento');
			$consulta->bindParam(':nombre_evento', $this->nombre_evento);
			$consulta->bindParam(':fecha', $this->fecha);
			$consulta->bindParam(':ubicacion', $this->ubicacion);
			$consulta->bindParam(':area', $this->area);
			$consulta->bindParam(':id_evento', $this->id_evento);
			$consulta->execute();
		}

		$conexion = null;


	}

	public function buscarPorId($id_evento){

		$conexion = new Conexion();
		$consulta = $conexion->prepare('SELECT nombre_evento, fecha, ubicacion, area FROM ' . self::TABLA . ' WHERE id_evento = :id_evento');
		$consulta->execute();
		$registro = $consulta->fetch();

		if ($registro){
			return new self($registro['nombre_evento'], $registro['fecha'], $registro['ubicacion'], $registro['area']);
		}else{
			return false;
		}
	}



	public function eliminar(){


	}
}


?>