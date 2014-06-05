<?php
session_start();
if(isset($_SESSION['username'])){ echo"Puedes ver esta pagina"; ?>
<html>
<head>
	<title>Control de cursos FEI</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1>Control de cursos FEI<small>   Académico</small></h1>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-pills">
			<li><a href="maestro.html">Home</a></li>
			<li class="active"><a href="#">Estudiantes</a></li>
			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Opciones <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li><a href="#">Opción1</a></li>
			      <li><a href="#">Opción2</a></li>		
			      <li class="divider"></li>
			       <?php echo"<li><a href=destruir.php>Cerrar Sesion</a></li>";?>
			      
			    </ul>
			 </li>		
		</ul>
	</div>
	<!-- FIN DEL ENCABEZADO Y MENU -->
	<br>
	<div class="container">		
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><b>Estudiantes inscritos en el curso</b></div>
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
			<div class="col-md-3">
				<button type="button" class="btn btn-primary">Asistencia</button>
				<button type="button" class="btn btn-primary">Evaluación</button>												
			</div>				
		</div>	
	</div>
	<!-- Javascript -->
	<script type="text/javascript" src='js/jquery-2.1.0.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
</body>
</html>

<?php  }else{
echo "no puedes ver esta pagina Restringida , inicia sesion"; 
echo"<li><a href=index.php>Regresar</a></li>";} ?>




