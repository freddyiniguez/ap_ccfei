<?php
	require('conexion1.php');
	
	$query="SELECT idusuario, usuario, nombre, Email, rol, estado FROM usuario";
	
	$resultado=$mysqli->query($query);
	 
	 
	 ////////////////////////////
	 //global $a;
	  //$usuario=$_GET['usuario'];
	  
	  
//function Suma(){
  //  global $a, $b;

    //$b = $a + $b;
	//}


?>
 <?php
session_start();
if(isset($_SESSION['username'])){ echo"Puedes ver esta pagina"; ?>
 
<html>

<head>
	<title>Control de cursos FEI - Usuarios</title>
	<script type="text/javascript">
	
 <!-- alert("Un mensaje de prueba");-->
  if (formulario.password.value.length < 4){
					alert("La contraseña debe ser mayor de 4 digitos")
					formulario.password.focus();
				return (false);
							}
</script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="UTF-8">	
<script TYPE="TEXT/JavaScript">
function validar_campos(){             
			if (formulario.password.value == ""){
				    alert("Complete la Contraseña");
					formulario.password.focus();
			return (false);
					}
					
				if (formulario.password.value.length < 4){
					alert("La contraseña debe ser mayor de 4 digitos")
					formulario.password.focus();
				return (false);
							}

if (formulario.password.value == ""){
alert("Debe confirmar la contraseña");
formulario.password.focus();
return (false);
} 

if (formulario.password.value != formulario.confirmacon.value){
alert("La contraseña confirmada no concuerda con la contraseña escrita");
formulario.password.focus();
return (false);
}
</script> 
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
			<li><a href="admin.php">Home</a></li>
			<li><a href="cursos.php">Cursos</a></li>
			<li class="active"><a href="#">Usuarios</a></li>
			<li><a href="alumnos.php">Alumnos</a></li>
			<li><a href="estadisticas.php">Estadisticas</a></li>
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
							<!--para que puedas tienes que me terlo en detalles y que muestr la tabla-->
							    <td>
								<a href="usuarios_detalles.php?id=<?php echo $row['usuario'];?>"> <?php echo $row['usuario'];?></a>
							    </td>
								
								<td><?php echo $row['nombre'];?></td>
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
					<button class="btn btn-success" data-toggle="modal" name="bot" data-target="#myModal">Añadir usuario</button>
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
							
						   
							<form class="form-horizontal" name="formulario" method="POST" action="guarda_usuario1.php" onsubmit="return revisar()">  
			               <!--<form name="formulario" method="post" action="procesar.php" onsubmit="return revisar()"> -->
						   <!---------------------------->
						   
						  
						   
								<div class="form-group">
								   <label for="nombre" id="mensaje1" class="col-sm-3 control-label">Nombre</label>
									
									<div class="col-sm-8">
									<input type="nombre" class="form-control" name="nombre" placeholder="Nombre"required>
										
										
									</div>
								</div>
								
							<!------------------------------------->	
								<div class="form-group">
								
									<label for="Apaterno" class="col-sm-3 control-label">Apellido paterno</label>
									
									<div class="col-sm-8">
										<input type="Apaterno" class="form-control" name="Apaterno" placeholder="Apellido paterno"required>
									</div>
									
								</div>
							<!------------------------------>	
								<div class="form-group">
								
									<label for="Amaterno" class="col-sm-3 control-label">Apellido materno</label>
									<div class="col-sm-8">
										<input type="Apellido" class="form-control" name="Amaterno" placeholder="Apellido materno"required>
									</div>										
								</div>
							<!---------------------------->	
								<div class="form-group">
									<label for="NomUser" class="col-sm-2 col-sm-offset-1 control-label">Usuario</label>
									<div class="col-sm-8">
										<input type="NomUser" class="form-control" name="NomUser" placeholder="Nombre de usuario"required>
									</div>										
								</div>
							<!---------------------------->	
								<div class="form-group">
									<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" placeholder="Correo electrónico"required>									
									</div>
								</div>
							<!----------------------------->	
								<div class="form-group">
									<label for="password" class="col-sm-2 col-sm-offset-1 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" placeholder="Password"required>
									</div>
								</div>
							<!--------------------------->	
								<div class="form-group">
									<label for="confirmacion" class="col-sm-3 control-label">Confirmación</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="confirmacion" placeholder="Confirmar password"required>
										
										
									</div>
								</div>
								
<script language="JavaScript">
function validar_campos(){             
			if (formulario.password.value == ""){
				    alert("Complete la Contraseña");
					formulario.password.focus();
			return (false);
					}
					
				if (formulario.password.value.length < 4){
					alert("La contraseña debe ser mayor de 4 digitos")
					formulario.password.focus();
				return (false);
							}

if (formulario.password.value == ""){
alert("Debe confirmar la contraseña");
formulario.password.focus();
return (false);
} 

if (formulario.password.value != formulario.confirmacon.value){
alert("La contraseña confirmada no concuerda con la contraseña escrita");
formulario.password.focus();
return (false);
}
</script> 
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
							<button type="submit" class="btn  btn-primary" name="insertar">Guardar</button>
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

<?php  }else{
echo "no puedes ver esta pagina Restringida , inicia sesion"; 
echo"<li><a href=index.php>Regresar</a></li>";} ?>

