<!DOCTYPE html>
	<html>
	<head lang="es-mx">
		<title>Registro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-wrapper blue">
				<div class="row">
					<div class="col s7 m4 l3 offset-l1">
						<a href="#" class="brand-logo left">ComparaYa</a>
					</div>
					<form action"proceso.php" method="POST">
						<div class="col s7 m4 l2 offset-l2">
						<input type="text" name="nombre" placeholder="Escribe tu correo">
						</div>
						<div class="col s7 m4 l2 offset-l0">
							<input type="password" name="password" placeholder="Escribe tu contraseña">
						</div>
						<div class="col s1 m1 left"><input class="waves-effect waves-light btn" type="submit" name="iniciar_sesion" value="Iniciar sesión">
						</div>
					</form>
					
				</div>
			</div>
		</nav>
		<div id="left">
			<h2>ComparaYa</h2>
			<h4>Únete a la mejor plataforma de ahorro en México</h4>
		</div>
		<div class="container right">
			<div class="row">
					<div class="col-s7 center">
						<h3>Regístrate</h3>
					</div>
	    			<form class="col s7 right" action="guardar.php" method="POST">
	      				<div class="row">
	        				<div class="input-field col s5">
	          					<input id="nombre" name="nombre" type="text" class="validate">
	          					<label for="nombre">Nombre(s)</label>
	        				</div>
	        				<div class="input-field col s5">
	          					<input id="apellido" name="apellido" type="text" class="validate">
	          					<label for="apellido">Apellido(s)</label>
	        				</div>
	      				</div>
	      				<div class="row">
	      					<div class="input-field col s6">
	      						<input id="correo" name="correo" type="email" class="validate">
	      						<label for="correo">Correo Electrónico</label>
	      					</div>
	      				</div>
	      				<div class="row">
	      					<div class="input-field col s6">
	      						<input id="telefono" name="telefono" type="text" class="validate">
	      						<label for="telefono">Numero de teléfono</label>
	      					</div>
	      				</div>
	      				<div class="row">
	      					<div class="input-field col s6">
	      						<input id="password" name="password" type="password" class="validate">
	      						<label for="passsword">Contraseña</label>
	      					</div>
	      				</div>
	      				<div class="row">
	      					<div class="input-field col s6">
	      						<input id="password2" name="password2" type="password" class="validate">
	      						<label for="password2">Vuelve a introducir tu contraseña</label>
	      					</div>
	      				</div>
	      				<div class="row">
	      					<div class="col s12 right">
	      						<input type="submit" name="regitro" value="Registrar"></input>
	      					</div>
	      				</div>
	    			</form>

	    			<?php

	    				error_reporting(E_ERROR | E_WARNING | E_PARSE);

						session_start();   // Necesitamos una sesion

						$usuario = $_POST['nombre'];

						$_SESSION["u_usuario"] = $usuario;

						if(isset($_SESSION['u_usuario']))
						{  // comparamos si existe
						 	header("Location: sesion.php"); // si existe, lo redireccionamos a sesion.php
						}
						else
						{
						 session_destroy();  // si no existe, destruimos sesion
						}
					?>
	  		</div>
	  	</div>
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>