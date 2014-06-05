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
			<li class="active"><a href="#">Home</a></li>
			<li><a href="cursos.php">Cursos</a></li>
			<li><a href="usuarios.php">Usuarios</a></li>
			<li><a href="alumnos.php">Alumnos</a></li>
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
	<!-- FIN ENCABEZADO Y MENU -->
	<br>
	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-body">
		    <p class="lead">Bienvenido al panel de control de Administración de cursos de la Facultad de Estadística e Informática</p>
		    <p class="lead">Actualmente hay <b>2</b> cursos activos</p>
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
echo"<li><a href=index.php>Regresar</a></li>"; } ?>