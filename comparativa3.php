<?php
          include 'conexion.php';
          session_start();

          if(isset($_SESSION["u_usuario"]))
          {
          }
          else
          {
            header("Location: index.php");
          }
?>

<!DOCTYPE html>
<html>
	<head lang="es-mx">
		<meta charset="UTF-8">
		<title>Compara</title>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-wrapper blue">
				<a href="sesion.php" class="brand-logo center">ComparaYa</a>
				<ul id="slide-out" class="side-nav black-text">
			    <li><div class="userView">
			      <div class="background red">
			      </div>
			      
			    </div></li>
			    <li><img src="recursos/imagenes/no_avatar.jpg" width="50" height="50" class="circle responsive-img" alt=""><?php echo "<h5>Bienvenido ".$_SESSION["u_usuario"]."</h5>"?></li>
			    <li><a href="#">Mi lista</a></li>
			    <li><a href="#">Ofertas</a></li>
			    <li><div class="divider"></div></li>
			    <li><a href="#">Opciones</a></li>
			    <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
			  </ul>
			  <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
			  	<div class="right">
			  		<form>
      					<div center class="input-field">
        					<input id="search" type="search" required placeholder="Search...">
      					</div>
    				</form>
			  	</div>
			</div>
  		</nav>
  		<div class="row">
  			<div class="col s2 m2 l2">
  				<img class="responsive-img" alt="sabritas.jpg" src="recursos/imagenes/sabritas.jpg" width="300" height="300">
  			</div>
  			<div class="col s10 m10 l10">
  				<h1>Bolsa de papas sabritas</h1>
  				<h2>Contenido neto: 500gr</h2>
  			</div>
  			<div class="row"></div>
  			<div class="row"></div>
  			<div class="row"></div>
  			<div class="container z-depth-5">
  				<div class="row">
  					<div class="col s12 m12 l12">
  						<table class="bordered striped">
        					<tbody>
          						<tr>
						            <td><img class="responsive-img" src="recursos/imagenes/comercial_mexicana.png" width="200" height="200"></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td><h5>Comercial Mexicana S.A DE C.V</h5></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td><h2>$11.95</h2></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
          						</tr>
          						<tr>
						            <td><img class="responsive-img" src="recursos/imagenes/walmart-logo.jpg" width="200" height="200"></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td><h5>Walmart México S.A DE C.V</h5></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td><h2>$10.55</h2></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
          						</tr>
          						<tr>
						            <td><img class="responsive-img" src="recursos/imagenes/soriana-logo.jpg" width="200" height="200"></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td><h5>Soriana S.A DE C.V</h5></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td><h2>$8.80</h2></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
						            <td></td>
          						</tr>
        					</tbody>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
			$('.button-collapse').sideNav({
		    	menuWidth: 300, // Default is 240
		      	edge: 'left', // Choose the horizontal origin
		      	closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		      	draggable: true // Choose whether you can drag to open on touch screens
    			}
  			);
		</script>
	</body>
</html>