<?php

    require('../Modelo/usuario.php');

    $usuario=new Usuario();

    $usuario->idUsuario=$_POST['inputId'];
    $usuario->nombre=$_POST['inputNombre'];
    $usuario->ApePat=$_POST['inputApePat'];
    $usuario->ApeMat=$_POST['inputApeMat'];
    $usuario->telefono=$_POST['inputTel'];
    $usuario->correo=$_POST['inputCorreo'];
    $usuario->idArea=$_POST['inputArea'];
    $usuario->contra=$_POST['inputContra'];
    $usuario->fechaNac=$_POST['inputFecha'];

    if ($usuario->actualizaPerfil()) {
        echo"<script>
                alert('Modificacion Exitosa');
                window.location= '../index.php'
    </script>";
                echo $usuario->idUsuario;
               echo $usuario->nombre;
                echo $usuario->ApePat;
                echo $usuario->ApeMat;
                echo $usuario->telefono;
                echo  $usuario->correo;
                echo $usuario->idArea;
                echo $usuario->contra;
                echo $usuario->fechaNac;
    }
    else{
        echo"<script>
                alert('Error Al modificar');
                window.location= '../Vista/modificarPerfil.php'
            </script>";
    }