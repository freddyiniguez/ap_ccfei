<?php 
	
	require('conexion1.php');
	$nombre=$_POST['nombre'];
	$apaterno=$_POST['Apat'];
	$amaterno=$_POST['Amat'];
	$email=$_POST['email'];
	
	
   if($resultado['nombre']!=$usuario and $resultado['apepat']!=$apaterno){
   $query="INSERT INTO alumno (nombre, apepat, apemat, correo_electronico) VALUES ('$nombre','$apaterno','$amaterno','$email')";
  $resultado=$mysqli->query($query);
}else{echo "ya existe un alumno registrado con el mismo nombre y apellidos verifique sus datos por favor";}
if ($nombre==''){ 
    echo '<script type="text/javascript">alert("El campo Nombre* es obligatorio");</script>'; 
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
<?php
if ($nombre==""){ 
    echo '<script type="text/javascript">alert("El campo Nombre* es obligatorio");</script>'; 
}


?>


<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
           <?php if($resultado>0){ ?>
				<h1>Alumno agregado exitosamente</h1>
				<?php }else{ ?>
				<h1>Alumno no agregado</h1>		
			<?php	} ?>	
			
	     
		<a href="alumnos.php">Regresar</a>
			
			
		</center>
	</body>
	</html>	