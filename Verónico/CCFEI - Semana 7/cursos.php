<?php
	require('conexion1.php');
	
	$query="SELECT nombre, tipo, salon, horario, fecha_inicio, fecha_conclusion, num_seciones FROM cursos";
	
	$resultado=$mysqli->query($query);



?>
<?php
session_start();
if(isset($_SESSION['username'])){ echo"Puedes ver esta pagina"; ?>

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
	<div class="container">
		<ul class="nav nav-pills">
			<li><a href="admin.php">Home</a></li>
			<li class="active"><a href="#">Cursos</a></li>
			<li><a href="usuarios.php">Usuarios</a></li>
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
	<!-- FIN ENCABEZADO Y MENU -->
	<div class="container">
		<div class="row">
			<br>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Cursos registrados</div>
					<table class="table table-bordered table-condensed table-hover">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Estado</th>
								<th>Fecha Inicio</th>
								<th>Fecha Conclusión</th>						
							</tr>	
						</thead>	

						
						<tbody>
							<?php while($row=$resultado->fetch_assoc()){ ?>
						
						
							<tr>
							<!--para que puedas tienes que me terlo en detalles y que muestr la tabla-->
							    <td>
								<a href="cursos_detalles.php?id=<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></a>
							    </td>
								<td><?php echo $row['tipo'];?></td>
								<td><?php echo $row['Estado']; ?></td>
								<td> <?php echo $row['fecha_inicio'];?></td>
								<td><?php echo $row['fecha_conclusion']; ?></td>
								
								
								
								
					
								
							</tr>
							<?php } ?>
							
												
						</tbody>				
					</table>							
				</div>
			</div>
		</div>
	</div>
	<!-- BOTONES DE OPCIONES -->
	<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
				<button class="btn btn-success" data-toggle="modal" name="bot" data-target="#myModal">Registrar curso</button>
				   											
				<button type="button" class="btn btn-danger">Eliminar</button>
				</div>				
			</div>					
	</div>
	<!-- FIN -->
	
	<div class="container">
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Añadir Curso nuevo</h4>
						</div>
						<div class="modal-body">							
						
							<!-- FORMULARIO  -->
							
						   
							<form class="form-horizontal" name="formulario" method="POST" action="guarda_curso.php" onsubmit="return revisar()">  
			               <!--<form name="formulario" method="post" action="procesar.php" onsubmit="return revisar()"> -->
						   <!---------------------------->
						   <?php echo "es:,$usuario"; ?> 
								<div class="form-group">
								   <label for="nombre" id="mensaje1" class="col-sm-3 control-label">Nombre de Curso</label>
									
									<div class="col-sm-8">
									<input type="nombre" class="form-control" name="nombre" placeholder="Nombre de Curso"required>
										
										
									</div>
								</div>
		
							<!------------------------------------->	
								<div class="form-group">
								
									<label for="Apaterno" class="col-sm-3 control-label">Fecha de Inicio</label>
									
									<div class="col-sm-8">
										<input type="date" class="form-control" name="Fecha_de_Inicio" placeholder="Fecha de Inicio"required>
									</div>
									
								</div>
								
								
							<!------------------------------>	
								<div class="form-group">
								
									<label for="Amaterno" class="col-sm-3 control-label">Fecha de Termino</label>
									<div class="col-sm-8">
										<input type="date" class="form-control" name="Fecha_de_Termino" placeholder="Fecha de Termino"required>
									</div>										
								</div>
							
							<!---------------------------->	
								<div class="form-group">
									<label for="email" class="col-sm-2 col-sm-offset-1 control-label">Tipo</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Tipo" placeholder="Tipo"required>									
									</div>
								</div>
							<!----------------------------->	
								<div class="form-group">
									<label for="salom" class="col-sm-2 col-sm-offset-1 control-label">Salon</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Salon" placeholder="Salon"required>
									</div>
								</div>
							<!--------------------------->	
								<div class="form-group">
									<label for="confirmacion" class="col-sm-3 control-label">Horario</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Horario" placeholder="Horario"required>
										
										
									</div>
								</div>
								
								<div class="form-group">
									<label for="confirmacion" class="col-sm-3 control-label">Numero de Seciones</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="Numero_de_Seciones" placeholder="Numero de Seciones"required>
										
										
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
	<script type="text/javascript" src='js/jquery-2.1.0.js'></script>
	<script type="text/javascript" src='js/bootstrap.min.js'></script>
</body>
</html>

<?php  }else{
echo "no puedes ver esta pagina Restringida , inicia sesion"; 
echo"<li><a href=index.php>Regresar</a></li>";} ?>
