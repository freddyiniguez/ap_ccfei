<?php 
include("conexion.php");
$usuario=$_GET['id']; 
$con=mysql_connect($host,$user,$pw)or die("problemas en server");
mysql_select_db($db,$con)or die("problemas con base de datos");
	
if($resultado['usuario']==$usuario){
if ( $_POST['password2'] == $_POST['confirmacion']){ 	
$query=mysql_query("UPDATE usuario SET password='$_POST[password2]',confirmacion='$_POST[confirmacion]'WHERE password='$_POST[password1]'",$con)or die(mysql_error());
$resultado=($query);
	echo"La contraseña ha sido cambiada";
	//echo"Actualizacion Coorrecta";
	echo"<li><a href=usuarios_detalles.php>Regresar</a></li>";
	
	}else{echo "los password no coinsiden";} 
}else{echo "no se pudo cambiar";}
	//header ("Location:usuarios_detalles.php");
?>
<script type="text/javascript">
	
  //alert("La contraseña ha sido cambiada");
  header ("Location:usuarios_detalles.php");
  
</script>
