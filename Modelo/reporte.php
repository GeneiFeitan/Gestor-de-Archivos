<?php
  
  require_once ('conexion.php');

  /**
   * 
   */
  class Reporte{

  	public $id_rep;
  	public $nombre;
  	public $fecha;
  	public $id_user;
  	public $id_area;

  	
  	public function __construct(){}

  	public function insert(){

  		$db = Db::conectar();

  		$insert = $db->prepare('INSERT INTO reporte VALUES(0, :nombreRep, :fachaRep, :idUsuario, :id_area)');

  		$inser->bindValue('nombreRep',$this->nombre);
  		$inser->bindValue('fachaRep',$this->fecha);
  		$inser->bindValue('idUsuario',$this->id_user);
  		$inser->bindValue('id_area',$this->id_area);

  		return $insert->execute();

  	}



  }


?>