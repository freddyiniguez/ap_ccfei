<?php 
	
	require('conexion.php');
	
	$estado=$_POST['estado'];
	$id=$_GET['id'];
	
	if($estado=="Activo"){
	$query="UPDATE usuario SET estado='$estado' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	}else{
	echo "su estado es",$query1;
	}
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php if($resultado>0){?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>No es posible cambiar el estado del usuario.</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="usuarios_detalles.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				