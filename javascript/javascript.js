
			   //SECCION DE INDEX//
			   
//script para cargar los contenidos de las diferentes secciones//
function cargarSeccion(numero){
	var objHttp = null;
	if (window.XMLHttpRequest){
		objHttp = new XMLHttpRequest();
	}else if(window.ActiveXObject){
		objHttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	objHttp.open("GET", "seccionesPHP/seccion" + numero + ".php", true);
	objHttp.onreadystatechange = function(){
		if(objHttp.readyState == 4){
			document.getElementById("div_seccion_principal").innerHTML = objHttp.responseText;
		}
	}
	objHttp.send(null);
}

//script para cargar las noticias en la seccion principal//
function cargarNoticia(Titulo){
	document.getElementById('mostrar_noticias').style.display="block";
	var parametros = {
		"Titulo" : Titulo
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/noticias/mostrar.php',
		type: 'post',
		success: function(response){
			$("#mostrar_noticias").html(response);
		}
	});
}

//cambiar color de los botones con las secciones//
function cambiarColor1(){
	document.getElementById('boton1').className = "botonin active";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor2(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton active";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor3(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton active";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor4(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton active";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor5(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton active";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor6(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton active";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor7(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2 active";
	document.getElementById('boton8').className = "boton3";
}

function cambiarColor8(){
	document.getElementById('boton1').className = "botonin";
	document.getElementById('boton2').className = "boton";
	document.getElementById('boton3').className = "boton";
	document.getElementById('boton4').className = "boton";
	document.getElementById('boton5').className = "boton";
	document.getElementById('boton6').className = "boton";
	document.getElementById('boton7').className = "boton2";
	document.getElementById('boton8').className = "boton3 active";
}

                      //......//




			   //SECCION DE PORTFOLIO//
			   
//mostrar los proyectos y botones de la seccion portfolio//
function mostrar_proyectos(){
	document.getElementById('proyectos').style.display="inline-block";
}

//script para cargar el slide de fotos//
function cargaSlide(){
	$(function() {
		$('#slides').slidesjs({
			width: 610,
			height: 310,
			play: {
				active: true,
				auto: true,
				interval: 4000,
				swap: true
			}
		});
	});
}

//script que controla la tabla de detalles del catalogo//
function cargaDetalles1(){
	document.getElementById('tabla1').style.display="block";
	document.getElementById('tabla2').style.display="none";
	document.getElementById('tabla3').style.display="none";
	document.getElementById('tabla4').style.display="none";
}

function cargaDetalles2(){
	document.getElementById('tabla1').style.display="none";
	document.getElementById('tabla2').style.display="block";
	document.getElementById('tabla3').style.display="none";
	document.getElementById('tabla4').style.display="none";
}

function cargaDetalles3(){
	document.getElementById('tabla1').style.display="none";
	document.getElementById('tabla2').style.display="none";
	document.getElementById('tabla3').style.display="block";
	document.getElementById('tabla4').style.display="none";
}

function cargaDetalles4(){
	document.getElementById('tabla1').style.display="none";
	document.getElementById('tabla2').style.display="none";
	document.getElementById('tabla3').style.display="none";
	document.getElementById('tabla4').style.display="block";
}

                      //......//


			   //SECCION DE PRESUPUESTO//
			   
//script para calcular el presupuesto//
function calcularPresupuesto(){
	var presupuesto;
	var tipo = document.getElementById('select1').value;
	var descuento5 = (tipo*5)/100;
	var descuento10 = (tipo*10)/100;
	var descuento15 = (tipo*15)/100;
	var descuento20 = (tipo*20)/100;
	var descuento_plazo;
	var secciones_extra;

	if(document.getElementById('Plazo').value == 1){
		descuento_plazo = tipo - descuento5;
	}else if(document.getElementById('Plazo').value == 2){
		descuento_plazo = tipo - descuento10;
	}else if(document.getElementById('Plazo').value == 3){
		descuento_plazo = tipo - descuento15;
	}else if(document.getElementById('Plazo').value >= 4){
		descuento_plazo = tipo - descuento20;
	}else{
		alert('Plazo en meses no permitido');
	}

	var checkboxes = document.getElementById('Formulario_presupuesto').check;
	var cont = 0;

	for (var x=0; x<checkboxes.length; x++){
		if(checkboxes[x].checked){
			cont = cont + 1;
		}
	}

	secciones_extra = cont * 400;
	presupuesto = descuento_plazo + secciones_extra;

	document.getElementById('Resultado').value = presupuesto + "€";
}

//script para comprobar el formulario de presupuesto//
function validar_formulario_presupuesto(f){
	var ok;
	var msg;
	msg ='';
	ok='si';
	//comprobamos el campo nombre
	if (document.getElementById('Nombre').value==''){
		ok='no';
		msg = msg + 'El campo "Nombre" no puede estar vacío.\n';
	}else if(isNaN (document.getElementById('Nombre').value)){
		ok='si';	
	}else{
		ok='no';
		msg = msg + 'El campo "Nombre" no puede contener números.\n';
	}

	//comprobamos el campo apellidos
	if (document.getElementById('Apellidos').value==''){
		ok='no';
		msg = msg + 'El campo "Apellidos" no puede estar vacío.\n';
	}else if(isNaN (document.getElementById('Apellidos').value)){
		ok='si';					
	}else{
		ok='no';
		msg = msg + 'El campo "Apellidos" no puede contener números.\n';
	}

	//comprobamos el campo telefono
	re = /^(6|7|8|9)[0-9]{8}$/;
	if (!re.exec(document.getElementById('Telefono').value)){
		ok='no';
		msg = msg + 'El campo "Telefono" es erroneo.\n';
	}else{
		valor = document.getElementById('Telefono').value
		if( !(/^\d{9}$/.test(valor)) ) {
			ok='no';
			msg = msg + 'El campo "Telefono" debe tener 9 cifras.\n';
		}
	}

	//comprobamos el campo e-mail
	object = document.getElementById('Email');
	valueForm = object.value;
	var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if (valueForm.search(patron)==0){
		ok='si';
	}else{
		ok='no';
		msg = msg + 'El campo "e-mail" introducido no es valido.\n';
	}

	//comprobamos si esta ok o hay error
	if (ok == 'si'){
		document.formulario.submit()
		alert('Formulario enviado con exito.');
	}else{
		alert(msg);
		return false;
	}
}

                      //......//



			   //SECCION DE DONDE ESTAMOS//

// funciones de citas//
function agregarcita(nombreC, apellidosC, horaC, fechaC){
	var parametros = {
		"nombreC" : nombreC,
		"apellidosC" : apellidosC,
		"horaC" : horaC,
		"fechaC" : fechaC
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/citas/agregar.php',
		type: 'post',
		success: function(response){
			$("#agregarC").html(response);
		}
	});
}

                      //......//



			   //SECCION DE CONTACTO//

//script para comprobar el formulario de contacto//
function validar(f){
	var ok;
	var msg;
	msg ='';
	ok='si';
	//comprobamos el campo nombre
	if (document.getElementById('NOMBRE').value==''){
		ok='no';
		msg = msg + 'El campo "Nombre" no puede estar vacío.\n';
	}else if(isNaN (document.getElementById('NOMBRE').value)){
		ok='si';	
	}else{
		ok='no';
		msg = msg + 'El campo "Nombre" no puede contener números.\n';
	}

	//comprobamos el campo apellidos
	if (document.getElementById('APELLIDOS').value==''){
		ok='no';
		msg = msg + 'El campo "Apellidos" no puede estar vacío.\n';
	}else if(isNaN (document.getElementById('APELLIDOS').value)){
		ok='si';					
	}else{
		ok='no';
		msg = msg + 'El campo "Apellidos" no puede contener números.\n';
	}

	//comprobamos el campo telefono
	re = /^(6|7|8|9)[0-9]{8}$/;
	if (!re.exec(document.getElementById('TELEFONO').value)){
		ok='no';
		msg = msg + 'El campo "Telefono" es erroneo.\n';
	}else{
		valor = document.getElementById('TELEFONO').value
		if( !(/^\d{9}$/.test(valor)) ) {
			ok='no';
			msg = msg + 'El campo "Telefono" debe tener 9 cifras.\n';
		}
	}

	//comprobamos el campo e-mail
	object = document.getElementById('EMAIL');
	valueForm = object.value;
	var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if (valueForm.search(patron)==0){
		ok='si';
	}else{
		ok='no';
		msg = msg + 'El campo "e-mail" introducido no es valido.\n';
	}

	//comprobamos si esta ok o hay error
	if (ok == 'si'){
		document.formulario.submit()
		alert('Formulario enviado con exito.');
	}else{
		alert(msg);
		return false;
	}
}

					  //......//
					  

				//SECCION DE LOGIN/USUARIO/ADMINISTRACION//

// funcion de login de usuario//
function login(usuario200, contrasena200){
	var parametros = {
		"usuario200" : usuario200,
		"contrasena200" : contrasena200,
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/login.php',
		type: 'post',
		success: function(response){
			//$("#res_login").html(response);
			
			window.location.replace("index.php");
			//window.location.assign("index.php");
			//window.location.reload("index.php");
		}
	});
}

function nuevocliente(){
	document.getElementById('nuevocliente').style.display="inline-block";
}

function login3(email4, contraseña4, nombre4, apellidos4, telefono4){
	var parametros = {
		"email4" : email4,
		"contraseña4" : contraseña4,
		"nombre4" : nombre4,
		"apellidos4" : apellidos4,
		"telefono4" : telefono4,
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/nuevocliente.php',
		type: 'post',
		success: function(response){
			$("#res_nuevocliente").html(response);
		}
	});
}

// mostrar los formularios de agregar, modificar y borrar noticias//
function agregar_noticia(){
	document.getElementById('agregar_noticia').style.display="block";
	document.getElementById('modificar_noticia').style.display="none";
	document.getElementById('borrar_noticia').style.display="none";
}

function modificar_noticia(){
	document.getElementById('modificar_noticia').style.display="block";
	document.getElementById('agregar_noticia').style.display="none";
	document.getElementById('borrar_noticia').style.display="none";
}

function borrar_noticia(){
	document.getElementById('modificar_noticia').style.display="none";
	document.getElementById('agregar_noticia').style.display="none";
	document.getElementById('borrar_noticia').style.display="block";
}

// funciones para realizar el agregar, modificar y borrar noticias//
function agregarnoticia(TituloN, ResumenN, ContenidoN){
	var parametros = {
		"TituloN" : TituloN,
		"ResumenN" : ResumenN,
		"ContenidoN" : ContenidoN
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/noticias/agregar.php',
		type: 'post',
		success: function(response){
			$("#agregarN").html(response);
		}
	});
}

function modificarnoticia(TituloN2, ResumenN2, ContenidoN2){
	var parametros = {
		"TituloN2" : TituloN2,
		"ResumenN2" : ResumenN2,
		"ContenidoN2" : ContenidoN2
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/noticias/modificar.php',
		type: 'post',
		success: function(response){
			$("#modificarN").html(response);
		}
	});
}

function borrarnoticia(TituloN3){
	var parametros = {
		"TituloN3" : TituloN3
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/noticias/borrar.php',
		type: 'post',
		success: function(response){
			$("#borrarN").html(response);
		}
	});
}


// mostrar los formularios de agregar, modificar y borrar proyectos//
function agregar_proyecto(){
	document.getElementById('agregar_proyectos').style.display="block";
	document.getElementById('modificar_proyectos').style.display="none";
	document.getElementById('borrar_proyectos').style.display="none";
}

function modificar_proyecto(){
	document.getElementById('modificar_proyectos').style.display="block";
	document.getElementById('agregar_proyectos').style.display="none";
	document.getElementById('borrar_proyectos').style.display="none";
}

function borrar_proyecto(){
	document.getElementById('modificar_proyectos').style.display="none";
	document.getElementById('agregar_proyectos').style.display="none";
	document.getElementById('borrar_proyectos').style.display="block";
}

// funciones para realizar el agregar, modificar y borrar proyectos//
function agregarproyecto(TipoP, LugarP, DescripcionP, PrecioP){
	var parametros = {
		"TipoP" : TipoP,
		"LugarP" : LugarP,
		"DescripcionP" : DescripcionP,
		"PrecioP" : PrecioP
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/proyectos/agregar.php',
		type: 'post',
		success: function(response){
			$("#agregarP").html(response);
		}
	});
}

function modificarproyecto(TipoP2, LugarP2, DescripcionP2, PrecioP2){
	var parametros = {
		"TipoP2" : TipoP2,
		"LugarP2" : LugarP2,
		"DescripcionP2" : DescripcionP2,
		"PrecioP2" : PrecioP2
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/proyectos/modificar.php',
		type: 'post',
		success: function(response){
			$("#modificarP").html(response);
		}
	});
}

function borrarproyecto(TipoP3, LugarP3){
	var parametros = {
		"TipoP3" : TipoP3,
		"LugarP3" : LugarP3
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/proyectos/borrar.php',
		type: 'post',
		success: function(response){
			$("#borrarP").html(response);
		}
	});
}

// funcion de modificar los datos de un usuario desde admin//
function modificarusuarioadmin(Usuario2, Email2, Contraseña2, Nombre2, Apellidos2, Telefono2){
	var parametros = {
		"Usuario2" : Usuario2,
		"Email2" : Email2,
		"Contraseña2" : Contraseña2,
		"Nombre2" : Nombre2,
		"Apellidos2" : Apellidos2,
		"Telefono2" : Telefono2
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/modificaradmin.php',
		type: 'post',
		success: function(response){
			$("#rs_modificarusuarioadmin").html(response);
		}
	});
}

// funcion para modifica cita desde admin//
function modificarcitaadmin(Cliente, horaC2, fechaC2){
	var parametros = {
		"Cliente" : Cliente,
		"horaC2" : horaC2,
		"fechaC2" : fechaC2
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/citas/modificaradmin.php',
		type: 'post',
		success: function(response){
			$("#modificarC2").html(response);
		}
	});
}

// funcion para modifica datos personales desde seccion usuario//
function modificardatos(UsuarioD, NombreD, ApellidosD, EmailD, TelefonoD){
	var parametros = {
		"UsuarioD" : UsuarioD,
		"NombreD" : NombreD,
		"ApellidosD" : ApellidosD,
		"EmailD" : EmailD,
		"TelefonoD" : TelefonoD,
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/modificar.php',
		type: 'post',
		success: function(response){
			$("#modificarD").html(response);
		}
	});
}

// funcion para ver las citas en la seccion usuario//
function vercitas(NombreCitas, ApellidosCitas){
	var parametros = {
		"NombreCitas" : NombreCitas,
		"ApellidosCitas" : ApellidosCitas
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/citas/mostrar.php',
		type: 'post',
		success: function(response){
			$("#verCitas").html(response);
		}
	});
}

// funcion para modificar cita desde usuarios//
function modificarcita(nombreC2, fechaC3, horaC2, fechaC2){
	var parametros = {
		"nombreC2" : nombreC2,
		"fechaC3" : fechaC3,
		"horaC2" : horaC2,
		"fechaC2" : fechaC2
	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/citas/modificar.php',
		type: 'post',
		success: function(response){
			$("#modificarC").html(response);
		}
	});
}

//funcion para agregar un administrador//
function agregaradmin(usuario5, contraseña5, nombre5, apellidos5){
	var parametros = {
		"usuario5" : usuario5,
		"contraseña5" : contraseña5,
		"nombre5" : nombre5,
		"apellidos5" : apellidos5,

	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/nuevoadmin.php',
		type: 'post',
		success: function(response){
			$("#agregarA").html(response);
		}
	});
}

//funcion para agregar y modificar un administrador//
function agregarcliente(email7, contraseña7, nombre7, apellidos7, telefono7){
	var parametros = {
		"uemail7" : email7,
		"contraseña7" : contraseña7,
		"nombre7" : nombre7,
		"apellidos7" : apellidos7,
		"telefono7" : telefono7,

	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/nuevoclienteadmin.php',
		type: 'post',
		success: function(response){
			$("#agregarCl").html(response);
		}
	});
}

function modificaradminadmin(usuario10, admin2, contraseña10, nombre10, apellidos10){
	var parametros = {
		"usuario10" : usuario10,
		"nadmin2" : admin2,
		"contraseña10" : contraseña10,
		"nombre10" : nombre10,
		"apellidos10" : apellidos10,

	};
	$.ajax({
		data: parametros,
		url: 'archivosPHP/usuarios/modificaradminadmin.php',
		type: 'post',
		success: function(response){
			$("#rs_modificaradminadmin").html(response);
		}
	});
}


                      //......//