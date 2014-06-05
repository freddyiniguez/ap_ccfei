<?php 
	
	require('conexion.php');
	$nombre=$_POST['nombre'];
	$apaterno=$_POST['Apaterno'];
	$amaterno=$_POST['Amaterno'];
	$usuario=$_POST['NomUser'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirmacion=$_POST['confirmacion'];
	$rol=$_POST['rol'];
	$estado=$_POST['estado'];
	
if ($nombre=="" AND $apaterno="" AND $amaterno="" AND $usuario="" AND $email="" AND $password="" AND $confirmacion="" AND $rol=""){ 
    //echo '<script type="text/javascript">alert("Por favor, llene todos los campos");</script>';
    echo "hay campos vacios";	
}	
	

 if($password==$confirmacion){
  $query="INSERT INTO usuario (nombre, apepat, apemat, usuario, email, password, confirmacion, rol, estado) VALUES ('$nombre','$apaterno','$amaterno','$usuario','$email','$password','$confirmacion','$rol','$estado')";
  $resultado=$mysqli->query($query);
   //echo '<script type="text/javascript">alert("Sus contraseñas si coinsidieron");</script>'; 
   echo "la contraseniasas coinsiden";
}else { 
echo "Las contraseñas no coinciden";

//echo '<script type="text/javascript">alert("Las contraseñas no coinciden");</script>'; 	

}
	
	
    
	
	 //echo"se inserto ",$nombre;
	 //echo"se inserto ",$apaterno;
	 //echo"se inserto ",$amaterno;
	 //echo"se inserto ",$usuario;
	 //echo"se inserto ",$email;
	 //echo"se inserto ",$password;
	 //echo"se inserto ",$confirmacion;
	 //echo"se inserto ",$rol;
	

?>

<script> 
                           function revisar() { 
                           if(formulario.nombre == "") {alert('Debes poner el nombre') ; return false ; } 
                           if(formulario.Apaterno == "") { alert('Debes poner el apellido paterno') ; return false ; } 
                           if(formulario.email == "") { alert('Debes poner el apellido materno') ; return false ; } 
} </script>  

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
           <?php if($resultado>0){ ?>
				<h1>Usuario Agregado Exitosamente</h1>
				<a href="usuarios.php">Regresar</a>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario no se Registro en la Base de Datos</h1>
				<a href="usuarios.php">Regresar</a>
			<?php	} ?>	
			
	     <p></p>	
		
			
		</center>
	</body>
	</html>	