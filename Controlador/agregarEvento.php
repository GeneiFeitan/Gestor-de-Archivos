<?php

	require('../Modelo/evento.php');

	$evento = new Evento();

	$evento->nombre_evento=$_POST['Input_nombre'];
	$evento->fecha=$_POST['Input_fecha'];
	$evento->ubicacion=$_POST['Input_ubicacion'];
	$evento->area=$_POST['InputArea'];

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

	 if($_POST['inputArea']=="Materiales") {
        $usuario->idArea=7;
    }
    if($_POST['inputArea']=="Financieros") {
        $usuario->idArea=8;
    }
 

	if ($evento->insert()) {
		echo"<script>
                alert('Evento guardado Correctamente');
                window.location= '../Vista/eventos.php'
    </script>";
	}else{
		echo"<script>
                alert('Error al guardar Evento');
                window.location= '../Vista/eventos.php'
    </script>";
	}


?>