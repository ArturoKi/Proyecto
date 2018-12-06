<!-- MODAL de casa-->
<div id="modal_<?php echo $f['id_propiedad']?>" class="modal blue lighten-5">
    <div class="modal-content">
        <h4 class="center-align">Casa</h4>
        <form action="../casas/a_casa.php" method="post" enctype="multipart/from-data">
        <div class="input-field col l8 m6 s12">
            <i class="material-icons prefix">add_location</i>
            <input id="calle" name="calle" type="text" value="<?php echo $f['calle']?>" disabled>
            <label for="calle">Calle</label>
        </div>
        <div class="input-field col l2 m6 s12">
            <input id="n_ext" name="n_ext" type="text" value="<?php echo $f['num_ext']?>" disabled>
            <label for="n_ext">N° Ext.</label>
        </div>
        <div class="input-field col l2 m6 s12">
            <input id="n_int" name="n_int" type="text" value="<?php echo $f['num_int']?>" disabled>
            <label for="n_int">N° Int.</label>
        </div>
        <div class="input-field col l12 m12 s12">
            <input id="e_calles" name="e_calles" type="text" value="<?php echo $f['en_calles']?>" disabled>
            <label for="e_calles">Entre calles</label>
        </div>
        <div class="input-field col l12 m12 s12">
            <input id="ref" name="ref" type="text" value="<?php echo $f['ref']?>" disabled>
            <label for="ref">Referencias</label>
        </div>
        <div class="input-field col l2 m6 s12">
            <input id="cp" name="cp" type="text" value="<?php echo $f['codigo_postal']?>" disabled>
            <label for="cp">Codigo postal</label>
        </div>
        <div class="input-field col l2 m6 s12">
            <input id="asen" name="asen" type="text" value="<?php echo $f['asent']?>" disabled>
            <label for="asen">Colonia</label>
        </div>
        <div class="input-field col l4 m6 s12">
            <input id="mun" name="mun" type="text" value="<?php echo $f['mun']?>" disabled>
            <label for="mun">Municipio</label>
        </div>
        <div class="input-field col l4 m6 s12">
            <input id="est" name="est" type="text" value="<?php echo $f['estado']?>" disabled>
            <label for="est">Estado</label>
        </div>
        <div class="input-field col l3 m6 s12">
            <input type="text" name="tipo" id="tipo" value="<?php echo $f['tipo']?>" disabled>
            <label for="tipo">Tipo</label>
        </div>
        <div class="input-field col l4 m6 s12">
            <input id="n_hab" name="n_hab" type="text" value="<?php echo $f['numero_habitaciones']?>" disabled>
            <label for="n_hab">Numero de habitaciones</label>
        </div>
        <div class="input-field col l5 m6 s12">
            <input id="n_per" name="n_per" type="text" value="<?php echo $f['personas_recomendadas']?>" disabled>
            <label for="n_per">Numero de personas recomendadas</label>
        </div>
        <div class="input-field col l4 m6 s12">
            <input id="dia" name="dia" type="text"  value="<?php echo $f['costo_dia']?>" disabled>
            <label for="dia">Precio por dia</label>
        </div>
        <div class="input-field col l4 m6 s12">
            <input id="sem" name="sem" type="text" value="<?php echo $f['costo_semana']?>" disabled>
            <label for="sem">Precio por semana</label>
        </div>
        <div class="input-field col l4 m6 s12">
            <input id="des" name="des" type="text" value="<?php echo $f['des_temp']?>" disabled>
            <label for="des">Descuento por temporada baja</label>
        </div>
        <div class="input-field col l12 m12 s12">
            <input id="desc" name="desc" type="text" value="<?php echo $f['descripcion']?>" disabled>
            <label for="desc">Una descripcion de la casa</label>
        </div>
    </form>
    </div>
</div>