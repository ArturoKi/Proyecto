<?php include '../extend/header.php'?>
<main>
    <section class="section section-add_casa grey lighten-4">
        <div class="container">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <form action="../casas/a_casa.php" method="post" enctype="multipart/from-data">
                            <div class="row">
                                <span class="card-title">Agregar casa</span>
                                <div class="input-field col l8 m6 s12">
                                    <i class="material-icons prefix">add_location</i>
                                    <input id="calle" name="calle" type="text" required>
                                    <label for="calle">Calle</label>
                                </div>
                                <div class="input-field col l2 m6 s12">
                                    <input id="n_ext" name="n_ext" type="text" required>
                                    <label for="n_ext">N° Ext.</label>
                                </div>
                                <div class="input-field col l2 m6 s12">
                                    <input id="n_int" name="n_int" type="text">
                                    <label for="n_int">N° Int. (opcional)</label>
                                </div>
                                <div class="input-field col l12 m12 s12">
                                    <input id="e_calles" name="e_calles" type="text" required>
                                    <label for="e_calles">Entre calles</label>
                                </div>
                                <div class="input-field col l12 m12 s12">
                                    <input id="ref" name="ref" type="text" required>
                                    <label for="ref">Referencias</label>
                                </div>
                                <div class="input-field col l2 m6 s12">
                                    <input id="cp" name="cp" type="text" required>
                                    <label for="cp">Codigo postal</label>
                                </div>
                                <div class="input-field col l2 m6 s12">
                                    <input id="asen" name="asen" type="text" required>
                                    <label for="asen">Colonia</label>
                                </div>
                                <div class="input-field col l4 m6 s12">
                                    <input id="mun" name="mun" type="text" required>
                                    <label for="mun">Municipio</label>
                                </div>
                                <div class="input-field col l4 m6 s12">
                                    <input id="est" name="est" type="text" required>
                                    <label for="est">Estado</label>
                                </div>
                                <div class="input-field col l3 m6 s12">
                                    <select id="tipo" name="tipo" required>
                                        <option value="" disabled selected>Seleccione una</option>
                                        <option value="Departamento">Departamento</option>
                                        <option value="Casa">Casa</option>
                                        <option value="Casa con alberca">Casa con alberca</option>
                                    </select>
                                    <label>Tipo</label>
                                </div>
                                <div class="input-field col l4 m6 s12">
                                    <input id="n_hab" name="n_hab" type="text" required>
                                    <label for="n_hab">Numero de habitaciones (Solo numeros)</label>
                                </div>
                                <div class="input-field col l5 m6 s12">
                                    <input id="n_per" name="n_per" type="text" required>
                                    <label for="n_per">Numero de personas recomendadas (Solo numeros)</label>
                                </div>
                                <div class="input-field col l4 m6 s12">
                                    <input id="dia" name="dia" type="text" required>
                                    <label for="dia">Precio por dia (Solo numeros)</label>
                                </div>
                                <div class="input-field col l4 m6 s12">
                                    <input id="sem" name="sem" type="text" required>
                                    <label for="sem">Precio por semana (Solo numeros)</label>
                                </div>
                                <div class="range-field col l4 m6 s12">
                                    <input id="des" name="des" value="0" type="range" min="0" max="100" required>
                                    <label for="des">Descuento por temporada baja</label>
                                </div>
                                <div class="input-field col l12 m12 s12">
                                    <input id="desc" name="desc" type="text" required>
                                    <label for="desc">Una descripcion de la casa</label>
                                </div>
                                <div class='rigth-aling col l12 m12 s12'>
                                    <button type="submit" value="submit" name="submit" id="btn_casa" class="btn white green-text waves-effect waves-green">Registrar</button>
                                </div>
                            </div>
                        </form>
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