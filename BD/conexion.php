<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=gestordeArchivos;host=localhost';
$usuario = 'root';
$contraseña = 'root';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
   echo 'conectado correctamente';
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}




?>
