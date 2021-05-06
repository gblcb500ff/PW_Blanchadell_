<?php ob_start() ?>

<?php if (empty($resultadoBD)) { ?>
    <div class="text-center">
        <h3>Lo sentimos aun no hay productos ha mostrar</h3>
    </div>
<?php } else {  ?>
    <div class="ModificarP text-center">
        <table>
            <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($j = 0; $j < count($resultadoBD); $j++) { ?>
                    <tr nombre="<?php echo $resultadoBD[$j][0];?>"> 
                        <td><?php echo $j; ?></td>
                        <td><?php echo $resultadoBD[$j][0]; ?></td>
                        <td><?php echo $resultadoBD[$j][1]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div> <br><br>
<?php } ?>

<?php $contenido = ob_get_clean(); ?>
<?php include 'OpAstillero.php'; ?>