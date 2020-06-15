<!DOCTYPE html>
<html>
<head>
	<title>Vista Calendario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<header>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  		<img src="img/logoRS.png" width="100px" height="60px">
        		<div class="navbar " id="" style="">
          		<form class="form-inline mt-2 mt-md-1">
				<label>Bienvenido</label>
            	<input class="form-control mr-sm-0" type="text" placeholder="Buscar Paciente" aria-label="Search">
            	<button class="btn btn-outline-success  my-sm-0" type="submit">Ir</button>
          </form>
        </div>
      </nav>
	</header>
    
    <nav>
		<h4>Agenda Diaria Rehabilita Salud</h4>
		<label>20 Mayo 2020</label>
		<table border="1px">
			<th></th><th></th>
			<?php
				for ($i=0; $i < 10; $i++) { 
					echo"<tr><td>Hora</td><td>Bordones</td></tr>";
				}
			?>
		</table>
	</nav>
	


	<footer class="page-footer font-small white ">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">
			©Copyright 2020 by Paulina Bordones. All rights reserved.
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Fin Footer -->

	<script src="js/jquery-3.5.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</body>
</html>