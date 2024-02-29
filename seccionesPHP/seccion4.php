<HTML lang="es">
<article>
	<header>
		<div id=""><h1>¿Dónde puedes encontrarnos?</h1></div>
	</header>
		<span id="imagen_izq"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2895.9395559695554!2d-3.8097127845467345!3d43.461859079128374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd494bcbaf1751e7%3A0x5d078f8d9d9ca9ae!2sCalle%20Puente%2C%2039002%20Santander%2C%20Cantabria!5e0!3m2!1ses!2ses!4v1607861964891!5m2!1ses!2ses" width="300" height="225" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></span><br/><br/>
		<span><p>Nos encontramos en Calle Puente, nº12, en Santander, Cantabria.<br/><br/> Permanecemos abiertos en el horario de 08:30 a 14:00 por la mañana y de 15:00 a 20:00 por la tarde de lunes a viernes.</p>
		<p>Cuéntanos tus necesidades y encontraremos las soluciones que más se les adecuen para dar forma a tus proyectos.<br/>
		Tratamos cada nuevo proyecto con la misma ilusión que vosotros, convirtiéndolo también en nuestro proyecto.</p></span><br/><br/><br/><br/><br/>
</article>

<article>
	<header>
		<div id=""><h1>¿Desea pedir una cita?</h1></div>
	</header>
	<span>
		<p>Si desea venir a vernos a nuestras oficinas le ofrecemos la oportunidad de pedir una cita en nuestras oficinas.</p>

		<?php
		session_start();
		if ($_SESSION['login'] === 1){
			echo "<h3>Pedir una cita:</h3></br>
            Introduce los datos requeridos:<br/><br/>
            NOMBRE: <input type=\"text\" name=\"nombre\" id=\"nombreC\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/>
            APELLIDOS: <input type=\"text\" name=\"apellidos\" id=\"apellidosC\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Apellidos  (requerido)\" required /><br/>
            HORA: <input type=\"time\" name=\"hora\" id='horaC' class=\"caja_gris\" value=\"\" placeholder=\"hh:mm:ss  (requerido)\" required /><br/>
            FECHA: <input type=\"date\" name=\"fecha\" id=\"fechaC\" class=\"caja_gris\" value=\"\" placeholder=\"dd/mm/aaaa (requerido)\" required /><br/>
            <input type=\"button\" href=\"javascript:;\" onclick=\"agregarcita($('#nombreC').val(),$('#apellidosC').val(),$('#horaC').val(),$('#fechaC').val());return false;\" name=\"Boton de enviar\" value=\"Añadir\" class=\"boton_form morado\" /><br/>
            <span id=\"agregarC\"></span>
            </br></br>";
		} else if ($_SESSION['login'] === 0){
			echo "<p>Para pedir una cita debes acceder con tu email y contraseña de usuario en la seccion de Login. Si aun no estas registrado puedes hacerlo desde la sección de Contacto o de Login.</p>";
		} else if ($_SESSION['login'] === 2){
			echo "<p>Como administrador puedes acceder a todos los datos sobre las citas desde la sección de administración</p>";
		} else {
			echo "<p>Para pedir una cita debes acceder con tu email y contraseña de usuario en la seccion de Login. Si aun no estas registrado puedes hacerlo desde la sección de Contacto o de Login.</p>";
		};
		?>
	</span><br/><br/>
	<span><img id="imagen_long" src="img/logo_contacto.jpg" alt="estart arquitectura"></span>
</article>
</HTML>