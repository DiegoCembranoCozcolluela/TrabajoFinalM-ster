<!DOCTYPE html>
<HTML lang="es">
	<head>
			<!-- Declaración de las meta-etiquetas -->
		<meta charset="UTF-8" />
		<meta name="description" content="Trabajo final para el modulo PHP de masterD" />
		<meta name="robots" content="NOFOLLOW" />
		<meta name="Author" content="Diego" />
		<meta name="keywords" content="MasterD, PHP, PrácticaFinal" />
		<meta name="lang" content="es" />
		<meta name="revisit-after" content="10 days" />
		<meta name="category" content="Prácticas" />
			<!-- Declaración de fichero de estilos -->
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<title>Practica Final PHP - Sitio Web</title>

		<script type="text/javascript" src="javascript/javascript.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.slides.min.js"></script>
		<script type="text/JavaScript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQhRtF3_-gEnHhCLB8pqpJSYsRs43zwEU"></script>

		<?php
			session_start();
			if ($_SESSION['login'] === 1){
				$boton2 = "inline-block";
				$boton3 = "none";
			} else if ($_SESSION['login'] === 2){
				$boton3 = "inline-block";
				$boton2 = "none";
			} else if ($_SESSION['login'] === 0){
				$boton2 = "none";
				$boton3 = "none";
			} else {
				$boton2 = "none";
				$boton3 = "none";
			};
		?>

		<style>
			#boton7{
				display:<?php echo $boton2; ?>;
			}
			#boton8{
				display:<?php echo $boton3; ?>;
			}
		</style>


	</head>

	<body onload="cargarSeccion('1');cambiarColor1();">
		<!-- Div que contiene la página -->
		<div class="div_contenedor">
			<nav class="navegador" style="position:fixed;top:0;z-index:9999;width:1500px;">
				<!-- Div que contiene el menu -->
				<div class="div_menu">
					<span id="boton1" class="botonin">
						<a href="#" onclick="cargarSeccion('1');cambiarColor1();" class="enlaces">Índice</a>
					</span>
					<span id="boton2" class="boton">
						<a href="#" onclick="cargarSeccion('2');cambiarColor2();" class="enlaces">Portfolio</a>
					</span>
					<span id="boton3" class="boton">
						<a href="#" onclick="cargarSeccion('3');cambiarColor3();" class="enlaces">Presupuesto</a>
					</span>
					<span id="boton4" class="boton">
						<a href="#" onclick="cargarSeccion('4');cambiarColor4();" class="enlaces">Donde estamos</a>
					</span>
					<span id="boton5" class="boton">
						<a href="#" onclick="cargarSeccion('5');cambiarColor5();" class="enlaces">Contacto</a>
					</span>
					<span id="boton6" class="boton">
						<a href="#" onclick="cargarSeccion('6');cambiarColor6();" class="enlaces">Login</a>
					</span>
					<span id="boton7" class="boton2">
						<a href="#" onclick="cargarSeccion('7');cambiarColor7();" class="enlaces">Usuario</a>
					</span>
					<span id="boton8" class="boton3">
						<a href="#" onclick="cargarSeccion('8');cambiarColor8();" class="enlaces">Administracion</a>
					</span>
				</div>
			</nav>
			<header style="margin-top:60px;">
				<!-- Div que contiene la cabecera -->
				<div id="div_header">
					<img src="img/Cabecera.png" id="img_header" alt="imagen de cabecera" title="imagen de cabecera">
				</div>
			</header>

			<section>

				<div id="div_noticias">
					<h1>Noticias Actuales</h1>
					<h3>Noticias del último mes sobre Estart</h3>
					<div id="noticias1">
						<!-- Div que contiene la tabla de noticias -->
						<?php
							include ("archivosPHP/clases.php");
							$noticias = new consultasBD();

							if ($resultado = $noticias->buscar3("noticias")){
								echo "<table border=\"1\" cellpadding=\"4\" cellspacing=\"2\">
										<tr>
											<td style=\"background-color:#16C5DB\"><b>Título</b></td>
											<td style=\"background-color:#16C5DB\"><b>Resumen</b></td>
										</tr>";

								foreach ($resultado as $value)
									echo "<tr>
											<td><a href=\"javascript:;\" onclick=\"cargarNoticia('".$value['Titulo']."');return false;\">".$value['Titulo']."</a></td>
											<td>".$value['Resumen']."</td>
										</tr>";

								echo "</table>";
							} else {
								echo "<p>No hay registros</p>";
							};
						?>
					</div>
				</div>
				<div id="mostrar_noticias">
					<!-- Div que contiene el archivo de la noticia seleccionada para mostrar -->
				</div>
				<!-- Div que tiene todo el contenido de la página principal -->
				<div id="secciones">
					<div id="div_seccion_principal">
						Aqui se cargan las secciones principales
					</div>
				</div>
			</section>

			<footer>
				<!-- Div que contiene el pié de página -->
				<div id="div_footer">
					(c) 2018 estart. estudio de arquitectura técnica, cantabria.
				</div>
			</footer>
		</div>
	</body>
</HTML>