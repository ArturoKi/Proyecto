<!-- MODAL de usuario-->
<div id="modal1" class="modal blue lighten-5">
      <div class="modal-content">
        <h4 class="center-align">Usuario</h4>
        <form class="form" action="../login/salir.php" method="post" enctype="multipart/from-data">
                        <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="name" name="name" type="text" value="<?php echo $_SESSION['nombre']?>" disabled>
                            <label for="name">Nombre</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ap_pa" name="ap_pa"type="text" value="<?php echo $_SESSION['ap_pa']?>" disabled>
                            <label for="ap_pa">Apellido Paterno</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ap_ma" name="ap_ma" type="text" value="<?php echo $_SESSION['ap_ma']?>" disabled>
                            <label for="ap_ma">Apellido Materno</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="Email" id="email" name="email" type="email" class="validate" value="<?php echo $_SESSION['correo']?>" disabled>
                            <label data-error="Invalido" data-success="Valido" for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">folder_shared</i>
                            <input id="nivel" name="nivel" type="text" value="<?php echo $_SESSION['nivel']?>" disabled>
                            <label for="nivel">Nivel</label>
                        </div>
                        <p>Para salir de la vista ususario toque fuera del modal</p>
                        <div class='right-align'>
                            <button type="submit" id="btn_salir" class="btn white red-text waves-effect waves-green ">Cerrar sesion</button>
                        </div>
                    </form>
      </div>
      <!--<div class="modal-footer">
        <a class="modal-action modal-close waves-efect waves-green btn-flat">Ok</a>
      </div>-->
    </div>