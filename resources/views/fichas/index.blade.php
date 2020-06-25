<!DOCTYPE html>
<html>
<head>
	<title>Vista Ficha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.0.8/css/solid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('estiloFicha.css')}}">
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
		<!--contenedor-->
		<div class="container">
			<!--encabezado-->
			<div class="row">
				<div class="col-lg-12 col-sm-12 d-flex justify-content-center">
					<label for="nueva" class="h4">Ficha Clínica</label>
				</div>
			</div><!--fin encabezado-->
			<form action=""><!--inicio form-->
			<div class="row">
				<div class="form-group col-lg-4 col-sm-6 my-1">
                    @foreach ($fichas as $ficha)  
                    @foreach (DB::table('pacientes')->select('id','nombre')->where('pacientes.id','=','fichas.paciente_id')->get() as $paciente)
                        <input class="form-control" type="text" name="nombre" placeholder="{{$paciente}}" readonly>
                        @endforeach

					<label for="medico">Médico Tratante</label>
					<input class="form-control" type="text" name="medico" value="{{$ficha->medico}}" require> 
					<label for="diagnostico">Diagnóstico</label>
					<input class="form-control" type="text" name="diagnostico" value="{{$ficha->diagnostico}}" require>
				</div>
				<div class="form-group col-lg-2 lg-offset-2 col-sm-2 sm-offset-2 my-1" style="background-color:#134C89">
                    <label for="ficha">N° Ficha</label>
                    
                <input type="text" class="form-control" name="id" value="{{$ficha->id}}" readonly>
                    
				</div>
			</div>
			<div class="row">
				<div class="form-group col mb-1">	
					<label for="medicamento">Medicamento</label>
					<textarea class="form-control" name="medicamento" rows="5" value="" require>{{$ficha->medicamento}}</textarea>
					<label for="tratamiento">Tratamiento</label>
					<textarea class="form-control" name="tratamiento" rows="5" value="" require>{{$ficha->tratamiento}}</textarea>
					<label for="ant">Antecedentes Mórbidos</label>
					<textarea class="form-control" name="antMorbido" rows="10" value="" require>{{$ficha->antMorbido}}</textarea>
				</div>
            </div>
            @endforeach
			<div class="row">
				<div class="offset-lg-10 col-lg-2 offset-sm-10 col-sm-2">
				<button type="submit" class="btn" name="guardar">Guardar</button>
				</div>
			</div>
			</form><!--fin form-->
		</div><!--fin contenedor-->
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