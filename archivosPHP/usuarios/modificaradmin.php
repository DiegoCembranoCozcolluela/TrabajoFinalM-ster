<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input mostrados con el php de comprobar.php en la parte de usuarios

    $Usuario = $_POST['Usuario2'];
    $Password = crypt($_POST['Contraseña2'],'$5$rounds=5000$de4rhfr43ehd5dje$');
    $Nombre = $_POST['Nombre2'];
    $Apellidos = $_POST['Apellidos2'];
    $Email = $_POST['Email2'];
    $Telefono = $_POST['Telefono2'];

    //Si todo esta correcto realizamos la consulta para modificar la fila concreta de la tabla usuarios

    $m=$modificar->actualizar("clientes","Usuario='$Email', Contraseña='$Password', Nombre='$Nombre', Apellidos='$Apellidos', Email='$Email', Telefono='$Telefono'","Usuario='$Usuario'");
		if($m){
			echo "Usuario actualizado";
        }else{
			echo "Usuario no actualizado";
        };
        
?>