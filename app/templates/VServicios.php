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
                    <th scope="col">Tipo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">IMG1</th>
                    <th scope="col">TextoCastellano1</th>
                    <th scope="col">TextoIngles1</th>
                    <th scope="col">TextoFrances1</th>
                    <th scope="col">IMG2</th>
                    <th scope="col">TextoCastellano2</th>
                    <th scope="col">TextoIngles2</th>
                    <th scope="col">TextoFrances2</th>
                    <th scope="col">IMG3</th>
                    <th scope="col">TextoCastellano3</th>
                    <th scope="col">TextoIngles3</th>
                    <th scope="col">TextoFrances3</th>
                    <th scope="col">IMG4</th>
                    <th scope="col">TextoCastellano4</th>
                    <th scope="col">TextoIngles4</th>
                    <th scope="col">TextoFrances4</th>
                    <th scope="col">IMG5</th>
                    <th scope="col">TextoCastellano5</th>
                    <th scope="col">TextoIngles5</th>
                    <th scope="col">TextoFrances5</th>
                    <th scope="col">IMG16</th>
                    <th scope="col">TextoCastellano16</th>
                    <th scope="col">TextoIngles6</th>
                    <th scope="col">TextoFrances16</th>
                    <th scope="col">Video</th>                  
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
<?php include 'OpMecanica.php'; ?>