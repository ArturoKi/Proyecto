<?php
include '../conexion/conexion.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $con->real_escape_string(htmlentities($_POST['email2']));
    $pass = $con->real_escape_string(htmlentities($_POST['pass']));
    $tipo = $con->real_escape_string(htmlentities($_POST['tipo']));
    $candado = ' ';
    $str_u = strpos($email,$candado);
    $str_p = strpos($pass,$candado);
    if(is_int($str_u)){
        $email = '';
    }else{
        $correo = $email;
    }
    if(is_int($str_p)){
        $pass = '';
    }else{
        $pass2 = md5($pass);
    }
    if($correo == null || $pass2 == null){
        header('location:../extend/alerta.php?msj=El formato no es correcto&c=in&p=ind&t=error');
    }else{
        switch ($tipo) {
            case '1':
                $sel_user = $con ->query("SELECT id_usuario, nombre, ap_pa, ap_ma, correo, bloqueo, pass , nivel FROM usuarios WHERE correo = '$correo' AND pass = '$pass2'");
                $row_u = mysqli_num_rows($sel_user);
                if($row_u == 1){
                    if($s = $sel_user->fetch_assoc()){
                        $id = $s['id_usuario'];
                        $nombre = $s['nombre'];
                        $ap_pa = $s['ap_pa'];
                        $ap_ma = $s['ap_ma'];
                        $email = $s['correo'];
                        $bloqueo = $s['bloqueo'];
                        $contra = $s['pass'];
                        $nivel = $s['nivel'];
                    }
                }
                break;
            case '2':
                $sel_prp = $con ->query("SELECT id_propietario, nombre, ap_pa, ap_ma, correo, bloqueo, pass , nivel FROM propietario WHERE correo = '$correo' AND pass = '$pass2'");
                $row_p = mysqli_num_rows($sel_prp);
                if($row_p == 1){
                    if($p = $sel_prp->fetch_assoc()){
                        $id = $p['id_propietario'];
                        $nombre = $p['nombre'];
                        $ap_pa = $p['ap_pa'];
                        $ap_ma = $p['ap_ma'];
                        $email = $p['correo'];
                        $bloqueo = $p['bloqueo'];
                        $contra = $p['pass'];
                        $nivel = $p['nivel'];
                    }
                }
                break;
            case '3':
            $query = "SELECT id_admin, nombre, ap_pa, ap_ma, correo, pass , nivel, bloqueo FROM administrador WHERE correo = '$correo' AND pass = '$pass2'";
            echo $query;
                $sel_admin = $con->query($query);
                $row_a = mysqli_num_rows($sel_admin);
                if($row_a == 1){
                    if($a = $sel_admin->fetch_assoc()){
                        $id = $a['id_admin'];
                        $nombre = $a['nombre'];
                        $ap_pa = $a['ap_pa'];
                        $ap_ma = $a['ap_ma'];
                        $email = $a['correo'];
                        $bloqueo = $a['bloqueo'];
                        $contra = $a['pass'];
                        $nivel = $a['nivel'];
                    }
                }
                break;
        }
        if($correo == $email && $pass2 == $contra){
            if($bloqueo == 1){
                $_SESSION['id'] = $id;
                $_SESSION['nombre'] = $nombre;
                $_SESSION['ap_pa'] = $ap_pa;
                $_SESSION['ap_ma'] = $ap_ma;
                $_SESSION['nivel'] = $nivel;
                $_SESSION['correo'] = $email;
                header('location:../extend/alerta.php?msj=Se inicio sesion exitosamente&c=in&p=ind&t=success');
            }else{
                header('location:../extend/alerta.php?msj=Su usuario esta bloqueado&c=in&p=ind&t=error');
            }
        } else{
            header('location:../extend/alerta.php?msj=El nombre o usuario no son correctos&c=in&p=ind&t=error');
        }
    }
}else{
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=in&p=ind&t=error');
}
?>