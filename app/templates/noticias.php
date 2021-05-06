<?php ob_start() ?>

<div class="container mt-5">
    <div class="text-center">
        <h2>NUESTRA ACTUALIDAD</h2>
        <h5 class="mt-3">Siguenos en las redes sociales para todas las inovaciones que vamos haciendo, no te pierdas nada de talleres Blanchadell . </h5>
        <div class="d-flex justify-content-around mt-5">
            <div>
                <i class="fab fa-instagram"></i><a href="https://www.instagram.com/blanchadell_sl/" target="_blank" class="text-dark QuitarColorLink"> Instagram</a> 
            </div>
            <div>
                <i class="fab fa-facebook-square icono"></i><a href="https://www.facebook.com/talleres.blanchadell/" target="_blank" class="text-dark QuitarColorLink"> Facebook</a> 
            </div>
            <div>
                <i class="fab fa-twitter icono"></i><a href="https://twitter.com/Blanchadell_SL" target="_blank" class="text-dark QuitarColorLink"> Twitter</a>
            </div>
            <div>
                <i class="fab fa-youtube"></i><a href="https://www.youtube.com/channel/UCfLhT3oyaSdd5tlZArYY4CQ" target="_blank" class="text-dark QuitarColorLink"> Youtube</a>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <?php if (!empty($resultadoBD)) {
            $cont = count($resultadoBD);
            for ($i = 0; $i < $cont; $i++) { ?>
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <?php if ($_SESSION['lang'] == 'es') { ?>
                            <h3 class="card-title"><?php echo $resultadoBD[$i][0]; ?></h3>
                        <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                            <h3 class="card-title"><?php echo $resultadoBD[$i][1]; ?></h3>
                        <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                            <h3 class="card-title"><?php echo $resultadoBD[$i][2]; ?></h3>
                        <?php } ?>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="<?php echo $resultadoBD[$i][4]; ?>" alt="..." style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p class="card-text">Fecha: <?php echo $resultadoBD[$i][3]; ?></p>
                                <div class="">
                                    <?php if ($_SESSION['lang'] == 'es') { ?>
                                        <p class="card-text"><?php echo $resultadoBD[$i][5]; ?></p>
                                    <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                                        <p> class="card-text"<?php echo $resultadoBD[$i][6]; ?></p>
                                    <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                                        <p class="card-text"><?php echo $resultadoBD[$i][7]; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <a href="<?php echo $resultadoBD[$i][8]; ?>" class="card-link">Link 1</a>
                                    </div>
                                    <div>
                                        <a href="<?php echo $resultadoBD[$i][9]; ?>" class="card-link">Link 2</a>
                                    </div>
                                    <div>
                                        <a href="<?php echo $resultadoBD[$i][10]; ?>" class="card-link">Link 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php }
        } else { ?>
            <h5 class="mt-3 ">Lo sentimos no se encontro ninguna noticia </h5>
        <?php } ?>
    </div>
</div>









<?php $contenido = ob_get_clean(); ?>
<?php include 'layout.php'; ?>