<?php
include '../conexion/conexion.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //obtenemos valores
    $calle = $con->real_escape_string(htmlentities($_POST['calle']));
    $n_ext = $con->real_escape_string(htmlentities($_POST['n_ext']));
    $n_int = $con->real_escape_string(htmlentities($_POST['n_int']));
    $e_calles = $con->real_escape_string(htmlentities($_POST['e_calles']));
    $ref = $con->real_escape_string(htmlentities($_POST['ref']));
    $cp = $con->real_escape_string(htmlentities($_POST['cp']));
    $asen = $con->real_escape_string(htmlentities($_POST['asen']));
    $mun = $con->real_escape_string(htmlentities($_POST['mun']));
    $est = $con->real_escape_string(htmlentities($_POST['est']));
    $tipo = $con->real_escape_string(htmlentities($_POST['tipo']));
    $n_hab = $con->real_escape_string(htmlentities($_POST['n_hab']));
    $n_per = $con->real_escape_string(htmlentities($_POST['n_per']));
    $dia = $con->real_escape_string(htmlentities($_POST['dia']));
    $sem = $con->real_escape_string(htmlentities($_POST['sem']));
    $des = $con->real_escape_string(htmlentities($_POST['des']));
    $desc = $con->real_escape_string(htmlentities($_POST['desc']));
    
    //validamos valores
    if(empty($calle) || empty($n_ext) || empty($ref) || empty($cp) || empty($mun) || empty($est) || empty($asen) || empty($tipo) || 
        empty($n_hab) || empty($n_per) || empty($dia) || empty($sem) || empty($des) || empty($desc)){
        header('location:../extend/alerta.php?msj=Hay un campo sin especificar&c=in&p=ad_casa&t=error');
        exit; 
    }
    if(!is_numeric($cp) || !is_numeric($n_hab) || !is_numeric($n_per) || !is_numeric($dia) || !is_numeric($sem)){
        header('location:../extend/alerta.php?msj=Uno de los campos que solo permite numeros no tiene numeros&c=in&p=ad_casa&t=error');
        exit;
    }

    $GUID = getGUID();
    $GUID = substr($GUID,1,-1);
   
    if($_SESSION['nivel'] == 'propietario'){
        $id = $_SESSION['id'];
    }else{
        header('location:../extend/alerta.php?msj=No tiene el nivel de propietario para agregar casas&c=in&p=ind&t=error');
        exit;
    }
    $ins = $con->query("INSERT INTO propiedad (id_propiedad, id_propietario, descripcion , costo_dia , 
                        costo_semana, tipo , numero_habitaciones ,personas_recomendadas ,codigo_postal ,
                        num_ext , num_int , en_calles, ref, asent, mun, estado, des_temp, calle) VALUES ('$GUID',
                         '$id', '$desc', '$dia', '$sem', '$tipo', '$n_hab', '$n_per', '$cp', '$n_ext','$n_int',
                         '$e_calles', '$ref', '$asen', '$mun', '$est', '$des', '$calle')");
    if($ins){
        $sel = $con->query("SELECT numero_casa FROM propietario WHERE id_propietario = '$id'");
        $res = $sel->fetch_assoc();
        $casa = $res['numero_casa'] + 1;
        $up = $con->query("UPDATE propietario SET numero_casa  = $casa WHERE id_propietario = '$id' ");
        if($up){
            header('location:../extend/alerta.php?msj=La casa ha sido registrado&c=in&p=admin_casa&t=success');
        }else{
            header('location:../extend/alerta.php?msj=La casa no puedo ser registrado&c=in&p=ind&t=error');
        }
    }else{
        header('location:../extend/alerta.php?msj=La casa no puedo ser registrado&c=in&p=ind&t=error');
    }
    $con->close();
}else{
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=in&p=ad_casa&t=error');
    exit;
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