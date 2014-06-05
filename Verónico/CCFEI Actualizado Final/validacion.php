<? 
//conecto con la base de datos 
	$conn = mysql_connect("localhost","root","123"); 
//selecciono la BBDD 
	mysql_select_db("controlfei",$conn); 
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$rol=$_POST['rol'];
 			
//Sentencia SQL para buscar un usuario con esos datos 
					$ssql = "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password' and rol='$rol'"; 
//Ejecuto la sentencia 
					$rs = mysql_query($ssql,$conn); 

//vemos si el usuario y contraseña es váildo 
//si la ejecución de la sentencia SQL nos da algún resultado 
//es que si que existe esa conbinación usuario/contraseña 
 
				 if (mysql_num_rows($rs)!=0 and $rol=="Administrador"){ 
   	                                     //usuario y contraseña válidos 
   	                                    //defino una sesion y guardo datos 
				   session_start(); 
   	                        //session_register("autentificado"); 
							$autentificado = "SI"; 
							header ("Location: admin.html");	
											}else 
						if (mysql_num_rows($rs)!=0 and $rol=="Academico"){ 
   	                                     //usuario y contraseña válidos 
   	                                    //defino una sesion y guardo datos 
				       session_start(); 
   	                        //session_register("autentificado"); 
							$autentificado = "SI"; 
							header ("Location: maestro.html");	
											}							
											
											else { 
   	                        //si no existe le mando otra vez a la portada 
							header("Location: index.php?errorusuario=si"); 
}
 
mysql_free_result($rs); 
mysql_close($conn); 

?>
