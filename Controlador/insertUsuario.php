<?php

    require('../Modelo/usuario.php');

    $usuario=new Usuario();

    $usuario->nombre=$_POST['inputNombre'];
    $usuario->ApePat=$_POST['inputApePat'];
    $usuario->ApeMat=$_POST['inputApeMat'];
    $usuario->telefono=$_POST['inputTel'];
    $usuario->correo=$_POST['inputCorreo'];
    $usuario->idArea=1;
    $usuario->idPrivilegio=3;
    $usuario->estado='desconectado';
    $usuario->contra='12345';
    $usuario->fechaNac=$_POST['inputFecha'];

    if($_POST['inputTipoUsuario']=="Administrador") {
        $usuario->idPrivilegio=2;
    }

    if($_POST['inputTipoUsuario']=="Director") {
        $usuario->idPrivilegio=1;
    }

    



    if($_POST['inputArea']=="Anaplasma") {
        $usuario->idArea=1;
    }

    if($_POST['inputArea']=="Artropodologia") {
        $usuario->idArea=2;
    }

    if($_POST['inputArea']=="Babesia") {
        $usuario->idArea=3;
    }

    if($_POST['inputArea']=="Helmintologia") {
        $usuario->idArea=4;
    }
    if($_POST['inputArea']=="Recursos Humanos") {
        $usuario->idArea=5;
    }
    if($_POST['inputArea']=="Sistemas") {
        $usuario->idArea=6;
    }
    if($_POST['inputArea']=="Materiales") {
        $usuario->idArea=7;
    }
    if($_POST['inputArea']=="Financieros") {
        $usuario->idArea=8;
    }


    if ($usuario->insert()) {
        echo"<script>
                alert('Registro guardado Correctamente');
                window.location= '../Vista/RegistroUsuario.php'
    </script>";
    }
    else{
        echo"<script>
                alert('Error a guardar');
                window.location= '../Vista/RegistroUsuario.php'
    </script>";
    }

?>


