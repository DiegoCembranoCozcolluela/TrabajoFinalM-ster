<?php
    include ("../clases.php");
    $agregar = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 2

    $Tipo = $_POST["TipoP"];
    $Lugar = $_POST["LugarP"];
    $Descripcion = $_POST["DescripcionP"];
    $Precio = $_POST["PrecioP"];

    //Consulta para agregar una fila a la tabla de proyectos

    $a=$agregar->insertar("proyectos","'$Tipo','$Lugar','$Descripcion','$Precio'"); 
		if($a){
			echo "<p>Proyecto agregado</p>";
		}else{
			echo "<p>Proyecto no agregado</p>";
    };
?>