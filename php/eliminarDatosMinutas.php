
<?php 
	 require('../Modelo/minuta.php');

	 $minuta=new Minuta();
	
     $minuta->id_minuta=$_POST['id'];
	 $minuta->eliminar();
 ?>