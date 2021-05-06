$(document).ready(function () {
    EnrutarAstillero();
    EnrutarBarco();
    MostrarFichaTecnica();
});

function EnrutarAstillero() {
    let tipo;
    $("#CatalogoAstillero div div").on('click', function (event) {
        tipo = $(this).attr('tipo');
        $.ajax({
            url: "../php/index.php", type: "POST", data: { operacion: 'CatAstillero', tipo: tipo }, success: function ($respuesta) {
                if ($respuesta == 1) {
                    alert("Lo sentimos no se puede acceder en este sector, estamos de mantenimiento.")
                } else if ($respuesta == 2) {
                    window.location.href=`index.php?operacion=productoAstillero&tipo=${tipo}`;
                }
            }
        });
    });
}    
function EnrutarBarco(){
    $(".hover2").on("click",function(event){
        let barco=$(this).attr("barco");
       
        $.ajax({
            url:"../php/index.php",type:"POST",data: {operacion:'RecogerBarco',barco:barco}, success: function ($respuesta) {
                if ($respuesta == 1) {
                    alert("Lo sentimos no se puede acceder en este sector, estamos de mantenimiento.")
                } else if ($respuesta == 2) {
                    window.location.href=`index.php?operacion=MostrarBarco&barco=${barco}`;
                }
              }
        });
    });
}
function MostrarFichaTecnica(){
    $(".spectbl").fadeToggle();
    $("#mas").bind("click",function(event){

        if($("#mas i").hasClass("fa-plus")){
            $("#mas i").removeClass("fa-plus").addClass("fa-minus");
            $(".spectbl").fadeIn();
        }else{
            $("#mas i").removeClass("fa-minus").addClass("fa-plus");
            $(".spectbl").fadeToggle();
        }
    });
    
}