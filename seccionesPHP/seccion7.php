<HTML lang="es">
	<article>
		<header>
			<div id=""><h1>Usuario</h1></div>
		</header>
	</article>

	<article>
		<span id="res_login2">
			<?php
				session_start();

				include ("../archivosPHP/clases.php");
				$usuarios = new consultasBD();
				
				if ($_SESSION['login'] === 1){
					$u = $_SESSION['usuario'];
					$p2 = $_SESSION['contraseña'];

					$resultado5 = $usuarios->buscar("clientes","Usuario = '$u' && Contraseña = '$p2'");

					//Seccion de usuario
					echo "<h3>Seccion de prefil de usuario</h3>";

					//Parte de Usuarios
					echo "<h4>Datos personales:</h4>";
					echo "<table border='1' cellpadding='4' cellspacing='2'>
							<tr>
								<td style='background-color:#16C5DB'><b>Nombre</b></td>
								<td style='background-color:#16C5DB'><b>Apellidos</b></td>
								<td style='background-color:#16C5DB'><b>Email</b></td>
								<td style='background-color:#16C5DB'><b>Telefono</b></td>
							</tr>";
					foreach ($resultado5 as $value5)
					echo "<tr>
								<td>".$value5['Nombre']."</td>
								<td>".$value5['Apellidos']."</td>
								<td>".$value5['Email']."</td>
								<td>".$value5['Telefono']."</td>
						</tr>";
					echo "</table></br>";
					echo "Si desea modificar sus datos rellene los siguientes campos:</br></br>";
					echo "Introduce tu nombre de usuario actual:<br/><br/>
						USUARIO: <input type=\"email\" name=\"usuario\" id=\"UsuarioD\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Dirección@correo.com (requerido)\" required /><br/><br/>
						Introduce los nuevos datos (recuerde que su email es su nombre de usuario):<br/><br/>
						NOMBRE: <input type=\"text\" name=\"nombre\" id=\"NombreD\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/>
						APELLIDOS: <input type=\"text\" name=\"apellidos\" id=\"ApellidosD\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Apellidos  (requerido)\" required /><br/>
						E-MAIL (USER): <input type=\"email\" name=\"email\" id=\"EmailD\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Dirección@correo.com (requerido)\" required /><br/>
						TELÉFONO MÓVIL: <input type=\"tel\" name=\"telefono\" id=\"TelefonoD\" class=\"caja_gris\" maxlength=\"50\" size=\"30\" value=\"\" placeholder=\"Teléfono  (requerido)\" required /><br/>
						<input type=\"button\" href=\"javascript:;\" onclick=\"modificardatos($('#UsuarioD').val(),$('#NombreD').val(),$('#ApellidosD').val(),$('#EmailD').val(),$('#TelefonoD').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" />
						<span id=\"modificarD\"></span>
						";


					//Parte de citas
					echo "<h4>Citas reservadas:</h4>";
					echo "Introduce el nombre y apellidos guardados en la reserva</br></br>";
					echo "NOMBRE: <input type=\"text\" name=\"nombre\" id=\"NombreCitas\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/>
						APELLIDOS: <input type=\"text\" name=\"apellidos\" id=\"ApellidosCitas\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Apellidos  (requerido)\" required /><br/>
						<input type=\"button\" href=\"javascript:;\" onclick=\"vercitas($('#NombreCitas').val(),$('#ApellidosCitas').val());return false;\" name=\"Boton de enviar\" value=\"Mostrar citas\" class=\"boton_form morado\" /></br>
						<span id=\"verCitas\"></span></br>
						";
					echo "Si desea modificar su cita rellene los sigientes campos (recuerde que la cita no puede ser modificada 72 horas antes de la misma).</br>";
					echo "Introduce tu nombre y la fecha de tu cita:<br/><br/>
						NOMBRE: <input type=\"text\" name=\"nombre2\" id=\"nombreC2\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/>
						FECHA CITA: <input type=\"date\" name=\"fecha3\" id=\"fechaC3\" class=\"caja_gris\" value=\"\" placeholder=\"dd/mm/aaaa (requerido)\" required /><br/></br>
						Introduce los nuevos datos:<br/><br/>
						HORA: <input type=\"time\" name=\"hora2\" id=\"horaC2\" class=\"caja_gris\" value=\"\" placeholder=\"hh:mm:ss  (requerido)\" required /><br/>
						FECHA: <input type=\"date\" name=\"fecha2\" id=\"fechaC2\" class=\"caja_gris\" value=\"\" placeholder=\"dd/mm/aaaa (requerido)\" required /><br/>
						<input type=\"button\" href=\"javascript:;\" onclick=\"modificarcita($('#nombreC2').val(),$('#fechaC3').val(),$('#horaC2').val(),$('#fechaC2').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" /><br/>
						<span id=\"modificarC\"></span>
						";
				};
			?>
		</span></br></br>		
	</article>
</HTML>