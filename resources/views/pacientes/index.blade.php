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
        <!--Inicio container-->
        <div class="container">
        <div class="row">
            <div class="col-lg-10 col-sm-10">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Teléfono</th>
                    <th>Previsión</th>
                    <th>Dirección</th>
                    <th>Actividad</th>
                    <th>Deporte</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>            
                @foreach($pacientes as $paciente)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$paciente->rut}}</td>
                    <td>{{$paciente->nombre.(' ').$paciente->apellidoP.(' ').$paciente->apellidoM}}</td>
                    <td>{{$paciente->nacimiento}}</td>
                    <td>{{$paciente->edad}}</td>
                    <td>{{$paciente->sexo}}</td>
                    <td>{{$paciente->telefono}}</td>
                    <td>{{$paciente->prevision}}</td>
                    <td>{{$paciente->calle.(' ').$paciente->numero.(' ').$paciente->depto.(', ').$paciente->comuna}}</td>
                    
                   
                    
                    <td>{{$paciente->actividad_id}}</td>
                    <td>{{$paciente->deporte_id}}</td>
                        <td><a class="btn btn-warning" href="{{url('/pacientes/'.$paciente->id.'/edit')}}">Editar</a>
                        
                        

                    <form action="{{ url('/pacientes/'.$paciente->id ) }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    
                        <button class="btn" type="submit" onclick="return confirm('¿Desea eliminar el registro?');">Eliminar</button>
                    </form> 
                                        
                    <form action="{{ url('/fichas/') }}" method="GET" style="display:inline">
                        {{ csrf_field() }}                        
                            <button class="btn" type="submit" onclick="">Ver Fichas</button>
                        </form> 
                        @endforeach
                    </td>
                </tr>
                
            </tbody>
        </table>
        </div>
        </div>
    <form action="{{url('/pacientes/create')}}" method="get">
        <div class="row">
            <div class="offset-lg-10 col-lg-2 offset-sm-10 col-sm-2">
                <button class="btn" >Nuevo Paciente</button>
            </div>
        </div>
        </form>
    </div> <!--fin container-->
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