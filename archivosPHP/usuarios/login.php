<?php
    session_start();

    include ("../clases.php");
    $login = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 6 y encriptamos la contraseña

    $u = $_POST['usuario200'];
    $p = $_POST['contrasena200'];
    $p2 = crypt($p,'$5$rounds=5000$de4rhfr43ehd5dje$');

    //Comprobamos si el usuario y la contraseña son los del administrador (tabla usuarios) o un cliente registrado (tabla clientes)
    //Si es el administrador mostramos todas las opciones del administrador
    //Si no es el administrador mostramos solo las ocpiones de un cliente registrado (seleccionamos solo los datos asociados a ese usuario y contraseña y los input para modificar sus datos)

    $Resultado = $login->buscar("usuarios","Usuario = '$u' && Contraseña = '$p2'");
    $Resultado2 = $login->buscar("clientes","Usuario = '$u' && Contraseña = '$p2'");
    if ($Resultado){
        $_SESSION['login'] = 2;
        $_SESSION['usuario'] = $u;
        $_SESSION['contraseña'] = $p2;
        //echo "<p>Login correcto como administrador. Ya puedes acceder a la seccion de administracion</p>";
    } else if ($Resultado2){
        $_SESSION['login'] = 1;
        $_SESSION['usuario'] = $u;
        $_SESSION['contraseña'] = $p2;
        //echo "<p>Login correcto. Ya puedes acceder a la seccion de Usuario</p>";
    } else {
        $_SESSION['login'] = 0;
        //echo "<p>Usuario y contraseña incorrectos. Cliente no registrado.</p>";
    };


?>