<?php
	require('conexion1.php');
	$usuario=$_GET['id']; ///imprime la variable usuario que con tiene un ide del usuario
  $query="SELECT usuario, nombre, Email, rol, estado FROM usuario";
	
	   $resultado=$mysqli->query($query);
	
	
?>


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
			<?php echo $usuario;?>
			<?php echo $nombre;?>
			
		</div>
	</div>
	<!-- FIN ENCABEZADO Y MENU -->
	
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="usuarios.php">Usuarios</a></li>
		  <li class="active">Detalles</li>
		</ol>
		<!-------------------------->
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><b>Información de cuenta</b></h3>
			</div>
			<div class="panel-body">
			
			
			
			
				<p>Usuario  :<?php echo $usuario;?></p>
				<p>Correo electrónico  :<?php echo $row['Email'];?> </p>
				<p>Rol:<?php echo $row['rol']; ?></p>				
				<p>Estado  :<?php echo $row['estado']; ?></p>
				
			</div>
		</div>
			
		<!--------------------------->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><b>Datos personales</b></h3>
			</div>
			<div class="panel-body">
			<?php if($row=$resultado->fetch_assoc()){ ?>
				<p>Nombre: <?php echo $row['nombre']; ?></p>
				<p>Dirección: </p>
				<p>Correo alternativo: </p>
				<p>Más datos: </p>
			<?php } ?>
			
			
			</div>
		</div>			
	</div>
	<!----------------------------->
	<div class="container">
		<div class="row">
			<div class="col-md-1">
				<a href="usuarios.php" class="btn btn-default" role="button">Atrás<a>
			</div>		
			
			<!------------------------->
			<div class="col-md-4 col-md-offset-7">
				<button class="btn btn-info" data-toggle="modal" data-target="#cambiarEstado">Cambiar estado</button>			
				<button class="btn btn-danger" data-toggle="modal" data-target="#cambiarContrasenia">Cambiar contraseña</button>			
			</div>		
		</div>					
	</div>
	<!------------------------------>
	
	<div class="container">
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="cambiarEstado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			
				<div class="modal-dialog modal-sm">
				
					<div class="modal-content">
					<!----------------------------->
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Confirmar cambio de estado</h4>
						</div>
					<!---------------------------->	
					<?php
                      if($row['estado']=='Activo'){?>
 
						<div class="modal-body">	
							<p>El estado del usuario <b><?php echo $row['usuario']; ?></b> cambiará de <b><?php echo $row['estado']; ?></b> a <b>inactivo</b>, ¿está seguro?</p>				
						</div>
						
						
						<?php 
						}
						?>
					<!-------------------------->	
					<?php
                      if($row['estado']=='Inactivo'){?>
 
						<div class="modal-body">	
							<p>El estado del usuario <b><?php echo $row['usuario']; ?></b> cambiará de <b><?php echo $row['estado']; ?></b> a <b>Activo</b>, ¿está seguro?</p>				
						</div>
						
						
						<?php
						}
						?>
					
					
					
					
					
					
					<!---------------------------->
						<div class="modal-footer">
						
							<a href="mod_usuario.php" class="btn btn-primary">Confirmar</button><a>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
					<!------------------------------->	
					</div>
				</div>
			</div>			
		</div>	
		
		<!------------------------------>
		<div class="container">
		<?php echo $usuario;?>
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="cambiarContrasenia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Cambiar contraseña</h4>
						</div>
						<div class="modal-body">	
						
						
						
							<!-- FORMULARIO AQUÍ -->
							<form class="form-horizontal" name="formulario" method="POST" action="mod_usuario11.php">
							
							<!--<form class="form-horizontal"role="form">-->
							<!----------------------------------------------->
							
							 <!------------------------------------------->  
							   <!--<input type="hidden" class="col-sm-3 control-label" name="id"value="<//?php echo $id;?>">-->
							    <input type="hidden" name="id" value="">
								<!------------------------------------->
								<div class="form-group">
								 <label for="password" class="col-sm-3 control-label">Contraseña Anterior</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password1" placeholder="Contraseña Anterior">
										
									</div>										
								</div>
								
								<!----------------------------------->
								<div class="form-group">
								 <label for="password" class="col-sm-3 control-label">Contraseña</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password2" placeholder="Contraseña">
										
									</div>										
								</div>
								
							<!--------------------->	
								<div class="form-group">
									<label for="confirmacion" class="col-sm-3 control-label">Confirmar</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="confirmacion" placeholder="Confirmar contraseña">
									</div>										
								</div>		
							<!------------------------>	
								<p>Porfavor, asegurese de anotar esta contraseña en un lugar seguro</p>		
						<div class="modal-footer">
						
							<button type="submit" class="btn btn-primary">Cambiar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
								
							</form>
							
							<!----TERMINA FORMULARIO-->
												
						</div>
					</div>
				</div>
			</div>			
		</div>	
	<br>
	<!-- Javascript -->
	<script type="text/javascript" src='js/jquery-2.1.0.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
</body>
</html>