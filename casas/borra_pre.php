<?php
include '../conexion/conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$del = $con->query("DELETE FROM preguntas WHERE id_pregunta = '$id' ");
if($del){
    header('location:../extend/alerta.php?msj=Se borro la pregunta&c=in&p=admin&t=success');
}else{
    header('location:../extend/alerta.php?msj=No se borro la pregunta&c=in&p=admin&t=error');
}
?>