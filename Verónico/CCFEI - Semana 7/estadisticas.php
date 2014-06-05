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
	<!-- INICIO ENCABEZADO Y MENU -->
	<div class="container">
		<div class="page-header">
			<h1>Control de cursos FEI<small>   Administrador</small></h1>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-pills">
			<li><a href="admin.php">Home</a></li>
			<li><a href="cursos.php">Cursos</a></li>
			<li><a href="usuarios.php">Usuarios</a></li>
			<li><a href="alumnos.php">Alumnos</a></li>
			<li class="active"><a href="#">Estadísticas</a></li>			
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
	<!-- FIN ENCABEZADO Y MENU -->
	<br>
	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-body">
		    <p class="lead">En esta sección puedes consultar información histórica sobre cursos, usuarios, estudiantes y sus respectivas evaluaciones y duración</p>
		  </div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="container">
						<div class="row">
							<br>
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="info" class="col-md-2 control-label">Información</label>
									<div class="col-md-3">
										<select class="form-control">
											<option>Cursos</option>
											<option>Usuarios</option>
											<option>Evaluaciones</option>
											<option>Estudiantes</option>										  
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="fechaInicio" class="col-md-2 control-label">Desde</label>
									<div class="col-md-3">
										<input type="date" class="form-control" id="inputPassword3" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label for="fechaFin" class="col-md-2 control-label">Hasta</label>
									<div class="col-md-3">
										<input type="date" class="form-control" id="inputPassword3" placeholder="Password">
									</div>
								</div>				  			  
								<div class="form-group">
									<div class="col-md-2 col-md-offset-3">
										<button type="submit" class="btn btn-primary">Obtener</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
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
} ?>
