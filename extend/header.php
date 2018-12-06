<?php include '../conexion/conexion.php'?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/main.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
    <link rel="icon" href="../img/Xiinbal.png">
    <title>Xiinbal</title>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
        .loader {
            position: absolute;
            top: 40%;
            left: 47%;
        }
        .card-small {
        width:250px;
        height:50px;
        }
        #map {
        height: 100%;
      }

  </style>
</head>
<body>

<?php 
if(!isset($_SESSION['nivel'])){
    include 'menu_user.php';
   }else{
    switch($_SESSION['nivel']){
        case 'propietario':
            include 'menu_prop.php';
        break;
        case 'admin':
            include 'menu_admin.php';
        break;
        default:
            include 'menu_user.php';
        break;
    }
   }
   


?>