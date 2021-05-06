$(document).ready(function () {
    EnrutarServicios();
    HaciendoScroll();
     ClickTraduccion();
     MostrarGif();
});
function EnrutarServicios() {
    let servicio;
    $("div .Servicios").on('click', function (event) {
        servicio = $(this).attr('Servicio');

        if (servicio == "Astillero") {
            window.location.href = "index.php?operacion=Astillero";
        } else if (servicio == "Mecanica") {
            window.location.href = "index.php?operacion=Mecanica";
        }
    });
}
function HaciendoScroll() {
    $(window).scroll(function () {
        FuncionPrimerIcon();
        FuncionSumarNumeros();
        clearTimeout($.data(this, "TestScroll"));
        $.data(this, "TestScroll", setTimeout(function () {
        }, 250));
    });
}

function FuncionPrimerIcon() {

    if (estaEnPantalla("section#cont1")) {
        let valor = $(".animacion").attr("animacion");
        if (valor == 1) {
            $(".animacion").addClass("animate__animated animate__flip");
            $(".animacion").attr("animacion:0");
        }
    }
}
function FuncionSumarNumeros() {
    if (estaEnPantalla("div#cont2")) {

        $('#enumeracion strong').each(function () {
            var $this = $(this),
                countTo = $this.attr('valor');

            $({ countNum: $this.text() }).animate({
                countNum: countTo
            },
                {
                    duration: 5000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(`${this.countNum}+`);
                    }

                });
        });
    }
}

function estaEnPantalla(elemento) {
    var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
    var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
    var caja = $(elemento).get(0).getBoundingClientRect();
    return (caja.top >= 0 &&
        caja.bottom <= alturaViewport &&
        caja.left >= 0 &&
        caja.right <= anchoViewport);
}

function ClickTraduccion() {

    $('#idioma').on('change', function () {
        var lenguaje = $(this).val();
        localStorage.setItem('lenguaje', `${lenguaje}`);
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'traductor', lenguaje: lenguaje }, success: function ($respuesta) {
                location.reload();
            }
        });
    });

    $(`#idioma option[value=${localStorage.getItem('lenguaje')}]`).attr("selected", true);
}
function MostrarGif(){

    $("#gif1").hover(function() {
        $("#gif1").attr("src","/Blanchadell/imagenes/mecanica/bn.gif");

    });
    
    $("#gif2").hover(function() {
        $("#gif2").attr("src","/Blanchadell/imagenes/mecanica/bn.gif");

    });
    
    $("#gif3").hover(function() {
        $("#gif3").attr("src","/Blanchadell/imagenes/mecanica/bn.gif");

    });
}