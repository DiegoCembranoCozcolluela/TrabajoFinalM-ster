<?php
    include ("../clases.php");
    $agregar = new consultasBD();

    //Recibimos los valores para las variables de los input

    $Titulo = $_POST["TituloN"];
    $Resumen = $_POST["ResumenN"];
    $Contenido = $_POST["ContenidoN"];

    //Consulta para agregar una fila a la tabla de proyectos

    $a=$agregar->insertar("noticias","'$Titulo','$Titulo','$Resumen','$Contenido'"); 
		if($a){
			echo "<p>Noticia agregada</p>";
		}else{
			echo "<p>Noticia no agregada</p>";
    };
?>