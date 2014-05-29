<? 
	$conn = mysql_connect("localhost","root","123"); 

	mysql_select_db("controlfei",$conn); 
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$conten=trim($usuario);
	        $ext=substr($conten,4,7);//sera utilizado para la seguridad de la pagina.
	        $grado=substr($conten,5,6); //para especificar el grado al que reenviara.
			//$ssql= "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password', and rol='$grado'"; 
			$ssql = "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password'"; 
            $ssql1 = "SELECT * FROM usuario WHERE rol=='Administrador'";
			
					$rs = mysql_query($ssql,$conn); 
                    

				while(mysql_num_rows($rs)!=0){ 
				if($ssql1="SELECT * FROM usuario WHERE rol=='Administrador'"){
   	                        session_start(); 
   	                        //session_register("autentificado"); 
							$autentificado = "SI"; 
							header ("Location: usuarios.php");	
				}
				
					if($ssql1 = "SELECT * FROM usuario WHERE rol=='Acadaemico'"){
   	                        session_start(); 
   	                        //session_register("autentificado"); 
							$autentificado = "SI"; 
							header ("Location: maestro.html");	
				}else { 
   	            
						header("Location: index.php?errorusuario=si"); }

				
			
					}	
						
							//else { 
   	            
							//header("Location: index.php?errorusuario=si"); }


mysql_free_result($rs); 
mysql_close($conn); 
?>
