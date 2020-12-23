$(document).ready(function(){

})

function validar() {
   var dato={codigo:$('#codigo').val()}
   $.ajax({
   	 method: 'POST',
   	 url: 'recursos/ajax/controlador.php',
   	 data: dato
   })
   .done(function(datos){
   	   console.log(datos);
   })
}