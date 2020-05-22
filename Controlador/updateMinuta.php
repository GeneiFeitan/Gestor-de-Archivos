<?php 

require('../Modelo/minuta.php');

    $minuta = new Minuta();

	$minuta->id_minuta=$_POST['Input_id'];
	$minuta->nombre=$_POST['Input_nombre'];
	$minuta->fecha=$_POST['Input_fecha'];
	$minuta->asistentes=$_POST['Input_asistentes'];
	$minuta->informes=$_POST['Input_info'];
	$minuta->motivo=$_POST['Input_motivo'];
	$minuta->anuncios=$_POST['Input_anuncios'];
	$minuta->area=$_POST['InputArea'];
	$minuta->resp1=$_POST['Input_resp1'];
	$minuta->puesto1=$_POST['Input_puesto1'];
	$minuta->resp2=$_POST['Input_resp2'];
	$minuta->puesto2=$_POST['Input_puesto2'];


	$minuta->resp3=$_POST['Input_resp3'];
	$minuta->puesto3=$_POST['Input_puesto3'];
	$minuta->resp4=$_POST['Input_resp4'];
	$minuta->puesto4=$_POST['Input_puesto4'];

	$minuta->resp5=$_POST['Input_resp5'];
	$minuta->puesto5=$_POST['Input_puesto5'];
	$minuta->resp6=$_POST['Input_resp6'];
	$minuta->puesto6=$_POST['Input_puesto6'];

	$minuta->resp7=$_POST['Input_resp7'];
	$minuta->puesto7=$_POST['Input_puesto7'];
	$minuta->resp8=$_POST['Input_resp8'];
	$minuta->puesto8=$_POST['Input_puesto8'];


	if($_POST['InputArea']=="Anaplasma") {
		 $minuta->area=1;
	 }
 
	 if($_POST['InputArea']=="Artropodologia") {
		 $minuta->area=2;
	 }
 
	 if($_POST['InputArea']=="Babesia") {
		 $minuta->area=3;
	 }
 
	 if($_POST['InputArea']=="Helmintologia") {
		 $minuta->area=4;
	 }
	 if($_POST['InputArea']=="Recursos Humanos") {
		 $minuta->area=5;
	 }
	 if($_POST['InputArea']=="Sistemas") {
		 $minuta->area=6;
	 }
	  if($_POST['inputArea']=="Materiales") {
        $usuario->idArea=7;
    }
    if($_POST['inputArea']=="Financieros") {
        $usuario->idArea=8;
    }
 



	if ($minuta->editar()) {
		echo"<script>
                alert('Minuta Editada Correctamente');
                window.location= '../Vista/verMinutas.php'
    </script>";
	}else{
		echo"<script>
                alert('Error al Editar Minuta');
                window.location= '../Vista/verMinutas.php'
    </script>";
	}

 ?>