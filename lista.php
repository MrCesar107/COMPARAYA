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
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>ComparaYa</title>
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
			    <li><img src="recursos/imagenes/no_avatar.jpg" width="50" height="50" class="circle responsive-img" alt=""></li>
          <li><?php echo "<h5>Bienvenido ".$_SESSION["u_usuario"]."</h5>"?></li>
			    <li><a href="lista.php">Mi lista</a></li>
			    <li><div class="divider"></div></li>
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
  		<div class="container">
  			<div class="row">
  				<div class="col s12 m12 l12">
  					<h1>Mi Lista</h1>
  				</div>
  			</div>
  			<div class="row"></div>
  			<div class="row"></div>
  			<div class="row">

  				<div class="col s12 m4 l2 center">
  					<img src="recursos/imagenes/jumex.jpg" alt="jumex.jpg" width="100" height="100"><a href="comparativa.php">Ver</a>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id diam ac tortor scelerisque rutrum eu eget ante.</p>
  					<div class="right">
              <h5 black-text>$6.23</h5>
  						<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
  					</div>
  				</div>
  				<div class="col s12 m4 l2 center">
  					<img src="recursos/imagenes/pinol.jpg" alt="jumex.jpg" width="100" height="100"><a href="comparativa2.php">Ver</a>
  					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id diam ac tortor scelerisque rutrum eu eget ante.</p>
  					<div class="right">
              <h5 black-text>$11.55</h5>
  						<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
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