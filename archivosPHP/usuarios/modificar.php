<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input mostrados con el php de comprobar.php en la parte de usuarios

    $Usuario = $_POST['UsuarioD'];
    $Nombre = $_POST['NombreD'];
    $Apellidos = $_POST['ApellidosD'];
    $Email = $_POST['EmailD'];
    $Telefono = $_POST['TelefonoD'];

    //Si todo esta correcto realizamos la consulta para modificar la fila concreta de la tabla usuarios

    $m=$modificar->actualizar("clientes","Usuario='$Email', Nombre='$Nombre', Apellidos='$Apellidos', Email='$Email', Telefono='$Telefono'","Usuario='$Usuario'");
		if($m){
			echo "Usuario actualizado";
        }else{
			echo "Usuario no actualizado";
        };
        
?>