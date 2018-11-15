$(document).ready(function(){
	$('#btnpreliminar').click(function(){
		var titulo = $('#titulo').val();
		var fecha = $('#fecha').val();
		var contenido = $('#contenido').val();
		var x='<div id="vistacontenido"><article><h1>'+titulo+'<span id="vistafecha">'+fecha+'</span></h1><p>'+contenido+'</p></article></div>';
		$('#resultado').html('');
		$('.wrapper').fadeIn();
		$('#resultado').html(x);
	});

	$('#btnsalir').click(function(){
		$('.wrapper').fadeOut();
	});
});