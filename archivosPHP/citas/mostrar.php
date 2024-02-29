<?php
    include ("../clases.php");
    $citas = new consultasBD();

    //Recibimos los valores para las variables de los input
    $Nombre = $_POST['NombreCitas'];
    $Apellidos = $_POST['ApellidosCitas'];
    
    //Consulta para mostrar las citas por nombre y apellidos
    $resultado6 = $citas->buscar("citas","Nombre = '$Nombre' && Apellidos = '$Apellidos'");

    if ($resultado6){
        echo "<table border='1' cellpadding='4' cellspacing='2'>
                    <tr>
                        <td style='background-color:#16C5DB'><b>Hora</b></td>
                        <td style='background-color:#16C5DB'><b>Fecha</b></td>
                    </tr>";
        foreach ($resultado6 as $value6)
        echo "<tr>
                <td>".$value6['Hora']."</td>
                <td>".$value6['Fecha']."</td>
            </tr>";
        echo "</table></br>";
    } else {
        echo "No hay citas registradas a ese nombre.";
    };
?>