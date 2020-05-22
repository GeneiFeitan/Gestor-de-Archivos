<?php 

require('../Modelo/archivo.php');

include('../Modelo/login.php');
include('../Modelo/logout.php');



session_start();
$nombreUsuario= $_SESSION['nombre_usuario'];//VARIABLE DE SESIÓN NOMBRE DE USUARIO
$idUsuario= $_SESSION['idUsuario'];//VARIABLE DE SESIÓN Id DE USUARIO
$idArea= $_SESSION['idArea'];//VARIABLE DE SESIÓN AREA DE TRABAJO


$archivo=new Archivo();
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

$archivo->descripcion=$_POST['comentarios'];
$archivo->nombre=$_FILES['archivo']['name'];
$archivo->idUsuario=$idUsuario;
$archivo->idArea=$idArea;
$archivo->ruta='../GestorArchivos/archivos';





//Funcion que cre la carpeta archivos en caso de no existir y ahi guarda el archivo
if(!file_exists('archivos')){
	//mkdir Crea el directorio
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
			//Manda a insertar los datos del archivo en la base de datos
			$archivo->insert();
			echo"<script>
                alert('Archivo guardado Correctamente');
                window.location= '../Vista/SubirArchivo.php'
    </script>";
		}else{
			echo"<script>
                alert('No se pudo Guardar el Archivo');
                window.location= '../Vista/SubirArchivo.php'
    </script>";
		}
	}
	//En caso de que exista la carpeta archivos guarda el archivo dentro
}else{
	if(move_uploaded_file($guardado, 'archivos/'.$nombre)){
		$archivo->insert();
		echo"<script>
                alert('Archivo guardado Correctamente');
                window.location= '../Vista/SubirArchivoTrabajador.php'
    </script>";
	}else{
		echo"<script>
                alert('No se pudo Guardar el Archivo');
                window.location= '../Vista/SubirArchivoTrabajador.php'
    </script>";
	}
}

?>