<!DOCTYPE html>
<html>
<head>
	<title>Control de cursos FEI - Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="UTF-8">	
</head>
<body>
	<!-- INICIO ENCABEZADO Y MENU -->
	<div class="container">
		<div class="page-header">
			<h1>Control de cursos FEI<small>   Administrador</small></h1>
		</div>
	</div>
	<!-- FIN ENCABEZADO Y MENU -->
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="cursos.html">Cursos</a></li>
		  <li class="active">Detalles</li>
		</ol>
		<div class="row">
			<div class="col-md-4">
				<button type="button" class="btn btn-primary">Constancias</button>	
				<a href="cursos_evaluacion.html" class="btn btn-primary" role="button">Evaluación</a>											
			</div>				
		</div>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><b>Estructuras de datos en C++</b></h3>
			</div>
			<div class="panel-body">
				<p>Tipo: </p>
				<p>Estado: </p>
				<p>Más detalles: </p>
				.<br>.<br>.
				<p>Más detalles: </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-md-offset-11">
				<button type="button" class="btn btn-primary">Editar</button>												
			</div>				
		</div>
		<br>			
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Impartido por</h3>
			</div>
			<div class="panel-body">
				<p>Nombre: </p>
				<p>Usuario: </p>
				<p>Más datos: </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-md-offset-11">
				<button type="button" class="btn btn-primary">Editar</button>												
			</div>				
		</div>
		<br>
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Estudiantes inscritos</div>
			<!-- Table -->
			<table class="table table-bordered table-condensed table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Matricula</th>
						<th>Correo electrónico</th>
						<th>Otro dato</th>
					</tr>	
				</thead>				
				<tbody>
					<tr>
						<td>Don Draper</td>
						<td>zs099797687</td>
						<td>juan@perez.com</td>
						<td>Más</td>
					</tr>
					<tr>
						<td>Juan Paco Pedro</td>
						<td>zs09871234</td>
						<td>carlos@ochoa.com</td>
						<td>Menos</td>
					</tr>
					<tr>
						<td>José Juan algo</td>
						<td>zs09871234</td>
						<td>Jose@castillo.com</td>
						<td>e=mc^2</td>
					</tr>						
				</tbody>				
			</table>			
		</div>
		<div class="row">
			<div class="col-md-2 col">
				<a href="cursos.php" class="btn btn-default" role="button">Atrás<a>
			</div>
			
			<div class="col-md-1 col-md-offset-9">
			<button type="button" class="btn btn-primary">Editar</button>	

            </div>	
			
			<div class="col-md-3 col-md-offset-5">
			<button type="button" class="btn btn-primary">Incribir Alumno</button>	</div>	
			
			
			
			
		</div>
	</div>
	<br>
</body>
</html>