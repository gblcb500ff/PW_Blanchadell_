<?php ob_start() ?>
<div>
    <div>
        <video id="VideoAutoPlay" class="w-100 h-25" autoplay>
            <source src="/Blanchadell/imagenes/videos/IMG_5519.MOV" type="video/mp4">
        </video>
    </div>
</div>
<div class="container text-center mt-5" id="CatalogoAstillero">
    <h2><?php echo $lang['NuestroCatálogo'] ?></h2>
    <div class="mt-5 row ">
        <div class="col-3 bg-danger" tipo="Pesca"><?php echo $lang['Pesca'] ?></div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Aguicultura"><?php echo $lang['Acuicultura'] ?></div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Pasage"><?php echo $lang['BarcoPasaje'] ?></div>
        <div class="col-1"></div>
    </div>
    <div class="row mt-5">
        <div class="col-3 bg-danger" tipo="ServiciosMaritimos"><?php echo $lang['ServiciosMarítimos'] ?></div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Recreo"><?php echo $lang['Recreo'] ?> </div>
        <div class="col-1"></div>
        <div class="col-3 bg-danger" tipo="Vigilancia"><?php echo $lang['Vigilancia'] ?></div>
        <div class="col-1"></div>
    </div>
</div>
<div class=" mt-5">
    <h3 class="text-center"><?php echo $lang['VentajasDesventajas'] ?></h3>
    <div class="row mt-3 fondoAzul">
        <div class=" col-md-6 col-12 m-2 text-light" id="as1">
            <h1 class="text-center"><?php echo $lang['Durabilidad'] ?></h1>
        </div>
        <div class=" col-md-4 col-12">
            <p class="mt-7 m-2"><?php echo $lang['TextoVD1'] ?></p>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row fondoAzul">
        <div class=" col-md-6 col-12">
            <p class="mt-7 m-2"><?php echo $lang['TextoVD2'] ?></p>
        </div>
        <div class=" col-md-5 col-12 m-2 text-light" id="as2">
            <h1 class="text-center"><?php echo $lang['Peso'] ?></h1>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row fondoAzul">
        <div class=" col-md-5 col-12 m-2 text-light" id="as3">
            <h1 class="text-center"><?php echo $lang['Manejabilidad'] ?></h1>
        </div>
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD3'] ?></p>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row  fondoAzul">
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD4'] ?></p>
        </div>
        <div class="col-md-5 col-12 m-2 text-light" id="as4">
            <h1 class="text-center"><?php echo $lang['Confort'] ?></h1>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row fondoAzul">
        <div class=" col-md-5 col-12 m-2 text-light" id="as5">
            <h1 class="text-center"><?php echo $lang['Mantenimiento'] ?></h1>
        </div>
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD5'] ?></p>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row  fondoAzul">
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD6'] ?></p>
        </div>
        <div class=" col-md-5 col-12 m-2 text-light" id="as6">
            <h1 class="text-center"><?php echo $lang['Reparaciones'] ?></h1>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row  fondoAzul">
        <div class="col-md-5 col-12 m-2 text-light" id="as7">
            <h1 class="text-center"><?php echo $lang['Estética'] ?></h1>
        </div>
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"> <?php echo $lang['TextoVD7'] ?></p>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row fondoAzul">
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD8'] ?></p>
        </div>
        <div class="col-md-5 col-12 m-2 text-light" id="as8">
            <h1 class="text-center"><?php echo $lang['Seguridad'] ?></h1>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row  fondoAzul">
        <div class="col-md-5 col-12 m-2 text-light" id="as9">
            <h1 class="text-center"><?php echo $lang['ValorResidual'] ?></h1>
        </div>
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD9'] ?></p>
        </div>
    </div>
    <div class="lineaNegra"></div>
    <div class="row  fondoAzul">
        <div class=" col-md-6 col-12">
            <p class="mt-5 m-2"><?php echo $lang['TextoVD10'] ?></p>
        </div>
        <div class="col-md-5 col-12 m-2 text-light" id="as10">
            <h1 class="text-center"><?php echo $lang['Coste'] ?></h1>
        </div>
    </div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layout.php'; ?>