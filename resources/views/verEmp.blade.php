<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nuevo Funcionario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<link rel="stylesheet" type="text/css" href="estiloPaciente.css">
</head>
<body>
    <header>
	<!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	  <a href="/calendario" class="href"><img src="img/logoRS.png" width="100px" height="60px"></a>
        <div class="navbar">
          <form class="form-inline mt-2 mt-md-1">
			<label>Bienvenido</label>
            <input class="form-control mr-sm-0" type="text" placeholder="Buscar Paciente" aria-label="Search">
            <button class="btn btn-outline-success  my-sm-0" type="submit">Ir</button>
          </form>
        </div>
      </nav>
	</header>
<body>

    <main>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Rol</th>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>            
                @foreach($empleados as $empleado)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$empleado->rol}}</td>
                    <td>{{$empleado->rut}}</td>
                    <td>{{$empleado->nombre.(' ').$empleado->apellidoP.(' ').$empleado->apellidoM}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>{{$empleado->usuario}}</td>
                    <td>Editar | 
                    <form action="{{ url('verEmp/'.$empleado->id ) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    
                        <button type="submit" onclick="return confirm('¿Desea eliminar el registro?');">Eliminar</button>
                    </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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