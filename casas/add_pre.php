<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$pre = $con->real_escape_string(htmlentities($_POST['pre']));
$GUID = getGUID();
$GUID = substr($GUID,1,-1);
$ins = $con->query("INSERT INTO preguntas (id_pregunta, pregunta) VALUES ('$GUID','$pre')");
if($ins){
    header('location:../extend/alerta.php?msj=La pregunta ha sido registrado&c=in&p=admin&t=success');
}else{
    header('location:../extend/alerta.php?msj=La preguntano puedo ser registrado&c=in&p=admin&t=error');
}
$con->close();
    
}else{
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=in&p=admin&t=error');
}

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }
    else {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
        return $uuid;
    }
}
?>