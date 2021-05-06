<?php ob_start() ?>
<div class="d-flex justify-content-between mt-4 bg-warning rounded" id="mensaje">
    <p> </p>
    <p class="text-danger">Tenga cuidado al clickar encima de una fila de la tabla ya que si lo hace la eliminara del sistema. <br>Cuidado!!!!</p>
    <i class="far fa-times-circle" id="Cerrar"></i>
</div><br>
<?php if (empty($resultadoBD)) { ?>
    <div class="text-center">
        <h3>Lo sentimos aun no hay productos ha mostrar</h3>
    </div>
<?php } else {  ?>
    <div class="EliminarN text-center">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($j = 0; $j < count($resultadoBD); $j++) { ?>
                    <tr Titulo="<?php echo $resultadoBD[$j][0]; ?>" img="<?php echo $resultadoBD[$j][4]; ?>">
                        <td><?php echo $j; ?></td>
                        <td><?php echo $resultadoBD[$j][0]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> <br><br>
<?php } ?>

<?php $contenido = ob_get_clean(); ?>
<?php include 'OpActualidad.php'; ?>