<?
require('conexion.php');

$usuario=$_POST['usuario'];
$password=$_POST['password'];
//vemos si el usuario y contrase�a son v�lidos
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
   echo "usuario y contrase�a v�lidos";
   header('Location: http://localhost/CCFEI/admin.html');
}else {
echo "usuario y contrase�a  incorrectos";
//echo '<script type="text/javascript">alert("Usuario y contrase�a incorrectos");</script>'; 
//header('Location: http://localhost/CCFEI/index.html');
}
?>
					
			
			<p> </p>	
			
			<a href="index.html">Regresar</a>
			
		</center>
	</body>
	</html>	