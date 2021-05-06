<?php ob_start() ?>

<div class="VideoContacto">
        <video autoplay muted loop>
            <source src="/Blanchadell/imagenes/videos/contacto.mp4" type="video/mp4">
        </video>
</div>
<div class="container">

    <h1 class="text-primary mt-5 text-center">CENTRO DE ATENCIÓN AL CLIENTE BLANCHADELL</h1>
    <hr class=" lineaSeparadoraAzul2">


    <div class="row mt-5">
        <div class="col">
            <h4>Te invitamos a que compartas tus dudas, comentarios, consultas e inquietudes con talleres Blanchadell</h4>
            <p class="mt-4">Queremos que sientas que recibes el mejor servicio de atención al cliente posible y trabajamos día a día para que así sea. Si tienes cualquier duda sobre nuestros productos o servicios, ¡no dudes en preguntarnos!</p>
        </div>
    </div>
    <div class="d-flex justify-content-around mt-5">
        <div>
            <i class=""></i><a href="https://mail.google.com/" target="_blank" class="text-dark QuitarColorLink">comercial@blanchadell.com</a> &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div>
            <i class=""> +34 964 40 28 51 </i> &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class=" row mt-5">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <h4>HORARIO SEMANAL</h4>
        </div>
        <div class="col-4"></div>
    </div>
    <div class=" row">
        <div class="col-12">
            <table class="table table-sm table-primary">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Lunes</th>
                        <th scope="col"> - </th>
                        <th scope="col">Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mañanas</td>
                        <td>08:00h</td>
                        <td> - </td>
                        <td>13:00h</td>
                    </tr>
                    <tr>
                        <td>Tardes</td>
                        <td>15:00h</td>
                        <td> - </td>
                        <td>18:00h</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-12 mt-5">
        <iframe id="CA" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.672350779161!2d0.46132013703923747!3d40.46601476974895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a04fe50595e1eb%3A0x6ff4897e29d34d77!2sTALLERES%20BLANCHADELL%20S.L.!5e0!3m2!1ses!2ses!4v1606341612643!5m2!1ses!2ses" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="mt-5">
            <form class="needs-validation " id="Contactanos">
                <h3 class="text-center">Contacta traves de nuestro Formulario On-line</h3>
                <div class="form-row mt-5">
                    <div class="col-md-6 mb-2">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="Nombre" pattern="[A-Za-z]{3,50}$" title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" name="apellido" id="Apellidos" pattern="[A-Za-z]{3,50}$" title="Solo caracteres de 3 a 50" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" pattern="^[6][0-9]{8}$" title="Empieza por 6 seguido de 8 numeros" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="Email">Email address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            </div>
                            <input type="email" class="form-control" name="email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Tu E-Mail correcto" tabindex="2" required>
                            <div class=" valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label>Escriba la duda que tenga:</label>
                        <textarea name="texto" style="width: 100%;" id="texto"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5 mb-2">
                        <input class="btn btn-primary btn-lg mt-2" type="submit" name="duda" value="Enviar">
                    </div>
                </div>
            </form>
            <div id="textError" class="mt-5">
                <?php if (isset($errores)) {
                    echo "<p> $errores </p>";
                } ?>
            </div>
        </div>
</div>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php'; ?>