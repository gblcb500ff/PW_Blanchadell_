<?php ob_start() ?>
<div class="d-flex justify-content-between mt-4 bg-warning rounded" id="mensaje">
    <p> </p>
    <p>Tenga cuidado al insertar los datos. <br> Todo dato insertado se mostrara en la página web. <br><strong class="text-danger">La primera imagen insertada sera la que se mostrara para hacer referencia al producto</strong></p>
    <i class="far fa-times-circle" id="Cerrar"></i>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="justify-content-center" id="fr">
            <form class="needs-validation text-primary" id="formularioN" enctype="multipart/form-data">
                <div class="form-row ">
                    <div class="col-md-4 mb-2">
                        <label for="tituloES">TituloES</label>
                        <input type="text" class="form-control" name="TituloES" id="TituloES"  title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="tituloEN">TituloEN</label>
                        <input type="text" class="form-control" name="TituloEN" id="TituloEN"  title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="tituloFNC">TituloFNC</label>
                        <input type="text" class="form-control" name="TituloFNC" id="TituloFNC"  title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                   
                </div>
                <div>
                </div>
                <div class="form-row">
                <div class="col-md-6 mb-2">
                        <label for="edad">Fecha</label>
                        <input type="date" class="form-control" name="edad" id="fecha"  title="Solo el formato fecha dd/mm/aaaa" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="idFiles1">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles01" name="file1">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano :</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES1"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles :</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN1"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances :</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC1"></textarea>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="Link1">Link1</label>
                        <input type="url" class="form-control" name="Link1" id="Link1" tabindex="1">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Link2">Link2</label>
                        <input type="url" class="form-control" name="Link2" id="Link2" tabindex="1">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Link3">Link3</label>
                        <input type="url" class="form-control" name="Link3" id="Link3" tabindex="1">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div>

                    <div>
                        <input class="btn btn-success btn-lg mt-5" type="submit" name="crear" value="Crear" id="formAlt">
                    </div>
                </div>

            </form>
        </div>
        <div id="textError" class="mt-5">
            <?php if (isset($errores)) {
                echo "<p> $errores </p>";
            } ?>
        </div>
    </div>
</div>


<?php $contenido = ob_get_clean(); ?>
<?php include 'OpActualidad.php'; ?>