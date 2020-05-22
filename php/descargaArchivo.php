<?php
require('../Modelo/archivo.php');

$archivo=new Archivo();

$archivo->idArchivo=$_POST['id'];
$GLOBALS['idDescarga']=$archivo->idArchivo;


?>