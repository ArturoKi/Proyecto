<?php
//Se incluye la conexion
include '../conexion/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Obtenemos valores del formulario
    $name = $con->real_escape_string(htmlentities($_POST['name']));
    $ap_pa = $con->real_escape_string(htmlentities($_POST['ap_pa']));
    $ap_ma = $con->real_escape_string(htmlentities($_POST['ap_ma']));
    $pass1 = $con->real_escape_string(htmlentities($_POST['pass1']));
    $pass1 = md5($pass1);
    $email = $con->real_escape_string(htmlentities($_POST['email']));
    $phone = $con->real_escape_string(htmlentities($_POST['phone']));
    $tipo = $con->real_escape_string(htmlentities($_POST['tipo']));
    $genero = $con->real_escape_string(htmlentities($_POST['gender']));
    //Validamos el contenido
    if(empty($name) || empty($ap_pa) || empty($ap_ma) || empty($pass1) || empty($email) || empty($phone)|| empty($phone)){
        header('location:../extend/alerta.php?msj=Hay un campo sin especificar&c=in&p=ind&t=error');
        exit; 
    }
    if(!ctype_alpha($name) || !ctype_alpha($ap_pa) || !ctype_alpha($ap_ma)){
        header('location:../extend/alerta.php?msj=el nombre o apellidos estan incorrectos (intente sin caracteres especiales)&c=in&p=ind&t=error');
        exit;
    }
    if(!is_numeric($phone)){
        header('location:../extend/alerta.php?msj=El numero del telefono no son todos nuemros&c=in&p=ind&t=error');
        exit;
    }
    if(!empty($email)){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header('location:../extend/alerta.php?msj=El email no es valido&c=in&p=ind&t=error');
            exit;
        }
    }
    $GUID = getGUID();
    $GUID = substr($GUID,1,-1);
    
    switch($tipo){
        case '1':
            $sel1 = $con->query("SELECT id_usuario FROM usuarios WHERE correo = '$email'");
            $row1 = mysqli_num_rows($sel1);
            if($row1 == 0){
                $ins = $con->query("INSERT INTO usuarios (id_usuario,pass,nombre,ap_pa,ap_ma,numero,correo) VALUES ('$GUID','$pass1','$name','$ap_pa','$ap_ma','$phone','$email')");
            }else{
                header('location:../extend/alerta.php?msj=El email ya se encuentra en el sistema&c=in&p=ind&t=error');
                exit;
            }
            break;
        case '2':
            $sel3 = $con->query("SELECT id_propietario FROM propietario WHERE correo = '$email'");
            $row3 = mysqli_num_rows($sel3);
            if($row3 == 0){
                $ins = $con->query("INSERT INTO propietario (id_propietario,pass,nombre,ap_pa,ap_ma,numero,correo) VALUES ('$GUID','$pass1','$name','$ap_pa','$ap_ma','$phone','$email')");
            }else{
                header('location:../extend/alerta.php?msj=El email ya se encuentra en el sistema&c=in&p=ind&t=error');
                exit;
            }
            break;
        case '3':
            $sel2 = $con->query("SELECT id_admin FROM administrador WHERE correo = '$email'");
            $row2 = mysqli_num_rows($sel2);
            if($row2 == 0){
                $ins = $con->query("INSERT INTO administrador (id_admin,pass,nombre,ap_pa,ap_ma,numero,correo) VALUES ('$GUID','$pass1','$name','$ap_pa','$ap_ma','$phone','$email')");
            }else{
                header('location:../extend/alerta.php?msj=El email ya se encuentra en el sistema&c=in&p=ind&t=error');
                exit;
            }
            break;
    }
    if($ins){
        header('location:../extend/alerta.php?msj=El usuario ha sido registrado&c=in&p=ind&t=success');
    }else{
        header('location:../extend/alerta.php?msj=El usuario no puedo ser registrado&c=in&p=ind&t=error');
    }
    $con->close();
}else{
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=in&p=ind&t=error');
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