<?php

	include("conexion.php");

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$query = "INSERT INTO usuarios(nombre, apellido, email, telefono, clave1, clave2) VALUES('$nombre','$apellido', '$correo', '$telefono', '$password', '$password2')";
	$resultado = $conexion->query($query);

	if($resultado)
	{
		header("location: sesion.php");
	}
	else
	{
		header("location: index.php");
	}

?>