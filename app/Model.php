<?php
include_once('Config.php');

class Model extends PDO
{

    protected $conexion;

    public function __construct()
    {

        $this->conexion = new PDO('mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre . '', Config::$mvc_bd_usuario, Config::$mvc_bd_clave);
        // Realiza el enlace con la BD en utf-8
        $this->conexion->exec("set names utf8");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function MostrarProductosTipoAstillero($tipo){
        $consulta="select tipo from astillero where Tipo=:tipo";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':tipo',$tipo);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function ComprobarUsuario($nombre,$pass){
        $consulta="select * from usuario where nombre=:nombre and passwd=:pass";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->bindParam(':pass',$pass);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }

    public function BuscarServicio($tipo,$cat){
        $consulta="select tipo from mecanica where tipo=:tipo and categoria=:categoria";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':tipo',$tipo);
        $result->bindParam(':categoria',$cat);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function RecogerServicio($tipo,$categoria){
        $consulta="select * from mecanica where tipo=:tipo and categoria=:categoria";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':tipo',$tipo);
        $result->bindParam(':categoria',$categoria);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }

    public function InserccionDatosServicios($tipo,$categoria,$idFiles1,$textoES1,$textoEN1,$textoFNC1,$idFiles2,$textoES2,$textoEN2,$textoFNC2,$idFiles3,$textoES3,$textoEN3,$textoFNC3,$idFiles4,$textoES4,$textoEN4,$textoFNC4,$idFiles5,$textoES5,$textoEN5,$textoFNC5,$idFiles6,$textoES6,$textoEN6,$textoFNC6,$video){
        $consulta = "insert into mecanica (tipo,categoria,img1,textoES1,textoEN1,textoFNC1,img2,textoES2,textoEN2,textoFNC2,img3,textoES3,textoEN3,textoFNC3,img4,textoES4,textoEN4,textoFNC4,img5,textoES5,textoEN5,textoFNC5,img6,textoES6,textoEN6,textoFNC6,video) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $tipo);
        $result->bindParam(2, $categoria);
        $result->bindParam(3, $idFiles1);
        $result->bindParam(4, $textoES1);
        $result->bindParam(5, $textoEN1);
        $result->bindParam(6, $textoFNC1);
        $result->bindParam(7, $idFiles2);
        $result->bindParam(8, $textoES2);
        $result->bindParam(9, $textoEN2);
        $result->bindParam(10, $textoFNC2);
        $result->bindParam(11, $idFiles3);
        $result->bindParam(12, $textoES3);
        $result->bindParam(13, $textoEN3);
        $result->bindParam(14, $textoFNC3);
        $result->bindParam(15, $idFiles4);
        $result->bindParam(16, $textoES4);
        $result->bindParam(17, $textoEN4);
        $result->bindParam(18, $textoFNC4);
        $result->bindParam(19, $idFiles5);
        $result->bindParam(20, $textoES5);
        $result->bindParam(21, $textoEN5);
        $result->bindParam(22, $textoFNC5);
        $result->bindParam(23, $idFiles6);
        $result->bindParam(24, $textoES6);
        $result->bindParam(25, $textoEN6);
        $result->bindParam(26, $textoFNC6);
        $result->bindParam(27, $video);
        $result->execute(); 
        return $result;
    }
    public function ObtenerServicios(){
        $consulta="select * from mecanica ORDER BY tipo ASC";
        $result=$this->conexion->prepare($consulta);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function ObtenerProductos(){
        $consulta="select * from astillero ORDER BY nombre ASC";
        $result=$this->conexion->prepare($consulta);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);

    }
    public function ObtenerNoticias(){
        $consulta="select * from noticias ORDER BY tituloEs ASC";
        $result=$this->conexion->prepare($consulta);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function BuscarNoticias($nombre){
        $consulta="select * from noticias where tituloES=:titulo";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':titulo',$nombre);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function InserccionDatosNoticias($tituloES,$tituloEN,$tituloFNC, $fecha, $textoES1, $textoEN1, $textoFNC1, $Link1, $Link2, $Link3, $idFiles1){

        $consulta = "insert into NOTICIAS (tituloES,tituloEN,tituloFNC,fecha,foto,descripcionES,descripcionEN,descripcionFNC,link1,link2,link3) values (?,?,?,?,?,?,?,?,?,?,?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $tituloES);
        $result->bindParam(2, $tituloEN);
        $result->bindParam(3, $tituloFNC);
        $result->bindParam(4, $fecha);
        $result->bindParam(5, $idFiles1);
        $result->bindParam(6, $textoES1);
        $result->bindParam(7, $textoEN1);
        $result->bindParam(8, $textoFNC1);
        $result->bindParam(9, $Link1);
        $result->bindParam(10, $Link2);
        $result->bindParam(11, $Link3);
        $result->execute(); 
        return $result;
    }
    public function BuscarProducto($nombre){
        $consulta="select * from astillero where Nombre=:nombre ORDER BY nombre ASC";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
    public function InserccionDatosProductos($nombre,$tipo,$servicioES,$servicioEN,$servicioFNC,$grupo,$casco,$esloraToral,$esloraPP,$manga,$puntal,$TonelajeTRB,$TonelajeGT,$calado,$PesoRosca,$Desplazamiento,$CargaMaxCubierta, $DesplazamientoCarga,$PotenciaPropulsora, $PotenciaAuxiliar, $VelocidadSinVelocidad,$Combustible,$Tripulacion,$AguaPotable,$AguaNegra,$AguaOleosas,$Grua,$Cabrestante,$Generador,$img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$Link1,$Link2,$Link3,$textoES,$textoEN,$textoFNC ){
        $consulta = "insert into astillero (Nombre,Tipo,ServicioES,ServicioEN,ServicioFNC,Grupo,Casco,EsloraToral,EsloraPP,Manga,Puntal,TonelajeTBR,TonelajeGT,Calado,Peso,Desplazamiento,CargaMax,DesplazamientoMax,PotenciaPropulsora,PotenciaAuxiliar,Velocidad,Combustible,AguasPotable,AguasNegras,AguasOleosas,Tripulacion,Grua,Cabrestante,Generador,TextoES,TextoEN,TextoFNC,Foto1,Foto2,Foto3,Foto4,Foto5,Foto6,Foto7,Foto8,Foto9,Enlace1,Enlace2,Enlace3) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nombre);
        $result->bindParam(2, $tipo);
        $result->bindParam(3, $servicioES);
        $result->bindParam(4, $servicioEN);
        $result->bindParam(5, $servicioFNC);
        $result->bindParam(6, $grupo);
        $result->bindParam(7, $casco);
        $result->bindParam(8, $esloraToral);
        $result->bindParam(9, $esloraPP);
        $result->bindParam(10, $manga);
        $result->bindParam(11, $puntal);
        $result->bindParam(12, $TonelajeTRB);
        $result->bindParam(13, $TonelajeGT);
        $result->bindParam(14, $calado);
        $result->bindParam(15, $PesoRosca);
        $result->bindParam(16, $Desplazamiento);
        $result->bindParam(17, $CargaMaxCubierta);
        $result->bindParam(18, $DesplazamientoCarga);
        $result->bindParam(19, $PotenciaPropulsora);
        $result->bindParam(20, $PotenciaAuxiliar);
        $result->bindParam(21, $VelocidadSinVelocidad);
        $result->bindParam(22, $Combustible);
        $result->bindParam(23, $AguaPotable);
        $result->bindParam(24, $AguaNegra);
        $result->bindParam(25, $AguaOleosas);
        $result->bindParam(26, $Tripulacion);
        $result->bindParam(27, $Grua);
        $result->bindParam(28, $Cabrestante);
        $result->bindParam(29, $Generador);
        $result->bindParam(30, $textoES);
        $result->bindParam(31, $textoEN);
        $result->bindParam(32, $textoFNC);
        $result->bindParam(33, $img1);
        $result->bindParam(34, $img2);
        $result->bindParam(35, $img3);
        $result->bindParam(36, $img4);
        $result->bindParam(37, $img5);
        $result->bindParam(38, $img6);
        $result->bindParam(39, $img7);
        $result->bindParam(40, $img8);
        $result->bindParam(41, $img9);
        $result->bindParam(42, $Link1);
        $result->bindParam(43, $Link2);
        $result->bindParam(44, $Link3);
        $result->execute(); 
        return $result;
    }
    public function EliminarNoticia($titulo){
        $consulta="delete from noticias where tituloES=:titulo";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':titulo',$titulo);
        $result->execute();
        return $result;

    }
    public function EliminarProducto($nombre){
        $consulta="delete from astillero where Nombre=:nombre";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->execute();
        return $result;

    }

    public function EliminarServicio($tipo,$categoria){
        $consulta="delete from mecanica where tipo=:tipo and categoria=:categoria";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':tipo',$tipo);
        $result->bindParam(':categoria',$categoria);
        $result->execute();
        return $result;
    }
    public function ActualizarDatosNoticias($tituloES,$tituloEN,$tituloFNC, $fecha, $textoES1, $textoEN1, $textoFNC1, $Link1, $Link2, $Link3, $idFiles1){
        $consulta="UPDATE noticias SET tituloES=:tituloES,tituloEN=:tituloEN,tituloFNC=:tituloFNC,fecha=:fecha,foto=:foto,descripcionES=:descripcionES,descripcionEN=:descripcionEN,descripcionFNC=:descripcionFNC,link1=:link1,link2=:link2,link3=:link3 WHERE tituloES=:tituloES ";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(":tituloES",$tituloES);
        $result->bindParam(":tituloEN",$tituloEN);
        $result->bindParam(":tituloFNC",$tituloFNC);
        $result->bindParam(":fecha",$fecha);
        $result->bindParam(":foto",$idFiles1);
        $result->bindParam(":descripcionES",$textoES1);
        $result->bindParam(":descripcionEN",$textoEN1);
        $result->bindParam(":descripcionFNC",$textoFNC1);
        $result->bindParam(":link1",$Link1);
        $result->bindParam(":link2",$Link2);
        $result->bindParam(":link3",$Link3);
        $result->execute();
        return $result;

}
    public function ActualizarDatosServicios($tipo,$categoria,$idFiles1,$textoES1,$textoEN1,$textoFNC1,$idFiles2,$textoES2,$textoEN2,$textoFNC2,$idFiles3,$textoES3,$textoEN3,$textoFNC3,$idFiles4,$textoES4,$textoEN4,$textoFNC4,$idFiles5,$textoES5,$textoEN5,$textoFNC5,$idFiles6,$textoES6,$textoEN6,$textoFNC6,$video,$tip,$cat){

        $consulta="UPDATE mecanica SET tipo=:tipo,categoria=:categoria,img1=:img1,textoES1=:textoES1,textoEN1=:textoEN1,textoFNC1=:textoFNC1,img2=:img2,textoES2=:textoES2,textoEN2=:textoEN2,textoFNC2=:textoFNC2,img3=:img3,textoES3=:textoES3,textoEN3=:textoEN3,textoFNC3=:textoFNC3,img4=:img4,textoES4=:textoES4,textoEN4=:textoEN4,textoFNC4=:textoFNC4,img5=:img5,textoES5=:textoES5,textoEN5=:textoEN5,textoFNC5=:textoFNC5,img6=:img6,textoES6=:textoES6,textoEN6=:textoEN6,textoFNC6=:textoFNC6,video=:video WHERE tipo=:tip and categoria=:cat";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(":tipo",$tipo);
        $result->bindParam(":categoria",$categoria);
        $result->bindParam(":img1",$idFiles1);
        $result->bindParam(":textoES1",$textoES1);
        $result->bindParam(":textoEN1",$textoEN1);
        $result->bindParam(":textoFNC1",$textoFNC1);
        $result->bindParam(":img2",$idFiles2);
        $result->bindParam(":textoES2",$textoES2);
        $result->bindParam(":textoEN2",$textoEN2);
        $result->bindParam(":textoFNC2",$textoFNC2);
        $result->bindParam(":img3",$idFiles3);
        $result->bindParam(":textoES3",$textoES3);
        $result->bindParam(":textoEN3",$textoEN3);
        $result->bindParam(":textoFNC3",$textoFNC3);
        $result->bindParam(":img4",$idFiles4);
        $result->bindParam(":textoES4",$textoES4);
        $result->bindParam(":textoEN4",$textoEN4);
        $result->bindParam(":textoFNC4",$textoFNC4);
        $result->bindParam(":img5",$idFiles5);
        $result->bindParam(":textoES5",$textoES5);
        $result->bindParam(":textoEN5",$textoEN5);
        $result->bindParam(":textoFNC5",$textoFNC5);
        $result->bindParam(":img6",$idFiles6);
        $result->bindParam(":textoES6",$textoES6);
        $result->bindParam(":textoEN6",$textoEN6);
        $result->bindParam(":textoFNC6",$textoFNC6);
        $result->bindParam(":video",$video);
        $result->bindParam(":tip",$tip);
        $result->bindParam(":cat",$cat);
        $result->execute();
        return $result;
    }

    public function ActualizarProducto($nombre,$nombre1, $tipo, $servicioES,$servicioEN,$servicioFNC, $grupo, $casco, $esloraToral, $esloraPP, $manga, $puntal, $TonelajeTRB, $TonelajeGT, $calado, $PesoRosca, $Desplazamiento, $CargaMaxCubierta, $DesplazamientoCarga, $PotenciaPropulsora, $PotenciaAuxiliar, $VelocidadSinVelocidad, $Combustible, $Tripulacion, $AguaPotable, $AguaNegra, $AguaOleosas, $Grua, $Cabrestante, $Generador, $img1, $img2, $img3, $img4, $img5, $img6,$img7,$img8,$img9, $Link1, $Link2, $Link3, $textoES,$textoEN,$textoFNC ){
        $consulta="UPDATE astillero SET Nombre=:nombre,Tipo=:tipo,ServicioES=:servicioES,ServicioEN=:servicioEN,ServicioFNC=:servicioFNC,Grupo=:grupo,Casco=:casco,EsloraToral=:EsloraToral,EsloraPP=:EsloraPP,Manga=:manga,Puntal=:puntal,TonelajeTBR=:tonelajeTBR,TonelajeGT=:tonelajeGT,Calado=:calado,Peso=:peso,Desplazamiento=:desplazamiento,CargaMax=:cargaMax,DesplazamientoMax=:desplazamientoMax,PotenciaPropulsora=:potenciaPropulsora,PotenciaAuxiliar=:PotenciaAuxiliar,Velocidad=:velocidad,Combustible=:combustible,AguasPotable=:aguaPotable,AguasNegras=:aguaNegra,AguasOleosas=:AguaOleosa,Tripulacion=:Tripulacion,Grua=:grua,Cabrestante=:cabrestante,Generador=:generador,TextoES=:textoES,TextoEN=:textoEN,TextoFNC=:textoFNC,Foto1=:foto1,Foto2=:foto2,Foto3=:foto3,Foto4=:foto4,Foto5=:foto5,Foto6=:foto6,Foto7=:foto7,Foto8=:foto8,Foto9=:foto9,Enlace1=:enlace1,Enlace2=:enlace2,Enlace3=:enlace3 WHERE Nombre=:nombre1";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(":nombre",$nombre);
        $result->bindParam(":tipo",$tipo);
        $result->bindParam(":servicioES",$servicioES);
        $result->bindParam(":servicioEN",$servicioEN);
        $result->bindParam(":servicioFNC",$servicioFNC);
        $result->bindParam(":grupo",$grupo);
        $result->bindParam(":casco",$casco);
        $result->bindParam(":EsloraToral",$esloraToral);
        $result->bindParam(":EsloraPP",$esloraPP);
        $result->bindParam(":manga",$manga);
        $result->bindParam(":puntal",$puntal);
        $result->bindParam(":tonelajeTBR",$TonelajeTRB);
        $result->bindParam(":tonelajeGT",$TonelajeGT);
        $result->bindParam(":calado",$calado);
        $result->bindParam(":peso",$PesoRosca);
        $result->bindParam(":desplazamiento",$Desplazamiento);
        $result->bindParam(":cargaMax",$CargaMaxCubierta);
        $result->bindParam(":desplazamientoMax",$DesplazamientoCarga);
        $result->bindParam(":potenciaPropulsora",$PotenciaPropulsora);
        $result->bindParam(":PotenciaAuxiliar",$PotenciaAuxiliar);
        $result->bindParam(":velocidad",$VelocidadSinVelocidad);
        $result->bindParam(":combustible",$Combustible);
        $result->bindParam(":aguaPotable",$AguaPotable);
        $result->bindParam(":aguaNegra",$AguaNegra);
        $result->bindParam(":AguaOleosa",$AguaOleosas);
        $result->bindParam(":Tripulacion",$Tripulacion);
        $result->bindParam(":grua",$Grua);
        $result->bindParam(":cabrestante",$Cabrestante);
        $result->bindParam(":generador",$Generador);
        $result->bindParam(":textoES",$textoES);
        $result->bindParam(":textoEN",$textoEN);
        $result->bindParam(":textoFNC",$textoFNC);
        $result->bindParam(":foto1",$img1);
        $result->bindParam(":foto2",$img2);
        $result->bindParam(":foto3",$img3);
        $result->bindParam(":foto4",$img4);
        $result->bindParam(":foto5",$img5);
        $result->bindParam(":foto6",$img6);
        $result->bindParam(":foto7",$img7);
        $result->bindParam(":foto8",$img8);
        $result->bindParam(":foto9",$img9);
        $result->bindParam(":enlace1",$Link1);
        $result->bindParam(":enlace2",$Link2);
        $result->bindParam(":enlace3",$Link3);
        $result->bindParam(":nombre1",$nombre1);
       
        $result->execute();
        return $result;
    }
    public function RecogerProductoAstillero($tipo){
        $consulta="select Nombre,ServicioES,ServicioEN,ServicioFNC,Foto1 from astillero where Tipo=:tipo";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':tipo',$tipo);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);

    }
    public function BuscarBarco($nombre){
        $consulta="select  Nombre from astillero where nombre=:nombre ORDER BY nombre ASC";
        $result=$this->conexion->prepare($consulta);
        $result->bindParam(':nombre',$nombre);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }

    public function MostrarNoticias(){
        $consulta="SELECT * FROM noticias ORDER BY tituloEs ASC ";
        $result=$this->conexion->prepare($consulta);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_NUM);
    }
}
