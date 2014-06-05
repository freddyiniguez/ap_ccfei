<?
require('conexion.php');

$usuario=$_POST['usuario'];
$password=$_POST['password'];
//vemos si el usuario y contraseña son válidos
$user="SELECT  usuario FROM usuario WHERE ";
$pass="SELECT  password FROM usuario WHERE usuario =$usuario";


?>
<html>
	<head>
		<title>Validacion</title>
	</head>
	<body>
		<center>	
		
<?		

if ($_POST["usuario"]==$user and $_POST["password"]==$pass){
   echo "usuario y contraseña válidos";
   header('Location: http://localhost/CCFEI/admin.html');
}else {
echo "usuario y contraseña  incorrectos";
//echo '<script type="text/javascript">alert("Usuario y contraseña incorrectos");</script>'; 
//header('Location: http://localhost/CCFEI/index.html');
}
?>
					
			
			<p> </p>	
			
			<a href="index.html">Regresar</a>
			
		</center>
	</body>
	</html>	