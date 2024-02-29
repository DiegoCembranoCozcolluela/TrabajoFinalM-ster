<HTML lang="es">
	<article>
		<header>
			<div id=""><h1>Login</h1></div>
		</header>
			<span><p>En esta seccion puedes logearte con tu usuario y contraseña. Una vez logeado podras acceder a tu seccion de perfil de usuario.</p>
	</article>

	<article>
        <span>
			USUARIO: <input type="text" name="email200" class="caja_gris" maxlength="50" size="40" id="usuario200" value="" placeholder="Dirección@correo.com (requerido)" /><br/>
			CONTRASEÑA: <input type="password" name="contrasena200" class="caja_gris" maxlength="50" size="40" id="contrasena200" value="" placeholder="Contraseña (requerido)" /><br/>
			<input type="button" href="javascript:;" onclick="login($('#usuario200').val(),$('#contrasena200').val());return false;" name="Boton de enviar" value="Acceder" class="boton_form morado" />
			<?php
				session_start();
				if ($_SESSION['login'] === 1){
					$cerrarsesion = "inline-block";
				} else if ($_SESSION['login'] === 2){
					$cerrarsesion = "inline-block";
				} else if ($_SESSION['login'] === 0){
					$cerrarsesion = "none";
				} else {
					$cerrarsesion = "none";
				};
			?>
			<style>
				#cerrarsesion{
					display:<?php echo $cerrarsesion; ?>;
				}
			</style>
			<span id="cerrarsesion">
			<button class="boton_form morado"><a href="archivosPHP/usuarios/logout.php">Cerrar Sesión</a></button>
			</span><br/>
			¿Todavía no estas registrado? <a href="#" onclick="nuevocliente();">Empieza aqui.</a><br/><br/>
			<span id="nuevocliente">
				NOMBRE: <input type="text" name="nombre" class="caja_gris" maxlength="50" size="40" id="nombre4" value="" placeholder="Nombre  (requerido)" required /><br/><br/>
				APELLIDOS: <input type="text" name="apellidos" class="caja_gris" maxlength="50" size="40" id="apellidos4" value="" placeholder="Apellidos  (requerido)" required /><br/><br/>
				TELÉFONO MÓVIL: <input type="tel" name="telefono" class="caja_gris" maxlength="50" size="30" id="telefono4" value="" placeholder="Teléfono  (requerido)" required /><br/><br/>
				E-MAIL (USER): <input type="email" name="email" class="caja_gris" maxlength="50" size="40" id="email4" value="" placeholder="Dirección@correo.com (requerido)" required /><br/><br/>
				CONTRASEÑA: <input type="password" name="contraseña" class="caja_gris" maxlength="50" size="40" id="contraseña4" value="" placeholder="Contraseña (requerido)" required /><br/><br/>
				<input type="button" href="javascript:;" onclick="login3($('#email4').val(),$('#contraseña4').val(),$('#nombre4').val(),$('#apellidos4').val(),$('#telefono4').val());return false;" name="Boton de enviar" value="Registrarse" class="boton_form morado" /><br/><br/>
				<span id="res_nuevocliente"></span>
			</span>
		</span></br></br>

        <span id="res_login">
		</span></br></br>	
	</article>
</HTML>