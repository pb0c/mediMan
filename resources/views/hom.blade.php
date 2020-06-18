<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	
	
	
	<main>
	<div class="modal-dialog text-center">
		<div class="col-sm-12 main-section">
			<!--Modal Content-->
			<div class="modal-content">
				<div class="col-12 logo-img">
					<img src="img/logoRS.png">
				</div>
				<form class="col-12">
					<div class="form-group">
						<input type="text" class="form-control" name="user" placeholder="Usuario">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="pass" placeholder="Contraseña">
					</div>
					<button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Acceder</button>
				</form>
			</div> <!--fin modal-content-->
		</div>
	</div>
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