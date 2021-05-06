<?php
include('libs/utils.php');

class Controller
{
    /* --------------------------------------------------------------------------------------------------------------------------- */
    public function home()
    {
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = "es";
        }
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/home.php';
    }
    public function traductor()
    {
        $lenguaje = recoge("lenguaje");

        if ($lenguaje != null) {
            $_SESSION['lang'] = $lenguaje;
        }
        if (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = "es";
        }
        require_once "lang/" . $_SESSION['lang'] . ".php";
    }
    public function contacto()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/contacto.php';
    }
    public function historia()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/historia.php';
    }
    public function astillero()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/astillero.php';
    }
    public function Mecanica()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/mecanica.php';
    }
    public function contactanos()
    {
        try {
            $val = new Validacion();
            $nombre = recoge("nombre");
            $apellido = recoge("apellidos");
            $telefono = recoge("telefono");
            $email = recoge("email");
            $texto = recoge("texto");
            $valor['nombre'] = $nombre;
            $valor['apellido'] = $apellido;
            $valor['telefono'] = $telefono;
            $valor['email'] = $email;
            $datos = $valor;
            $regla = array(

                array(
                    'name' => 'nombre',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'apellido',
                    'regla' => 'no-empty,ValidarTexto'
                ),
                array(
                    'name' => 'email',
                    'regla' => 'no-empty,email'
                ),
                array(
                    'name' => 'telefono',
                    'regla' => 'no-empty,ValidarTelefono'
                )
            );
            $resultado = $val->rules($regla, $datos);
            if ($resultado === true) {
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                $from =  "terectico2017@gmail.com";
                $to = $email;
                $subject = "accessed the webpage";
                $message = "Buenas $nombre  $apellido
                No contestar a este correo se genera automaticamente, en breves momentos uno de nuestros empleados se pondra en contacto
                con usted para aclararle :
                $texto
                En caso de que no recibamos ninguna respuesta con el email de la solucion al cabo de 1 dia le llamaremos";
                $headers = "From:" . $from;
                mail($to, $subject, $message, $headers);
                $params = 0;
            } else {
                foreach ($resultado as $valor => $k) {
                    foreach ($k as $v => $s) {
                        $params = $s[1];
                    }
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }

        require __DIR__ . '/templates/json.php';
    }
    public function InicioSesion()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/InicioSesion.php';
    }
    public function CatAstillero()
    {
        $tipo = recoge("tipo");
        $m = new Model();
        $datosBB = $m->MostrarProductosTipoAstillero($tipo);
        if (empty($datosBB)) {
            $params = 1;
        } else {
            $params = 2;
        }
        require __DIR__ . '/templates/json.php';
    }
    public function productoAstillero()
    {
        $m = new Model();
        $tipo = recoge("tipo");
        $datosBB = $m->RecogerProductoAstillero($tipo);
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/ProductosAstillero.php';
    }
    public function ProductoMecanica()
    {
        $m = new Model();
        $tipo = recoge("tipo");
        $cat = recoge("cat");
        $datosBB = $m->RecogerServicio($tipo, $cat);

        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/ProductosMecanica.php';
    }
    public function RecogerBarco()
    {
        $m = new Model();
        $nombre = recoge("barco");
        $datosBB = $m->BuscarBarco($nombre);
        if (empty($datosBB)) {
            $params = 1;
        } else {
            $params = 2;
        }
        require __DIR__ . '/templates/json.php';
    }
    public function MostrarBarco()
    {
        $m = new Model();
        $nombre = recoge("barco");
        $datosBB = $m->BuscarProducto($nombre);
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/MostrarBarco.php';
    }
    public function FormIniciarSesion()
    {
        try {
            $m = new Model();
            $v = new Validacion();
            $nombre = recoge('usuario');
            $pass = recoge('pass');

            $valor['nombre'] = $nombre;
            $valor['pass'] = $pass;
            $datos = $valor;
            $regla = array(
                array(
                    'name' => 'nombre',
                    'regla' => 'no-empty,ValidarUsuario'
                ),
                array(
                    'name' => 'pass',
                    'regla' => 'no-empty,ValidarPasswd'
                )
            );
            $resultado = $v->rules($regla, $datos);

            if ($resultado === true) {
                $resultadoBD = $m->ComprobarUsuario($nombre, $pass);
                if (!empty($resultadoBD)) {
                    Sesion::iniciarSesion("usuario", $resultadoBD[0][0]);
                    Sesion::iniciarSesion("nivel", $resultadoBD[0][2]);
                    $params = $_SESSION['nivel'];
                } else {
                    $params = "Lo sentimos no es correcta la informacion proporcionada";
                }
            } else {
                foreach ($resultado as $valor => $k) {
                    foreach ($k as $v => $s) {
                        $params = $s;
                    }
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    public function homeAdmin()
    {
        if (isset($_SESSION['usuario'])) {
            require_once "lang/" . $_SESSION['lang'] . ".php";
            require __DIR__ . '/templates/homeAdmin.php';
        } else {
            require_once "lang/" . $_SESSION['lang'] . ".php";
            require __DIR__ . '/templates/home.php';
        }
    }
    function PaginaError()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/../web/404.php';
    }
    function SalirSesion()
    {
        session_destroy();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/home.php';
    }
    //Operaciones con Astillero
    function VProducto()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerProductos();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/VProducto.php';
    }
    function CProducto()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/CProducto.php';
    }
    function CrearProducto()
    {
        try {
            $v = new Validacion();
            $m = new Model();

            $nombre = recoge("nombre");
            $tipo = recoge("tipo");
            $servicioES = recoge("servicioES");
            $servicioEN = recoge("servicioEN");
            $servicioFNC = recoge("servicioFNC");
            $grupo = recoge("grupo");
            $casco = recoge("casco");
            $esloraToral = recoge("esloraToral");
            $esloraPP = recoge("esloraPP");
            $manga = recoge("manga");
            $puntal = recoge("puntal");
            $TonelajeTRB = recoge("TonelajeTRB");
            $TonelajeGT = recoge("TonelajeGT");
            $calado = recoge("calado");
            $PesoRosca = recoge("PesoRosca");
            $Desplazamiento = recoge("Desplazamiento");
            $CargaMaxCubierta = recoge("CargaMaxCubierta");
            $DesplazamientoCarga = recoge("DesplazamientoCarga");
            $PotenciaPropulsora = recoge("PotenciaPropulsora");
            $PotenciaAuxiliar = recoge("PotenciaAuxiliar");
            $VelocidadSinVelocidad = recoge("VelocidadSinVelocidad");
            $Combustible = recoge("Combustible");
            $Tripulacion = recoge("Tripulacion");
            $AguaPotable = recoge("AguaPotable");
            $AguaNegra = recoge("AguaNegra");
            $AguaOleosas = recoge("AguaOleosas");
            $Grua = recoge("Grua");
            $Cabrestante = recoge("Cabrestante");
            $Generador = recoge("Generador");
            $img1 = recoge("img1");
            $img2 = recoge("img2");
            $img3 = recoge("img3");
            $img4 = recoge("img4");
            $img5 = recoge("img5");
            $img6 = recoge("img6");
            $img7 = recoge("img7");
            $img8 = recoge("img8");
            $img9 = recoge("img9");
            $Link1 = recoge("link1");
            $Link2 = recoge("link2");
            $Link3 = recoge("link3");
            $textoES = recoge("textoES");
            $textoEN = recoge("textoEN");
            $textoFNC = recoge("textoFNC");

            if ($m->BuscarProducto($nombre)) {
                $params = 0;
            } else {
                if ($m->InserccionDatosProductos($nombre, $tipo, $servicioES, $servicioEN, $servicioFNC, $grupo, $casco, $esloraToral, $esloraPP, $manga, $puntal, $TonelajeTRB, $TonelajeGT, $calado, $PesoRosca, $Desplazamiento, $CargaMaxCubierta, $DesplazamientoCarga, $PotenciaPropulsora, $PotenciaAuxiliar, $VelocidadSinVelocidad, $Combustible, $Tripulacion, $AguaPotable, $AguaNegra, $AguaOleosas, $Grua, $Cabrestante, $Generador, $img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9, $Link1, $Link2, $Link3, $textoES, $textoEN, $textoFNC)) {
                    $params = 1;
                } else {
                    $params = 2;
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    function MProducto()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerProductos();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/MProducto.php';
    }
    function ModificarProducto()
    {
        $m = new Model();
        $nombre = recoge("nombre");
        $resultadoBD = $m->BuscarProducto($nombre);
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/ModificarProducto.php';
    }
    function ActualizarProducto()
    {
        try {
            $v = new Validacion();
            $m = new Model();

            $nombre = recoge("nombre");
            $nombre1 = recoge("nombre1");
            $tipo = recoge("tipo");
            $servicioES = recoge("servicioES");
            $servicioEN = recoge("servicioEN");
            $servicioFNC = recoge("servicioFNC");
            $grupo = recoge("grupo");
            $casco = recoge("casco");
            $esloraToral = recoge("esloraToral");
            $esloraPP = recoge("esloraPP");
            $manga = recoge("manga");
            $puntal = recoge("puntal");
            $TonelajeTRB = recoge("TonelajeTRB");
            $TonelajeGT = recoge("TonelajeGT");
            $calado = recoge("calado");
            $PesoRosca = recoge("PesoRosca");
            $Desplazamiento = recoge("Desplazamiento");
            $CargaMaxCubierta = recoge("CargaMaxCubierta");
            $DesplazamientoCarga = recoge("DesplazamientoCarga");
            $PotenciaPropulsora = recoge("PotenciaPropulsora");
            $PotenciaAuxiliar = recoge("PotenciaAuxiliar");
            $VelocidadSinVelocidad = recoge("VelocidadSinVelocidad");
            $Combustible = recoge("Combustible");
            $Tripulacion = recoge("Tripulacion");
            $AguaPotable = recoge("AguaPotable");
            $AguaNegra = recoge("AguaNegra");
            $AguaOleosas = recoge("AguaOleosas");
            $Grua = recoge("Grua");
            $Cabrestante = recoge("Cabrestante");
            $Generador = recoge("Generador");
            $img1 = recoge("img1");
            $img2 = recoge("img2");
            $img3 = recoge("img3");
            $img4 = recoge("img4");
            $img5 = recoge("img5");
            $img6 = recoge("img6");
            $img7 = recoge("img7");
            $img8 = recoge("img8");
            $img9 = recoge("img9");
            $Link1 = recoge("link1");
            $Link2 = recoge("link2");
            $Link3 = recoge("link3");
            $textoES = recoge("textoES");
            $textoEN = recoge("textoEN");
            $textoFNC = recoge("textoFNC");

            if ($m->ActualizarProducto($nombre, $nombre1, $tipo, $servicioES, $servicioEN, $servicioFNC, $grupo, $casco, $esloraToral, $esloraPP, $manga, $puntal, $TonelajeTRB, $TonelajeGT, $calado, $PesoRosca, $Desplazamiento, $CargaMaxCubierta, $DesplazamientoCarga, $PotenciaPropulsora, $PotenciaAuxiliar, $VelocidadSinVelocidad, $Combustible, $Tripulacion, $AguaPotable, $AguaNegra, $AguaOleosas, $Grua, $Cabrestante, $Generador, $img1, $img2, $img3, $img4, $img5, $img6, $img7, $img8, $img9, $Link1, $Link2, $Link3, $textoES, $textoEN, $textoFNC)) {
                $params = 3;
            } else {
                $params = 4;
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    function EProducto()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerProductos();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/EProducto.php';
    }
    function EliminarProducto()
    {
        $m = new Model();
        $nombre = recoge('nombre');

        if ($m->EliminarProducto($nombre)) {
            $dir = '../imagenes/imagenesSubidaBarco/' . $nombre . '/';
            if ($this->EliminarImagen($dir) == 0) {
                $params = "Se elimino los datos de la BBDatos, las imagenes no se pudieron eliminar, eliminalas manualmente, lo siento";
            } else {
                $params = "Fantastico se elimino el producto";
            }
        } else {
            $params = "Lo sentimos no se pudo eliminar el producto";
        }

        require __DIR__ . '/templates/json.php';
    }
    //Operaciones con Servicios
    function VServicios()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerServicios();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/VServicios.php';
    }
    function CServicios()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/CServicios.php';
    }
    function CrearServicio()
    {

        try {
            $v = new Validacion();
            $m = new Model();
            $params = 1;


            $tipo = recoge("tipo");
            $categoria = recoge("categoria");
            $idFiles1 = recoge("idFiles1");
            $textoES1 = recoge("textoES1");
            $textoEN1 = recoge("textoEN1");
            $textoFNC1 = recoge("textoFNC1");
            $idFiles2 = recoge("idFiles2");
            $textoES2 = recoge("textoES2");
            $textoEN2 = recoge("textoEN2");
            $textoFNC2 = recoge("textoFNC2");
            $idFiles3 = recoge("idFiles3");
            $textoES3 = recoge("textoES3");
            $textoEN3 = recoge("textoEN3");
            $textoFNC3 = recoge("textoFNC3");
            $idFiles4 = recoge("idFiles4");
            $textoES4 = recoge("textoES4");
            $textoEN4 = recoge("textoEN4");
            $textoFNC4 = recoge("textoFNC4");
            $idFiles5 = recoge("idFiles5");
            $textoES5 = recoge("textoES5");
            $textoEN5 = recoge("textoEN5");
            $textoFNC5 = recoge("textoFNC5");
            $idFiles6 = recoge("idFiles6");
            $textoES6 = recoge("textoES6");
            $textoEN6 = recoge("textoEN6");
            $textoFNC6 = recoge("textoFNC6");
            $video = recoge("video");


            if ($m->BuscarServicio($tipo, $categoria)) {
                $params = 0;
            } else {

                if ($m->InserccionDatosServicios($tipo, $categoria, $idFiles1, $textoES1, $textoEN1, $textoFNC1, $idFiles2, $textoES2, $textoEN2, $textoFNC2, $idFiles3, $textoES3, $textoEN3, $textoFNC3, $idFiles4, $textoES4, $textoEN4, $textoFNC4, $idFiles5, $textoES5, $textoEN5, $textoFNC5, $idFiles6, $textoES6, $textoEN6, $textoFNC6, $video)) {
                    $params = 1;
                } else {
                    $params = 2;
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    function MServicios()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerServicios();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/MServicios.php';
    }
    function ModificarServicio()
    {
        $m = new Model();
        $tipo = recoge('tipo');
        $categoria = recoge('categoria');
        $resultadoBD = $m->RecogerServicio($tipo, $categoria);
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/ModificarServicio.php';
    }
    function UpdateServicio()
    {
        try {
            $v = new Validacion();
            $m = new Model();
            $tipo = recoge("tipo");
            $tip = recoge("tip");
            $cat = recoge("cat");
            $categoria = recoge("categoria");
            $idFiles1 = recoge("idFiles1");
            $textoES1 = recoge("textoES1");
            $textoEN1 = recoge("textoEN1");
            $textoFNC1 = recoge("textoFNC1");
            $idFiles2 = recoge("idFiles2");
            $textoES2 = recoge("textoES2");
            $textoEN2 = recoge("textoEN2");
            $textoFNC2 = recoge("textoFNC2");
            $idFiles3 = recoge("idFiles3");
            $textoES3 = recoge("textoES3");
            $textoEN3 = recoge("textoEN3");
            $textoFNC3 = recoge("textoFNC3");
            $idFiles4 = recoge("idFiles4");
            $textoES4 = recoge("textoES4");
            $textoEN4 = recoge("textoEN4");
            $textoFNC4 = recoge("textoFNC4");
            $idFiles5 = recoge("idFiles5");
            $textoES5 = recoge("textoES5");
            $textoEN5 = recoge("textoEN5");
            $textoFNC5 = recoge("textoFNC5");
            $idFiles6 = recoge("idFiles6");
            $textoES6 = recoge("textoES6");
            $textoEN6 = recoge("textoEN6");
            $textoFNC6 = recoge("textoFNC6");
            $video = recoge("video");


            if ($m->ActualizarDatosServicios($tipo, $categoria, $idFiles1, $textoES1, $textoEN1, $textoFNC1, $idFiles2, $textoES2, $textoEN2, $textoFNC2, $idFiles3, $textoES3, $textoEN3, $textoFNC3, $idFiles4, $textoES4, $textoEN4, $textoFNC4, $idFiles5, $textoES5, $textoEN5, $textoFNC5, $idFiles6, $textoES6, $textoEN6, $textoFNC6, $video, $tip, $cat)) {
                $params = 3;
            } else {
                $params = 4;
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    function EServicios()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerServicios();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/EServicios.php';
    }
    function EliminarServicio()
    {
        $m = new Model();
        $tipo = recoge('tipo');
        $categoria = recoge('categoria');
        $nombre = $tipo . "_" . $categoria;

        if ($m->EliminarServicio($tipo, $categoria)) {
            $dir = '../imagenes/imagenesSubidaMecanica/' . $nombre . '/';
            if ($this->EliminarImagen($dir) == 0) {
                $params = "Se elimino los datos de la BBDatos, las imagenes no se pudieron eliminar, eliminalas manualmente, lo siento";
            } else {
                $params = "Fantastico se elimino el producto";
            }
        } else {
            $params = "Lo sentimos no se pudo eliminar el producto";
        }

        require __DIR__ . '/templates/json.php';
    }
    //Operaciones con Noticia
    function VNoticia()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerNoticias();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/VNoticia.php';
    }
    function CNoticia()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/CNoticia.php';
    }
    function CrearNoticia()
    {
        try {
            $v = new Validacion();
            $m = new Model();
            $tituloES = recoge("tituloES");
            $tituloEN = recoge("tituloEN");
            $tituloFNC = recoge("tituloFNC");
            $fecha = recoge("fecha");
            $textoES1 = recoge("textoES1");
            $textoEN1 = recoge("textoEN1");
            $textoFNC1 = recoge("textoFNC1");
            $Link1 = recoge("Link1");
            $Link2 = recoge("Link2");
            $Link3 = recoge("Link3");
            $idFiles1 = recoge("idFiles1");


            if ($m->BuscarNoticias($tituloES)) {
                $params = 0;
            } else {
                if ($m->InserccionDatosNoticias($tituloES, $tituloEN, $tituloFNC, $fecha, $textoES1, $textoEN1, $textoFNC1, $Link1, $Link2, $Link3, $idFiles1)) {
                    $params = 1;
                } else {
                    $params = 2;
                }
            }
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    function MNoticia()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerNoticias();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/MNoticia.php';
    }
    function ENoticia()
    {
        $m = new Model();
        $resultadoBD = $m->ObtenerNoticias();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/ENoticia.php';
    }
    function EliminarNoticia()
    {
        $m = new Model();
        $titulo = recoge('titulo');
        $img = recoge("img");
        $palabras = explode("/", $img);
        if ($m->EliminarNoticia($titulo)) {
            if (!unlink('../imagenes/imagenesSubidaNoticia/' . $palabras[4])) {
                $params = "Se elimino los datos de la BBDatos, las imagenes no se pudieron eliminar, eliminalas manualmente, lo siento";
            } else {
                $params = "Fantastico se elimino el producto";
            }
        } else {
            $params = "Lo sentimos no se pudo eliminar el producto";
        }

        require __DIR__ . '/templates/json.php';
    }
    function ModificarNoticia()
    {
        $m = new Model();
        $titulo = recoge('titulo');
        $resultadoBD = $m->BuscarNoticias($titulo);
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/ModificarNoticias.php';
    }

    function MODNoticia()
    {

        try {
            $v = new Validacion();
            $m = new Model();

            $tituloES = recoge("tituloES");
            $tituloEN = recoge("tituloEN");
            $tituloFNC = recoge("tituloFNC");
            $fecha = recoge("fecha");
            $textoES1 = recoge("textoES1");
            $textoEN1 = recoge("textoEN1");
            $textoFNC1 = recoge("textoFNC1");
            $Link1 = recoge("Link1");
            $Link2 = recoge("Link2");
            $Link3 = recoge("Link3");
            $idFiles1 = recoge("idFiles1");

         
                if ($m->ActualizarDatosNoticias($tituloES, $tituloEN, $tituloFNC, $fecha, $textoES1, $textoEN1, $textoFNC1, $Link1, $Link2, $Link3, $idFiles1)) {
                    $params = 3;
                } else {
                    $params = 4;
                }
            
        } catch (Exception $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logExceptio.txt");
            header('Location: index.php?operacion=error');
        } catch (Error $e) {
            error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logError.txt");
            header('Location: index.php?operacion=error');
        }
        require __DIR__ . '/templates/json.php';
    }
    public function PasarNombre()
    {
        $nombre = recoge("nombre");
        $_SESSION['nombre'] = $nombre;
        $params = $_SESSION['nombre'];
        require __DIR__ . '/templates/json.php';
    }
    public function SubirImgMecanica()
    {
        $nombre = $_SESSION['nombre'];
        if ($_FILES) {
            foreach ($_FILES as $file) {
                if ($file["error"] == UPLOAD_ERR_OK) {
                    // movemos el archivo a la carpeta donde se encuentra este archivo 
                    if (!is_dir('../imagenes/imagenesSubidaMecanica/' . $nombre)) {
                        mkdir('../imagenes/imagenesSubidaMecanica/' . $nombre, true);
                        move_uploaded_file($file["tmp_name"], Config::$dirE . '/' . $nombre . '/' . $file["name"]);
                        $valor = '/Blanchadell/imagenes/imagenesSubidaMecanica/' . $nombre . '/' . $file["name"];
                    } else {
                        move_uploaded_file($file["tmp_name"], Config::$dirE . '/' . $nombre . '/' . $file["name"]);
                        $valor = '/Blanchadell/imagenes/imagenesSubidaMecanica/' . $nombre . '/' . $file["name"];
                    }
                }
            }
        } else {

            $valor = false;

            $ok = 0;
        }
        # devolvemos un json con la información
        echo $valor;
    }
    public function SubirImg()
    {
        $nombre = recoge("nombre");
        if ($_FILES) {
            foreach ($_FILES as $file) {
                if ($file["error"] == UPLOAD_ERR_OK) {
                    // movemos el archivo a la carpeta donde se encuentra este archivo 
                    if (!is_dir('../imagenes/imagenesSubidaBarco/' . $nombre)) {
                        mkdir('../imagenes/imagenesSubidaBarco/' . $nombre, true);
                        move_uploaded_file($file["tmp_name"], Config::$dir . '/' . $nombre . '/' . $file["name"]);
                        $valor = '/Blanchadell/imagenes/imagenesSubidaBarco/' . $nombre . '/' . $file["name"];
                    } else {
                        move_uploaded_file($file["tmp_name"], Config::$dir . '/' . $nombre . '/' . $file["name"]);
                        $valor = '/Blanchadell/imagenes/imagenesSubidaBarco/' . $nombre . '/' . $file["name"];
                    }
                }
            }
        } else {

            $valor = false;

            $ok = 0;
        }
        # devolvemos un json con la información
        echo $valor;
    }
    public function SubirImgNoticia()
    {

        if ($_FILES) {
            foreach ($_FILES as $file) {
                if ($file["error"] == UPLOAD_ERR_OK) {
                    // movemos el archivo a la carpeta donde se encuentra este archivo 
                    if (!is_dir('../imagenes/imagenesSubidaNoticia')) {
                        mkdir('../imagenes/imagenesSubidaNoticia', true);
                        move_uploaded_file($file["tmp_name"], Config::$dirN . '/' . $file["name"]);
                        $valor = '/Blanchadell/imagenes/imagenesSubidaNoticia/' . $file["name"];
                    } else {
                        move_uploaded_file($file["tmp_name"], Config::$dirN . '/' . $file["name"]);
                        $valor = '/Blanchadell/imagenes/imagenesSubidaNoticia/' . $file["name"];
                    }
                }
            }
        } else {

            $valor = false;

            $ok = 0;
        }
        # devolvemos un json con la información
        echo $valor;
    }
    public function EliminarImagen($dir)
    {
        $valor = 0;
        $list = dir($dir);

        while (($file = $list->read()) !== false) {
            if ($file === "." || $file === "..") continue;
            if (is_file($dir . $file)) {
                unlink($dir . $file);
            } elseif (is_dir($dir . $file)) {
                $this->EliminarImagen($dir . $file);
            }
        }
        if (rmdir($dir)) {
            $valor = 1;
        }
        return $valor;
    }
    public function  noticias()
    {
        $m = new Model();
        $resultadoBD = $m->MostrarNoticias();
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/noticias.php';
    }
    public function AvisoLegal()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/AvisoLegal.php';
    }
    public function PoliticaDePrivacidad()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/PoliticaDePrivacidad.php';
    }
    public function Cooki()
    {
        require_once "lang/" . $_SESSION['lang'] . ".php";
        require __DIR__ . '/templates/Cooki.php';
    }
}
