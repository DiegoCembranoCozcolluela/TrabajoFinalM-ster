<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input mostrados con el php de comprobar.php en la parte de admin

    $Cliente = $_POST["Cliente"];
    $Hora = $_POST["horaC2"];
    $Fecha = $_POST["fechaC2"];

    //Si todo esta correcto realizamos la consulta para modificar la fila concreta de la tabla citas

    $m=$modificar->actualizar("citas", "Hora='$Hora', Fecha='$Fecha'", "Apellidos='$Cliente'");
    if ($m) {
        echo "<p>Cita actualizada</p>";
    } else {
        echo "<p>Cita no actualizada<p>";
    };
?>