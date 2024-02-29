<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input mostrados con el php de comprobar.php en la parte de clientes

    $Nombre = $_POST["nombreC2"];
    $Hora = $_POST["horaC2"];
    $Fecha = $_POST["fechaC2"];
    $FechaCita = $_POST["fechaC3"];

    //Realizamos una cosulta para extraer de la tabla citas los valores de la cita que se desea modificar
    //Convertimos todos los datos al mismo formato y guardamos tambien el valor de las 72 horas menos para emplearlo como condicion para modificar

    $resultado = $modificar->buscar("citas", "Nombre = '$Nombre' && Fecha = '$FechaCita'");
    $Fecha72h2 = date('Y-m-d H:i:s', strtotime($resultado[0]["Fecha"] . $resultado[0]["Hora"] . " -72 hours"));
    $FechaActual = date('Y-m-d H:i:s');
    $FechaCita2 = date('Y-m-d H:i:s', strtotime($resultado[0]["Fecha"] . $resultado[0]["Hora"]));

    //Si todo esta correcto realizamos la consulta para modificar la fila concreta de la tabla citas

    if (($FechaActual >= $Fecha72h2) && ($FechaActual <= $FechaCita2)) {
        echo "<p>La cita no puede ser modificada 72 horas antes de la misma.</p>";
    } else {
        $m=$modificar->actualizar("citas", "Hora='$Hora', Fecha='$Fecha'", "Nombre='$Nombre' && Fecha='$FechaCita'");
        if ($m) {
            echo "<p>Cita actualizada</p>";
        } else {
            echo "<p>Cita no actualizada<p>";
        };
    };
?>