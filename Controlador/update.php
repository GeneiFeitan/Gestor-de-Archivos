<?php 

require('../Modelo/evento.php');

    $evento = new Evento();

	$evento->nombre_evento=$_POST['Input_nombre'];
	$evento->fecha=$_POST['Input_fecha'];
	$evento->ubicacion=$_POST['Input_ubicacion'];
	//$evento->area=$_POST['InputArea'];
	$evento->id_evento=$_POST['Input_id'];

	 if($_POST['InputArea']=="Anaplasma") {
		 $evento->area=1;
	 }
 
	 if($_POST['InputArea']=="Artropodologia") {
		 $evento->area=2;
	 }
 
	 if($_POST['InputArea']=="Babesia") {
		 $evento->area=3;
	 }
 
	 if($_POST['InputArea']=="Helmintologia") {
		 $evento->area=4;
	 }
	 if($_POST['InputArea']=="Recursos Humanos") {
		 $evento->area=5;
	 }
	 if($_POST['InputArea']=="Sistemas") {
		 $evento->area=6;
	 }


	if ($evento->editar()) {
		echo"<script>
                alert('Evento Editado Correctamente');
                window.location= '../Vista/EditarEvento.php'
    </script>";
	}else{
		echo"<script>
                alert('Error al Editar Evento');
                window.location= '../Vista/EditarEvento.php'
    </script>";
	}

 ?>