<?php
    include '../conexion/conexion.php';
    $id = $_SESSION['id'];
    $nivel = $_SESSION['nivel'];
    switch($nivel){
        case 'usuario':
            $up = $con->query("UPDATE usuarios SET bloqueo = 0 where id_usuario='$id'");
            if($up){
                $_SESSION = array();
                session_destroy();
                header('location:../extend/alerta.php?msj=Uso indevido del sistema&c=in&p=ind&t=error');
            }
            break;
        case 'propietario':
            $up = $con->query("UPDATE propietario SET bloqueo = 0 where id_propietario ='$id'");
            if($up){
                $_SESSION = array();
                session_destroy();
                header('location:../extend/alerta.php?msj=Uso indevido del sistema&c=in&p=ind&t=error');
            }
            break;
    }    
?>