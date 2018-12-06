<?php 
@session_start();
$_SESSION = array();
session_destroy();
header('location:../extend/alerta.php?msj=Se cerro sesion exitosamente&c=in&p=ind&t=success');
?>