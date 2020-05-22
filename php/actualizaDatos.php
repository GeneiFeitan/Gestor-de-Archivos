<?php 
	 require('../Modelo/usuario.php');

	 $usuario=new Usuario();
	
	 $usuario->idUsuario=$_POST['id'];
	 $usuario->nombre=$_POST['nombre'];
	 $usuario->ApePat=$_POST['apellidoPa'];
	 $usuario->ApeMat=$_POST['apellidoMa'];
	 $usuario->telefono=$_POST['telefono'];
	 $usuario->correo=$_POST['email'];
	 $usuario->idArea=$_POST['area'];
	 $usuario->idPrivilegio=3;
	 $usuario->fechaNac=$_POST['fechaNac'];
 
	 if($_POST['tipoUsuario']=="Administrador") {
		 $usuario->idPrivilegio=2;
	 }
 
	 if($_POST['tipoUsuario']=="Director") {
		 $usuario->idPrivilegio=1;
	 }
 
	 
 
 
 
	 if($_POST['area']=="Anaplasma") {
		 $usuario->idArea=1;
	 }
 
	 if($_POST['area']=="Artropodologia") {
		 $usuario->idArea=2;
	 }
 
	 if($_POST['area']=="Babesia") {
		 $usuario->idArea=3;
	 }
 
	 if($_POST['area']=="Helmintologia") {
		 $usuario->idArea=4;
	 }
 
 
	 if ($usuario->actualiza()) {
		 echo'Actualizado con Exito';
	 }
	 else{
		 echo'Error al guardar';
	 }

 ?>