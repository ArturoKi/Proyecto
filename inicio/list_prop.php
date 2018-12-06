<?php include '../extend/header.php';
$sel = $con->query("SELECT * FROM propietario");
$row = mysqli_num_rows($sel);?>
<main>
<!-- Section: Users -->
<section class="section section-users grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Propietarios</span>
              <table class="responsive-table">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>bloqueo</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php while($f = $sel->fetch_assoc()){?>
                  <tr>
                    <td><?php echo $f['ap_pa'].' '.$f['ap_ma'].' '.$f['nombre']?></td>
                    <td><?php echo $f['correo']?></td>
                    <td>
                      <?php if($f['bloqueo']==1):?>
                        <a href="../extend/bloqueo_man.php?id=<?php echo $f['id_propietario'] ?>&bl=<?php echo $f['bloqueo'] ?>&t=prop">
                          <i class="material-icons green-text">lock_open</i>
                        </a>
                      <?php else: ?>
                        <a href="../extend/bloqueo_man.php?id=<?php echo $f['id_propietario'] ?>&&bl=<?php echo $f['bloqueo'] ?>&t=prop">
                          <i class="material-icons red-text">lock_outline</i>
                        </a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a class="btn blue lighten-2 modal-trigger" href="#modal_<?php echo $f['id_propietario']?>">Detalles</a>
                    </td>
                  </tr>
                <?php 
                include '../extend/modal_p.php';
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