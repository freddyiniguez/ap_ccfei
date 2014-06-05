<?php
require ("conexion.php");
//include
$nombre=$_POST['nombre'];
$Fecha_de_Inicio=$_POST['Fecha_de_Inicio'];
$Fecha_de_Termino=$_POST['Fecha_de_Termino'];
$Tipo=$_POST['Tipo'];
$Salon=$_POST['Salon'];
$Horario=$_POST['Horario'];
$Numero_de_Seciones=$_POST['Numero_de_Seciones'];

$query="INSERT INTO cursos (nombre, tipo, salon, horario, fecha_inicio, fecha_conclusion, num_seciones) VALUES ('$nombre','$Tipo','$Salon','$Horario','$Fecha_de_Inicio','$Fecha_de_Termino','$Numero_de_Seciones')";
$resultado=$mysqli->query($query);


?>
<html>
	<head>
		<title>Guardar usuario</title>
		
	</head>
	<body>
		<center>	
			
           <?php if($resultado>0){ ?>
				<h1>Usuario Agregado Exitosamente</h1>
				<a href="cursos.php">Regresar</a>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario no se Registro en la Base de Datos</h1>
				<a href="cursos.php">Regresar</a>
			<?php	} ?>	
			
	     <p></p>	
		
			
		</center>
	</body>
	</html>		
	