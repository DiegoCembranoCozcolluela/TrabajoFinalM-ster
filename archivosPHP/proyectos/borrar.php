<?php
    include ("../clases.php");
    $borrar = new consultasBD();

    //Recibimos los valores para las variables de los input

    $Tipo = $_POST["TipoP3"];
    $Lugar = $_POST["LugarP3"];

    //Consulta para borrar una fila a la tabla de proyectos

    $b=$borrar->borrar("proyectos","Tipo='$Tipo' && Lugar='$Lugar'");
		if($b){
			echo "<p>Proyecto borrado</p>";
		}else{
			echo "<p>Proyecto no borrado</p>";
    };
?>