<HTML lang="es">
	<article>
		<header>
			<div id=""><h1>Administración</h1></div>
		</header>
	</article>

	<article>
		<span id="res_login3">
			<?php
				session_start();

				include ("../archivosPHP/clases.php");
				$administracion = new consultasBD();
				
				if ($_SESSION['login'] === 2){
					$u = $_SESSION['usuario'];
					$p2 = $_SESSION['contraseña'];

					//Seccion administrativa
                    echo "<h3>Seccion administrativa</h3>";

                    //Parte de administradores
                    echo "<h4>Administradores:</h4>";
                    echo "<span id=\"agregar_admin\">
                            Agregar un administrador:<br/><br/>
                            Usuario: <input type=\"text\" name=\"Usuario\" id=\"usuario5\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                            Contraseña: <input type=\"password\" name=\"Contraseña\" id=\"contraseña5\" class=\"caja_gris\" maxlength=\"40\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                            Nombre: <input type=\"text\" name=\"Nombre\" id=\"nombre5\" class=\"caja_gris\" maxlength=\"500\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                            Apellidos: <input type=\"text\" name=\"Apellidos\" id=\"apellidos5\" class=\"caja_gris\" maxlength=\"200\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"agregaradmin($('#usuario5').val(),$('#contraseña5').val(),$('#nombre5').val(),$('#apellidos5').val());return false;\" name=\"Boton de enviar\" value=\"Agregar\" class=\"boton_form morado\" />
                            <span id=\"agregarA\"></span>
                        </span></br><br/>";
                    echo "Modificar un administrador:<br/><br/>";
                    echo "Selecciona el administrador al que deseas modificar los datos: <br/><br/>
                            <select name=\"admin\" id=\"admin2\">";
                            $resultado10 = $administracion->buscar2("usuarios");
                            foreach ($resultado10 as $value)
                            echo "<option value='".$value[Usuario]."'>".$value[Usuario]."</option>"
                        ;
                    echo "</select><br/><br/>
                        Introduce los nuevos datos:<br/><br/>
                        Usuario: <input type=\"text\" name=\"Usuario\" id=\"usuario10\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                        Contraseña: <input type=\"password\" name=\"Contraseña\" id=\"contraseña10\" class=\"caja_gris\" maxlength=\"40\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                        Nombre: <input type=\"text\" name=\"Nombre\" id=\"nombre10\" class=\"caja_gris\" maxlength=\"500\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                        Apellidos: <input type=\"text\" name=\"Apellidos\" id=\"apellidos10\" class=\"caja_gris\" maxlength=\"200\" size=\"40\" value=\"\" placeholder=\"\" required /><br/>
                        <input type=\"button\" href=\"javascript:;\" onclick=\"modificaradminadmin($('#usuario10').val(),$('#admin2').val(),$('#contraseña10').val(),$('#nombre10').val(),$('#apellidos10').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" />"
                        ;
                    echo "<span id=\"rs_modificaradminadmin\"></span>";


                    //Parte de proyectos
                    echo "<h4>Proyectos:</h4>";
                    echo "<span id='mostrarP'>
                            <table border='1' cellpadding='4' cellspacing='2'>
                            <tr>
                                <td style='background-color:#16C5DB'><b>Tipo</b></td>
                                <td style='background-color:#16C5DB'><b>Lugar</b></td>
                                <td style='background-color:#16C5DB'><b>Descripción</b></td>
                                <td style='background-color:#16C5DB'><b>Precio</b></td>
                                <td style='background-color:#16C5DB'><b>Imagen</b></td>
                            </tr>";
                        if ($resultado6 = $administracion->buscar2('proyectos')){
                            foreach ($resultado6 as $value6)
                                echo "
                                    <tr>
                                        <td>".$value6['Tipo']."</td>
                                        <td>".$value6['Lugar']."</td>
                                        <td>".$value6['Descripcion']."</td>
                                        <td>".$value6['Precio']."</td>
                                        <td><img style='height:125px;' src='archivosPHP/proyectos/Imagen".$value6['Tipo'].".png'></td>
                                    </tr>
                                ";
                        } else {
                            echo "No hay registros";
                        };
                    echo "</table>";
                    echo "</span></br>";
                    echo "<input type='button' id='botonagregar' value='Agregar' onclick='agregar_proyecto()'>";
                    echo "<input type='button' id='botonmodificar' value='Modificar' onclick='modificar_proyecto()'>";
                    echo "<input type='button' id='botonborrar' value='Borrar' onclick='borrar_proyecto()'></br>";
                    echo "<span id=\"agregar_proyectos\">
                            Tipo de proyecto: <input type=\"text\" name=\"Tipo\" id=\"TipoP\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Lugar de realización: <input type=\"text\" name=\"Lugar\" id=\"LugarP\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Descripción del proyecto: <input type=\"text\" name=\"Descripcion\" id=\"DescripcionP\" class=\"caja_gris\" maxlength=\"500\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Precio del proyecto: <input type=\"number\" name=\"Precio\" id=\"PrecioP\" class=\"caja_gris\" maxlength=\"200\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"agregarproyecto($('#TipoP').val(),$('#LugarP').val(),$('#DescripcionP').val(),$('#PrecioP').val());return false;\" name=\"Boton de enviar\" value=\"Agregar\" class=\"boton_form morado\" />
                            <span id=\"agregarP\"></span>
                            <form name=\"formulario_proyectos3\" id=\"formulario_proyectos3\" action=\"archivosPHP/proyectos/SubirImagen.php\" method=\"POST\" enctype=\"multipart/form-data\">
                                Para añadir una imagen a un proyecto debe especificar el tipo del mismo tal y como aprece en la tabla:<br/>
                                Tipo de realización: <input type=\"text\" name=\"Tipo\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                                Imagen del proyecto (en formato .png): <input type=\"file\" name=\"archivo\" class=\"caja_gris\" size=\"91\" id=\"archivo\" required /><br/>
                                <input type=\"submit\" name=\"acc\" value=\"Subir imagen\" class=\"boton_form morado\" /><br/>
                            </form>
                        </span></br>";
                    echo "<span id=\"modificar_proyectos\">
                            Selecciona el tipo de proyecto sobre el que quieres realizar la modificación:<br/><br/>
                            Tipo de proyecto: <input type=\"text\" name=\"Tipo\" id=\"TipoP2\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/><br/>
                            Ahora introduce los valores que deseas incluir en la tabla:<br/><br/>
                            Lugar de realización: <input type=\"text\" name=\"Lugar\" id=\"LugarP2\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Descripción del proyecto: <input type=\"text\" name=\"Descripcion\" id=\"DescripcionP2\" class=\"caja_gris\" maxlength=\"500\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Precio del proyecto: <input type=\"number\" name=\"Precio\" id=\"PrecioP2\" class=\"caja_gris\" maxlength=\"200\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"modificarproyecto($('#TipoP2').val(),$('#LugarP2').val(),$('#DescripcionP2').val(),$('#PrecioP2').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" />
                            <span id=\"modificarP\"></span>
                        </span></br>";
                    echo "<span id=\"borrar_proyectos\">
                            Selecciona el tipo y el lugar de realización del proyecto que deseas borrar:</br>
                            Tipo de proyecto: <input type=\"text\" name=\"Tipo\" id=\"TipoP3\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Lugar de realización: <input type=\"text\" name=\"Lugar\" id=\"LugarP3\" class=\"caja_gris\" maxlength=\"50\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"borrarproyecto($('#TipoP3').val(),$('#LugarP3').val());return false;\" name=\"Boton de enviar\" value=\"Borrar\" class=\"boton_form morado\" />
                            <span id=\"borrarP\"></span>
                        </span></br>";
            
                    //Parte de clientes
                    echo "<h4>Datos de clientes:</h4>";
                    echo "<span id=\"agregar_cliente\">
                            Agregar un cliente:<br/><br/>
                            NOMBRE: <input type=\"text\" name=\"nombre\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" id=\"nombre7\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/><br/>
				            APELLIDOS: <input type=\"text\" name=\"apellidos\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" id=\"apellidos7\" value=\"\" placeholder=\"Apellidos  (requerido)\" required /><br/><br/>
				            TELÉFONO MÓVIL: <input type=\"tel\" name=\"telefono\" class=\"caja_gris\" maxlength=\"50\" size=\"30\" id=\"telefono7\" value=\"\" placeholder=\"Teléfono  (requerido)\" required /><br/><br/>
				            E-MAIL (USER): <input type=\"email\" name=\"email\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" id=\"email7\" value=\"\" placeholder=\"Dirección@correo.com (requerido)\" required /><br/><br/>
				            CONTRASEÑA: <input type=\"password\" name=\"contraseña\" class=\"caja_gris\" maxlength=\"50\" size\"40\" id=\"contraseña7\" value=\"\" placeholder=\"Contraseña (requerido)\" required /><br/><br/> 
                            <input type=\"button\" href=\"javascript:;\" onclick=\"agregarcliente($('#email7').val(),$('#contraseña7').val(),$('#nombre7').val(),$('#apellidos7').val(),$('#telefono7').val());return false;\" name=\"Boton de enviar\" value=\"Agregar\" class=\"boton_form morado\" />
                            <span id=\"agregarCl\"></span>
                        </span></br></br>";

                    echo "Modificar los datos de clientes: <br/><br/>";
                    echo "Selecciona el cliente al que deseas modificar los datos: <br/><br/>
                            <select name=\"usuario\" id=\"Usuario2\">";
                        $resultado = $administracion->buscar2("clientes");
                        foreach ($resultado as $value)
                            echo "<option value='".$value[Usuario]."'>".$value[Usuario]."</option>"
                        ;
                    echo "</select><br/><br/>
                            Introduce los nuevos datos:<br/><br/>
                            E-MAIL (USER): <input type=\"email\" name=\"email\" id=\"Email2\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Dirección@correo.com (requerido)\" required /><br/>
                            CONTRASEÑA: <input type=\"password\" name=\"contraseña\" id=\"Contraseña2\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Contraseña (requerido)\" required /><br/>
                            NOMBRE: <input type=\"text\" name=\"nombre\" id=\"Nombre2\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/>
                            APELLIDOS: <input type=\"text\" name=\"apellidos\" id=\"Apellidos2\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Apellidos  (requerido)\" required /><br/>
                            TELÉFONO MÓVIL: <input type=\"tel\" name=\"telefono\" id=\"Telefono2\" class=\"caja_gris\" maxlength=\"50\" size=\"30\" value=\"\" placeholder=\"Teléfono  (requerido)\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"modificarusuarioadmin($('#Usuario2').val(),$('#Email2').val(),$('#Contraseña2').val(),$('#Nombre2').val(),$('#Apellidos2').val(),$('#Telefono2').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" />"
                        ;
                    echo "<span id=\"rs_modificarusuarioadmin\"></span>";
            
                    //Parte de citas
                    echo "<h4>Citas de clientes:</h4>";
                    $resultado20 = $administracion->buscar2("citas");
                    echo "<span id='citasAdmin'>
                            <table border='1' cellpadding='4' cellspacing='2'>
                                <tr>
                                    <td style='background-color:#16C5DB'><b>Nombre</b></td>
                                    <td style='background-color:#16C5DB'><b>Apellidos</b></td>
                                    <td style='background-color:#16C5DB'><b>Hora</b></td>
                                    <td style='background-color:#16C5DB'><b>Fecha</b></td>
                                </tr>";
                        if ($resultado20 = $administracion->buscar2('citas')){
                                foreach ($resultado20 as $value20)
                        echo "
                            <tr>
                                <td>".$value20['Nombre']."</td>
                                <td>".$value20['Apellidos']."</td>
                                <td>".$value20['Hora']."</td>
                                <td>".$value20['Fecha']."</td>
                            </tr>
                            ";
                        } else {
                            echo "No hay registros";
                        };
                    echo "</table>";
                    echo "</span></br>";
                    echo "Selecciona el cliente al que deseas modificar los datos: <br/><br/>
                            <select name=\"Cliente\" id=\"Cliente\">";
                        $resultado2 = $administracion->buscar2("citas");
                        foreach ($resultado2 as $value2)
                            echo "<option value='".$value2[Apellidos]."'>".$value2[Nombre]." ".$value2[Apellidos]." y ".$value2[Fecha]."</option>"
                        ;
                    echo "</select><br/><br/>
                            Introduce los nuevos datos:<br/><br/>
                            HORA: <input type=\"time\" name=\"hora2\" id=\"horaC2\" class=\"caja_gris\" value=\"\" placeholder=\"hh:mm:ss  (requerido)\" required /><br/>
                            FECHA: <input type=\"date\" name=\"fecha2\" id=\"fechaC2\" class=\"caja_gris\" value=\"\" placeholder=\"dd/mm/aaaa (requerido)\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"modificarcitaadmin($('#Cliente').val(),$('#horaC2').val(),$('#fechaC2').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" /><br/>
                        <span id=\"modificarC2\"></span>";
            
                    //Parte de noticias
                    echo "<h4>Noticias:</h4>";
                    echo "<span id='noticiasP'>
                            <table border='1' cellpadding='4' cellspacing='2'>
                            <tr>
                                <td style='background-color:#16C5DB'><b>Titulo</b></td>
                                <td style='background-color:#16C5DB'><b>Resumen</b></td>
                                <td style='background-color:#16C5DB'><b>Contenido</b></td>
                            </tr>";
                        if ($resultado7 = $administracion->buscar2('noticias')){
                            foreach ($resultado7 as $value7)
                                echo "
                                    <tr>
                                        <td>".$value7['Titulo']."</td>
                                        <td>".$value7['Resumen']."</td>
                                        <td>".$value7['Contenido']."</td>
                                    </tr>
                                ";
                        } else {
                            echo "No hay registros";
                        };
                    echo "</table>";
                    echo "</span></br>";
                    echo "<input type='button' id='botonagregar2' value='Agregar' onclick='agregar_noticia()'>";
                    echo "<input type='button' id='botonmodificar2' value='Modificar' onclick='modificar_noticia()'>";
                    echo "<input type='button' id='botonborrar2' value='Borrar' onclick='borrar_noticia()'></br>";
                    echo "<span id=\"agregar_noticia\">
                            Rellene los siguientes campos:</br>
                            Titulo: <input type=\"text\" name=\"Titulo\" id=\"TituloN\" class=\"caja_gris\" maxlength=\"200\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Resumen: <input type=\"text\" name=\"Resumen\" id=\"ResumenN\" class=\"caja_gris\" maxlength=\"200\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Contenido: <input type=\"text\" name=\"Contenido\" id=\"ContenidoN\" class=\"caja_gris\" maxlength=\"500\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"agregarnoticia($('#TituloN').val(),$('#ResumenN').val(),$('#ContenidoN').val());return false;\" name=\"Boton de enviar\" value=\"Agregar\" class=\"boton_form morado\" />
                            <span id=\"agregarN\"></span>
                        </span></br>";
                    echo "<span id=\"modificar_noticia\">
                            Selecciona la noticia sobre la que quieres realizar la modificación:<br/><br/>
                            <select name=\"Titulo\" id=\"TituloN2\">";
                                $resultado3 = $administracion->buscar2("noticias");
                                foreach ($resultado3 as $value3)
                                    echo "<option value='".$value3[Titulo]."'>".$value3[Titulo]."</option>"
                                ;
                    echo "</select><br/><br/>
                            Ahora introduce los valores que deseas incluir en la tabla:<br/><br/>
                            Resumen: <input type=\"text\" name=\"Resumen\" id=\"ResumenN2\" class=\"caja_gris\" maxlength=\"200\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            Contenido: <input type=\"text\" name=\"Contenido\" id=\"ContenidoN2\" class=\"caja_gris\" maxlength=\"500\" size=\"91\" value=\"\" placeholder=\"\" required /><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"modificarnoticia($('#TituloN2').val(),$('#ResumenN2').val(),$('#ContenidoN2').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" />
                            <span id=\"modificarN\"></span>
                        </span></br>";
                    echo "<span id=\"borrar_noticia\">
                            Selecciona la noticia que deseas borrar:<br/><br/>
                                <select name=\"Titulo\" id=\"TituloN3\">";
                                    $resultado4 = $administracion->buscar2("noticias");
                                    foreach ($resultado4 as $value4)
                                        echo "<option value='".$value4[Titulo]."'>".$value4[Titulo]."</option>"
                                    ;
                    echo "</select><br/><br/>
                            <input type=\"button\" href=\"javascript:;\" onclick=\"borrarnoticia($('#TituloN3').val());return false;\" name=\"Boton de enviar\" value=\"Borrar\" class=\"boton_form morado\" />
                            <span id=\"borrarN\"></span>
                        </span></br>";
				};
			?>
		</span></br></br>		
	</article>
</HTML>