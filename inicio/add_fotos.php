<?php 
  include '../conexion/conexion.php';
  $id = $con->real_escape_string(htmlentities($_GET['id']));
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //print_r($_FILES);
      $subida = 0;
      $error = 0;
      for($x=0; $x<count($_FILES["fotos"]["name"]); $x++)
    {
      $file = $_FILES["fotos"];
      $nombre = $file["name"][$x];
      $tipo = $file["type"][$x];
      $ruta_provisional = $file["tmp_name"][$x];
      if ($tipo != 'image/jpeg' && $tipo != 'image/jpg' && $tipo != 'image/png')
      {
        header('location:../extend/alerta.php?msj=Uno de los archivos no es imagen&c=in&p=fotos&t=error');
        exit;
      }
      $carpeta = '../casas/foto-casas/'.$id;
      if (!file_exists($carpeta)) {
          mkdir($carpeta, 0777, true);
      }
      $GUID = getGUID();
      $GUID = substr($GUID,1,-1);
      $src = $carpeta.'/'.$nombre;
      //Caragamos imagenes al servidor
      move_uploaded_file($ruta_provisional,$src);
      $ins = $con->query("INSERT INTO imagenes (id_imagenes, id_propiedad, carpeta, imagen) VALUES ('$GUID','$id','$carpeta','$nombre')");
      if($ins){
        $subida++;
      }else{
        $error++;
      }
    }
    if($error != 0){
      header('location:../extend/alerta.php?msj=Ocurrio un error al subir imagenes&c=in&p=ind&t=warning');
    }else{
      header('location:../extend/alerta.php?msj=Se subieron con exito las imagenes&c=in&p=ind&t=success');
    }
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
$sel_img = $con->query("SELECT * FROM imagenes WHERE id_propiedad = '$id' ");
include '../extend/header.php';
?> 
<main>
  <section class="section section-stats center">
    <div clas="row">
      <div class="col s12 m12 l12">
        <div class="card-panel">
          <h5><i class="material-icons medium">image</i> Fotos</h5>
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="file-field input-field">
              <div class="btn">
                <span>Fotos:</span>
                <input type="file" name="fotos[]" id="fotos" multiple>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files">
              </div>
            </div>
            <div class='richt-aling'>
              <button type="submit" value="subir" name="subir" id="subir" class="btn white green-text waves-effect waves-green">Subir</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-stats center">
    <div class="row">
    <?php while($f = $sel_img->fetch_assoc()){?>
      <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo $f['carpeta'].'/'.$f['imagen'] ?>">
        </div>
      </div>
      </div>
    <?php  }?>
    </div>
  </section>
  <?php include '../extend/preloader.php'?>
</main>
<?php include '../extend/footer.php'?>
<?php include '../extend/scripts.php'?>
<script src="../js/registro.js"></script>
<script src="../js/preloader.js"></script>
</body>

</html>