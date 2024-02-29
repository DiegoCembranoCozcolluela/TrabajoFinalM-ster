<HTML lang="es">
<article>
	<header>
		<div id=""><h1>Proyectos realizados</h1></div>
	</header>
	<span><p>En esta sección podras ver una selección de los ultimos proyectos realizados por la empresa en el último mes.</p></span><br/>
	<input type="button" class="boton_form morado" value="Mostrar proyectos" onclick="mostrar_proyectos()"><br/>
	<span id="proyectos">
	<table border='1' cellpadding='4' cellspacing='2'>
        <tr>
            <td style='background-color:#16C5DB'><b>Tipo</b></td>
            <td style='background-color:#16C5DB'><b>Lugar</b></td>
            <td style='background-color:#16C5DB'><b>Descripción</b></td>
            <td style='background-color:#16C5DB'><b>Precio</b></td>
            <td style='background-color:#16C5DB'><b>Imagen</b></td>
        </tr>
        <?php
            include ("../archivosPHP/clases.php");
			$proyectos = new consultasBD();
			
			//Consulta para mostrar toda la tabla de proyectos

            if ($resultado = $proyectos->buscar2("proyectos")){
                foreach ($resultado as $value)
                    echo "
                    <tr>
                        <td>".$value['Tipo']."</td>
                        <td>".$value['Lugar']."</td>
                        <td>".$value['Descripcion']."</td>
                        <td>".$value['Precio']."</td>
                        <td><img style='height:125px;' src='archivosPHP/proyectos/Imagen".$value['Tipo'].".png'></td>
                    </tr>
                    ";
            } else {
                echo "No hay registros";
            };

            echo "</table>";
        ?>
	</span><br/>

	<header>
		<div id=""><h1>Catálogo</h1></div>
	</header>
	<span><p>Si hace click sobre el botón podra ver un pequeño catálogo de las construcciones que podemos realizar en su vivienda con un precio aproximado que varía según el amueblado que decida adquirir. Puede hacer click sobre la imagen para ver los detalles de la obra.</p></span><br/>
	<input type="button" class="boton_form morado" value="Mostrar catalogo" onclick="cargaSlide()"><br/><br/>
	<div class="container">
		<div id="slides">
			<img onclick="cargaDetalles1()" src="img/dormitorio.jpg">
			<img onclick="cargaDetalles2()" src="img/baño.jpg">
			<img onclick="cargaDetalles3()" src="img/cocina.jpg">
			<img onclick="cargaDetalles4()" src="img/salon.jpg">
		</div>
	</div>
	<div id="detalles">
		<table id="tabla1" border="1">
			<tr bgcolor="#bbbbbb">
				<td align="center">Habitación</td>
				<td align="center">Foto</td>
				<td align="center">Descripción</td>
				<td align="center">Precio</td>
			</tr>
			<tr bgcolor="#cccccc">
				<td align="center">Dormitorio</td>
				<td align="center"><img src="img/dormitorio.png" class="img_catalogo" alt="dormitorio"></td>
				<td align="center">Habitación principal amueblada y con iluminación instalada</td>
				<td align="center">10.000€</td>
			</tr>
		</table>
		<table id="tabla2" border="1">
			<tr bgcolor="#bbbbbb">
				<td align="center">Habitación</td>
				<td align="center">Foto</td>
				<td align="center">Descripción</td>
				<td align="center">Precio</td>
			</tr>
			<tr bgcolor="#cccccc">
				<td align="center">Baño</td>
				<td align="center"><img src="img/baño.png" class="img_catalogo" alt="baño"></td>
				<td align="center">Baño principal amueblado y con iluminación instalada</td>
				<td align="center">5.000€</td>
			</tr>
		</table>
		<table id="tabla3" border="1">
			<tr bgcolor="#bbbbbb">
				<td align="center">Habitación</td>
				<td align="center">Foto</td>
				<td align="center">Descripción</td>
				<td align="center">Precio</td>
			</tr>
			<tr bgcolor="#cccccc">
				<td align="center">Cocina</td>
				<td align="center"><img src="img/cocina.jpg" class="img_catalogo" alt="cocina"></td>
				<td align="center">Cocina amueblada sin electrodomésticos y con iluminación instalada</td>
				<td align="center">15.000€</td>
			</tr>
		</table>
		<table id="tabla4" border="1">
			<tr bgcolor="#bbbbbb">
				<td align="center">Habitación</td>
				<td align="center">Foto</td>
				<td align="center">Descripción</td>
				<td align="center">Precio</td>
			</tr>
			<tr bgcolor="#cccccc">
				<td align="center">Salón</td>
				<td align="center"><img src="img/salon.png" class="img_catalogo" alt="salón"></td>
				<td align="center">Salón principal amueblado y con iluminación instalada</td>
				<td align="center">10.000€</td>
			</tr>
		</table>
	</div>
</article>
</HTML>