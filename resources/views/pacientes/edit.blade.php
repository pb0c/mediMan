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
			<form action="{{url('pacientes/'.$paciente->id)}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{method_field('PATCH')}}
				<div class="row"><!--inicio row 1-->
				</div><!--fin row 1-->
				<div class="row"><!--inicio row 2-->
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">RUT</label>
						<input type="text" class="form-control" name="rut" id="rut" value="{{$paciente->rut}}" readonly>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Previsión</label>
						<select name="prevision" id="prev" class="form-control">
							<option value="{{$paciente->prevision}}">{{$paciente->prevision}}</option>
							<option value="">Fonasa</option>
							<option value="">Cruz Blanca</option>
							<option value="">Banmédica</option>
							<option value="">Consalud</option>
							<option value="">Nueva MasVida</option>
							<option value="">Vida Tres</option>
							<option value="">Colmena</option>
						</select>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Fecha de Nacimiento</label>
						<input type="date" class="form-control" name="nacimiento" value="{{$paciente->nacimiento}}" require>
                    </div>
                    <select name="edad" id="">
						@for ($i = 0; $i < 100; $i++)
							<option value="{{$paciente->edad}}">{{$paciente->edad}}</option>
                            <option value='$i'>$i</option>
                        @endfor
                    </select>
				</div><!--fin row 2-->
				<div class="row"><!--inicio row 3-->
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Teléfono</label>
						<input type="text" class="form-control" name="telefono" value="{{$paciente->telefono}}" require>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Sexo</label>
						<select name="sexo" value="{{$paciente->sexo}}" class="form-control" require>
							<option value="">Seleccione</option>
							<option value="Femenino">Femenino</option>
							<option value="Masculino">Masculino</option>
						</select>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Deporte</label>
						<select name="deporte" id="dep" class="form-control">
							<!--lista tab deporte-->
							@foreach (DB::table('deportes')->select('id','depNombre')->get() as $deporte)
							<option value="{{$paciente->deporte_id}}">{{$deporte->depNombre}}</option>
                        		<option value="{{$deporte->id}}">{{$deporte->depNombre}}</option>
                            @endforeach
						</select>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<label for="">Actividad</label>
						<select name="actividad" class="form-control" >
							
							<!--lista tab actividad-->
							@foreach (DB::table('actividads')->select('id','actNombre')->get() as $actividad)
								<option value="{{$paciente->actividad_id}}">{{$actividad->actNombre}}</option>
                        		<option value="{{$actividad->id}}">{{$actividad->actNombre}}</option>
                            @endforeach
						</select>
					</div>
					<div class="form-group col-lg-12 col-sm-12 my-1">
						<label for="">Dirección</label>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="calle" value="{{$paciente->calle}}" placeholder="Nombre calle" require>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="numero" value="{{$paciente->numero}}" require>
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="dpto" value="{{$paciente->dpto}}">
					</div>
					<div class="form-group col-lg-3 col-sm-3 my-1">
						<input type="text" class="form-control" name="comuna" value="{{$paciente->comuna}}">
					</div>
					</div><!--fin row 3-->
            </form><!--fin form-->
            <!--fin vista paciente-->
            <!--vista ficha-->
            <!--encabezado-->
			<div class="row">
				<div class="col-lg-12 col-sm-12 d-flex justify-content-center">
					<label for="nueva" class="h4">Antecedentes Clínicos</label>
				</div>
			</div><!--fin encabezado-->
            <form action=""><!--inicio form-->
            <div class="row"><!--inicio row 4-->
            <!--Pendiente select para ficha-->
					<div class="form-group offset-lg-10 offset-sm-10 col-lg-2 col-sm-3 my-1">
						<label for="">N° Ficha</label>
						<input type="text" class="form-control" name="" id="nficha" placeholder="N°Ficha">
					</div>
				</div><!--fin row 4-->
			<div class="row"><!--inicio row 5-->
				<div class="form-group col-lg-4 col-sm-6 my-1">
					<label for="medico">Médico Tratante</label>
					<input class="form-control" type="text" name="" id="" placeholder="Médico Tratante" require>
					<label for="diagnostico">Diagnóstico</label>
					<input class="form-control" type="text" name="" id="" placeholder="Diagnóstico" require>
				</div>
			</div><!--fin row 5-->
			<div class="row"><!--inicio row 6-->
				<div class="form-group col mb-1">	
					<label for="medicamento">Medicamento</label>
					<textarea class="form-control" id="" rows="5" placeholder="Medicamento" require></textarea>
					<label for="tratamiento">Tratamiento</label>
					<textarea class="form-control" id="" rows="5" placeholder="Tratamiento" require></textarea>
					<label for="ant">Antecedentes Mórbidos</label>
					<textarea class="form-control" id="" rows="10" placeholder="Antecedentes Mórbidos" require></textarea>
				</div>
			</div><!--fin row 6-->
			<div class="row"><!--inicio row 7-->
				<div class="offset-lg-6 col-lg-2 col-sm-2">
				<button type="submit" class="btn" name="guardar">Editar Paciente</button>
				</div>
				<div class="col-lg-2 col-sm-2">
				<button type="submit" class="btn" name="guardar">Editar Ficha</button>
				</div>
				<div class="col-lg-2 col-sm-2">
				<button type="submit" class="btn" name="guardar">Guardar</button>
				</div>
			</div>
			<div class="row"><!--inicio row 8-->
				<div class="offset-lg-8 col-lg-2 col-sm-2">
				<button type="submit" class="btn" name="guardar">Eliminar Ficha</button>
				</div>
				<div class="col-lg-2 col-sm-2">
				<button type="submit" class="btn" name="guardar">Eliminar Paciente</button>
				</div>
			</div>
            </form><!--fin form-->
            <!--fin vista ficha-->
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