<?php
require('../Modelo/archivo.php');

$mensaje=$_GET["id"];

$archivo=new Archivo();

$archivo->idArchivo=$mensaje;

$archivo->descarga();

?>