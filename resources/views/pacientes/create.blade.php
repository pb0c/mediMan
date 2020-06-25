<!DOCTYPE html>
<html>
<head>
	<title>Vista Paciente</title>
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
			<!--encabezado-->
			<div class="row">
				<div class="col-lg-12 col-sm-12 d-flex justify-content-center">
					<label for="nueva" class="h4"></label>
				</div>
            </div><!--fin encabezado-->
            <!--vista paciente-->
            <form action="{{ url('/pacientes')}}" method="POST" >
                {{ csrf_field() }}
				<div class="row"><!--inicio row 1-->
                </div><!--fin row 1-->
                <div class="row"><!--inicio row 2-->
                    <div class="form-group col-lg-3 col-sm-3 my-1">
                        <label>RUT</label>
                        <input type="text" class="form-control" name="rut" placeholder="xx.xxx.xxx-x" required>
                    </div>
                    <div class="form-group col-lg-3 col-sm-3 my-1">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre" required>
                    </div>
                    <div class="form-group col-lg-3 col-sm-3 my-1">
                        <label>Apellido Paterno</label>
                        <input type="text" class="form-control" name="apellidoP" placeholder="Ingrese Apellido" required>
                    </div>
                    <div class="form-group col-lg-3 col-sm-3 my-1">
                        <label>Apellido Materno</label>
                        <input type="text" class="form-control" name="apellidoM" placeholder="Ingrese Apellido" >
                    </div>   
                    </div>
                    <div class="row"><!--fin row 2-->
				<div class="row"><!--inicio row 3-->
					
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Previsión</label>
						<select name="prevision" id="prevision" class="form-control" required>
							<option value="">Seleccione</option>
							<option value="Fonasa">Fonasa</option>
							<option value="Cruz Blanca">Cruz Blanca</option>
							<option value="Banmedica">Banmédica</option>
							<option value="Consalud">Consalud</option>
							<option value="Nueva MasVida">Nueva MasVida</option>
							<option value="Vida Tres">Vida Tres</option>
							<option value="Colmena">Colmena</option>
						</select>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Fecha de Nacimiento</label>
						<input type="date" class="form-control" name="nacimiento" id="" required>
                    </div>
                    <select name="edad" id="">
                        @for ($i = 0; $i < 100; $i++)
                    <option value='{{$i}}'>{{$i}}</option>
                        @endfor
                    </select>
				</div><!--fin row 3-->
                <div class="row"><!--inicio row 4-->
                    <div class="form-group col-lg-3 col-sm-3 my-1">
                        <label for="">Sexo</label>
						<select name="sexo" id="sexo" class="form-control" require>
							<option value="">Seleccione</option>
							<option value="0">Femenino</option>
                            <option value="1">Masculino</option>
						</select>
						
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Teléfono</label>
						<input type="text" class="form-control" name="telefono" id="" placeholder="Ej. 9-12312312" required>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Actividad</label>
						<select name="actividad" id="actividad" class="form-control">
							<option value="">Seleccione</option>
                            <!--lista tab actividad-->
                            
                            
                            @foreach (DB::table('actividads')->select('id','actNombre')->get() as $actividad)
                        		<option value="{{$actividad->id}}">{{$actividad->actNombre}}</option>
                            @endforeach
						</select>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Deporte</label>
						<select name="deporte" id="deporte" class="form-control">
							<option value="">Seleccione</option>
							<!--lista tab deporte-->
							@foreach (DB::table('deportes')->select('id','depNombre')->get() as $deporte)
                        		<option value="{{$deporte->id}}">{{$deporte->depNombre}}</option>
                            @endforeach
						</select>
					</div>
					<div class="form-group col-lg-12 col-sm-12 my-1">
						<label for="">Dirección</label>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="calle" id="" placeholder="Nombre calle" require>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="numero" id="" placeholder="Número" require>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="" id="dpto" placeholder="Dpto">
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="comuna" id="" placeholder="Comuna">
					</div>
					</div><!--fin row-->
					<div class="row">
					<div class="offset-lg-10 col-lg-2 offset-sm-10 col-sm-2">
						<button type="submit" class="btn" name="guardar">Guardar</button>
					</div>
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