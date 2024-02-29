<?php
    include ("../clases.php");
    $nuevoadmin = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 8 y encriptamos la contraseña

    $usuario = $_POST['usuario5'];
    $password = $_POST['contraseña5'];
    $nombre = $_POST['nombre5'];
    $apellidos = $_POST['apellidos5'];
    $password2 = crypt($password,'$5$rounds=5000$de4rhfr43ehd5dje$');

    //Consulta para agregar una fila a la tabla de usuarios

    $na=$nuevoadmin->insertar("usuarios","'$usuario','$password2','$nombre','$apellidos'");
    if ($na){
        echo "<p>Registro exitoso.</p>";
    } else {
        echo "<p>Registro fallido.</p>";
    }
?>