<?php

require('conexion1.php');
	
	$query="SELECT nombre, apepat, apemat, correo_electronico, estado FROM alumno";
	
	$resultado=$mysqli->query($query);


?>
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
			<li class="active"><a href="#">Alumnos</a></li>
			<li><a href="estadisticas.php">Estadísticas</a></li>			
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
	<!-- TABLA DE ALUMNOS REGISTRADOS -->
	<div class="container">
		<div class="row">
			<br>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Alumnos registrados</div>
					<table class="table table-bordered table-condensed table-hover">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido paterno</th>
								<th>Apellido materno</th>
								<th>e-mail</th>
								<th>Estado</th>
							</tr>	
						</thead>				
						<tbody>
							<?php while($row=$resultado->fetch_assoc()){ ?>
						
						
							<tr>
							<!--para que puedas tienes que me terlo en detalles y que muestr la tabla-->
							    <td>
								<a href="usuarios_detalles.html?id=<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></a>
							    </td>
								 <td><?php echo $row['apepat'];?></td>
								<td><?php echo $row['apemat']; ?></td>
								<td> <?php echo $row['correo_electronico'];?></td>
								<td><?php echo $row['estado']; ?></td>
								
								
								
					
								
							</tr>
							<?php } ?>
							
											
						</tbody>				
					</table>							
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Añadir alumno</button>
				</div>				
			</div>					
	</div>
	<!-- VENTANA MODAL USUARIOS_AÑADIR -->
		<div class="container">
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Añadir alumno nuevo</h4>
						</div>
						<div class="modal-body">							
						
							<!-- FORMULARIO  -->
							
						<form class="form-horizontal" name="formulario" method="POST" action="guarda_alumno.php">	
							<!----------------------->
								<div class="form-group">
									<label for="nombre" class="col-sm-3 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="nombre" placeholder="Nombre"required>
									</div>										
								</div>
							<!------------------------->	
								
								<div class="form-group">
									<label for="Apat" class="col-sm-3 control-label">Apellido paterno</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Apat" placeholder="Apellido paterno"required>
									</div>										
								</div>
							<!------------------------------>	
								<div class="form-group">
									<label for="Amat" class="col-sm-3 control-label">Apellido materno</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Amat" placeholder="Apellido materno"required>
									</div>										
								</div>
								
							<!-------------------------->	
								<div class="form-group">
									<label for="email" class="col-sm-2 col-sm-offset-1 control-label">E-Mail</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" placeholder="E-Mail"required>
									</div>										
								</div>	
							<!--------------------------->	
							
							<div class="modal-footer">
							
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
							
							
							
							<!---------------------------->
							</form>
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
echo"<li><a href=index.php>Regresar</a></li>";} ?>

