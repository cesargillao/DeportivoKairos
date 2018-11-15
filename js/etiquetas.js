$(document).ready(function(){
	$('#bold').click(negrita);
	$('#italic').click(cursiva);
	$('#underline').click(subrayado);
	$('#strikethrough').click(tachado);
	$('#lista1').click(listOr);
	$('#lista2').click(listDes);
	$('#link').click(enlace);
	$('#image').click(imagen);
	$('#sub').click(subScript);
	$('#sup').click(superScript);
	$('#lineh').click(linea);
	$('#salto').click(salto);
	var ayuda1 = $('#ayuda1');
	var ayuda2 = $('#ayuda2');

$('#bold').hover(function(){$('.tooltip1').fadeIn(300)},function(){$('.tooltip1').hide()});
$('#italic').hover(function(){$('.tooltip2').fadeIn(300)},function(){$('.tooltip2').hide()});
$('#underline').hover(function(){$('.tooltip3').fadeIn(300)},function(){$('.tooltip3').hide()});
$('#strikethrough').hover(function(){$('.tooltip4').fadeIn(300)},function(){$('.tooltip4').hide()});
$('#lista1').hover(function(){$('.tooltip5').fadeIn(300)},function(){$('.tooltip5').hide()});
$('#lista2').hover(function(){$('.tooltip6').fadeIn(300)},function(){$('.tooltip6').hide()});
$('#link').hover(function(){$('.tooltip7').fadeIn(300)},function(){$('.tooltip7').hide()});
$('#image').hover(function(){$('.tooltip8').fadeIn(300)},function(){$('.tooltip8').hide()});
$('#sub').hover(function(){$('.tooltip9').fadeIn(300)},function(){$('.tooltip9').hide()});
$('#sup').hover(function(){$('.tooltip10').fadeIn(300)},function(){$('.tooltip10').hide()});
$('#lineh').hover(function(){$('.tooltip11').fadeIn(300)},function(){$('.tooltip11').hide()});
$('#salto').hover(function(){$('.tooltip12').fadeIn(300)},function(){$('.tooltip12').hide()});
});
function negrita(){
	ayuda1.innerHTML='&lt;b&gt;TEXTO&lt;/b&gt;';
	ayuda2.innerHTML='<b>TEXTO</b>';
}
function cursiva(){
	ayuda1.innerHTML='&lt;i&gt;TEXTO&lt;/i&gt;';
	ayuda2.innerHTML='<i>TEXTO</i>';
}
function subrayado(){
	ayuda1.innerHTML='&lt;span class="subrayado"&gt;TEXTO&lt;/span&gt;';
	ayuda2.innerHTML='<span style="text-decoration:underline">TEXTO</span>';
}
function tachado(){
	ayuda1.innerHTML='&lt;span class="tachado"&gt;TEXTO&lt;/span&gt;';
	ayuda2.innerHTML='<span style="text-decoration:line-through">TEXTO</span>';
}
function listOr(){
	ayuda1.innerHTML='&lt;ol&gt;&lt;li&gt;TEXTO1&lt;/li&gt;&lt;li&gt;TEXTO2&lt;/li&gt;&lt;/ol&gt;';
	ayuda2.innerHTML='<ol><li>TEXTO1</li><li>TEXTO2</li></ul>';
}
function listDes(){
	ayuda1.innerHTML='&lt;ul&gt;&lt;li&gt;TEXTO1&lt;/li&gt;&lt;li&gt;TEXTO2&lt;/li&gt;&lt;/ul&gt;';
	ayuda2.innerHTML='<ul><li>TEXTO1</li><li>TEXTO2</li></ul';
}
function enlace(){
	ayuda1.innerHTML='&lt;a href="http://www.google.com"&gt;TEXTO&lt;/a&gt;';
	ayuda2.innerHTML='<a href="http://www.google.com">TEXTO</a>';
}
function imagen(){
	ayuda1.innerHTML='&lt;img src="http://www.google.com/imagen.jpg"&gt;';
	ayuda2.innerHTML='';
}
function subScript(){
	ayuda1.innerHTML='TEXTO&lt;sub&gt;texto&lt;/sub&gt;';
	ayuda2.innerHTML='TEXTO<sub>texto</sub>';
}
function superScript(){
	ayuda1.innerHTML='TEXTO&lt;sup&gt;texto&lt;/sup&gt;';
	ayuda2.innerHTML='TEXTO<sup>texto</sup>';
}
function linea(){
	ayuda1.innerHTML='&lt;hr&gt;';
	ayuda2.innerHTML='<hr>';
}
function salto(){
	ayuda1.innerHTML='&lt;br&gt;';
	ayuda2.innerHTML='';
}