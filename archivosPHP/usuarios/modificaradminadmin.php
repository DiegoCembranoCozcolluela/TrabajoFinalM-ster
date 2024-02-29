<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 8

    $Usuario = $_POST['usuario10'];
    $Password = crypt($_POST['contraseña10'],'$5$rounds=5000$de4rhfr43ehd5dje$');
    $Nombre = $_POST['nombre10'];
    $Apellidos = $_POST['apellidos10'];
    $Admin = $_POST['admin2'];

    //Si todo esta correcto realizamos la consulta para modificar la fila concreta de la tabla usuarios

    $m=$modificar->actualizar("usuarios","Usuario='$Usuario', Contraseña='$Password', Nombre='$Nombre', Apellidos='$Apellidos'","Usuario='$Admin'");
		if($m){
			echo "Administrador actualizado";
        }else{
			echo "ADministrador no actualizado";
        };
        
?>