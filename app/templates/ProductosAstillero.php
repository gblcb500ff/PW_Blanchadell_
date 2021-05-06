<?php ob_start() ?>

<?php if ($tipo == "Pesca") { ?>
    <div class="text-light" id="Pesca">
        <h1 class="text-center">Pesca</h1>
    </div>
    <div class="container">
        <p class="text-center mt-5">Construimos barcos de pesca de aluminio, tanto catamaranes como monocasco. Ofrecemos diseños en función del tipo de arte de pesca, cerco, palangre, arrastre o artes menores. Conocemos bien las necesidades de los profesionales de la pesca y es por ello que nuestros diseño constructivos encajan perfectamente con lo que necesitan.</p>
    </div>
    <div class="container mt-5 text-center">
        <h2>Nuestros proyectos de Pesca</h2>
        <?php $cont = count($datosBB); ?>
        <div class="row">
            <?php for ($i = 0; $i < $cont; $i++) {   ?>

                <?php if ($cont == 1) { ?>
                    <div class=" hover2 mt-3 col-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 2) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 3) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                    <?php } elseif ($cont > 3) {
                    if ($cont % 2 == 0) { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 " barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                    <?php } else { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                <?php  }
                } ?>
            <?php } ?>
        </div>
    </div>


<?php } elseif ($tipo == "Pasage") { ?>
    <div class="TextoImg col-12 text-light" id="Pasage">
        <h1 class="text-center">PASAGE</h1>
    </div>
    <div class="container">
        <p class="text-center">El barco de pasajeros de aluminio se ha convertido en la mejor opción para los Armadores con líneas regulares de pasajeros, tanto en bahías y costas como en inter-islas. El barco de aluminio ofrece ventajas en su peso por lo que es una solución ideal para este tipo de negocio. Aporta ahorro en combustible, así como menos necesidad de motorización para alcanzar la misma velocidad.</p>
    </div>
    <div class="container mt-5 text-center">
        <h2>Nuestros proyectos de Pasage</h2>
        <?php $cont = count($datosBB); ?>
        <div class="row">
            <?php for ($i = 0; $i < $cont; $i++) {   ?>

                <?php if ($cont == 1) { ?>
                    <div class=" hover2 mt-3 col-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 2) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 3) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                    <?php } elseif ($cont > 3) {
                    if ($cont % 2 == 0) { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 " barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                    <?php } else { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                <?php  }
                } ?>
            <?php } ?>
        </div>
    </div>


<?php } elseif ($tipo == "Aguicultura") { ?>
    <div class="TextoImg col-12 text-light" id="Aguicultura">
        <h1 class="text-center">Aguicultura</h1>
    </div>
    <div class="container">
        <p class="text-center mt-5">El barco de pasajeros de aluminio se ha convertido en la mejor opción para los Armadores con líneas regulares de pasajeros, tanto en bahías y costas como en inter-islas. El barco de aluminio ofrece ventajas en su peso por lo que es una solución ideal para este tipo de negocio. Aporta ahorro en combustible, así como menos necesidad de motorización para alcanzar la misma velocidad.</p>
    </div>
    <div class="container mt-5 text-center">
        <h2>Nuestros proyectos de Aguicultura</h2>
        <?php $cont = count($datosBB); ?>
        <div class="row">
            <?php for ($i = 0; $i < $cont; $i++) {   ?>

                <?php if ($cont == 1) { ?>
                    <div class=" hover2 mt-3 col-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 2) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 3) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                    <?php } elseif ($cont > 3) {
                    if ($cont % 2 == 0) { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                    <?php } else { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                <?php  }
                } ?>
            <?php } ?>
        </div>
    </div>
<?php } elseif ($tipo == "ServiciosMaritimos") { ?>
    <div class="TextoImg col-12 text-light" id="ServiciosMaritimos">
        <h1 class="text-start">Servicios Maritimos</h1>
    </div>
    <div class="container">
        <p class="text-center mt-5">Construimos barcos de pesca de aluminio, tanto catamaranes como monocasco. Ofrecemos diseños en función del tipo de arte de pesca, cerco, palangre, arrastre o artes menores. Conocemos bien las necesidades de los profesionales de la pesca y es por ello que nuestros diseño constructivos encajan perfectamente con lo que necesitan.</p>
    </div>
    <div class="container mt-5 text-center">
        <h2>Nuestros proyectos de Servicios Maritimos</h2>
        <?php $cont = count($datosBB); ?>
        <div class="row">
            <?php for ($i = 0; $i < $cont; $i++) {   ?>

                <?php if ($cont == 1) { ?>
                    <div class=" hover2 mt-3 col-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 2) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 3) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                    <?php } elseif ($cont > 3) {
                    if ($cont % 2 == 0) { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 " barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                    <?php } else { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                <?php  }
                } ?>
            <?php } ?>
        </div>
    </div>

<?php } elseif ($tipo == "Recreo") { ?>
    <div class="TextoImg col-12 text-light" id="Recreo">
        <h1 class="text-start">Recreo</h1>
    </div>
    <div class="container">
        <p class="text-center mt-5">Construimos barcos de pesca de aluminio, tanto catamaranes como monocasco. Ofrecemos diseños en función del tipo de arte de pesca, cerco, palangre, arrastre o artes menores. Conocemos bien las necesidades de los profesionales de la pesca y es por ello que nuestros diseño constructivos encajan perfectamente con lo que necesitan.</p>
      
    </div>
    <div class="container mt-5 text-center">
        <h2>Nuestros proyectos de Recreo</h2>
        <?php $cont = count($datosBB); ?>
        <div class="row">
            <?php for ($i = 0; $i < $cont; $i++) {   ?>

                <?php if ($cont == 1) { ?>
                    <div class=" hover2 mt-3 col-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 2) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 3) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                    <?php } elseif ($cont > 3) {
                    if ($cont % 2 == 0) { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                    <?php } else { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                <?php  }
                } ?>
            <?php } ?>
        </div>
    </div>
<?php } elseif ($tipo == "Vigilancia") { ?>
    <div class="TextoImg col-12 text-light" id="Vigilancia">
        <h1 class="text-start">Vigilancia</h1>
    </div>
    <div class="container">
        <p class="text-center mt-5">Construimos barcos de pesca de aluminio, tanto catamaranes como monocasco. Ofrecemos diseños en función del tipo de arte de pesca, cerco, palangre, arrastre o artes menores. Conocemos bien las necesidades de los profesionales de la pesca y es por ello que nuestros diseño constructivos encajan perfectamente con lo que necesitan.</p>
    </div>
    <div class="container mt-5 text-center">
        <h2>Nuestros proyectos de Vigilancia</h2>
        <?php $cont = count($datosBB); ?>
        <div class="row">
            <?php for ($i = 0; $i < $cont; $i++) {   ?>

                <?php if ($cont == 1) { ?>
                    <div class=" hover2 mt-3 col-12" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 2) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                <?php } elseif ($cont == 3) { ?>
                    <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                        <figure>
                            <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                            <div class="capa">
                                <h3><?php echo $datosBB[$i][0]; ?></h3>
                                <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                            </div>
                        </figure>
                    </div>
                    <?php } elseif ($cont > 3) {
                    if ($cont % 2 == 0) { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                    <?php } else { ?>
                        <div class=" hover2 mt-3 col-12 col-sm-6 col-md-4" barco="<?php echo $datosBB[$i][0]; ?>">
                            <figure>
                                <img src="<?php echo $datosBB[$i][4]; ?>" alt="">
                                <div class="capa">
                                    <h3><?php echo $datosBB[$i][0]; ?></h3>
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                    <p><?php echo $datosBB[$i][1]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo $datosBB[$i][2]; ?></p>
                                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                    <p><?php echo $datosBB[$i][3]; ?></p>
                                <?php } ?>
                                </div>
                            </figure>
                        </div>
                <?php  }
                } ?>
            <?php } ?>
        </div>
    </div>

<?php } else {
    echo "<p>Lo sentimos hubo un error al coger los datos ";
} ?>


<?php $contenido = ob_get_clean(); ?>
<?php include 'layout.php'; ?>