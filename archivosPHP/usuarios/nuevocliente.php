<?php
    include ("../clases.php");
    $nuevocliente = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 6 y encriptamos la contraseña

    $usuario = $_POST['email4'];
    $password = $_POST['contraseña4'];
    $nombre = $_POST['nombre4'];
    $apellidos = $_POST['apellidos4'];
    $email = $_POST['email4'];
    $telefono = $_POST['telefono4'];
    $password2 = crypt($p,'$5$rounds=5000$de4rhfr43ehd5dje$');

    //Comprobar que no hay repetidos datos en otro login
    $resultado = $nuevocliente->buscar("clientes", "Usuario = '$usuario' && Contraseña = '$password2'");
    $resultado2 = $nuevocliente->buscar("clientes", "Nombre = '$nombre' && Apellidos = '$apellidos' && Email = '$email' && Telefono = '$telefono'");

    if ($resultado) {
        echo "Usuario ya registrado. No puede haber dos clientes con el mismo usuario y contraseña";
    } else if ($resultado2) {
        echo "Datos de usuario ya registrados.";
    } else {
        //Consulta para agregar una fila a la tabla de usuarios
        $nc=$nuevocliente->insertar("clientes","'$usuario','$password2','$nombre','$apellidos','$email','$telefono'");
		if ($nc){
            echo "<p>Registro exitoso.</p>";
        } else {
            echo "<p>Registro fallido.</p>";
        }
    };
?>