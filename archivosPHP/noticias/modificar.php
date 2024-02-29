<?php
    include ("../clases.php");
    $modificar = new consultasBD();

    //Recibimos los valores para las variables de los input

    $Titulo = $_POST["TituloN2"];
    $Resumen = $_POST["ResumenN2"];
    $Contenido = $_POST["ContenidoN2"];

    //Consulta para modificar el contenido de una fila a la tabla de noticias

    $m=$modificar->actualizar("noticias","Resumen='$Resumen', Contenido='$Contenido'","Titulo='$Titulo'");
		if($m){
			echo "<p>Noticia actualizada</p>";
    }else{
			echo "<p>Noticia no actualizada</p>";
    };
?>