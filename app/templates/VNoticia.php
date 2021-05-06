<?php ob_start() ?>

<?php if (empty($resultadoBD)) { ?>
    <div class="text-center">
        <h3>Lo sentimos aun no hay productos ha mostrar</h3>
    </div>
<?php } else {  ?>
    <div class="VerTabla text-center">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">TituloES</th>
                    <th scope="col">TituloEN</th>
                    <th scope="col">TituloFNC</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Foto</th>
                    <th scope="col">DescripciónES</th>
                    <th scope="col">DescripciónEN</th>
                    <th scope="col">DescripciónFNC</th>
                    <th scope="col">Link1</th>
                    <th scope="col">Link2</th>
                    <th scope="col">Link3</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 0;
                foreach ($resultadoBD as $v => $k) {
                    echo  '<tr> <td>' . $n . '</td>';
                    $n++;
                    foreach ($k as $r) { ?>
                        <td><?php echo $r; ?></td>
                <?php }
                } ?>
                </tr>

            </tbody>
        </table>
    </div> <br><br>
<?php } ?>

<?php $contenido = ob_get_clean(); ?>
<?php include 'OpActualidad.php'; ?>