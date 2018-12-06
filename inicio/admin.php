<?php  include '../extend/header.php';
$sel_u = $con->query("SELECT COUNT(id_usuario) as users FROM usuarios");
$res_u = $sel_u->fetch_assoc();
$sel_p = $con->query("SELECT COUNT(id_propietario) as props FROM propietario");
$res_p = $sel_p->fetch_assoc();
$sel_c = $con->query("SELECT COUNT(id_propiedad) as casa FROM propiedad");
$res_c = $sel_c->fetch_assoc();
$sel_v = $con->query("SELECT COUNT(id_evaluacion) as val FROM evaluacion");
$res_v = $sel_v->fetch_assoc();
$sel = $con->query("SELECT * FROM propiedad WHERE estatus  = 'validar'");
$sel_p = $con->query("SELECT * FROM preguntas");
?>
<main>
  <section class="section section-stats center">
    <div class="row">
      <div class="col s12 m6 l3">
        <div class="card-panel blue lighten-1 white-text center">
          <i class="material-icons medium">sentiment_very_satisfied</i>
          <h5>Usuarios</h5>
          <h4 class="count">
            <?php echo $res_u['users'] ?>
          </h4>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel center">
          <i class="material-icons medium">perm_identity</i>
          <h5>Propietarios</h5>
          <h4 class="count">
            <?php echo $res_p['props'] ?>
          </h4>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel blue lighten-1 white-text center">
          <i class="material-icons medium">mode_comment</i>
          <h5>Valoraciones</h5>
          <h4 class="count"><?php echo $res_v['val'] ?></h4>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel center">
          <i class="material-icons medium">perm_identity</i>
          <h5>Casas</h5>
          <h4 class="count">
            <?php echo $res_c['casa'] ?>
          </h4>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-visitors blue lighten-4">
    <div class="row">
      <div class="col s12 l8 m6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Validar casas</span>
            <table class="striped">
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
                    <a href="../extend/validar_casa.php?id=<?php echo $f['id_propiedad'] ?>&val=<?php echo $f['estatus'] ?>">
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
        </div>
      </div>
      <div class="col s12 m6 l4">
        <!-- Latest Comments -->
        <ul class="collection with-header latest-comments">
          <li class="collection-header">
            <h5>Validar Comentarios</h5>
          </li>
          <li class="collection-item avatar">
            <img src="img/person1.jpg" alt="" class="circle">
            <span class="title">John Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt minima dolor error
              laboriosam autem ad beatae
              explicabo pariatur maxime fuga sed quod quo voluptas, adipisci illum aspernatur est, fugit tempore.</p>
            <a href="" class="approve green-text">Aprovada</a> |
            <a href="" class="deny red-text">Rechazada</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person2.jpg" alt="" class="circle">
            <span class="title">Steve Smith</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt minima dolor error
              laboriosam autem ad beatae
              explicabo pariatur maxime fuga sed quod quo voluptas, adipisci illum aspernatur est, fugit tempore.</p>
            <a href="" class="approve green-text">Aprovada</a> |
            <a href="" class="deny red-text">Rechazada</a>
          </li>
          <li class="collection-item avatar">
            <img src="img/person3.jpg" alt="" class="circle">
            <span class="title">Ellen Williams</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt minima dolor error
              laboriosam autem ad beatae
              explicabo pariatur maxime fuga sed quod quo voluptas, adipisci illum aspernatur est, fugit tempore.</p>
            <a href="" class="approve green-text">Aprovada</a> |
            <a href="" class="deny red-text">Rechazada</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section section-stats center">
    <div class="row">
      <div class="col s12 m6 l8">
        <div class="card-panel">
          <h5> <i class="material-icons">help</i> Preguntas</h5>
          <table class="striped">
              <thead>
                <tr>
                  <th>Pregunta</th>
                </tr>
              </thead>
              <tbody>
                <?php while($f = $sel_p->fetch_assoc()){?>
                <tr>
                  <td>
                    <?php echo $f['pregunta'];?>
                  </td>
                  <td>
                    <a class="btn-floating red" href="../casas/borra_pre.php?id=<?php echo $f['id_pregunta'];?>"><i
                        class="material-icons">cancel</i></a>
                  </td>
                </tr>
                <?php  }?>
              </tbody>
            </table>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card-panel ">
          <h5> <i class="material-icons">add_circle</i> Agrega preguntas</h5>
          <form action="../casas/add_pre.php" method="post" enctype="multipart/from-data">
            <div class="row">
              <div class="input-field col l12 m6 s4">
                <i class="material-icons prefix">help</i>
                <input id="pre" name="pre" type="text" required>
                <label for="pre">Pregunta</label>
              </div>
              <div class='rigth-aling col l12 m12 s12'>
                <button type="submit" value="submit" name="submit" id="btn_casa" class="btn white green-text waves-effect waves-green">Registrar</button>
              </div>
            </div>
          </form>
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