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
function function_datatable(){
    $('#myTable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
    } );
    var table = $('#myTable').DataTable(
                {
                "language": {
                    "lengthMenu": "Mostrando _MENU_ resultados por pagina",
                    "zeroRecords": "No encontrado",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No disponible",
                    "infoFiltered": "(filtrado de _MAX_ registros)",
                    "search": "Buscar: ",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                }
            });
}



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
     //Maneje aquÃ­ la respuesta del servidor.
     //Consideramos buena prÃ¡ctica no manejar cÃ³digo HTML antes de este punto.
 		if(state=="success"){
                     if(result=="1"){            
                        swal("Registro exitoso", {
                            icon: "success",
                        }).then((value) => {
                            window.location='login.html';
                        });  
                     }else{
                        swal("Ya se encuentra registrado", {
                            icon: "error",
                        }).then((value) => {
                            window.location='login.html';
                        });
                     } 		
            }else{
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
     if(state=="success"){
         var json=JSON.parse(result);
         if(json[0].msg=="exito"){
            for(var i=1; i < Object.keys(json).length; i++) {   
                var Usuario = json[i];
                str="<tr><td>"+Usuario.codigo+"</td><td>"+Usuario.nombre+"</td>";
                str+='<td>'+Usuario.apellidos+'</td>';
                str+='<td>'+Usuario.intentos+'</td>';
                str+='<td>'+Usuario.nota+'</td></tr>';
                document.getElementById("UsuarioList").innerHTML+=str;
            }
            function_datatable();
         }else{
            alert(json[0].msg);
         }
     }else{
         alert("Hubo un errror interno ( u.u)\n"+result);
     }
}





function login(idForm){
  if(validarForm(idForm)){
  var formData=$('#'+idForm).serialize();
  enviar(formData, rutaBack ,postLogin);
  }else{
    alert("Debe llenar los campos requeridos");
  }
}



function postLogin(result, state){
    if(result == '1'){
        location.replace("index.php");
    }else{
      window.location="login.html"; 
    } 
}


function logout(){
    var formData = {};
    formData["ruta"] = 'Logout';
    enviar(formData, rutaBack, postLogout);
}


function postLogout(result, state){
    window.location = 'login.html';
}

function save(formData){
    enviar(formData, '../../../back/controller/router.php', postSave);
}


function postSave(result, state){
  swal("El test ha terminado", {
      icon: "warning",
  }).then((value) => {
      window.close();
  });  
}