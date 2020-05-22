
<?php 
	 require('../Modelo/evento.php');

	 $evento=new Evento();
	
     $evento->id_evento=$_POST['id'];
	 $evento->eliminar();
 ?>