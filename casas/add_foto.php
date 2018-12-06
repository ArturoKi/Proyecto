<?php
include '../conexion/conexion.php';
if (isset($_POST['submit'])) {
    $nombre = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];
    $tamanio = $_FILES['foto']['size'];
    $ruta = $_FILES['foto']['tmp_name'];
    $destino = "foto-casas" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
          echo "Se guardo en la carpeta";
        }
        else {
          echo "Mejor vende avon :'v";
        }
    }
}else{
  echo "derecho we :'v";
}


/*$GUID = getGUID();
$GUID = substr($GUID,1,-1);
$extension = '';
$ruta='foto-casas';
$archivo=$_FILES['tamal']['tmp_name'];
$nombre_archivo = $_FILES['tamal']['name'];
$info = pathinfo($nombre_archivo);
$extension = $info['extension'];
$carpeta = 'foto-casas';
if($archivo != ''){
    $extension = $info['extension'];
    if($extension == "png" || $extension == "PNG" || $extension == "jpg" || $extension == "JPG"){
        //move_uploaded_file($archivo,$carpeta.$GUID.'.'.$extension);
        move_uploaded_file($archivo,$carpeta.$GUID.'.'.$extension);
        //$ruta = $ruta.'/'.$GUID.'.'.$extension; ????? eso que?
    }
}

//echo $ruta;

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
}*/
?>
