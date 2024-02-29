<?php
    include ("../clases.php");
    $agregar = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 5 y encriptamos la contraseña

    $User = $_POST['email'];
    $Password = crypt($_POST['contraseña'],'$5$rounds=5000$de4rhfr43ehd5dje$');
    $Nombre = $_POST['nombre'];
    $Apellidos = $_POST['apellidos'];
    $Email = $_POST['email'];
    $Telefono = $_POST['telefono'];

    //Comprobar que no hay repetidos datos en otro login
    $resultado = $agregar->buscar("clientes", "Usuario = '$User' && Contraseña = '$Password'");
    $resultado2 = $agregar->buscar("clientes", "Nombre = '$Nombre' && Apellidos = '$Apellidos' && Email = '$Email' && Telefono = '$Telefono'");
    
    if ($resultado) {
        echo "Usuario ya registrado. No puede haber dos clientes con el mismo usuario y contraseña";
    } else if ($resultado2) {
        echo "Datos de usuario ya registrados.";
    } else {
        //Consulta para agregar una fila a la tabla de usuarios
        $a=$agregar->insertar("clientes","'$User','$Password','$Nombre','$Apellidos','$Email','$Telefono'");
		if($a){
			echo "Usuario registrado";
		}else{
			echo "Usuario no registrado";
        };
    };

    header('Location:' . getenv('HTTP_REFERER')); 
?>