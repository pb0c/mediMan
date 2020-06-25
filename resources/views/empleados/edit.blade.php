<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nuevo Funcionario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.0.8/css/solid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('estiloPaciente.css')}}">
</head>
<body>
    <header>
	<!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  <a href="/calendario" class="href"><img src="{{url('img/logoRS.png')}}" width="100px" height="60px"></a>
        <div class="navbar">
          <form class="form-inline mt-2 mt-md-1">
			<label>Bienvenido</label>
            <input class="form-control mr-sm-0" type="text" placeholder="Buscar Paciente" aria-label="Search">
            <button class="btn btn-outline-success  my-sm-0" type="submit">Ir</button>
          </form>
        </div>
      </nav>
	</header>

    
    <main>
        <div class="container">
            <form action="{{url('empleados/'.$empleado->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('PATCH')}}
            <div class="row">
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>RUT</label>
            <input type="text" name="rut" value="{{$empleado->rut}}" readonly>
            </div>
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>Nombre</label>
            <input type="text" name="nombre" value="{{$empleado->nombre}}" required>
            </div>
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>Apellido Paterno</label>
                <input type="text" name="apellidoP" value="{{$empleado->apellidoP}}" required>
            </div>
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>Apellido Materno</label>
                <input type="text" name="apellidoM" value="{{$empleado->apellidoM}}" required>
            </div>   
            </div>
            <div class="row">
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>Rol Empleado</label>
                <select name="rol">
                <option value="">{{$empleado->rol}}</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Recepcionista">Recepcionista</option>
                    <option value="Kinesiólogo">Kinesiólogo</option>
                </select>
            </div>
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>Teléfono</label>
                <input type="text" name="telefono" value="{{$empleado->telefono}}" required>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label>Usuario</label>
                <input type="text" name="usuario" value="{{$empleado->usuario}}" required>
            </div>
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label for="">Contraseña</label>
                <input type="text" name="password" value="" required>
            </div>
            <div class="form-group col-lg-3 col-sm-3 my-1">
                <label> </label>
                <input type="text" name="pass" value="" required>
            </div>
            
            <div class="offset-lg-10 col-lg-2 offset-sm-10 col-sm-2">
                <button class="btn" >Actualizar</button>
            </div>
        
            </div>
            
            </form>
        </div>
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