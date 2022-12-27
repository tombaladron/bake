//hacer aparecer alternativas al clickear foto
$(".primerclick").click(function () {
    var elClickeado = $(this).attr('id');
    $("." + elClickeado).toggleClass("hidden");
});

//añadir al pedido
$(document).ready(function () {
    var i = 0;

    $(".Añadir").click(function () {
        var elClickeado = $(this).attr('id');
        i++;
        var text = $("#label" + elClickeado).prop("textContent");
        $("#carritoInsertar").append("<div class='carrito'>   <span>" + text + "</span>  <button  id='but" +i+ "' class='clickDelete text-white bg-teal-600 hover:bg-teal-400 font-medium rounded-lg text-xs m-0.5 p-0.5'>Eliminar del carrito</button>   </div>");
        $("#scriptcarrito").load("scriptjquery2.html");
        $("#todoelcarrito").removeClass("hidden");
        $("#confirmarPedido").removeClass("hidden");
    });
})

//click en confirmar pedido, esconder alternativas de pedido y mostrar datos para mandar pedido, centrar pedido temporal y mostrar mensaje confirmatorio
$("#confirmarPedido").click(function () {
    $("#seleccionatupedido").addClass("hidden");
    $("#datosdeventa").removeClass("hidden");
    $("#carritoInsertar").addClass("text-center");
    $("#tupedidopor").removeClass("hidden");
    $("#titulopedido").addClass("hidden");
    $("#confirmarPedido").addClass("hidden");
    $("#hacerpedido").removeClass("hidden")
});


//hacer el pedido    (mandar info a database)
$("#inputform").on("click", function(e){
    e.preventDefault();
    var participante= $("#participante").val();
    var mail= $("#mail").val();
    var empresa= $("#empresa").val();
    var cargo= $("#cargo").val();
    var submit= $("#inputform").val();

    $("#message").load("developerpage/dataSend.php", {
        participante: participante,
        mail: mail,
        empresa: empresa,
        cargo: cargo,
        submit: submit
    });
});
//var check = $("#carritoInsertar").is(':empty');
//if(check=true){$("#confirmarPedido").addClass("hidden")}
//else if(check=false){}$("#confirmarPedido").removeClass("hidden");