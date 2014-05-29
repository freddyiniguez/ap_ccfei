<?php
	require('conexion.php');
	
	$query="SELECT id, usuario, email, password FROM usuarios";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" href="estilo1.css" type="text/css">
        <style type="text/css"></style>
	</head>
	<body>
		
		<center><h1>Usuarios</h1></center>
		
		<a href="nuevo.php">Nuevo usuario</a>
                <a href="index.html">Salir</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
				    <td><b>ID</b></td>
					<td><b>Usuario</b></td>
					<td><b>Email</b></td>
					<td><b>Password</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
							<td><?php echo $row['id'];?>
							</td>
					
						
							<td><?php echo $row['usuario'];?>
							</td>
							
							<td>
								<?php echo $row['email'];?>
							</td>
							
							<td><?php echo $row['password']; ?>
							</td>
							
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
