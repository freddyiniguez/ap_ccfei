<html>	
<head>
	<title>Control de cursos FEI</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1>Control de cursos FEI<small> Inicio de sesión</small></h1>
		</div>
	</div>
	<!-- FORMULARIO DE INICIO DE SESIÓN -->
	<div class="container">
		<div class="row"> 
		<!--validacion.php-->
		
		<form class="form-horizontal"role="form" action="ingreso_al_sistema.php" method="POST">
		
		<!--------------------------->
			<div class="form-group">
				<label for="usuario" class="col-md-2 col-md-offset-3 control-label">Usuario</label>
				<div class="col-md-3">
					<input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario"required>
				</div>										
			</div>
		<!-------------------------->	
			<div class="form-group">
				<label for="password" class="col-md-2 col-md-offset-3 control-label">Contraseña</label>
				<div class="col-md-3">
					<input type="password" class="form-control" name="password" placeholder="Contraseña"required>
				</div>
			</div>
		<!--------------------------->
             <div class="form-group">
	         <label for="rol" class="col-sm-2 col-sm-offset-3 control-label">Rol</label>
									 <div class="col-md-3">
										<select class="form-control" name="rol">
											<option>Academico</option>
											<option>Administrador</option>										  
										</select>
									</div>
								</div>
			
		<!------------------------>	
			<button type="submit" class="btn btn-primary col-md-1 col-md-offset-6">Entrar</button>
		</form>
		</div>
	</div>
</body>
</html>