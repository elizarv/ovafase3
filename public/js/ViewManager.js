/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\

var rutaBack = 'back/controller/Router.php';

/** Valida los campos requeridos en un formulario
 * Returns flag Devuelve true si el form cuenta con los datos mÃ­nimos requeridos
 */
function validarForm(idForm){
	var form=$('#'+idForm)[0];
	for (var i = 0; i < form.length; i++) {
		var input = form[i];
		if(input.required && input.value==""){
			return false;
		}
	}
	return true;
}

////////// USUARIO \\\\\\\\\\
function preUsuarioInsert(idForm){
     //Haga aquÃ­ las validaciones necesarias antes de enviar el formulario.
	if(validarForm(idForm)){
 	var formData=$('#'+idForm).serialize();
 	enviar(formData, rutaBack ,postUsuarioInsert);
 	}else{
 		alert("Debe llenar los campos requeridos");
 	}
}

 function postUsuarioInsert(result,state){
    console.log("postusuario");
    alert(result);
     //Maneje aquÃ­ la respuesta del servidor.
     //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
 		if(state=="success"){
                     if(result=="true"){            
 			alert("Usuario registrado con Éxito");
                     }else{
                        alert("Hubo un errror en la inserciÃ³n ( u.u)\n"+result);
                     } 		}else{
 			alert("Hubo un errror interno ( u.u)\n"+result);
 		}
}

function preUsuarioList(container){
     //Solicite informaciÃ³n del servidor
     cargaContenido(container,'UsuarioList.html'); 
     var formData = {};
     formData["ruta"]="UsuarioList";
 	enviar(formData, rutaBack ,postUsuarioList); 
}

 function postUsuarioList(result,state){
     //Maneje aquÃ­ la respuesta del servidor.
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){

            for(var i=1; i < Object.keys(json).length; i++) {   
                var Usuario = json[i];
                //----------------- Para una tabla -----------------------
                document.getElementById("UsuarioList").appendChild(createTR(Usuario));
                //-------- Para otras opciones ver htmlBuilder.js ---------
            }
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}

//That`s all folks!