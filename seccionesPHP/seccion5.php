<HTML lang="es">
	<article>
		<header>
			<div id=""><h1>Contacta con nosotros</h1></div>
		</header>
			<span><p>Puedes encontrarnos en Calle Puente, nº12, en Santander, Cantabria.<br/><br/> Tamién puedes llamar al telefono 623 975 230 en el que te etenderemos encantados en el horario de 08:30 a 14:00 por la mañana y de 15:00 a 20:00 por la tarde de lunes a viernes.</p>
	</article>

	<article>
		<span><p>Si desea que nos pongamos en contacto con usted puede rellenar este pequeño formulario con sus datos. Sus datos (User, contraseña, nombre, apellidos, email y telefono) serán almacenados en nuestra base de datos.</p></span><br/><br/>

		<span>
			<form name="formulario" action="archivosPHP/usuarios/agregar.php" method="POST" id="Formulario" onsubmit="return validar(this)" class="formulario_contacto">
				<h2>RELLENA LOS SIGUIENTES CAMPOS: </h2><br/>
				NOMBRE: <input type="text" name="nombre" class="caja_gris" maxlength="50" size="40" id="NOMBRE" value="" placeholder="Nombre  (requerido)" required /><br/><br/>
				APELLIDOS: <input type="text" name="apellidos" class="caja_gris" maxlength="50" size="40" id="APELLIDOS" value="" placeholder="Apellidos  (requerido)" required /><br/><br/>
				TELÉFONO MÓVIL: <input type="tel" name="telefono" class="caja_gris" maxlength="50" size="30" id="TELEFONO" value="" placeholder="Teléfono  (requerido)" required /><br/><br/>
				E-MAIL (USER): <input type="email" name="email" class="caja_gris" maxlength="50" size="40" id="EMAIL" value="" placeholder="Dirección@correo.com (requerido)" required /><br/><br/>
				CONTRASEÑA: <input type="password" name="contraseña" class="caja_gris" maxlength="50" size="40" id="CONTRASEÑA" value="" placeholder="Contraseña (requerido)" required /><br/><br/>
				FECHA: <input type="date" name="fecha" class="caja_gris" id="FECHA" value="" placeholder="dd/mm/aaaa (requerido)" required /><br/><br/>
				MOTIVO DEL CONTACTO: <br/><br/>
				<textarea cols="50" rows="10" overflow:auto name="texto" class="caja_gris" id="TEXTO" value="" placeholder="Mensaje  (requerido)" required></textarea><br/><br/>
				<span class="caja_gris"><input type="checkbox" name="privacidad" id="privacidad" required /> Acepto la política de privacidad</span><br/><br/>
				<input type="submit" name="Boton de enviar" value="ENVIAR FORMULARIO" class="boton_form morado" />
				<input type="reset" name="Boton de borrado" value="BORRAR FORMULARIO" class="boton_form morado" />
			</form>
		</span>

		<span><img id="imagen_long" src="img/logo_contacto.jpg" alt="estart arquitectura"></span>
	</article>
</HTML>