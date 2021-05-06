<?php ob_start()?>
<div>
    <h2 class="text-center mt-5">NOTICIAS</h2>
    <div class="row mt-5">
        <div class="col-12 col-md-9" id="contenido">
            <?php echo $contenido; ?>
        </div>
        <div class="col-12 col-md-3  listado">
            <ul>
                <li><a href="index.php?operacion=VNoticia">Ver noticias</a></li>
                <li><a href="index.php?operacion=CNoticia">Crear noticia</a></li>
                <li><a href="index.php?operacion=MNoticia">Modificar noticia</a></li>
                <li><a href="index.php?operacion=ENoticia">Eliminar noticia</a></li>
            </ul>
        </div>
    </div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layoutAdmin.php';?>