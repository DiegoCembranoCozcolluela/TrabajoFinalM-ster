<?php
    session_start();

    $_SESSION['login'] = 0;
    unset ($_SESSION['usuario']);
    unset ($_SESSION['contraseña']);

    //session_destroy();
    header('Location:' . getenv('HTTP_REFERER'));
?>