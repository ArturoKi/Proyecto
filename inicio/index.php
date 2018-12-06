<?php 
include '../extend/header.php';
$sel = $con->query("SELECT * FROM propiedad");
$row = mysqli_num_rows($sel);
$inicio = 1;
?>
<main>
    <section class="section section-add_casa grey lighten-4">
        <div class="container">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">

                        <form action="#" method="post" enctype="multipart/from-data">
                            <div class="row">
                                <span class="card-title">
                                    <p class="blue-text darken-4"> Buscar</p>
                                </span>
                                <div class="input-field col l3 m6 s12">
                                    <select id="est" required>
                                        <option value="" disabled selected>Seleccione una</option>
                                        <option value="1">Morelos</option>
                                    </select>
                                    <label for="est">Estado</label>
                                </div>
                                <div class="input-field col l3 m6 s12">
                                    <select id="tipo" required>
                                        <option value="" disabled selected>Seleccione una</option>
                                        <option value="1">Departamento</option>
                                        <option value="2">Casa</option>
                                        <option value="3">Casa con alberca</option>
                                    </select>
                                    <label>Tipo</label>
                                </div>
                                <div class="input-field col l2 m6 s12">
                                    <select id="n_hab" required>
                                        <option value="" disabled selected>Seleccione uno</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="n_hab">habitaciones</label>
                                </div>
                                <div class="input-field col l2 m6 s12">
                                    <select id="n_per" required>
                                        <option value="" disabled selected>Seleccione uno</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="n_per">personas</label>
                                </div>
                                <div class='left-aling col l2 m2 s2'>
                                    <button type="submit" id="btn_buscar" class="btn white blue-text waves-effect waves-blue">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php  
    $sel = $con->query("SELECT * FROM propiedad where estatus != 'validar'");?>
    <section class="section section-stats center blue lighten-4">
        <div class="row">
            <?php while($f = $sel->fetch_assoc()){ ?>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-content">
                        <div class="slider">
                            <ul class="slides">
                                <?php $id =  $f['id_propiedad'];
                                $sel_p = $con->query("SELECT * FROM imagenes where id_propiedad  = '$id'");
                                while($p = $sel_p->fetch_assoc()){ ?>
                                <li>
                                    <img src="<?php echo $p['carpeta'].'/'.$p['imagen'] ?>" height="100">
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card-action">
                    <a class="btn-floating blue lighten-2 modal-trigger" href="#modal_<?php echo $f['id_propiedad']?>"><i
                        class="material-icons">beach_access</i></a>
                    </div>
                </div>
            </div>
            <?php 
            include '../extend/modal_renta.php';
            } ?>
        </div>
    </section>
    <?php 
    
    include '../extend/preloader.php';?>
</main>
<?php include '../extend/footer.php'?>
<?php include '../extend/scripts.php'?>
<script src="../js/registro.js"></script>
<script src="../js/preloader.js"></script>
<script src="../js/mapa.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqYOkw63fle-fvC0jVlhFnrOe6R4eyaMk&callback=initMap" async defer></script>
</body>

</html>