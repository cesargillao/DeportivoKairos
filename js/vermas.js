$(document).ready(iniciar);

function iniciar(){
	$(".vermas").click(expandir);
}
function expandir(){
	$(this).parent('article').css("height","auto");
	$(this).empty();
}