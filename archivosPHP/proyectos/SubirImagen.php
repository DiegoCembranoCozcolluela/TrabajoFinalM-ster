<?php
	$ok = "";
	$Tipo = $_POST["Tipo"];

	if ($_POST["acc"] == "Subir imagen") {
		// si venimos del formulario sacamos los datos del archivo
		$tamano = $_FILES["archivo"]["size"];
		$tipo = $_FILES["archivo"]["type"];
		$archivo = $_FILES["archivo"]["name"];
		if ($archivo != "") {
			//guardamos el archivo en la carpeta proyectos siempre que no venga vacio
			//lo llamamos 'Imagen' y el tipo introducido en el campo anterior
			$destino = "/AppServ/www/proyectoPHP/archivosPHP/proyectos/Imagen".$Tipo.".png";
			if (copy($_FILES["archivo"]["tmp_name"],$destino)) {
				$ok = "Archivo subido: si";
			} else {
				$ok = "Archivo subido: no";
			}
		} else {
			$ok = "No se selecciono archivo";
		}
	}

	header('Location:' . getenv('HTTP_REFERER'));
?>