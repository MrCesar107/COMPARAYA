<?php
	
	include("conexion.php");
	session_start();

	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];

	

	$proceso = $conexion->query("SELECT * FROM usuarios WHERE email='$email' AND clave='$clave'");


		//$_SESSION['e_email'] = $email;

	if($resultado = mysqli_fetch_array($proceso))
	{
		$_SESSION['e_email'] = $email;
		header("location: sesion.php");
	}
	else
	{

		header("location: sesion.php");
	}

?>