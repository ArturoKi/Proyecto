<!-- MODAL Inicio sesion-->
<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">person</i>
                    Iniciar Sesión
                </div>
                <div class="collapsible-body">
                    <form class="form" action="../login/logear.php" method="post" enctype="multipart/from-data">
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="Email" id="email2" name="email2" type="email" class="validate">
                            <label data-error="Invalido" data-success="Valido" for="email2">Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">fingerprint</i>
                            <input placeholder="password" id="pass" name="pass" type="password">
                            <label for="pass">Contraseña</label>
                        </div>
                        <div class="input-field">
                            <select name="tipo" required>
                            <option value="" disabled selected>seleccione una opción</option>
                            <option value="1">Usuario</option>
                            <option value="2">Propietario</option>
                            <option value="3">Administrador</option>
                            </select>
                            <label>Seleccione Tipo</label>
                        </div>
                        <div class='left-aling'>
                            <button class="btn white green-text waves-effect waves-green">Iniciar Sesión</button>
                            <button class="btn white red-text waves-effect waves-red">Olvido Contraseña</button>
                        </div>

                    </form>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">person_add</i>
                    Registrate
                </div>
                <div class="collapsible-body">
                    <form class="form" action="../login/ins_usuarios.php" method="post" enctype="multipart/from-data">
                        <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="name" name="name" type="text" required>
                            <label for="name">Nombre</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ap_pa" name="ap_pa"type="text" required>
                            <label for="ap_pa">Apellido Paterno</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="ap_ma" name="ap_ma" type="text" required>
                            <label for="ap_ma">Apellido Materno</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">fingerprint</i>
                            <input placeholder="MINIMO 8 CARACTERES" id="pass1" name="pass1" type="password"  pattern="[A-Za-z0-9]{8,}" required>
                            <label for="pass1">Contraseña</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">fingerprint</i>
                            <input placeholder="Verificar" id="pass2" name="pass2" type="password" pattern="[A-Za-z0-9]{8,}" required>
                            <label for="pass2">Verficar Contraseña</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="Email" id="email" name="email" type="email" class="validate" required>
                            <label data-error="Invalido" data-success="Valido" for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">phone</i>
                            <input id="phone" name="phone" type="text" required>
                            <label for="phone">Numero Telefonico</label>
                        </div>
                        <div class="input-field">
                            <select name="tipo" required>
                            <option value="" disabled selected>seleccione una opción</option>
                            <option value="1">Usuario</option>
                            <option value="2">Propietario</option>
                            <option value="3">Administrador</option>
                            </select>
                            <label>Seleccione Tipo</label>
                        </div>
                        <br>
                        <div class='center-aling'>
                            <button type="submit" id="btn" class="btn white green-text waves-effect waves-green">Registrar</button>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
    </div>
</div>
