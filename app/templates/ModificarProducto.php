<?php ob_start() ?>
<div class="d-flex justify-content-between mt-4 bg-warning rounded " id="mensaje">
    <p> </p>
    <p>Se le mostrara todo los datos del producto excepto las imagenes. <br> Antes de daler a guardar comprueba los datos modificados</p>
    <i class="far fa-times-circle " id="Cerrar"></i>
</div>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="justify-content-center" id="fr">
            <form class="needs-validation text-primary" id="formulario" enctype="multipart/form-data">
                <div class="form-row ">
                    <div class="col-md-6 mb-2">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="Nombre"  title="Solo caracteres de 3 a 50" tabindex="1" nombre1="<?php echo $resultadoBD[0][0]; ?>" value="<?php echo $resultadoBD[0][0]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="tipo">Tipo</label><br>
                        <select class="form-control" name="tipo" id="tipo" style="height: 55px;">
                            <option value='<?php echo $resultadoBD[0][1]; ?>'><?php echo $resultadoBD[0][1]; ?> </option>
                            <option value='pesca'>Pesca</option>
                            <option value='pasage'>Pasage</option>
                            <option value='aguicultura'>Aquicultura</option>
                            <option value='serviciosMaritimos'>Servicios maritimos</option>
                            <option value='recreo'>Recreo</option>
                            <option value='Vigilancia'>Vigilancia/Militares</option>
                        </select>
                    </div>
                </div>
                <div class="form-row ">
                <div class="col-md-4 mb-2">
                        <label for="servicioES">Servicio Castesllano</label>
                        <input type="text" class="form-control" name="servicioES" id="servicioES"  title="Solo caracteres de 3 a 50" tabindex="1" required value="<?php echo $resultadoBD[0][2]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="servicioEN">Servicio Ingles</label>
                        <input type="text" class="form-control" name="servicioEN" id="servicioEN"  title="Solo caracteres de 3 a 50" tabindex="1" required value="<?php echo $resultadoBD[0][3]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="servicioFNC">Servicio Frances</label>
                        <input type="text" class="form-control" name="servicioFNC" id="servicioFNC"  title="Solo caracteres de 3 a 50" tabindex="1" required value="<?php echo $resultadoBD[0][4]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                   
                </div>        
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="grupo">Grupo/clase</label>
                        <input type="text" class="form-control" name="grupo" id="grupo"  title="Tine que ser parecido a:( 3/s ) " tabindex="1"  value="<?php echo $resultadoBD[0][5]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="casco">Casco</label>
                        <input type="text" class="form-control" name="casco" id="casco"  title="Solo caracteres de 1 a 50 " tabindex="1"  value="<?php echo $resultadoBD[0][6]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="esloraToral">Eslora toral,m</label>
                        <input type="text" class="form-control" name="esloraToral" id="esloraToral"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][7]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="esloraPP">Eslora entre PP, m</label>
                        <input type="text" class="form-control" name="esloraPP" id="esloraPP"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][8]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="manga">Manga ff, m</label>
                        <input type="text" class="form-control" name="manga" id="manga"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][9]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="puntal">Puntal de construcción, m</label>
                        <input type="text" class="form-control" name="puntal" id="puntal"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][10]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="TonelajeTRB">Tonelaje TRB</label>
                        <input type="text" class="form-control" name="TonelajeTRB" id="TonelajeTRB"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][11]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="TonelajeGT">Tonelaje GT</label>
                        <input type="text" class="form-control" name="TonelajeGT" id="TonelajeGT"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][12]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="calado">Calado máx con carga, m</label>
                        <input type="text" class="form-control" name="calado" id="calado"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][13]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="PesoRosca">Peso en rosca, T</label>
                        <input type="text" class="form-control" name="PesoRosca" id="PesoRosca"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][14]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Desplazamiento">Desplazamiento trabajo, T</label>
                        <input type="text" class="form-control" name="Desplazamiento" id="Desplazamiento"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][15]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="CargaMaxCubierta">Carga máxima cubierta,T</label>
                        <input type="text" class="form-control" name="CargaMaxCubierta" id="CargaMaxCubierta"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][16]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="DesplazamientoCarga">Desplazamiento max carga</label>
                        <input type="text" class="form-control" name="DesplazamientoCarga" id="DesplazamientoCarga" title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][17]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="PotenciaPropulsora">Potencia propulsora,Cv/Kw</label>
                        <input type="text" class="form-control" name="PotenciaPropulsora" id="PotenciaPropulsora"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][18]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="PotenciaAuxiliar">Potencia auxiliar, Cv/Kw</label>
                        <input type="text" class="form-control" name="PotenciaAuxiliar" id="PotenciaAuxiliar" title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][19]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="VelocidadSinVelocidad">Velocidad sin carga, Nds</label>
                        <input type="text" class="form-control" name="VelocidadSinVelocidad" id="VelocidadSinVelocidad"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][20]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Combustible">Combustible, L</label>
                        <input type="text" class="form-control" name="Combustible" id="Combustible" title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][21]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Tripulación">Tripulación</label>
                        <input type="text" class="form-control" name="Tripulación" id="Tripulación"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][22]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="AguaPotable">Agua potable, L</label>
                        <input type="text" class="form-control" name="AguaPotable" id="AguaPotable"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][23]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="AguaNegra">Aguas negras, L</label>
                        <input type="text" class="form-control" name="AguaNegra" id="AguaNegra"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][24]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="AguaOleosas">Aguas oleosas, L</label>
                        <input type="text" class="form-control" name="AguaOleosas" id="AguaOleosas"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][25]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="Grua">Grua, KN.m</label>
                        <input type="text" class="form-control" name="Grua" id="Grua"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][26]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Cabrestante">Cabrestante, T</label>
                        <input type="text" class="form-control" name="Cabrestante" id="Cabrestante"  title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][27]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Generador">Generador, Kw</label>
                        <input type="text" class="form-control" name="Generador" id="Generador" title="Solo numeros de 1 a 10 de longitud" tabindex="1"  value="<?php echo $resultadoBD[0][28]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="idFiles1">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles1" name="file1" img="<?php echo $resultadoBD[0][32]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles2">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles2" name="file2" img="<?php echo $resultadoBD[0][33]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles3">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles3" name="file3" img="<?php echo $resultadoBD[0][34]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="idFiles4">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles4" name="file4" img="<?php echo $resultadoBD[0][35]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles5">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles5" name="file5" img="<?php echo $resultadoBD[0][36]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles6">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles6" name="file6" img="<?php echo $resultadoBD[0][37]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="idFiles4">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles7" name="file7" img="<?php echo $resultadoBD[0][38]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles5">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles8" name="file8" img="<?php echo $resultadoBD[0][39]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-4">
                        <label for="idFiles6">Inserta una imagen </label>
                        <input class="form-control" type="file" id="idFiles9" name="file9" img="<?php echo $resultadoBD[0][40]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label for="Link1">Link1</label>
                        <input type="url" class="form-control" name="Link1" id="Link1" tabindex="1" value="<?php echo $resultadoBD[0][41]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Link2">Link2</label>
                        <input type="url" class="form-control" name="Link2" id="Link2" tabindex="1"  value="<?php echo $resultadoBD[0][42]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="Link3">Link3</label>
                        <input type="url" class="form-control" name="Link3" id="Link3" tabindex="1"  value="<?php echo $resultadoBD[0][43]; ?>">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <label for="id">Descripción general Castellano:</label>
                        <textarea name="textoES" rows="6" cols="90" id="textoES"> <?php echo $resultadoBD[0][29]; ?></textarea>
                </div>
                <div class="form-row">
                <label for="id">Descripción general Ingles:</label>
                        <textarea name="textoEN" rows="6" cols="90" id="textoEN"  ><?php echo $resultadoBD[0][30]; ?></textarea>
                </div>
                <div class="form-row">
                <label for="id">Descripción general Frances:</label>
                        <textarea name="textoFNC" rows="6" cols="90" id="textoFNC" ><?php echo $resultadoBD[0][31]; ?></textarea>
                </div>
         
        <div>
            <div>
            <input class="btn btn-success btn-lg mt-2 " type="submit" name="guardar" value="Guardar" id="formAlt"> </div>
        </div>

        </form>
        <div id="textError" class="mt-5">
            <?php if (isset($errores)) {
                echo "<p> $errores </p>";
            } ?>
        </div>
    </div>
</div>


<?php $params = ob_get_clean(); ?>
<?php include 'json.php'; ?>