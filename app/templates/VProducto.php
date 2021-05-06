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
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">ServicioES</th>
                    <th scope="col">ServicioIN</th>
                    <th scope="col">ServicioFNC</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Casco</th>
                    <th scope="col">Eslora toral, m</th>
                    <th scope="col">Eslora entre PP, m</th>
                    <th scope="col">Manga ff, m</th>
                    <th scope="col">Puntal de construcción, m</th>
                    <th scope="col">Tonelaje TRB</th>
                    <th scope="col">Tonelaje GT</th>
                    <th scope="col">Calado máx con carga, m</th>
                    <th scope="col">Peso en rosca, T</th>
                    <th scope="col">Desplazamiento trabajo, T</th>
                    <th scope="col">Carga máxima en cubierta, T</th>
                    <th scope="col">Desplazamiento max carga, T</th>
                    <th scope="col">Potencia propulsora, Cv/Kw</th>
                    <th scope="col">Potencia auxiliar, Cv/Kw</th>
                    <th scope="col">Velocidad sin carga, Nds</th>
                    <th scope="col">Combustible, L</th>
                    <th scope="col">Agua potable, L</th>
                    <th scope="col">Aguas negras, L</th>
                    <th scope="col">Aguas oleosas, L</th>
                    <th scope="col">Tripulación</th>
                    <th scope="col">Grua, KN.m</th>
                    <th scope="col">Cabrestante</th>
                    <th scope="col">Generador, Kw</th>
                    <th scope="col">TextoES</th>
                    <th scope="col">TextoIN</th>
                    <th scope="col">TextoFNC</th>
                    <th scope="col">Foto 1</th>
                    <th scope="col">Foto 2</th>
                    <th scope="col">Foto 3</th>
                    <th scope="col">Foto 4</th>
                    <th scope="col">Foto 5</th>
                    <th scope="col">Foto 6</th>
                    <th scope="col">Foto 7</th>
                    <th scope="col">Foto 8</th>
                    <th scope="col">Foto 9</th>
                    <th scope="col">Link 1</th>
                    <th scope="col">Link 2</th>
                    <th scope="col">Link 3</th>
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
<?php include 'OpAstillero.php'; ?>