$(document).ready(function () {
    ValidarFormCreatP();
    EliminarProducto();
    ModificarProducto();
});

function ValidarFormCreatP() {

    $("#formulario").bind("submit", function (event) {
        event.preventDefault();
        $("#Error").remove();
        let nombre = $("#Nombre").val();
        let tipo = $("#tipo").val();
        let servicioES = $("#servicioES").val();
        let servicioEN = $("#servicioEN").val();
        let servicioFNC = $("#servicioFNC").val();
        let grupo = $("#grupo").val();
        let casco = $("#casco").val();
        let esloraToral = $("#esloraToral").val();
        let esloraPP = $("#esloraPP").val();
        let manga = $("#manga").val();
        let puntal = $("#puntal").val();
        let TonelajeTRB = $("#TonelajeTRB").val();
        let TonelajeGT = $("#TonelajeGT").val();
        let calado = $("#calado").val();
        let PesoRosca = $("#PesoRosca").val();
        let Desplazamiento = $("#Desplazamiento").val();
        let CargaMaxCubierta = $("#CargaMaxCubierta").val();
        let DesplazamientoCarga = $("#DesplazamientoCarga").val();
        let PotenciaPropulsora = $("#PotenciaPropulsora").val();
        let PotenciaAuxiliar = $("#PotenciaAuxiliar").val();
        let VelocidadSinVelocidad = $("#VelocidadSinVelocidad").val();
        let Combustible = $("#Combustible").val();
        let Tripulacion = $("#Tripulación").val();
        let AguaPotable = $("#AguaPotable").val();
        let AguaNegra = $("#AguaNegra").val();
        let AguaOleosas = $("#AguaOleosas").val();
        let Grua = $("#Grua").val();
        let Cabrestante = $("#Cabrestante").val();
        let Generador = $("#Generador").val();
        let Link1 = $("#Link1").val();
        let Link2 = $("#Link2").val();
        let Link3 = $("#Link3").val();
        let textoES = $("#textoES").val();
        let textoEN = $("#textoEN").val();
        let textoFNC = $("#textoFNC").val();
        let idFiles1 = $("#idFiles1").val();
        let idFiles2 = $("#idFiles2").val();
        let idFiles3 = $("#idFiles3").val();
        let data;


        if (nombre != "") {
            if (tipo != "") {
                if (servicioES != "") {
                    if (servicioEN != "") {
                        if (servicioFNC != "") {
                            if (idFiles1 != "") {
                                if (idFiles2 != "") {
                                    if (idFiles3 != "") {
                                        data = getFiles(`idFiles1`);
                                        data = getFormData("formulario", data);
                                        $.ajax({
                                            url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img1) {
                                                if (!img1) {
                                                    $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                    $("#Error").css("color", "red");
                                                } else {
                                                    data = getFiles(`idFiles2`);
                                                    data = getFormData("formulario", data);
                                                    $.ajax({
                                                        url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img2) {
                                                            if (!img2) {
                                                                $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                $("#Error").css("color", "red");
                                                            } else {
                                                                data = getFiles(`idFiles3`);
                                                                data = getFormData("formulario", data);
                                                                $.ajax({
                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img3) {
                                                                        if (!img3) {
                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                            $("#Error").css("color", "red");
                                                                        } else {
                                                                            let img4 = $("#idFiles4").val();
                                                                            if (img4 != "") {
                                                                                data = getFiles(`idFiles4`);
                                                                                data = getFormData("formulario", data);
                                                                                $.ajax({
                                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img4) {
                                                                                        if (!img4) {
                                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                            $("#Error").css("color", "red");
                                                                                        } else {
                                                                                            let img5 = $("#idFiles5").val();
                                                                                            if (img5 != "") {
                                                                                                data = getFiles(`idFiles5`);
                                                                                                data = getFormData("formulario", data);
                                                                                                $.ajax({
                                                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img5) {
                                                                                                        if (!img5) {
                                                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                            $("#Error").css("color", "red");
                                                                                                        } else {
                                                                                                            let img6 = $("#idFiles6").val();
                                                                                                            if (img6 != "") {
                                                                                                                data = getFiles(`idFiles6`);
                                                                                                                data = getFormData("formulario", data);
                                                                                                                $.ajax({
                                                                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img6) {
                                                                                                                        if (!img6) {
                                                                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                            $("#Error").css("color", "red");
                                                                                                                        } else {
                                                                                                                            let img7 = $("#idFiles7").val();
                                                                                                                            if (img7 != "") {
                                                                                                                                data = getFiles(`idFiles7`);
                                                                                                                                data = getFormData("formulario", data);
                                                                                                                                $.ajax({
                                                                                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img7) {
                                                                                                                                        if (!img7) {
                                                                                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                            $("#Error").css("color", "red");
                                                                                                                                        } else {
                                                                                                                                            let img8 = $("#idFiles8").val();
                                                                                                                                            if (img8 != "") {
                                                                                                                                                data = getFiles(`idFiles8`);
                                                                                                                                                data = getFormData("formulario", data);
                                                                                                                                                $.ajax({
                                                                                                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img8) {
                                                                                                                                                        if (!img8) {
                                                                                                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                            $("#Error").css("color", "red");
                                                                                                                                                        } else {
                                                                                                                                                            let img9 = $("#idFiles9").val();
                                                                                                                                                            if (img9 != "") {
                                                                                                                                                                data = getFiles(`idFiles9`);
                                                                                                                                                                data = getFormData("formulario", data);
                                                                                                                                                                $.ajax({
                                                                                                                                                                    url: "../php/index.php?operacion=SubirImg", type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img9) {
                                                                                                                                                                        if (!img9) {
                                                                                                                                                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                                                                                                                                                            $("#Error").css("color", "red");
                                                                                                                                                                        } else {
                                                                                                                                                                            $.ajax({
                                                                                                                                                                                url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, img6: img6, img7: img7, img8: img8, img9: img9, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                                                                                                                    ResultadoBDD($respuesta);
                                                                                                                                                                                }
                                                                                                                                                                            });
                                                                                                                                                                        }
                                                                                                                                                                    }
                                                                                                                                                                });
                                                                                                                                                            } else {
                                                                                                                                                                $.ajax({
                                                                                                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, img6: img6, img7: img7, img8: img8, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                                                                                                        ResultadoBDD($respuesta);
                                                                                                                                                                    }
                                                                                                                                                                });
                                                                                                                                                            }
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                });
                                                                                                                                            } else {
                                                                                                                                                $.ajax({
                                                                                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, img6: img6, img7: img7, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                                                                                        ResultadoBDD($respuesta);
                                                                                                                                                    }
                                                                                                                                                });
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                });
                                                                                                                            } else {
                                                                                                                                $.ajax({
                                                                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, img6: img6, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                                                                        ResultadoBDD($respuesta);
                                                                                                                                    }
                                                                                                                                });
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                });
                                                                                                            } else {
                                                                                                                $.ajax({
                                                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                                                        ResultadoBDD($respuesta);
                                                                                                                    }
                                                                                                                });
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                });
                                                                                            } else {
                                                                                                $.ajax({
                                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                                        ResultadoBDD($respuesta);
                                                                                                    }
                                                                                                });
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                });
                                                                            } else {
                                                                                $.ajax({
                                                                                    url: "../php/index.php", type: "POST", data: { operacion: 'CrearProducto', nombre: nombre, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                                                                        ResultadoBDD($respuesta);
                                                                                    }
                                                                                });
                                                                            }
                                                                        }
                                                                    }
                                                                });

                                                            }
                                                        }
                                                    });

                                                }
                                            }
                                        });

                                    } else {
                                        campoVacio("Imagen 3");
                                    }
                                } else {
                                    campoVacio("Imagen 2");
                                }
                            } else {
                                campoVacio("Imagen 1");
                            }

                        } else {
                            campoVacio("Servicio FRANCES")
                        }

                    } else {
                        campoVacio("Servicio INGLES")
                    }

                } else {
                    campoVacio("Servicio Castellano")
                }

            } else {
                campoVacio("Tipo");
            }

        } else {
            campoVacio("Nombre");
        }
    });



}

function ResultadoBDD($respuesta) {
    if ($respuesta == 0) {
        alert("Lo sentimos ya se encuentra el nombre en la base de datos, comprueba los datos ");
    } else if ($respuesta == 1) {
        alert("Se creo correctamente");
        /*  location.reload(); */
    } else if ($respuesta == 2) {
        alert("Lo sentimos hubo un error con la subida a la base de datos, comprueba los datos y vuelve a probar, si el problema persigue contacta con un especialista");

    } else if ($respuesta == 3) {
        alert("Se actualizo los datos en la base de datos.");
        location.reload();

    } else if ($respuesta == 4) {
        alert("Lo sentimos no se pudo actualizar la base de datos");
        location.reload();
    } else {
        $("#textError").append(`<p id='Error'>${$respuesta}</p>`);
    }
}

function EliminarProducto() {
    $(".EliminarP table tbody tr").bind("click", function (event) {
        let nombre = $(this).attr("nombre");
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'EliminarProducto', nombre: nombre }, success: function ($respuesta) {
                alert($respuesta);
                location.reload();
            }
        })
    });
}
function ModificarProducto() {
    $(".ModificarP table tbody tr").bind("click", function (event) {
        let nombre = $(this).attr("nombre");
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'ModificarProducto', nombre: nombre }, success: function ($respuesta) {
                $("div #contenido").empty();
                $("div #contenido").html($respuesta);
                EliminarMensaje();
                ValidarFormUpdate();
            }
        });
    });
}
function ValidarFormUpdate() {

    $("#formulario").bind("submit", function (event) {
        event.preventDefault();
        $("#Error").remove();
        let nombre = $("#Nombre").val();
        let nombre1 = $(`#Nombre`).attr('nombre1');
        let tipo = $("#tipo").val();
        let servicioES = $("#servicioES").val();
        let servicioEN = $("#servicioEN").val();
        let servicioFNC = $("#servicioFNC").val();
        let grupo = $("#grupo").val();
        let casco = $("#casco").val();
        let esloraToral = $("#esloraToral").val();
        let esloraPP = $("#esloraPP").val();
        let manga = $("#manga").val();
        let puntal = $("#puntal").val();
        let TonelajeTRB = $("#TonelajeTRB").val();
        let TonelajeGT = $("#TonelajeGT").val();
        let calado = $("#calado").val();
        let PesoRosca = $("#PesoRosca").val();
        let Desplazamiento = $("#Desplazamiento").val();
        let CargaMaxCubierta = $("#CargaMaxCubierta").val();
        let DesplazamientoCarga = $("#DesplazamientoCarga").val();
        let PotenciaPropulsora = $("#PotenciaPropulsora").val();
        let PotenciaAuxiliar = $("#PotenciaAuxiliar").val();
        let VelocidadSinVelocidad = $("#VelocidadSinVelocidad").val();
        let Combustible = $("#Combustible").val();
        let Tripulacion = $("#Tripulación").val();
        let AguaPotable = $("#AguaPotable").val();
        let AguaNegra = $("#AguaNegra").val();
        let AguaOleosas = $("#AguaOleosas").val();
        let Grua = $("#Grua").val();
        let Cabrestante = $("#Cabrestante").val();
        let Generador = $("#Generador").val();
        let Link1 = $("#Link1").val();
        let Link2 = $("#Link2").val();
        let Link3 = $("#Link3").val();
        let textoES = $("#textoES").val();
        let textoEN = $("#textoEN").val();
        let textoFNC = $("#textoFNC").val();
        let data;


        if (nombre != "") {
            if (tipo != "") {
                if (servicioES != "") {
                    if (servicioEN != "") {
                        if (servicioFNC != "") {

                            let img1 = $("#idFiles1").val();
                            let img2 = $("#idFiles2").val();
                            let img3 = $("#idFiles3").val();
                            let img4 = $("#idFiles4").val();
                            let img5 = $("#idFiles5").val();
                            let img6 = $("#idFiles6").val();
                            let img7 = $("#idFiles7").val();
                            let img8 = $("#idFiles8").val();
                            let img9 = $("#idFiles9").val();

                            if (img1 == "") {
                                img1 = $(`#idFiles1`).attr('img');
                            } else {
                                data = getFiles(`idFiles1`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img1 = img;
                                        }
                                    }
                                });
                            }
                            if (img2 == "") {
                                img2 = $(`#idFiles2`).attr('img');
                            } else {
                                data = getFiles(`idFiles2`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img2 = img;
                                        }
                                    }
                                });
                            }

                            if (img3 == "") {
                                img3 = $(`#idFiles3`).attr('img');
                            } else {
                                data = getFiles(`idFiles3`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img3 = img;
                                        }
                                    }
                                });
                            }
                            if (img4 == "") {
                                img4 = $(`#idFiles4`).attr('img');
                            } else {
                                data = getFiles(`idFiles4`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img4 = img;
                                        }
                                    }
                                });
                            }
                            if (img5 == "") {
                                img5 = $(`#idFiles5`).attr('img');
                            } else {
                                data = getFiles(`idFiles5`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img5 = img;
                                        }
                                    }
                                });
                            }
                            if (img6 == "") {
                                img6 = $(`#idFiles6`).attr('img');
                            } else {
                                data = getFiles(`idFiles6`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img6 = img;
                                        }
                                    }
                                });
                            }
                            if (img7 == "") {
                                img7 = $(`#idFiles7`).attr('img');
                            } else {
                                data = getFiles(`idFiles7`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img7 = img;
                                        }
                                    }
                                });
                            }
                            if (img8 == "") {
                                img8 = $(`#idFiles8`).attr('img');
                            } else {
                                data = getFiles(`idFiles8`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img8 = img;
                                        }
                                    }
                                });
                            }
                            if (img9 == "") {
                                img9 = $(`#idFiles9`).attr('img');
                            } else {
                                data = getFiles(`idFiles9`);
                                data = getFormData("formulario", data);
                                $.ajax({
                                    url: "../php/index.php?operacion=SubirImg", async: false, type: "POST", data: data, nombre: nombre, contentType: false, processData: false, success: function (img) {
                                        if (!img) {
                                            $("#textError").append("<p id='Error'>Lo sentimos las imagenes no se pudieron subir</p>");
                                            $("#Error").css("color", "red");
                                        } else {
                                            img9 = img;
                                        }
                                    }
                                });
                            }
                            $.ajax({
                                url: "../php/index.php", type: "POST", data: { operacion: 'ActualizarProducto', nombre: nombre, nombre1: nombre1, tipo: tipo, servicioES: servicioES, servicioEN: servicioEN, servicioFNC: servicioFNC, grupo: grupo, casco: casco, esloraToral: esloraToral, esloraPP: esloraPP, manga: manga, puntal: puntal, TonelajeTRB: TonelajeTRB, TonelajeGT: TonelajeGT, calado: calado, PesoRosca: PesoRosca, CargaMaxCubierta: CargaMaxCubierta, Desplazamiento: Desplazamiento, DesplazamientoCarga: DesplazamientoCarga, PotenciaPropulsora: PotenciaPropulsora, PotenciaAuxiliar: PotenciaAuxiliar, VelocidadSinVelocidad: VelocidadSinVelocidad, Combustible: Combustible, Tripulacion: Tripulacion, AguaPotable: AguaPotable, AguaNegra: AguaNegra, AguaOleosas: AguaOleosas, Grua: Grua, Cabrestante: Cabrestante, Generador: Generador, img1: img1, img2: img2, img3: img3, img4: img4, img5: img5, img6: img6, img7: img7, img8: img8, img9: img9, link1: Link1, link2: Link2, link3: Link3, textoES: textoES, textoEN: textoEN, textoFNC: textoFNC }, success: function ($respuesta) {
                                    ResultadoBDD($respuesta);
                                }
                            });


                        } else {
                            campoVacio("Servicio Frances")
                        }

                    } else {
                        campoVacio("Servicio Ingles")
                    }

                } else {
                    campoVacio("Servicio Castellano")
                }

            } else {
                campoVacio("Tipo");
            }

        } else {
            campoVacio("Nombre");
        }

    });
}

