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


	<!-- Footer -->

	<script src="js/jquery-3.5.0.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</body>
</html>