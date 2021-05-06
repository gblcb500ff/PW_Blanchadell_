<?php ob_start() ?>
<div>
    <h2 class="text-center mt-5">MECANICA</h2>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-12 col-md-9" id="contenido">
            <?php echo $contenido; ?>
        </div>
        <div class="col-12 col-md-3  listado">
            <ul>
                <li><a href="index.php?operacion=VServicios">Ver servicio</a></li>
                <li><a href="index.php?operacion=CServicios">Crear servicio</a></li>
                <li><a href="index.php?operacion=MServicios">Modificar servicio</a></li>
                <li><a href="index.php?operacion=EServicios">Eliminar servicio</a></li>
            </ul>
        </div>
    </div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include 'layoutAdmin.php'; ?>