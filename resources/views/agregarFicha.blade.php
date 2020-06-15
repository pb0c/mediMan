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
    
    <main>
		<h4>Nueva Ficha Clínica</h4>
		<form action="">
			<input type="text" id="ficha" placeholder="N° Ficha">
			<input type="text" id="nombre" placeholder="Nombre"></br>
			<input type="text" id="medico" placeholder="Médico Tratante"></br>
			<input type="text" id="dg" placeholder="Diagnóstico"></br>
			<input type="text" id="tto" placeholder="Tratamiento"></br>
			<input type="text" id="med" placeholder="Medicamento"></br>
			<input type="text" id="ant" placeholder="Antecendentes Mórbidos"></br>
			<button type="submit" name="btnAgregar">Agregar</button>
		</form>
    </main>

	
	


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