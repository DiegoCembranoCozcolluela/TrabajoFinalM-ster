<?php
    session_start();

    include ("../clases.php");
    $usuarios = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 6 y encriptamos la contraseña

    $u = $_POST['usuario2'];
    $p = $_POST['contraseña2'];
    $p2 = crypt($p,'$5$rounds=5000$de4rhfr43ehd5dje$');

    //Comprobamos si el usuario y la contraseña son los del administrador, en este caso admin y admin
    //Si es el administrador mostramos todas las opciones del administrador (un select con los usuarios guardados en la tabla usuarios y los input para modificar el seleccionado)
    //Si no es el administrador mostramos solo las ocpiones de un usuario registrado (seleccionamos solo los datos asociados a ese usuario y contraseña y los input para modificar sus datos)

    if ($u === 'admin' && $p === 'admin'){
        //Seccion administrativa
        echo "<h3>Seccion administrativa</h3>";

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
            if ($resultado6 = $usuarios->buscar2('proyectos')){
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
                <form name=\"formulario_proyectos3\" id=\"formulario_proyectos3\" action=\"../proyectos/SubirImagen.php\" method=\"POST\" enctype=\"multipart/form-data\">
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

        //Parte de usuarios
        echo "<h4>Datos de usuarios:</h4>";
        echo "Selecciona el usuario al que deseas modificar los datos: <br/><br/>
                <select name=\"usuario\" id=\"Usuario2\">";
            $resultado = $usuarios->buscar2("clientes");
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
        echo "Selecciona el cliente al que deseas modificar los datos: <br/><br/>
                <select name=\"Cliente\" id=\"Cliente\">";
            $resultado2 = $usuarios->buscar2("citas");
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
            if ($resultado7 = $usuarios->buscar2('noticias')){
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
                    $resultado3 = $usuarios->buscar2("noticias");
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
                        $resultado4 = $usuarios->buscar2("noticias");
                        foreach ($resultado4 as $value4)
                            echo "<option value='".$value4[Titulo]."'>".$value4[Titulo]."</option>"
                        ;
        echo "</select><br/><br/>
                <input type=\"button\" href=\"javascript:;\" onclick=\"borrarnoticia($('#TituloN3').val());return false;\" name=\"Boton de enviar\" value=\"Borrar\" class=\"boton_form morado\" />
                <span id=\"borrarN\"></span>
            </span></br>";
    
    } else {
        $resultado5 = $usuarios->buscar("clientes","Usuario = '$u' && Contraseña = '$p2'");
        if ($resultado5){
            $_SESSION['login'] = 1;
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
                <input type=\"button\" href=\"javascript:;\" onclick=\"vercitas($('#NombreCitas').val(),$('#ApellidosCitas').val());return false;\" name=\"Boton de enviar\" value=\"Mostrar citas\" class=\"boton_form morado\" />
                <span id=\"verCitas\"></span></br>
                ";
            echo "Si desea modificar su cita rellene los sigientes campos (recuerde que la cita no puede ser modificada 72 horas antes de la misma.";
            echo "Introduce tu nombre y la fecha de tu cita:<br/><br/>
                NOMBRE: <input type=\"text\" name=\"nombre2\" id=\"nombreC2\" class=\"caja_gris\" maxlength=\"50\" size=\"40\" value=\"\" placeholder=\"Nombre  (requerido)\" required /><br/>
                FECHA CITA: <input type=\"date\" name=\"fecha3\" id=\"fechaC3\" class=\"caja_gris\" value=\"\" placeholder=\"dd/mm/aaaa (requerido)\" required /><br/></br>
                Introduce los nuevos datos:<br/><br/>
                HORA: <input type=\"time\" name=\"hora2\" id=\"horaC2\" class=\"caja_gris\" value=\"\" placeholder=\"hh:mm:ss  (requerido)\" required /><br/>
                FECHA: <input type=\"date\" name=\"fecha2\" id=\"fechaC2\" class=\"caja_gris\" value=\"\" placeholder=\"dd/mm/aaaa (requerido)\" required /><br/>
                <input type=\"button\" href=\"javascript:;\" onclick=\"modificarcita($('#nombreC2').val(),$('#fechaC3').val(),$('#horaC2').val(),$('#fechaC2').val());return false;\" name=\"Boton de enviar\" value=\"Modificar\" class=\"boton_form morado\" /><br/>
                <span id=\"modificarC\"></span>
                ";
        } else {
            $_SESSION['login'] = 0;
            echo "<p>Usuario y contraseña incorrectos. Usuario no registrado</p>";
        }
    };
?>