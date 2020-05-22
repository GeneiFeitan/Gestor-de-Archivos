<?php

require('../Modelo/evento.php');

if ((isset($_GET['accion']))  && (isset($_GET['id'])) && ($_GET['accion'] == 'eliminar')) {
    //$id = $_GET['id'];
    $evento = new Evento();
    $evento->id_evento=$_GET['id'];
    $array = $evento->eliminar();


    if ($array) {
        echo"<script>
                alert('Evento Eliminado Correctamente');
                window.location= '../Vista/EliminarEvento.php'
    </script>";
    }else{
        echo"<script>
                alert('Error al Eliminar Evento');
                window.location= '../Vista/EliminarEvento.php'
    </script>";
    }
}

?>
