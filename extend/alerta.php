<?php include '../conexion/conexion.php'?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
        <title>Xiinbal</title>
    </head>
    <body>
        <?php
        $mensaje = htmlentities($_GET['msj']);
        $c = htmlentities($_GET['c']);
        $p = htmlentities($_GET['p']);
        $t = htmlentities($_GET['t']);

        if($t == 'error'){
            $titulo = "Opps...";
        }else{
            $titulo = "Bien echo!";
        }

        switch ($c){
            case 'in':
                $carpeta = '../inicio/';
                break;
        }
        switch ($p){
            case 'ind':
                $pagina = 'index.php';
                break;
            case 'ad_casa':
                $pagina = 'add_casa.php';
                break;
            case 'admin_casa':
                $pagina = 'admin_casa.php';
                break;
            case 'admin':
                $pagina = 'admin.php';
                break;
            case 'fotos':
            $pagina = 'add_fotos.php';
            break;
        }

        $dir = $carpeta.$pagina;

        ?>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
        <script>
        swal({
            title: '<?php echo $titulo?>',
            text: "<?php echo $mensaje?>",
            type: '<?php echo $t?>',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
        }).then(function() {
            location.href='<?php echo $dir?>';
        });

        $(document).click(function(){
            location.href='<?php echo $dir?>';
        });
        
        $(document).keyup(function(e){
            if(e.which == 27){
                location.href='<?php echo $dir?>';
            }
        });
        </script>
    </body>
</html>