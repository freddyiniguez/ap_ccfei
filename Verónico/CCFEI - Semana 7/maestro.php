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
			<li class="active"><a href="#">Home</a></li>
			<li><a href="estudiantes.php">Estudiantes</a></li>
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
	<br>
	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-body">
		    <p class="lead">Bienvenido al panel de control de Académicos de la Facultad de Estadística e Informática</p>
		    <p class="lead">Actualmente eres titular del curso: <b>Estructuras de datos en C++</b></p>
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
