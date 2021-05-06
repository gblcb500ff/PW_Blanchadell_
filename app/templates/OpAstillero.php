<?php ob_start() ?>
<div>
    <h2 class="text-center mt-5">ASTILLERO</h2>
    <div class="row mt-5">
        <div class="col-12 col-md-9" id="contenido">
            <?php echo $contenido; ?>
        </div>
        <div class="col-12 col-md-3  listado">
            <ul>
                <li><a href="index.php?operacion=VProducto">Ver productos</a></li>
                <li><a href="index.php?operacion=CProducto">Crear producto</a></li>
                <li><a href="index.php?operacion=MProducto">Modificar producto</a></li>
                <li><a href="index.php?operacion=EProducto">Eliminar producto</a></li>
            </ul>
        </div>
    </div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layoutAdmin.php'; ?>