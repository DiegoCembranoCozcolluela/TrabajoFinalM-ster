<?php
    include ("../clases.php");
    $noticias2 = new consultasBD();

    //Recibimos los valores de la tabla del index

    $Titulo = $_POST['Titulo'];

    //Mostramos la noticia seleccionada

    $resultado2 = $noticias2->buscar("noticias","Titulo = '$Titulo'");
    if ($resultado2){
        echo "<h3>".$resultado2[0]['Titulo']."</h3><p>".$resultado2[0]['Contenido']."</p>";
    } else {
        echo "<p>Error al cargar la noticia</p>";
    };
?>