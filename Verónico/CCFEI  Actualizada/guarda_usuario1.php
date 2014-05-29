<?
   require('conexion.php');
// Obtener valores introducidos en el formulario
   $insertar = $_POST['insertar'];
   $nombre=$_POSTST['nombre'];
   $apaterno=$_POST['Apaterno'];
   $amaterno=$_POST['Amaterno'];
   $usuario=$_POST['NomUser'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirmacion=$_POST['confirmacion'];
   $rol=$_POST['rol'];
   $estado=$_POST['estado'];
   $insertar=$_POST['insertar'];
   $Formulario=$_POST['formulario'];
	
	if (isset ( $_POST['insertar']) ) 
{ 
   if ( $_POST['password'] == $_POST['confirmacion']) 
   { 
      echo "Aquí pones lo que quieras si son iguales"; 
   
      
	$query="INSERT INTO usuario (nombre, apepat, apemat, usuario, email, password, confirmacion, rol, estado) VALUES ('$nombre','$apaterno','$amaterno','$usuario','$email','$password','$confirmacion','$rol','$estado')";
    $resultado=$mysqli->query($query);
}else{
echo "las con traseñas no coinsiden";}
}
	?>
<script language="JavaScript">
function validar_campos(){             
			if (formulario.password.value == ""){
				    alert("Complete la Contraseña");
					formulario.password.focus();
			return (false);
					}
					
				if (formulario.password.value.length < 4){
					alert("La contraseña debe ser mayor de 4 digitos")
					formulario.password.focus();
				return (false);
							}

if (formulario.password.value == ""){
alert("Debe confirmar la contraseña");
formulario.password.focus();
return (false);
} 

if (formulario.password.value != formulario.confirmacon.value){
alert("La contraseña confirmada no concuerda con la contraseña escrita");
formulario.password.focus();
return (false);
}
</script> 
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
	