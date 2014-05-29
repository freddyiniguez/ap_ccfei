<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$password=$_POST['password'];
	$confirmacion=$_POST['confirmacion'];
	
	$query="UPDATE usuario SET password='$password' ,confirmacion='$confirmacion' WHERE idusuario='$id'";
	
	$resultado=$mysqli->query($query);
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){?>
				
				<h1>La contraseña ha sido cambiada</h1>
				
					<?php echo "$password","$id","$confirmacion";	}else{ ?>
				
				<h1>Lo sentimos Por el momento no es posible actualizar la contraseña. Intente más tarde</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="usuarios_detalles.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				