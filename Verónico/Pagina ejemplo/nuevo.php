<html>
	<head>
		 <title>Usuarios</title>
		 <link rel="stylesheet" href="estilo2.css" type="text/css">
        <style type="text/css"></style>
		
	</head>
	
	
	<body>
		<center><h1>Nuevo Usuario</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuario.php"> 
			 <table width="50%">
				<tr>
					<td width="20"><b>Usuario:</b></td>
					<td width="30"><input type="text" name="usuario" size="25" /></td>
				</tr>
				
				<tr>
					<td><b>Password:</b></td>
					<td><input type="password" name="password" size="25" /></td>
				</tr>
				
				<tr>
					<td><b>Email:</b></td>
					<td><input type="text" name="email" size="25" /></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
					
					<td colspan="2"><center><input type="reset" name= "borrar" value="Borrar todo" /> </center> </td>
				    <a href="index.php"><input type="button" name="cancel" value="Cancelar" /></a>
				
				</tr>
				
			</table>
	
			</body>
</html>						