<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input de la seccion 2

    $Tipo = $_POST["TipoP2"];
    $Lugar = $_POST["LugarP2"];
    $Descripcion = $_POST["DescripcionP2"];
    $Precio = $_POST["PrecioP2"];

    //Consulta para modificar el contenido de una fila a la tabla de proyectos

    $m=$modificar->actualizar("proyectos","Lugar='$Lugar', Descripcion='$Descripcion', Precio='$Precio'","Tipo='$Tipo'");
		if($m){
			echo "<p>Proyecto actualizado</p>";
    }else{
			echo "<p>Proyecto no actualizado</p>";
    };
?>