<?php ob_start(); ?>
<div class="text-center row">
    <div class="col-12 ImgMBarco">
        <img src="<?php echo $datosBB[0][32]; ?>">
        <h1><?php echo $datosBB[0][0]; ?></h1>
    </div>
</div>
<div class=" container text-center d-flex justify-content-around mt-3">
    <div class="col-12">

        <?php if ($_SESSION['lang'] == 'es') { ?>
            <h3 class='text-center'><?php echo $datosBB[0][2]; ?></h3>
        <?php } elseif ($_SESSION['lang'] == 'en') { ?>
            <h3 class='text-center'><?php echo $datosBB[0][3]; ?></h3>
        <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
            <h3 class='text-center'><?php echo $datosBB[0][4]; ?></h3>
        <?php } ?>

        <?php if ($_SESSION['lang'] == 'es') { ?>
            <p><?php echo $datosBB[0][29]; ?></p>
        <?php } elseif ($_SESSION['lang'] == 'en') { ?>
            <p><?php echo $datosBB[0][30]; ?></p>
        <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
            <p><?php echo $datosBB[0][31]; ?></p>
        <?php } ?>

    </div>
</div>
<div class="container mt-5">
    <hr class="LineaFichaTecnica">
    <div class="d-flex justify-content-around" id="mas" class="col-12">
        <h3>FICHA TECNICA</h3>
        <i class="fas fa-plus "> </i>
    </div>
    <hr class="LineaFichaTecnica">
</div>
<div class="container  d-flex justify-content-start mt-3 " id="ContenidoFT">
    <table class="spectbl table-hover">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td><span><?php echo $datosBB[0][0]; ?></span></td>
            </tr>
            <tr>
                <th>Servicio</th>

                <?php if ($_SESSION['lang'] == 'es') { ?>
                    <td><span><?php echo $datosBB[0][2]; ?></span></td>
                <?php } elseif ($_SESSION['lang'] == 'en') { ?>
                    <td><span><?php echo $datosBB[0][3]; ?></span></td>
                <?php } elseif ($_SESSION['lang'] == 'fnc') { ?>
                    <td><span><?php echo $datosBB[0][4]; ?></span></td>
                <?php } ?>

            </tr>
            <?php if ($datosBB[0][5] != null) { ?>
                <tr>
                    <th>Grupo/Clase</th>
                    <td><span><?php echo $datosBB[0][5]; ?></span></td>
                </tr>
            <?php }
            if ($datosBB[0][6] != null) { ?>
                <tr>
                    <th>Casco</th>
                    <td><span><?php echo $datosBB[0][6]; ?></span></td>
                </tr>
                <?php }
            if ($datosBB[0][7] != null) {
                if ($datosBB[0][7] != 0) { ?>
                    <tr>
                        <th>Eslora toral, m</th>
                        <td><span><?php echo $datosBB[0][7]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][8] != null) {
                if ($datosBB[0][8] != 0) { ?>
                    <tr>
                        <th>Eslora entre PP, m</th>
                        <td><span><?php echo $datosBB[0][8]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][9] != null) {
                if ($datosBB[0][9] != 0) { ?>
                    <tr>
                        <th>Manga ff, m</th>
                        <td><span><?php echo $datosBB[0][9]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][10] != null) {
                if ($datosBB[0][10] != 0) { ?>
                    <tr>
                        <th>Puntal de construcción, m</th>
                        <td><span><?php echo $datosBB[0][10]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][11] != null) {
                if ($datosBB[0][11] != 0) { ?>
                    <tr>
                        <th>Tonelaje, TRB</th>
                        <td><span><?php echo $datosBB[0][11]; ?></span></td>
                    </tr>
                    <?php} } 
                    
            if($datosBB[0][12]!=null ){ 
                if($datosBB[0][12]!=0){?>
                    <tr>
                        <th>Tonelaje, GT</th>
                        <td><span><?php echo $datosBB[0][12]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][13] != null) {
                if ($datosBB[0][13] != 0) { ?>
                    <tr>
                        <th>Calado máx con carga, m</th>
                        <td><span><?php echo $datosBB[0][13]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][14] != null) {
                if ($datosBB[0][14] != 0) { ?>
                    <tr>
                        <th>Peso en rosca, T</th>
                        <td><span><?php echo $datosBB[0][14]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][15] != null) {
                if ($datosBB[0][15] != 0) { ?>
                    <tr>
                        <th>Desplazamiento trabajo, T</th>
                        <td><span><?php echo $datosBB[0][15]; ?></span></td>
                    </tr>
                    <?php} } if($datosBB[0][16]!=null ){ if($datosBB[0][16]!=0){?>
                    <tr>
                        <th>Carga máxima en cubierta, T</th>
                        <td><span><?php echo $datosBB[0][16]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][17] != null) {
                if ($datosBB[0][17] != 0) { ?>
                    <tr>
                        <th>Desplazamiento max carga, T</th>
                        <td><span><?php echo $datosBB[0][17]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][18] != null) {
                if ($datosBB[0][18] != 0) { ?>
                    <tr>
                        <th>Potencia propulsora, Cv/Kw</th>
                        <td><span><?php echo $datosBB[0][18]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][19] != null) {
                if ($datosBB[0][19] != 0) { ?>
                    <tr>
                        <th>Potencia auxiliar, Cv/Kw </th>
                        <td><span><?php echo $datosBB[0][19]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][20] != null) {
                if ($datosBB[0][20] != 0) { ?>
                    <tr>
                        <th>Velocidad sin carga, Nds</th>
                        <td><span><?php echo $datosBB[0][20]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][21] != null) {
                if ($datosBB[0][21] != 0) { ?>
                    <tr>
                        <th>Combustible, L</th>
                        <td><span><?php echo $datosBB[0][21]; ?>L</span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][22] != null) {
                if ($datosBB[0][22] != 0) { ?>
                    <tr>
                        <th>Agua potable, L</th>
                        <td><span><?php echo $datosBB[0][22]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][23] != null) {
                if ($datosBB[0][23] != 0) { ?>
                    <tr>
                        <th>Aguas negras, L</th>
                        <td><span><?php echo $datosBB[0][23]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][24] != null) {
                if ($datosBB[0][24] != 0) { ?>
                    <tr>
                        <th>Aguas oleosas, L</th>
                        <td><span><?php echo $datosBB[0][24]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][25] != null) {
                if ($datosBB[0][25] != 0) { ?>
                    <tr>
                        <th>Tripulación</th>
                        <td><span><?php echo $datosBB[0][25]; ?></span></td>
                    </tr>
                    <?php} } if($datosBB[0][26]!=null ){ if($datosBB[0][26]!=0){?>
                    <tr>
                        <th>Grua, KN.m</th>
                        <td><span><?php echo $datosBB[0][26]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][27] != null) {
                if ($datosBB[0][27] != 0) { ?>
                    <tr>
                        <th>Cabrestante</th>
                        <td><span><?php echo $datosBB[0][27]; ?></span></td>
                    </tr>
                <?php }
            }
            if ($datosBB[0][28] != null) {
                if ($datosBB[0][28] != 0) { ?>
                    <tr>
                        <th>Generador, Kw</th>
                        <td><span><?php echo $datosBB[0][28]; ?></span></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>

<div class=" mt-5 ImagenesP">
    <div class="row d-flex justify-content-between">
        <figure class="col-12 col-sm-6 col-md-4">
            <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][32]; ?>" data-height="2304">
                <img class="img-fluid" src="<?php echo $datosBB[0][32]; ?>">
            </a>
        </figure>
        <figure class="col-12 col-sm-6 col-md-4">
            <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][33]; ?>" data-height="2304">
                <img class="img-fluid" src="<?php echo $datosBB[0][33]; ?>">
            </a>
        </figure>
        <figure class="col-12  col-md-4">
            <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][34]; ?>" data-height="2304">
                <img class="img-fluid" src="<?php echo $datosBB[0][34]; ?>">
            </a>
        </figure>
    </div>
    <?php
    $lista = [$datosBB[0][35], $datosBB[0][36], $datosBB[0][37]];
    $cont = 0;
    for ($i = 0; $i < count($lista); $i++) {
        if ($lista[$i] != null) {
            $cont++;
        }
    }
    if ($cont == 1) { ?>
        <div class="d-flex justify-content-center">
            <figure class="col-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][35]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][35]; ?>">
                </a>
            </figure>
            <figure class="col-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][36]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][36]; ?>">
                </a>
            </figure>
            <figure class="col-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][37]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][37]; ?>">
                </a>
            </figure>
        </div>
    <?php  } else { ?>
        <div class="row d-flex justify-content-between">
            <figure class="col-12 col-sm-6 col-md-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][35]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][35]; ?>">
                </a>
            </figure>
            <figure class="col-12 col-sm-6 col-md-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][36]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][36]; ?>">
                </a>
            </figure>
            <figure class="col-12 col-md-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][37]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][37]; ?>">
                </a>
            </figure>
        </div>
    <?php } ?>
    <?php
    $lista = [$datosBB[0][38], $datosBB[0][39], $datosBB[0][40]];
    $cont = 0;
    for ($i = 0; $i < count($lista); $i++) {
        if ($lista[$i] != null) {
            $cont++;
        }
    }
    if ($cont == 1) { ?>
        <div class="d-flex justify-content-center">
            <figure class="col-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][38]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][38]; ?>">
                </a>
            </figure>
            <figure class="col-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][39]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][39]; ?>">
                </a>
            </figure>
            <figure class="col-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][40]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][40]; ?>">
                </a>
            </figure>
        </div>
    <?php  } else { ?>
        <div class="row d-flex justify-content-between">
            <figure class="col-12 col-sm-6 col-md-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][38]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][38]; ?>">
                </a>
            </figure>
            <figure class="col-12 col-sm-6 col-md-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][39]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][39]; ?>">
                </a>
            </figure>
            <figure class="col-12 col-md-4">
                <a class="d-block" data-fancybox="images" href="<?php echo $datosBB[0][40]; ?>" data-height="2304">
                    <img class="img-fluid" src="<?php echo $datosBB[0][40]; ?>">
                </a>
            </figure>
        <?php } ?>
        </div>
</div>
<br>
<?php
if ($datosBB[0][41] != null && $datosBB[0][42] == null && $datosBB[0][43] == null) { ?>
    <div class="col-12 mt-5">
        <div class="d-flex justify-content-center">
            <div><iframe width="560" height="315" src="<?php echo $datosBB[0][41]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
    </div>
<?php } elseif ($datosBB[0][41] == null && $datosBB[0][42] != null && $datosBB[0][43] == null) { ?>
    <div class="col-12 mt-5">
        <div class="d-flex justify-content-center">
            <div> <iframe width="560" height="315" src="<?php echo $datosBB[0][42]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
    </div>
<?php } elseif ($datosBB[0][41] == null && $datosBB[0][42] == null && $datosBB[0][43] != null) { ?>
    <div class="col-12 mt-5">
        <div class="d-flex justify-content-center">
            <div> <iframe width="560" height="315" src="<?php echo $datosBB[0][43]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
    </div>
<?php } else { ?>

    <div class="col-12 mt-5">
        <div class="row d-flex justify-content-around ">
            <?php if ($datosBB[0][41] != null) { ?>
                <div class="col-12 col-sm-6 col-md-4"> <iframe class="col-12" src="<?php echo $datosBB[0][41]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <?php }
            if ($datosBB[0][42] != null) { ?>
                <div class="col-12 col-sm-6 col-md-4"> <iframe class="col-12" src="<?php echo $datosBB[0][42]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <?php }
            if ($datosBB[0][43] != null) { ?>
                <div class="col-12 col-md-4"> <iframe class="col-12" src="<?php echo $datosBB[0][43]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <?php } ?>
        </div>
    </div>

<?php } ?>
<br><br>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php' ?>