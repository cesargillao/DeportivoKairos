$(document).ready(function(){
	setInterval(slideShow, 3500);
});

var cons = 0;

function slideShow(){
	var imagenes = $('#slideshow li');
	for(n=cons; n<=imagenes.length; n++){		
		imagenes[n].className='selected';

		for(i=0; i<imagenes.length; i++){
			if(i!=cons){
				imagenes[i].className='noselected';
			}
		}
		cons++;							
		break;
	}
	if(cons>=imagenes.length){
		cons=0;		
	}
	return false;
}