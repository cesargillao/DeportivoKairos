	
function mostrar(id){

	//Variables
	var carp1 = document.getElementById("carpeta-1");
	var carp2 = document.getElementById("carpeta-2");
	var carp3 = document.getElementById("carpeta-3");
	var carp4 = document.getElementById("carpeta-4");
	var carp5 = document.getElementById("carpeta-5");
	var carp6 = document.getElementById("carpeta-6");
	var carp7 = document.getElementById("carpeta-7");
	var carp8 = document.getElementById("carpeta-8");
	var contCarp1 = document.getElementById("contenido-carpeta-1");
	var contCarp2 = document.getElementById("contenido-carpeta-2");
	var contCarp3 = document.getElementById("contenido-carpeta-3");
	var contCarp4 = document.getElementById("contenido-carpeta-4");
	var contCarp5 = document.getElementById("contenido-carpeta-5");
	var contCarp6 = document.getElementById("contenido-carpeta-6");
	var contCarp7 = document.getElementById("contenido-carpeta-7");
	var contCarp8 = document.getElementById("contenido-carpeta-8");

	//Aviso "Seleccionar Carpeta"
	document.getElementById("aviso").style.display="none";

	//Carpeta 1
	if(id=="carpeta-1"){
		if(!(contCarp1.className="")){
			carp1.className="activo";
			carp2.className="#carpetas li";
			carp3.className="#carpetas li";
			carp4.className="#carpetas li";
			carp5.className="#carpetas li";
			carp6.className="#carpetas li";
			carp7.className="#carpetas li";
			carp8.className="#carpetas li";
			
			contCarp1.className="";
			contCarp2.className="oculto";
			contCarp3.className="oculto";
			contCarp4.className="oculto";
			contCarp5.className="oculto";
			contCarp6.className="oculto";
			contCarp7.className="oculto";
			contCarp8.className="oculto";
		}
	}
	
	//Carpeta 2
	if(id=="carpeta-2"){
		if(!(contCarp2.className="")){
			carp1.className="#carpetas li";
			carp2.className="activo";
			carp3.className="#carpetas li";
			carp4.className="#carpetas li";
			carp5.className="#carpetas li";
			carp6.className="#carpetas li";
			carp7.className="#carpetas li";
			carp8.className="#carpetas li";
			
			contCarp1.className="oculto";
			contCarp2.className="";
			contCarp3.className="oculto";
			contCarp4.className="oculto";
			contCarp5.className="oculto";
			contCarp6.className="oculto";
			contCarp7.className="oculto";
			contCarp8.className="oculto";
		}
	}
	
	//Carpeta 3
	if(id=="carpeta-3"){
		if(!(contCarp3.className="")){
			carp1.className="#carpetas li";
			carp2.className="#carpetas li";
			carp3.className="activo";
			carp4.className="#carpetas li";
			carp5.className="#carpetas li";
			carp6.className="#carpetas li";
			carp7.className="#carpetas li";
			carp8.className="#carpetas li";
			
			contCarp1.className="oculto";
			contCarp2.className="oculto";
			contCarp3.className="";
			contCarp4.className="oculto";
			contCarp5.className="oculto";
			contCarp6.className="oculto";
			contCarp7.className="oculto";
			contCarp8.className="oculto";
		}
	}
	
	//Carpeta 4
	if(id=="carpeta-4"){
		if(!(contCarp4.className="")){
			carp1.className="#carpetas li";
			carp2.className="#carpetas li";
			carp3.className="#carpetas li";
			carp4.className="activo";
			carp5.className="#carpetas li";
			carp6.className="#carpetas li";
			carp7.className="#carpetas li";
			carp8.className="#carpetas li";
			
			contCarp1.className="oculto";
			contCarp2.className="oculto";
			contCarp3.className="oculto";
			contCarp4.className="";
			contCarp5.className="oculto";
			contCarp6.className="oculto";
			contCarp7.className="oculto";
			contCarp8.className="oculto";
		}
	}
	
	//Carpeta 5
	if(id=="carpeta-5"){
		if(!(contCarp5.className="")){
			carp1.className="#carpetas li";
			carp2.className="#carpetas li";
			carp3.className="#carpetas li";
			carp4.className="#carpetas li";
			carp5.className="activo";
			carp6.className="#carpetas li";
			carp7.className="#carpetas li";
			carp8.className="#carpetas li";
			
			contCarp1.className="oculto";
			contCarp2.className="oculto";
			contCarp3.className="oculto";
			contCarp4.className="oculto";
			contCarp5.className="";
			contCarp6.className="oculto";
			contCarp7.className="oculto";
			contCarp8.className="oculto";
		}
	}
	
	//Carpeta 6
	if(id=="carpeta-6"){
		if(!(contCarp6.className="")){
			carp1.className="#carpetas li";
			carp2.className="#carpetas li";
			carp3.className="#carpetas li";
			carp4.className="#carpetas li";
			carp5.className="#carpetas li";
			carp6.className="activo";
			carp7.className="#carpetas li";
			carp8.className="#carpetas li";
			
			contCarp1.className="oculto";
			contCarp2.className="oculto";
			contCarp3.className="oculto";
			contCarp4.className="oculto";
			contCarp5.className="oculto";
			contCarp6.className="";
			contCarp7.className="oculto";
			contCarp8.className="oculto";
		}
	}

	//Carpeta 7
	if(id=="carpeta-7"){
		if(!(contCarp7.className="")){
			carp1.className="#carpetas li";
			carp2.className="#carpetas li";
			carp3.className="#carpetas li";
			carp4.className="#carpetas li";
			carp5.className="#carpetas li";
			carp6.className="#carpetas li";
			carp7.className="activo";
			carp8.className="#carpetas li";
			
			contCarp1.className="oculto";
			contCarp2.className="oculto";
			contCarp3.className="oculto";
			contCarp4.className="oculto";
			contCarp5.className="oculto";
			contCarp6.className="oculto";
			contCarp7.className="";
			contCarp8.className="oculto";
		}
	}

	//Carpeta 8
	if(id=="carpeta-8"){
		if(!(contCarp8.className="")){
			carp1.className="#carpetas li";
			carp2.className="#carpetas li";
			carp3.className="#carpetas li";
			carp4.className="#carpetas li";
			carp5.className="#carpetas li";
			carp6.className="#carpetas li";
			carp7.className="#carpetas li";
			carp8.className="activo";
			
			contCarp1.className="oculto";
			contCarp2.className="oculto";
			contCarp3.className="oculto";
			contCarp4.className="oculto";
			contCarp5.className="oculto";
			contCarp6.className="oculto";
			contCarp7.className="oculto";
			contCarp8.className="";
		}
	}
}