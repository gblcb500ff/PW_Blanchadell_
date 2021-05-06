$(document).ready(function () {
    CrearServicio();
    EliminarServicio();
    ModificarServicio(); 
});

function CrearServicio() {

    $("#formularioM").bind("submit", function (event) {
        event.preventDefault();
        $("Error").remove();

        let tipo = $("#tipo").val();
        let categoria = $("#categoria").val();
        let idFiles1 = $("#idFiles01").val();
        let textoES1 = $("#textoES1").val();
        let textoEN1 = $("#textoEN1").val();
        let textoFNC1 = $("#textoFNC1").val();
        let idFiles2 = $("#idFiles02").val();
        let textoES2 = $("#textoES2").val();
        let textoEN2 = $("#textoEN2").val();
        let textoFNC2 = $("#textoFNC2").val();
        let idFiles3 = $("#idFiles3").val();
        let textoES3 = $("#textoES3").val();
        let textoEN3 = $("#textoEN3").val();
        let textoFNC3 = $("#textoFNC3").val();
        let idFiles4 = $("#idFiles04").val();
        let textoES4 = $("#textoES4").val();
        let textoEN4 = $("#textoEN4").val();
        let textoFNC4 = $("#textoFNC4").val();
        let idFiles5 = $("#idFiles05").val();
        let textoES5 = $("#textoES5").val();
        let textoEN5 = $("#textoEN5").val();
        let textoFNC5 = $("#textoFNC5").val();
        let idFiles6 = $("#idFiles06").val();
        let textoES6 = $("#textoES6").val();
        let textoEN6 = $("#textoEN6").val();
        let textoFNC6 = $("#textoFNC6").val();
        let video = $("#video").val();
        let data;
        let nombre = tipo+"_"+categoria;

        if (tipo != "") {
            if (categoria != "") {
                $.ajax({
                    url: "../php/index.php", type: "POST", async: false, data: { operacion: 'PasarNombre', nombre: nombre }, success: function ($respuesta) {
                       console.log($respuesta);
                    }
                });

                if (idFiles1 != "") {
                    data = getFiles(`idFiles01`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles1 = img;
                            }
                        }
                    }); 
                }
                if (idFiles2 != "") {
                    data = getFiles(`idFiles02`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles2 = img;
                            }
                        }
                    });
                }
                if (idFiles3 != "") {
                    data = getFiles(`idFiles03`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles3 = img;
                            }
                        }
                    });
                }
                if (idFiles4 != "") {
                    data = getFiles(`idFiles04`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles4 = img;
                            }
                        }
                    });
                }
                if (idFiles5 != "") {
                    data = getFiles(`idFiles05`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles5 = img;
                            }
                        }
                    });
                }
                if (idFiles6 != "") {
                    data = getFiles(`idFiles06`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles6 = img;
                            }
                        }
                    });
                }
                if (video != "") {
                    data = getFiles(`video`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                video = img;
                            }
                        }
                    });
                }
                $.ajax({
                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearServicio', tipo: tipo, categoria: categoria, idFiles1: idFiles1, textoES1: textoES1, textoEN1: textoEN1, textoFNC1: textoFNC1, idFiles2: idFiles2, textoES2: textoES2, textoEN2: textoEN2, textoFNC2: textoFNC2, idFiles3: idFiles3, textoES3: textoES3, textoEN3: textoEN3, textoFNC3: textoFNC3, idFiles4: idFiles4, textoES4: textoES4, textoEN4: textoEN4, textoFNC4: textoFNC4, idFiles5: idFiles5, textoES5: textoES5, textoEN5: textoEN5, textoFNC5: textoFNC5, idFiles6: idFiles6, textoES6: textoES6, textoEN6: textoEN6, textoFNC6: textoFNC6, video: video }, success: function ($respuesta) {
                        ResultadoBDD($respuesta);
                    }
                });


            } else {
                campoVacio("categoria");
            }

        } else {
            campoVacio("Tipo");
        }
    });
}

function EliminarServicio() {

    $(".EliminarS table tbody tr").bind("click", function (event) {
        let id = $(this).attr("id");
        separador = "_",
            textoseparado = id.split(separador);
        let tipo = textoseparado[0];
        let categoria = textoseparado[1];
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'EliminarServicio', categoria: categoria, tipo: tipo }, success: function ($respuesta) {
                alert($respuesta);
                location.reload();
            }
        }); 
    });
}

function ModificarServicio(){
    $(".ModificarS table tbody tr").bind("click", function (event) {
        let id = $(this).attr("id");
            separador = "_",
            textoseparado = id.split(separador);
        let tipo = textoseparado[0];
        let categoria = textoseparado[1];
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'ModificarServicio', tipo:tipo ,categoria:categoria }, success: function ($respuesta) {
                $("div #contenido").empty();
                $("div #contenido").html($respuesta);
                EliminarMensaje();
                ValidarFormUpdateMEC();
            }
        });
    });
}

function ValidarFormUpdateMEC(){
    $("#formularioMm").bind("submit", function (event) {
        event.preventDefault();
        $("Error").remove();

        let tipo = $("#tipo").val();
        let tip=$("#tipo").attr('tipo');
        let categoria = $("#categoria").val();
        let cat=$("#categoria").attr('cat');
        let idFiles1 = $("#idFiles1").val();
        let textoES1 = $("#textoES1").val();
        let textoEN1 = $("#textoEN1").val();
        let textoFNC1 = $("#textoFNC1").val();
        let idFiles2 = $("#idFiles2").val();
        let textoES2 = $("#textoES2").val();
        let textoEN2 = $("#textoEN2").val();
        let textoFNC2 = $("#textoFNC2").val();
        let idFiles3 = $("#idFiles3").val();
        let textoES3 = $("#textoES3").val();
        let textoEN3 = $("#textoEN3").val();
        let textoFNC3 = $("#textoFNC3").val();
        let idFiles4 = $("#idFiles4").val();
        let textoES4 = $("#textoES4").val();
        let textoEN4 = $("#textoEN4").val();
        let textoFNC4 = $("#textoFNC4").val();
        let idFiles5 = $("#idFiles5").val();
        let textoES5 = $("#textoES5").val();
        let textoEN5 = $("#textoEN5").val();
        let textoFNC5 = $("#textoFNC5").val();
        let idFiles6 = $("#idFiles6").val();
        let textoES6 = $("#textoES6").val();
        let textoEN6 = $("#textoEN6").val();
        let textoFNC6 = $("#textoFNC6").val();
        let video = $("#video").val();
        let data;
        let nombre = tipo+"_"+categoria;
        if (tipo != "") {
            if (categoria != "") {
                $.ajax({
                    url: "../php/index.php", type: "POST", async: false, data: { operacion: 'PasarNombre', nombre: nombre }, success: function ($respuesta) {
                       console.log($respuesta);
                    }
                });

                if (idFiles1 == "") {
                    idFiles1 = $(`#idFiles1`).attr('img');
                } else {
                    data = getFiles(`idFiles1`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles1 = img;
                            }
                        }
                    });
                }
                if (idFiles2 == "") {
                    idFiles2 = $(`#idFiles2`).attr('img');
                } else {
                    data = getFiles(`idFiles2`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data,  contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles2 = img;
                            }
                        }
                    });
                }
                if (idFiles3 == "") {
                    idFiles3 = $(`#idFiles3`).attr('img');
                } else {
                    data = getFiles(`idFiles3`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data,  contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles3 = img;
                            }
                        }
                    });
                }
                if (idFiles4 == "") {
                    idFiles4 = $(`#idFiles4`).attr('img');
                } else {
                    data = getFiles(`idFiles4`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data,  contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles4 = img;
                            }
                        }
                    });
                }
                if (idFiles5 == "") {
                    idFiles5 = $(`#idFiles5`).attr('img');
                } else {
                    data = getFiles(`idFiles5`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data, contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles5 = img;
                            }
                        }
                    });
                }
                if (idFiles6 == "") {
                    idFiles6 = $(`#idFiles6`).attr('img');
                } else {
                    data = getFiles(`idFiles6`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data,  contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                idFiles6 = img;
                            }
                        }
                    });
                }
                if (video == "") {
                    video = $(`#video`).attr('img');
                } else {
                    data = getFiles(`video`);
                    data = getFormData("formulario", data);
                    $.ajax({
                        url: "../php/index.php?operacion=SubirImgMecanica", async: false, type: "POST", data: data,  contentType: false, processData: false, success: function (img) {
                            if (!img) {
                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                $("#Error").css("color", "red");
                            } else {
                                video = img;
                            }
                        }
                    });
                }
                $.ajax({
                    url: "../php/index.php", type: "POST", data: { operacion: 'UpdateServicio', tipo: tipo,tip:tip,cat:cat,categoria: categoria, idFiles1: idFiles1, textoES1: textoES1, textoEN1: textoEN1, textoFNC1: textoFNC1, idFiles2: idFiles2, textoES2: textoES2, textoEN2: textoEN2, textoFNC2: textoFNC2, idFiles3: idFiles3, textoES3: textoES3, textoEN3: textoEN3, textoFNC3: textoFNC3, idFiles4: idFiles4, textoES4: textoES4, textoEN4: textoEN4, textoFNC4: textoFNC4, idFiles5: idFiles5, textoES5: textoES5, textoEN5: textoEN5, textoFNC5: textoFNC5, idFiles6: idFiles6, textoES6: textoES6, textoEN6: textoEN6, textoFNC6: textoFNC6, video: video }, success: function ($respuesta) {
                        ResultadoBDD($respuesta);
                    }
                });


            } else {
                campoVacio("categoria");
            }

        } else {
            campoVacio("Tipo");
        }
    });

}