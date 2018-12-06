<!-- MODAL de usuario-->
<div id="modal_<?php echo $f['id_usuario']?>" class="modal blue lighten-5">
    <div class="modal-content">
        <h4 class="center-align">Usuario</h4>
        <form>
            <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <input id="name" name="name" type="text" value="<?php echo $f['nombre']?>" disabled>
                <label for="name">Nombre</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <input id="ap_pa" name="ap_pa"type="text" value="<?php echo $f['ap_pa']?>" disabled>
                <label for="ap_pa">Apellido Paterno</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                <input id="ap_ma" name="ap_ma" type="text" value="<?php echo $f['ap_ma']?>" disabled>
                <label for="ap_ma">Apellido Materno</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input placeholder="Email" id="email" name="email" type="email" class="validate" value="<?php echo $f['correo']?>" disabled>
                <label data-error="Invalido" data-success="Valido" for="email">Email</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">folder_shared</i>
                <input id="nivel" name="nivel" type="text" value="<?php echo $f['nivel']?>" disabled>
                <label for="nivel">Nivel</label>
            </div>
        </form>
    </div>
</div>