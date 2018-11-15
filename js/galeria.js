$(document).ready(function(){
	$('#galeria img').click(abrir);
	$('#imgFull').click(cerrar);
	$('#anterior').click(anterior);
	$('#siguiente').click(siguiente);
});
	
function abrir(){
	var src = $(this).attr('src');
	
	$('#imgFull').attr('src', src);
	$('#full').fadeIn('fast');
	$('.cambiar').fadeIn('fast');
}
function cerrar(){
	$('#full').fadeOut('fast');
	$('.cambiar').fadeOut('fast');
}
function anterior(){
	var img = $('img').next().attr('src');
	alert(img);
	$('#imgFull').attr('src', src);
}
function siguiente(){
	$('img-wrapper div img').next()
}