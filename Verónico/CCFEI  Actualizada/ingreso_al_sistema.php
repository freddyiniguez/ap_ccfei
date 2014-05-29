<?php

            $usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$rol=$_POST['rol'];
			
			
    
			
			print $g=muestrapagina($usuario,$password);
			print $c=validarcampos($usuario,$password);
			print $s=consulta($usuario,$password); 
			
function validarcampos(&$usuario,&$password){
if($usuario=="" and $password==""){
	 echo "ingrese un nombre de usuario junto con su password para entrar";
	 }else
	 if($usuario==""){
	 echo"ingrese su nombre de usuario";
	 }
	 else
	 if($password==""){
	 echo"ingrese su password ";
	 }
	
	}
	
function consulta($usuario,$password){
            $usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$rol=$_POST['rol'];


            $conn = mysql_connect("localhost","root","123"); 
            mysql_select_db("controlfei",$conn); 
			
            $ssql="SELECT * FROM usuario WHERE usuario='$usuario'"; 
			$rs = mysql_query($ssql,$conn);
			
			if (mysql_num_rows($rs)!=$usuario=$_POST['usuario']){ 
                       echo("Nombre de usuario incorrecto");

				 }else
			if (mysql_num_rows($rs)!=$pasword){ 
                       echo("Nombre  password incorrecto");

				 }else
           if (mysql_num_rows($rs)!=$usuario and mysql_num_rows($rs)!=$password ){ 
                       echo("Nombre de usuario o password incorrectos");

				 }				 
		
		
 
}

function muestrapagina($usuario,$password){
        $conn = mysql_connect("localhost","root","123"); 
        mysql_select_db("controlfei",$conn); 
         $rol=$_POST['rol'];
		 $num_intentos=0;
		
	      $ssql = "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password' and rol='$rol'"; 
		  $rs = mysql_query($ssql,$conn);

                 if (mysql_num_rows($rs)!=0 and $rol=="Administrador"){ 
                       header ("Location: admin.html");	

				 }else
				 if (mysql_num_rows($rs)!=0 and $rol=="Academico"){
				   header ("Location: maestro.html");	

						}else { 
   	                        $num_intentos=+1;
							header("Location: index.php?errorusuario=si"); 
						if($num_intentos>3){
						echo("Has excedido el número de intentos de inicio de sesión");
                            }						
}				 
					
			
}
				 
				 
				 
	 



?>