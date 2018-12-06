<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$up = $con->query("UPDATE propiedad SET estatus  = 'valida' WHERE id_propiedad = '$id' ");
if($up){
    header('location:../extend/alerta.php?msj=Se valido exitosamente la propiedad&c=in&p=admin&t=success');
}else{
    header('location:../extend/alerta.php?msj=No se valido la propiedad&c=in&p=admin&t=error');
}
?>