<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$bl = $con->real_escape_string(htmlentities($_GET['bl']));
$t = $con->real_escape_string(htmlentities($_GET['t']));
switch($t){
    case 'casa':
        if($bl == 1){
            $up = $con->query("UPDATE propiedad SET bloqueo = 0 WHERE id_propiedad = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se bloqueo exitosamente la propiedad&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se bloqueo la propiedad&c=in&p=admin_casa&t=error');
            }
        }else{
            $up = $con->query("UPDATE propiedad SET bloqueo = 1 WHERE id_propiedad = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se desbloqueo exitosamente la propiedad&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se desbloqueo la propiedad&c=in&p=admin_casa&t=error');
            }
        }
    break;
    case 'admin':
        if($bl == 1){
            $up = $con->query("UPDATE administrador SET bloqueo = 0 WHERE id_admin = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se bloqueo exitosamente el administrador&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se bloqueo el administrador&c=in&p=admin_casa&t=error');
            }
        }else{
            $up = $con->query("UPDATE administrador SET bloqueo = 1 WHERE id_admin = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se desbloqueo exitosamente el administrador&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se desbloqueo el administrador&c=in&p=admin_casa&t=error');
            }
        }
    break;
    case 'prop':
        if($bl == 1){
            $up = $con->query("UPDATE propietario SET bloqueo = 0 WHERE id_propietario = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se bloqueo exitosamente el propietario&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se bloqueo el propietario&c=in&p=admin_casa&t=error');
            }
        }else{
            $up = $con->query("UPDATE propietario SET bloqueo = 1 WHERE id_propietario = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se desbloqueo exitosamente el propietario&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se desbloqueo el propietario&c=in&p=admin_casa&t=error');
            }
        }
    break;
    case 'user':
        if($bl == 1){
            $up = $con->query("UPDATE usuarios SET bloqueo = 0 WHERE id_usuario = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se bloqueo exitosamente el usuario&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se bloqueo el usuario&c=in&p=admin_casa&t=error');
            }
        }else{
            $up = $con->query("UPDATE usuarios SET bloqueo = 1 WHERE id_usuario = '$id' ");
            if($up){
                header('location:../extend/alerta.php?msj=Se desbloqueo exitosamente el usuario&c=in&p=admin_casa&t=success');
            }else{
                header('location:../extend/alerta.php?msj=No se desbloqueo el usuario&c=in&p=admin_casa&t=error');
            }
        }
    break;
}
?>