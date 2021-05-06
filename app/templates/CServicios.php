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
            <form class="needs-validation text-primary" id="formularioM" enctype="multipart/form-data">
                <div class="form-row ">
                    <div class="col-md-6 mb-2">
                        <label for="tipo">Tipo</label><br>
                        <select class="form-control" name="tipo" id="tipo" style="height: 55px;" required>
                            <option value=''> </option>
                            <option value='fabricacion'>Fabricacion</option>
                            <option value='servicios'>Reformas e Instalaciones</option>
                            <option value='mantenimiento'>Mantenimiento</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="tipo">Categoria</label><br>
                        <select class="form-control" name="categoria" id="categoria" style="height: 55px;" required>
                            <option value=''> </option>
                            <option value='AceroInox'>Maquinillas en acero inoxidable </option>
                            <option value='AluminioNaval'>Maquinillas en aluminio naval </option>
                            <option value='AceroCarbono'>Maquinillas en acero al carbono </option>
                            <option value='BarraPastecas'>Barra pastecas </option>
                            <option value='RulosPopa'>Rulos de popa </option>
                            <option value='EnrolladoesArte'>Enrolladores de arte </option>
                            <option value='MaquinillaCabirones'>Maquinillas de cabirones </option>
                            <option value='MaquinillaCascada'>Maquinillas de carreteles en cascada </option>
                            <option value='MaquinillaPuñoPopa'>Maquinillas para cabo de puño de popa </option>
                            <option value='MaquinillaSobrasAtun'>Maquinillas sobras atun rojo </option>
                            <option value='PlumasCopejear'>Plumas copejear </option>
                            <option value='Haladores'>Haladores </option>
                            <option value='CarretePuño'>Carrete de puño </option>
                            <option value='PescantesPastecas'>Pescantes pastecas </option>
                            <option value='MaquinariaPalangre'>Maquinaria palangre </option>
                            <option value='LineaEjes'>Linea de ejes </option>
                            <option value='HelicesTransversales'>Hélices Transversales </option>
                            <option value='HelicesAcimutales'>Hélices Acimutales </option>
                            <option value='Timones'>Timones </option>
                            <option value='Toberas'>Toberas </option>
                            <option value='Hidraulica'>Hidráulica </option>
                            <option value='MaquinariaPesca'>Maquinaria Pesca </option>
                            <option value='EquiposPropulsores'>Equipos propulsores </option>
                            <option value='Gruas'>Gruas </option>
                            <option value='Motores'>Motores </option>
                            <option value='HelicesReversible'>Helices reversible </option>
                            <option value='TimonesArticulados'>Timones articulados </option>
                        </select>
                    </div>
                </div>

                <div>
                    <h3>---------------------CAMPO 1 ----------------------</h3>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <label for="idFiles1">Inserta una imagen 1</label>
                        <input class="form-control" type="file" id="idFiles01" name="file1">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano 1:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES1"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles 1:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN1"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances 1:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC1"></textarea>
                </div>

                <div>
                    <h3>---------------------CAMPO 2 ----------------------</h3>
                </div>


                <div class="form-row">
                    <div class="col-12">
                        <label for="idFiles2">Inserta una imagen 2</label>
                        <input class="form-control" type="file" id="idFiles02" name="file2">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano 2:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES2"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles 2:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN2"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances 2:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC2"></textarea>
                </div>

                <div>
                    <h3>---------------------CAMPO 3 ----------------------</h3>
                </div>

                <div class="form-row">
                    <div class="col-12">
                        <label for="idFiles3">Inserta una imagen 3</label>
                        <input class="form-control" type="file" id="idFiles03" name="file3">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano 3:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES3"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles 3:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN3"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances 3:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC3"></textarea>
                </div>

                <div>
                    <h3>---------------------CAMPO 4 ----------------------</h3>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <label for="idFiles4">Inserta una imagen 4</label>
                        <input class="form-control" type="file" id="idFiles04" name="file4">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano 4:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES4"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles 4:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN4"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances 4:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC4"></textarea>
                </div>
                <div>
                    <h3>---------------------CAMPO 5 ----------------------</h3>
                </div>

                <div class="form-row">
                    <div class="col-12">
                        <label for="idFiles5">Inserta una imagen 5</label>
                        <input class="form-control" type="file" id="idFiles05" name="file5">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano 5:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES5"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles 5:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN5"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances 5:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC5"></textarea>
                </div>


                <div>
                    <h3>---------------------CAMPO 6 ----------------------</h3>
                </div>

                <div class="form-row">
                    <div class="col-12">
                        <label for="idFiles6">Inserta una imagen 6</label>
                        <input class="form-control" type="file" id="idFiles06" name="file6">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Castellano 6:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoES6"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Ingles 6:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoEN6"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Descripción general Frances 6:</label>
                    <textarea name="textoES" rows="6" cols="90" id="textoFNC6"></textarea>
                </div>
                <h3>-------------------------------------------</h3>
                <div class="form-row">
                    <div class="col-12">
                        <label for="video">Inserta un video</label>
                        <input class="form-control" type="file" id="video" name="video">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div>
                    <input class="btn btn-success btn-lg mt-5" type="submit" name="crear" value="Crear" id="formAlt">
                </div>
        </div>

        </form>
        <div id="textError" class="mt-5">
            <?php if (isset($errores)) {
                echo "<p> $errores </p>";
            } ?>
        </div>
    </div>
</div>


<?php $contenido = ob_get_clean(); ?>
<?php include 'OpMecanica.php'; ?>