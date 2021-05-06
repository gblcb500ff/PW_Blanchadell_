$(document).ready(function () {
    CrearNoticia();
    EliminarNoticia();
    ModificarNoticia();
});


function CrearNoticia() {
    $("#formularioN").bind("submit", function (event) {
        event.preventDefault();
        $("Error").remove();

        let tituloES = $("#TituloES").val();
        let tituloEN = $("#TituloEN").val();
        let tituloFNC = $("#TituloFNC").val();
        let fecha = $("#fecha").val();
        let textoES1 = $("#textoES1").val();
        let textoEN1 = $("#textoEN1").val();
        let textoFNC1 = $("#textoFNC1").val();
        let Link1 = $("#Link1").val();
        let Link2 = $("#Link2").val();
        let Link3 = $("#Link3").val();
        let idFiles1 = $("#idFiles01").val();

        let ValidarFecha = /^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$/;
        if (tituloES != "") {
            if (tituloEN != "") {
                if (tituloFNC != "") {
                    if (idFiles1 != "") {
                        data = getFiles(`idFiles01`);
                        data = getFormData("formulario", data);
                        $.ajax({
                            url: "../php/index.php?operacion=SubirImgNoticia", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                                if (!img) {
                                    $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                    $("#Error").css("color", "red");
                                } else {
                                    idFiles1 = img;
                                }
                            }
                        });
                    }
                    if (fecha != "") {
                        if (!ValidarFecha.test(fecha)) {
                            ErrorValidacion("fecha", " tiene que tener el formato dd/mm/yyyy");
                        } else {
                            $.ajax({
                                url: "../php/index.php", type: "POST", data: { operacion: 'CrearNoticia', tituloES: tituloES,tituloEN: tituloEN,tituloFNC: tituloFNC, fecha: fecha, idFiles1: idFiles1, textoES1: textoES1, textoEN1: textoEN1, textoFNC1: textoFNC1, Link1: Link1, Link2: Link2, Link3: Link3 }, success: function ($respuesta) {
                                    ResultadoBDD($respuesta);
                                }
                            });
                        }
                    } else {
                        $.ajax({
                            url: "../php/index.php", type: "POST", data: { operacion: 'CrearNoticia', tituloES: tituloES,tituloEN: tituloEN,tituloFNC: tituloFNC, fecha: fecha, idFiles1: idFiles1, textoES1: textoES1, textoEN1: textoEN1, textoFNC1: textoFNC1, Link1: Link1, Link2: Link2, Link3: Link3 }, success: function ($respuesta) {
                                ResultadoBDD($respuesta);
                            }
                        });
                    }
                } else {
                    campoVacio("Titulo Fances");
                }
            } else {
                campoVacio("Titulo Ingles");
            }
        } else {
            campoVacio("Titulo Castellano");
        }
    });
}
function EliminarNoticia() {

    $(".EliminarN table tbody tr").bind("click", function (event) {
        let titulo = $(this).attr("Titulo");
        let img = $(this).attr("img");
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'EliminarNoticia', titulo: titulo, img: img }, success: function ($respuesta) {
                alert($respuesta);
                location.reload();
            }
        });
    });
}

function ModificarNoticia() {
    $(".ModificarN table tbody tr").bind("click", function (event) {
        let titulo = $(this).attr("titulo");

        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'ModificarNoticia', titulo: titulo }, success: function ($respuesta) {
                $("div #contenido").empty();
                $("div #contenido").html($respuesta);
                EliminarMensaje();
                ValidarFormUpdateNoticia();
            }
        });
    });
}

function ValidarFormUpdateNoticia() {
    $("#formularioN").bind("submit", function (event) {
        event.preventDefault();
        $("Error").remove();

        let tituloES = $("#TituloES").val();
        let tituloEN = $("#TituloEN").val();
        let tituloFNC = $("#TituloFNC").val();
        let fecha = $("#fecha").val();
        let textoES1 = $("#textoES1").val();
        let textoEN1 = $("#textoEN1").val();
        let textoFNC1 = $("#textoFNC1").val();
        let Link1 = $("#Link1").val();
        let Link2 = $("#Link2").val();
        let Link3 = $("#Link3").val();
        let idFiles1 = $("#idFiles01").val();

        let ValidarFecha = /^\d{4}([\-/.])(0?[1-9]|1[1-2])\1(3[01]|[12][0-9]|0?[1-9])$/;
        if (tituloES != "") {
            if (tituloEN != "") {
                if (tituloFNC != "") {

            if (idFiles1 == "") {
                idFiles1 = $(`#idFiles01`).attr('img');
            } else {
                data = getFiles(`idFiles01`);
                data = getFormData("formulario", data);
                $.ajax({
                    url: "../php/index.php?operacion=SubirImgNoticia", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                        if (!img) {
                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                            $("#Error").css("color", "red");
                        } else {
                            idFiles1 = img;
                        }
                    }
                });
            }
            if (fecha != "") {
                if (!ValidarFecha.test(fecha)) {
                    ErrorValidacion("fecha", " tiene que tener el formato dd/mm/yyyy");
                } else {
                    $.ajax({
                        url: "../php/index.php", type: "POST", data: { operacion: 'MODNoticia',tituloES: tituloES,tituloEN: tituloEN,tituloFNC: tituloFNC, fecha: fecha, idFiles1: idFiles1, textoES1: textoES1, textoEN1: textoEN1, textoFNC1: textoFNC1, Link1: Link1, Link2: Link2, Link3: Link3 }, success: function ($respuesta) {
                            ResultadoBDD($respuesta);
                        }
                    });
                }
            } else {
                $.ajax({
                    url: "../php/index.php", type: "POST", data: { operacion: 'MODNoticia', tituloES: tituloES,tituloEN: tituloEN,tituloFNC: tituloFNC, fecha: fecha, idFiles1: idFiles1, textoES1: textoES1, textoEN1: textoEN1, textoFNC1: textoFNC1, Link1: Link1, Link2: Link2, Link3: Link3 }, success: function ($respuesta) {
                        ResultadoBDD($respuesta);
                    }
                });
            }
        } else {
            campoVacio("Titulo Fances");
        }
    } else {
        campoVacio("Titulo Ingles");
    }
} else {
    campoVacio("Titulo Castellano");
}
    });

}