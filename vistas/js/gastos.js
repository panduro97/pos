$("#modalAgregarProducto").on("click", "button.enviar", function(){

	var variable1 = $(".descripcion");
	var variable2 = $(".dinero");

    var des = variable1.val()
    var din = variable2.val()
    var parametros = {
        "descripcion" : des,
        "dinero" : din
    }
    $.ajax({

        url:"controladores/gastos.controlador.php",
         method: "POST",
         data: parametros,
         dataType:"json",
         success:function(respuesta){
           
            alert(respuesta)

         }

     })

<<<<<<< HEAD
=======
})

$(".tablas").on("click", "button.borrar", function(){

    var variable = $('.id')
    
    console.log(variable)

  /*   $.ajax({

        url:"controladores/gastos.controlador.php",
         method: "POST",
         data: parametros,
         dataType:"json",
         success:function(respuesta){
           
            alert(respuesta)

         }

     }) */

>>>>>>> f17d162d08acbde6e7e12717c8a124fac1b14b0c
})