<?php
	$conexion = mysqli_connect("localhost","root","10091994","trabajofinal");

	if (!$conexion){
		echo ("No pudo conectarse a la BD".mysqli_connect_errno());
		exit;
	}
?>