$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
        type:"POST",
        url:"buscar.php",
        dataType: 'html',
        data: {consulta},
   })
    .done(function(respuesta){
    	$('#datos').html(respuesta);
    });

}

$(document).on('keyup','#caja_busqueda', function(){
	let valor = $('#caja_busqueda').val();
	if (valor != "") {
		buscar_datos(valor);
	}
	else {
		buscar_datos();
	}
});

$(document).on('keydoun','#caja_busqueda', function(){
	let valor = $('#caja_busqueda').val();
	if (valor != "") {
		buscar_datos();
	}
	
});