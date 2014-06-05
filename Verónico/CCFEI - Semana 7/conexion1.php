<?php
	
	$mysqli=new mysqli("localhost","root","123","controlfei"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	//else{
	//echo"Felicidaddes se logro la conexion";}
?>
