$(document).ready(function(){
	$('.btnpreliminar').click(function(){
		var url = $('#enlace').val();
		$('img').attr('src',url);
	});
});