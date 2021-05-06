<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/Blanchadell/php/app/img/logo_blanchadell.png" type="image/jpg"/>
    <link rel="stylesheet" href="/Blanchadell/interfaces/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href=" https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.css " rel=" stylesheet " />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--     <link rel="stylesheet" href="enlighterjs.min.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="col-2 d-flex justify-content-start">
                    <a class="nav-link" href="index.php?operacion=home"> <img src="/Blanchadell/php/app/img/logo_texto.png" alt="No se encuentra el logo" id="logo"></a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2E76B8;">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button class="navbar-toggler p2  bd-highlight" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto MargenNavBar" id="Activar">
                    <li class="nav-item active ms-5" id="home">
                        <a class="nav-link" href="index.php?operacion=home"><?php echo $lang['Inicio']; ?></a>
                    </li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $lang['Actividades']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?operacion=Astillero"><?php echo $lang['Astillero']; ?></a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=Mecanica"><?php echo $lang['Mecanica']; ?></a>
                        </div>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link" href="index.php?operacion=historia" id="historia"><?php echo $lang['Historia']; ?></a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link" href="index.php?operacion=contacto" id="contacto"><?php echo $lang['Contacto']; ?></a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link" href="index.php?operacion=noticias" id="noticias"><?php echo $lang['Noticias']; ?></a>
                    </li>
                </ul>
                <div class=" col-12 col-sm-3 d-flex justify-content-sm-end ">
                    <select class="form-select form-select-lg mb-3 mt-3" aria-label=".form-select-lg example" id="idioma">
                        <option value="es"> &nbsp; ESPAÑOL </option>
                        <option value="en"> &nbsp; Ingles</option>
                        <option value="fnc"> &nbsp; Frances</option>

                    </select>
                </div>
            </div>
        </nav> 
      
    </header>
   <main>
        <div id="contenido">
            <?php echo $contenido; ?>
        </div>
    </main> 
    <footer class="bg-dark text-light text-center">
        <div class="row">
            <div class="col-12 col-sm-3 mt-4 ">
                <div>
                    <img src="/Blanchadell/php/app/img/logo_blanchadell.png" alt="No se encuentra el logo" id="lgfot">
                </div>
            </div>
            <div class=" col-12 col-sm-3 mt-4">
                <h5><?php echo $lang['Contáctanos']; ?></h5>
                <div class="mt-2">
                    <p><a href="index.php?operacion=contacto" target="_blank" class="text-light QuitarColorLink"> <?php echo $lang['PáginaContacto']; ?></a></p>
                    <p><a href="https://mail.google.com/" target="_blank" class="text-light QuitarColorLink"> Gmail->comercial@blanchadell.com</a></p>
                    <p> <i>Telefono-> +34 964 40 28 51</i></p>
                </div>
            </div>
            <div class="col-12 col-sm-3 mt-4">
                <h5><?php echo $lang['AvisoLegal']; ?></h5>
                <div class="">
                    <p><a href="index.php?operacion=AvisoLegal" target="_blank" class="text-light QuitarColorLink"> <?php echo $lang['AvisoLegal']; ?></a></p>
                    <p><a href="index.php?operacion=PoliticaDePrivacidad" target="_blank" class="text-light QuitarColorLink"><?php echo $lang['PolíticaPrivacidad']; ?></a></p>
                    <p><a href="index.php?operacion=Cooki" target="_blank" class="text-light QuitarColorLink"><?php echo $lang['PolíticaCookies']; ?></a></p>

                </div>
            </div>
            <div class="col-12 col-sm-2 mt-4">
                <h5><?php echo $lang['RedesSociales']; ?></h5>
                <div class="">
                    <p>
                        <i class="fab fa-instagram"></i><a href="https://www.instagram.com/blanchadell_sl/" target="_blank" class="text-light QuitarColorLink"> Instagram</a>
                    </p>
                    <p>
                        <i class="fab fa-facebook-square icono"></i><a href="https://www.facebook.com/talleres.blanchadell/" target="_blank" class="text-light QuitarColorLink"> Facebook</a>
                    </p>
                    <p>
                        <i class="fab fa-twitter icono"></i><a href="https://twitter.com/Blanchadell_SL" target="_blank" class="text-light QuitarColorLink"> Twitter</a>
                    </p>
                    <p>
                        <i class="fab fa-youtube"></i><a href="https://www.youtube.com/channel/UCfLhT3oyaSdd5tlZArYY4CQ" target="_blank" class="text-light QuitarColorLink"> Youtube</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="/Blanchadell/javaScript/acciones.js"></script>
    <script src="/Blanchadell/javaScript/Contactanos.js"></script>
    <script src="/Blanchadell/javaScript/Astillero.js"></script>
    <script src="/Blanchadell/javaScript/InicioSesion.js"></script>
    <script src="/Blanchadell/javaScript/Errores.js"></script>
    <script src="/Blanchadell/javaScript/GaleriaImg.js"></script>

</body>
</html>