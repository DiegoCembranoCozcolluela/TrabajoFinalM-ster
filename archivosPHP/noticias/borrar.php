<?php
    include ("../clases.php");
    $borrar = new consultasBD();

    //Recibimos los valores para las variables de los input

    $Titulo = $_POST["TituloN3"];

    //Consulta para borrar una fila a la tabla de proyectos

    $b=$borrar->borrar("noticias","Titulo='$Titulo'"); 
		if($b){
			echo "<p>Noticia borrada</p>";
		}else{
			echo "<p>Noticia no borrada</p>";
    };
?>