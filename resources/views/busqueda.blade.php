<!DOCTYPE html>
<html>
<head>
	<title>Vista Calendario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<link rel="stylesheet" type="text/css" href="estiloBuscar.css">
</head>
<body>
<header>
	<!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  <a href="/calendario" class="href"><img src="img/logoRS.png" width="100px" height="60px"></a>
        <div class="navbar">
			<label>Bienvenido</label>
        </div>
      </nav>
	</header>
    
    <main>
	<div class="container">
			<!--encabezado-->
			<div class="row">
				<div class="col-lg-12 col-sm-12 d-flex justify-content-center">
					<label for="nueva" class="h4">Búsqueda</label>
				</div>
			</div><!--fin encabezado-->
			<form action=""><!--form buscar-->
				<div class="row">
					<div class="form-group col-lg-3 col-sm-2">
					<input class="form-control mr-sm-0" type="text" placeholder="Nombre paciente" aria-label="Search">
					</div>
					<div class="form-group col-lg-1 col-sm-1 p-0">
					<button type="submit" class="btn" ></button>
					</div>
				</div>
			</form>
			<form><!--form resultados-->
				<div class="row">
					<div class="col pb-5">
						<label for="result">Resultados</label>
						<textarea name="" id="" rows="10" class="form-control"></textarea>
					</div>
				</div>
			</form>
			<form action="/calendario" method="GET">
				<div class="offset-lg-11 offset-sm-10 col-lg-1 col-sm-2">
				<button type="submit" class="btn2" >Volver</button>
				</div>
			</form>
		</div><!--fin container-->	
    </main>
	


	<!--Footer-->
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