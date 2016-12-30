<?php

	$conexion = new mysqli("localhost", "root", "", "base_datos");

	if($conexion)
	{
		
	}
	else
	{
		echo "No hay conexion";
	}

?>