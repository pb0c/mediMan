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
<header><!--Header-->	
		<div class="container ">
			<div class="logo">
				<img src="img/logoRS.png" width="90px" height="60px">
					<div class="barra float-right ">
						<label>Bienvenido</label></br>			
						<input type="search" class="search-control" placeholder="Buscar Paciente">
						<button type="submit" class="btnSearch">Ir</button>
					</div>
			</div>
		</div><!--fin container-->
    </header><!--fin Header-->
    
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
	


	<!-- Footer -->
	<footer class="page-footer">
		<!-- Copyright -->
		<div class="footer-copyright">
			<p>©Copyright 2020 by Paulina Bordones. All rights reserved.</p>
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