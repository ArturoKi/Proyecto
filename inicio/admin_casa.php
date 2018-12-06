<?php include '../extend/header.php';
$id_prop = $_SESSION['id'];
$sel = $con->query("SELECT * FROM propiedad WHERE id_propietario = '$id_prop'");
$row = mysqli_num_rows($sel);
?>
<main>
  <!-- Section: Users -->
  <section class="section section-users grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Propiedades de
                <?php echo $_SESSION['ap_pa'].' '.$_SESSION['ap_ma'].' '.$_SESSION['nombre'] ?></span>
              <table class="responsive-table">
                <thead>
                  <tr>
                    <th>Casa</th>
                    <th>Tipo</th>
                    <th>Validada</th>
                    <th>Detalles</th>
                    <th>Bloqueo</th>
                    <th>Imagenes</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($f = $sel->fetch_assoc()){
                  $dir = "";
                    if(!isset($f['num_int'])){
                      $dir = $f['calle'].' '.$f['num_ext'].', '.$f['asent'].', '.$f['mun'].', '.$f['estado'];
                    }else{
                      $dir = $f['calle'].' '.$f['num_ext'].' '.$f['num_int'].', '.$f['asent'].', '.$f['mun'].', '.$f['estado'];
                    }
                  ?>
                  <tr>
                    <td>
                      <?php echo $dir;?>
                    </td>
                    <td>
                      <?php echo $f['tipo'] ?>
                    </td>
                    <td>
                      <?php if($f['estatus'] == 'validar'):?>
                      <i class="material-icons red-text">remove_circle</i>
                      <?php else:?>
                      <i class="material-icons green-text">check_circle</i>
                      <?php endif;?>
                    </td>
                    <td>
                      <a class="btn-floating blue lighten-2 modal-trigger" href="#modal_<?php echo $f['id_propiedad']?>"><i
                          class="material-icons">insert_chart</i></a>
                    </td>
                    <td>
                      <?php if($f['bloqueo']==1):?>
                      <a href="../extend/bloqueo_man.php?id=<?php echo $f['id_propiedad'] ?>&bl=<?php echo $f['bloqueo'] ?>&t=casa">
                        <i class="material-icons green-text">lock_open</i>
                      </a>
                      <?php else: ?>
                      <a href="../extend/bloqueo_man.php?id=<?php echo $f['id_propiedad'] ?>&bl=<?php echo $f['bloqueo'] ?>&t=casa">
                        <i class="material-icons red-text">lock_outline</i>
                      </a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a class="btn-floating blue lighten-2 modal-trigger" href="../inicio/add_fotos.php?id=<?php echo $f['id_propiedad'] ?>"><i class="material-icons"><i class="material-icons">insert_photo</i></a>
                    </td>
                  </tr>
                  <?php 
                include '../extend/modal_casa.php';
                }?>
                </tbody>
              </table>
            </div>
            <div class="card-action">
              <ul class="pagination">
                <li class="disabled">
                  <a href="#!" class="blue-text">
                    <i class="material-icons">chevron_left</i>
                  </a>
                </li>
                <li class="active blue lighten-2">
                  <a href="#!" class="white-text">1</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">2</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">3</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">4</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">5</a>
                </li>
                <li class="waves-effect">
                  <a href="#!" class="blue-text">
                    <i class="material-icons">chevron_right</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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