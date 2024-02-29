<?php
    include ("../clases.php");
    $agregar = new consultasBD();

    //Recibimos los valores para las variables de los input mostrados con el php de comprobar.php en la parte de clientes

    $Nombre = $_POST["nombreC"];
    $Apellidos = $_POST["apellidosC"];
    $Hora = $_POST["horaC"];
    $Fecha = $_POST["fechaC"];

    //Consulta para agregar una fila a la tabla de citas

    $a=$agregar->insertar("citas","'$Nombre','$Apellidos','$Hora','$Fecha'"); 
		if($a){
			echo "<p>Cita añadida</p>";
		}else{
			echo "<p>Cita no añadida</p>";
    };
?>