<?php ob_start(); ?>
<?php if (empty($datosBB)) { ?>
    <div class="container text-center">
    <?php if ($cat == "AceroInox") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas en acero inoxidable</h3>
            <?php } elseif ($cat == "AluminioNaval") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas en aluminio naval</h3>
            <?php } elseif ($cat == "AceroCarbono") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas en acero al carbono</h3>
            <?php } elseif ($cat == "BarraPastecas") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Barra pastecas</h3>
            <?php } elseif ($cat == "RulosPopa") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Rulos de popa</h3>
            <?php } elseif ($cat == "EnrolladoesArte") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Enrolladores de arte </h3>
            <?php } elseif ($cat == "MaquinillaCabirones") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas de cabirones </h3>
            <?php } elseif ($cat == "MaquinillaCascada") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas de carreteles en cascada</h3>
            <?php } elseif ($cat == "MaquinillaPuñoPopa") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas para cabo de puño de popa</h3>
            <?php } elseif ($cat == "MaquinillaSobrasAtun") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinillas sobras atun rojo</h3>
            <?php } elseif ($cat == "PlumasCopejear") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Plumas copejear</h3>
            <?php } elseif ($cat == "Haladores") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Haladores</h3>
            <?php } elseif ($cat == "CarretePuño") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Carrete de puño</h3>
            <?php }elseif ($cat == "PescantesPastecas") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Pescantes pastecas</h3>
            <?php } elseif ($cat == "MaquinariaPalangre") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinaria palangre</h3>
            <?php } elseif ($cat == "LineaEjes") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Linea de ejes</h3>
            <?php } elseif ($cat == "HelicesTransversales") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Hélices Transversales</h3>
            <?php }elseif ($cat == "HelicesAcimutales") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Hélices Acimutales</h3>
            <?php } elseif ($cat == "Timones") { ?>
                <h3 class="text-center">Lo sentimos no se encontro Timones</h3>
            <?php } elseif ($cat == "Toberas") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Equipos Toberas</h3>
            <?php } elseif ($cat == "Hidraulica") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Hidráulica</h3>
            <?php }  elseif ($cat == "MaquinariaPesca") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Maquinaria Pesca </h3>
            <?php }  elseif ($cat == "EquiposPropulsores") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Equipos propulsores</h3>
            <?php }  elseif ($cat == "Gruas") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Gruas</h3>
            <?php } elseif ($cat == "Motores") { ?>
                <h3 class="text-center ">Lo sentimos no se encontro Motores</h3>
            <?php }  elseif ($cat == "HelicesReversible") { ?>
                <h1 class="text-center ">Lo sentimos no se encontro Helices reversible</h1>
            <?php }  elseif ($cat == "TimonesArticulados") { ?>
                <h1 class="text-center ">Lo sentimos no se encontro Timones articulados </h1>
            <?php } ?>
    </div>
<?php } else { ?>
    <?php if (!empty($datosBB[0][26])) { ?>
        <div class="Video">
                <video autoplay muted loop>
                    <source src="<?php echo $datosBB[0][26]; ?>" type="video/mp4">
                </video>
                <?php if ($cat == "AceroInox") { ?>
                <h1 class="text-center "> Maquinillas en acero inoxidable</h1>
            <?php } elseif ($cat == "AluminioNaval") { ?>
                <h1 class="text-center "> Maquinillas en aluminio naval</h1>
            <?php } elseif ($cat == "AceroCarbono") { ?>
                <h1 class="text-center "> Maquinillas en acero al carbono</h1>
            <?php } elseif ($cat == "BarraPastecas") { ?>
                <h1 class="text-center "> Barra pastecas</h1>
            <?php } elseif ($cat == "RulosPopa") { ?>
                <h1 class="text-center "> Rulos de popa</h1>
            <?php } elseif ($cat == "EnrolladoesArte") { ?>
                <h1 class="text-center "> Enrolladores de arte </h1>
            <?php } elseif ($cat == "MaquinillaCabirones") { ?>
                <h1 class="text-center "> Maquinillas de cabirones </h1>
            <?php } elseif ($cat == "MaquinillaCascada") { ?>
                <h1 class="text-center "> Maquinillas de carreteles en cascada</h1>
            <?php } elseif ($cat == "MaquinillaPuñoPopa") { ?>
                <h1 class="text-center "> Maquinillas para cabo de puño de popa</h1>
            <?php } elseif ($cat == "MaquinillaSobrasAtun") { ?>
                <h1 class="text-center "> Maquinillas sobras atun rojo</h1>
            <?php } elseif ($cat == "PlumasCopejear") { ?>
                <h1 class="text-center "> Plumas copejear</h1>
            <?php } elseif ($cat == "Haladores") { ?>
                <h1 class="text-center "> Haladores</h1>
            <?php } elseif ($cat == "CarretePuño") { ?>
                <h1 class="text-center "> Carrete de puño</h1>
            <?php }elseif ($cat == "PescantesPastecas") { ?>
                <h1 class="text-center "> Pescantes pastecas</h1>
            <?php } elseif ($cat == "MaquinariaPalangre") { ?>
                <h1 class="text-center "> Maquinaria palangre</h1>
            <?php } elseif ($cat == "LineaEjes") { ?>
                <h1 class="text-center "> Linea de ejes</h1>
            <?php } elseif ($cat == "HelicesTransversales") { ?>
                <h1 class="text-center "> Hélices Transversales</h1>
            <?php }elseif ($cat == "HelicesAcimutales") { ?>
                <h1 class="text-center "> Hélices Acimutales</h1>
            <?php } elseif ($cat == "Timones") { ?>
                <h1 class="text-center"> Timones</h1>
            <?php } elseif ($cat == "Toberas") { ?>
                <h1 class="text-center "> Equipos Toberas</h1>
            <?php } elseif ($cat == "Hidraulica") { ?>
                <h1 class="text-center "> Hidráulica</h1>
            <?php }  elseif ($cat == "MaquinariaPesca") { ?>
                <h1 class="text-center "> Maquinaria Pesca </h1>
            <?php }  elseif ($cat == "EquiposPropulsores") { ?>
                <h1 class="text-center "> Equipos propulsores</h1>
            <?php }  elseif ($cat == "Gruas") { ?>
                <h1 class="text-center "> Gruas</h1>
            <?php } elseif ($cat == "Motores") { ?>
                <h1 class="text-center "> Motores</h1>
            <?php }  elseif ($cat == "HelicesReversible") { ?>
                <h1 class="text-center "> Helices reversible</h1>
            <?php }  elseif ($cat == "TimonesArticulados") { ?>
                <h1 class="text-center "> Timones articulados </h1>
            <?php } ?>
        </div>
    <?php } ?>
    <div class="fondoAzul ">
        <div class="container"> 
        <br><br>        
            <div class="row">
                <?php if (!empty($datosBB[0][2]) && (!empty($datosBB[0][3]) || !empty($datosBB[0][4] || !empty($datosBB[0][5])))) { ?>
                    <div class="col">
                        <div class="d-flex justify-content-beetwen">
                            <div class="col-6">
                                <img class="imgMecanica" src="<?php echo $datosBB[0][2]; ?>">
                            </div>
                            <div class="col-6">
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[0][3]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[0][4]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[0][5]; ?></p>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if (!empty($datosBB[0][6]) && (!empty($datosBB[0][7]) || !empty($datosBB[0][8] || !empty($datosBB[0][9])))) { ?>
                <div class="lineaNegra mt-2"></div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="d-flex justify-content-beetwen">
                            <div class="col-6">
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[0][7]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[0][8]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[0][9]; ?></p>
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <img class="imgMecanica" src="<?php echo $datosBB[0][6]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($datosBB[0][10]) && (!empty($datosBB[0][11]) || !empty($datosBB[0][12] || !empty($datosBB[0][13])))) { ?>
                <div class="lineaNegra mt-2"></div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="d-flex justify-content-beetwen">
                            <div class="col-6">
                                <img class="imgMecanica" src="<?php echo $datosBB[0][10]; ?>">
                            </div>
                            <div class="col-6">
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[0][11]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[0][12]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[0][13]; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($datosBB[0][14]) && (!empty($datosBB[0][15]) || !empty($datosBB[0][16] || !empty($datosBB[0][17])))) { ?>
                <div class="lineaNegra mt-2"></div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="d-flex justify-content-beetwen">
                            <div class="col-6">
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[0][15]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[0][16]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[0][17]; ?></p>
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <img class="imgMecanica" src="<?php echo $datosBB[0][14]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($datosBB[0][18]) && (!empty($datosBB[0][19]) || !empty($datosBB[0][20] || !empty($datosBB[0][21])))) { ?>
                <div class="lineaNegra mt-2"></div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="d-flex justify-content-beetwen">
                            <div class="col-6">
                                <img class="imgMecanica" src="<?php echo $datosBB[0][18]; ?>">
                            </div>
                            <div class="col-6">
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[0][19]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[0][20]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[0][21]; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($datosBB[0][22]) && (!empty($datosBB[0][23]) || !empty($datosBB[0][24] || !empty($datosBB[0][25])))) { ?>
                <div class="lineaNegra mt-2"></div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="d-flex justify-content-beetwen">
                            <div class="col-6">
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[0][23]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[0][24]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[0][25]; ?></p>
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <img class="imgMecanica" src="<?php echo $datosBB[0][22]; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
<?php } ?>
<?php if ($tipo == "fabricacion") { ?>
    <div class="container">
    <div class="text-center">
            <h1 class="text-center"> Maquinaria Naval</h1>
            <div class="card text-center  mt-3">
                <div class="card-header ">
                    <h2> Pesca arrastre</h2>
                </div>
                <div class="card-body">
                    <h3>Maquinillas</h3>
                    <div class=" listado2">
                        <div>
                            <ul>
                                <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=AceroInox">En acero inoxidable</a></li>
                                <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=AluminioNaval">En aluminio naval</a></li>
                                <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=AceroCarbono">En acero al carbono</a></li>
                            </ul>
                        </div>
                        <h3>Complementos</h3>
                        <div class=" listado2">
                            <div>
                                <ul>
                                    <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=BarraPastecas">Barra pastecas</a></li>
                                    <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=RulosPopa">Rulos de popa</a></li>
                                    <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=EnrolladoesArte">Enrolladores de arte</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header ">
                    <h2> Pesca de cerco</h2>
                </div>
                <div class="card-body">
                    <h3>Maquinillas</h3>
                    <div class=" listado2">
                        <ul>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=MaquinillaCabirones">De cabirones</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=MaquinillaCascada">De carreteles en cascada</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=MaquinillaPuñoPopa">Para cabo de puño de popa</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=MaquinillaSobrasAtun">Sobras atun rojo</a></li>
                        </ul>
                    </div>
                    <h3>Complementos</h3>
                    <div class=" listado2">
                        <ul>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=PlumasCopejear">Plumas copejear</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=Haladores">Haladores</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=CarretePuño">Carrete de puño</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=PescantesPastecas">Pescantes pastecas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-header ">
                    <h2> Otras modalidades</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center listado2">
                        <div>
                            <ul>
                                <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=MaquinariaPalangre">Maquinaria palangre</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="text-center mt-5"> Equipos propulsivos</h1>
            <div class="card text-center  mt-3">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class=" listado2">
                        <ul>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=LineaEjes">Linea de ejes</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=HelicesTransversales">Hélices Transversales</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=HelicesAcimutales">Hélices Acimutales</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=Timones">Timones</a></li>
                            <li><a href="index.php?operacion=ProductoMecanica&tipo=fabricacion&cat=Toberas">Toberas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } elseif ($tipo == "servicios") { ?>
    <div class="container text-center">
    <div class="card text-center">
            <div class="card-header ">
                <h2>Reformas e instalaciones</h2>
            </div>
            <div class="card-body">
                <div class="listado2">
                    <ul>
                    <li><a href="index.php?operacion=ProductoMecanica&tipo=servicios&cat=Hidraulica">Hidráulica</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=servicios&cat=MaquinariaPesca">Maquinaria Pesca</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=servicios&cat=EquiposPropulsores">Equipos propulsores</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=servicios&cat=Gruas">Gruas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php } elseif ($tipo == "mantenimiento") { ?>
    <div class="container text-center">
    <div class="card text-center">
            <div class="card-header ">
                <h2>Mantenimiento</h2>
            </div>
            <div class="card-body">
                <div class="listado2">
                    <ul>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=mantenimiento&cat=Motores">Motores</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=mantenimiento&cat=LineaEjes">Linea de ejes</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=mantenimiento&cat=Toberas">Toberas</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=mantenimiento&cat=HelicesReversible">Helices reversible</a></li>
                        <li><a href="index.php?operacion=ProductoMecanica&tipo=mantenimiento&cat=TimonesArticulados">Timones articulados</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layout.php'; ?>