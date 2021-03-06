<?php
	require('conexion.php');
	
	$query="SELECT usuario, nombre, Email, rol, estado FROM usuario";
	
	$resultado=$mysqli->query($query);
	
?>

  
<html>

<head>
	<title>Control de cursos FEI - Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="UTF-8">	
</head>

<body>
	<!-- ENCABEZADO Y MENU -->
	<div class="container">
		<div class="page-header">
			<h1>Control de cursos FEI<small>Administrador</small></h1>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-pills">
			<li><a href="admin.html">Home</a></li>
			<li><a href="cursos.html">Cursos</a></li>
			<li class="active"><a href="#">Usuarios</a></li>
			<li><a href="alumnos.html">Alumnos</a></li>
			<li><a href="estadisticas.html">Estadisticas</a></li>
			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			      Opciones <span class="caret"></span>
			    </a>
			    <ul class="dropdown-menu">
			      <li><a href="#">Opción1</a></li>
			      <li><a href="#">Opción2</a></li>		
			      <li class="divider"></li>
			      <li><a href="#">Cerrar sesión</a></li>
			    </ul>
			 </li>	
		</ul>		
	</div>
	
	
	<!-- TABLA DE USUARIOS REGISTRADOS -->
	<div class="container">
		<div class="row">
			<br>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Usuarios registrados</div>
					<table class="table table-bordered table-condensed table-hover">
					
				<!-- Inicion del codigo de la Tabla-->	
				
						<thead>
							<tr>
							    <!--<td><b>Usuario</b></td>
								<td><b>Nombre</b></td>
								<td><b>Correo electronico</b></td>
								<td><b>Rol</b></td>
								<td><b>Estado</b></td>-->
								
								<th>Usuario</th>
								<th>Nombre</th>
								<th>Correo electrónico</th>
								<th>Rol</th>
								<th>Estado</th>
							</tr>	
							
						</thead>				
						
						<tbody>
						
						<?php while($row=$resultado->fetch_assoc()){ ?>
						
							<tr>
							
							    <td><a href="usuarios_detalles.php"> <?php echo $row['usuario']; ?> </a></td>
								<td><?php echo $row['nombre']; ?></td>
								<td> <?php echo $row['Email'];?></td>
								<td><?php echo $row['rol']; ?></td>
								<td><?php echo $row['estado']; ?></td>
								
					
								
							</tr>
							<?php } ?>
						</tbody>	
									
					</table>							
				</div>
			</div>
		</div>
	</div>
	<!-- FIN DE TABLA -->
	
	
	<!-- BOTONES PARTE INFERIOR -->
	<div class="container">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Añadir usuario</button>
				</div>				
			</div>					
	</div>
	
	
	<!-- VENTANA MODAL USUARIOS_AÑADIR -->
	
		<div class="container">
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Añadir usuario nuevo</h4>
						</div>
						<div class="modal-body">							
						
							<!-- FORMULARIO  -->
							
						   
							<form class="form-horizontal" name="formulario" method="POST" action="guarda_usuario.php" onsubmit="return revisar()">  
			               <!--<form name="formulario" method="post" action="procesar.php" onsubmit="return revisar()"> -->
						   <!---------------------------->
								<div class="form-group">
								   <label for="nombre" class="col-sm-3 control-label">Nombre</label>
									
									<div class="col-sm-8">
										<input type="text" class="form-control" name="nombre" placeholder="Nombre">
									</div>
									
								</div>
							<!------------------------------------->	
								<div class="form-group">
								
									<label for="Apaterno" class="col-sm-3 control-label">Apellido paterno</label>
									
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Apaterno" placeholder="Apellido paterno">
									</div>
									
								</div>
							<!------------------------------>	
								<div class="form-group">
								
									<label for="Amaterno" class="col-sm-3 control-label">Apellido materno</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Amaterno" placeholder="Apellido materno">
									</div>										
								</div>
							<!---------------------------->	
								<div class="form-group">
									<label for="NomUser" class="col-sm-2 col-sm-offset-1 control-label">Usuario</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="NomUser" placeholder="Nombre de usuario">
									</div>										
								</div>
							<!---------------------------->	
								<div class="form-group">
									<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" placeholder="Correo electrónico">									
									</div>
								</div>
							<!----------------------------->	
								<div class="form-group">
									<label for="password" class="col-sm-2 col-sm-offset-1 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>
								</div>
							<!--------------------------->	
								<div class="form-group">
									<label for="confirmacion" class="col-sm-3 control-label">Confirmación</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="confirmacion" placeholder="Confirmar password">
										
										
									</div>
								</div>
							<!------------------------->
								<div class="form-group">
									<label for="rol" class="col-sm-2 col-sm-offset-1 control-label">Rol</label>
									
									<div class="col-sm-4">
										<select class="form-control" name="rol">
											<option>Academico</option>
											<option>Administrador</option>										  
										</select>
									</div>
								</div>
							<!------------------------------>
							<div class="form-group">
									<label for="estado" class="col-sm-2 col-sm-offset-1 control-label">Estado</label>
									
									<div class="col-sm-4">
										<select class="form-control" name="estado">
											<option>Activo</option>
											<option>Inactivo</option>										  
										</select>
									</div>
								</div>
								
								
							<!-------------------------->	
							
					      <div class="modal-footer">	
						 <!--<a href="mod_usuario.php" class="btn btn-primary">Confirmar</button><a>-->
							<button type="submit" class="btn  btn-primary">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					     </div>		
							<!-------------->
							
							</form>
						</div>
						
						
				
					</div>
				</div>
			</div>			
		</div>	
		
		
	<!-- Javascript -->
	<script type="text/javascript" src='js/jquery-2.1.0.js'>
                           function revisar() { 
                           if(formulario.nombre == "") { alert('Debes poner el nombre') ; return false ; } 
                           if(formulario.Apaterno == "") { alert('Debes poner el Apellido Paterno') ; return false ; } 
                           if(formulario.Amaterno == "") { alert('Debes poner el Apellido Materno') ; return false ; } 
                               } 
     </script>  
	<script type="text/javascript" src='js/jquery-2.1.0.js'></script>-->
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
  
</body>
</html>

