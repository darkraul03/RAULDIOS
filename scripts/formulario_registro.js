(function() {

	var formulario = document.formulario_registro;
	var elementos = formulario.elements;

	// Funcion que valida los Input Text
	var validarInputs = function(){

		for(var i = 0; i < elementos.length; i++){
			// Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
			if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
				// Si es de tipo texto, email o password vamos a comprobar que esten completados los input
				if(elementos[i].length){
					console.log('El campo ' + elementos[i].name + ' esta incompleto');
                  	elementos[i].className = elementos[i].className + " error";
                  	return false;
				} else{
					elementos[i].className = elementos[i].className.replace(" error", "");
				}
			}
		}

		// Comprobamos que las contraseñas coincidan
		if (elementos.pass.value !== elementos.pass2.value) {
			elementos.pass.value = "";
            elementos.pass2.value = "";
            elementos.pass.className = elementos.pass.className + " error";
            elementos.pass2.className = elementos.pass2.className + " error";
		} else {
            elementos.pass.className = elementos.pass.className.replace(" error", "");
            elementos.pass2.className = elementos.pass2.className.replace(" error", "");
        }

        return true;
	};

	// Validando los Radio Button
	var validarRadios = function() {

		var opciones = document.getElementsByName('sexo');
        var resultado = false;

        for (var i = 0; i < elementos.length; i++) {
        	if (elementos[i].type == "radio" && elementos[i].name == "sexo") {
        		// Recorremos los radio button
        		for (var o = 0; o < opciones.length; o++) {
        			if (opciones[o].checked) {
                		resultado = true;
                		break;
                	}
        		}

        		if (resultado == false) {
		          	elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
		           	console.log('El campo sexo esta incompleto');
		            return false;
		         } else {
		         	// Eliminamos la clase Error del radio button
		            elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
		            return true;
		         }
        	}	
        }

	};

	// Validando el Checkbox
	var validarCheckbox = function() {

		var opciones = document.getElementsByName('terminos');
        var resultado = false;

        for (var i = 0; i < elementos.length; i++) {
        	if (elementos[i].type == "checkbox") {
        		for (var o = 0; o < opciones.length; o++) {
        			if (opciones[o].checked) {
                		resultado = true;
                		break;
              		}
        		}

        		if (resultado == false) {
	              	elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
	              	console.log('El campo checkbox esta incompleto');
	              	return false;
	          	} else {
	              	// Eliminamos la clase Error del checkbox
	              	elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
	              	return true;
	          	}
        	}
       	}

	};

	// Esta funcion comprobara otras funciones, comprobara la funcion de que los input, radiobuttons y los checkbox 
	// sean correctos.
	var enviar = function(eventos){

		if(!validarInputs()){
			console.log("Falta validar los campos tipo Input Text"); // Muestra el mensaje en consola (F12)
			evento.preventDefault(); // Previene el comportameinto del boton para que los datos no se envien
		} else if(!validarRadios()){
			console.log("Falta validar los campos tipo Radio Button"); 
			evento.preventDefault();
		} else if(!validarCheckbox()){
			console.log("Falta validar los campos tipo Checkbox"); 
			evento.preventDefault();
		} else{
			console.log("Enviar datos correctamente"); 
		}

	};

	// Funcion Focus
	var focusInput = function(){
		this.parentElement.children[1].className = "label active";
		this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
	};

	//Funcion blur
	var blurInput = function(){
		if(this.value <= 0){
			this.parentElement.children[1].className = "label";
			this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
		}
	};

	/* Eventos */
	formulario.addEventListener("submit", enviar);

	for (var i = 0; i < elementos.length; i++) {
        if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
            elementos[i].addEventListener("focus", focusInput);
            elementos[i].addEventListener("blur", blurInput);
        }
    }

}())