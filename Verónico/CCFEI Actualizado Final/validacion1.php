<?php 
//Algo de codigo para este sistema de autentificacion, no soy experto en PHP pero he realizado un codigo para autentificacion y que dependiendo de //el usuario redirecciona a una pagina diferente:

  include("conex.php4"); 
             $usuario=$_POST['usuario'];
             $password=$_POST['password'];
//$valor1=$_GET["usuario"];
//$valor2=$_GET["clave"];
//$conten=trim($valor1);
              $conten=trim($usuario);
              $ext=substr($conten,4,7); //sera utilizado para la seguridad de la pagina
              $grado=substr($conten,5,6); //para especificar el grado al que reenviara.
              $link1= conectarse();
              $consulta = "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password'"; 
            //$consulta="select * from alumno where usuario='$valor1' and clave='$valor2' and grado='$grado'";
              $resultado=mysql_query($consulta, $link1);

           if(mysql_fetch_array($resultado)>0){
                           switch ($ext){
                                      case "a1p":
                                           session_start();
                                           $_SESSION["autentificado"]=$ext; 
                                           header("location: ../primaria/portada.php");
                                           exit(); 
                                      break;
                                    
									
									  case "a2p":
                                                session_start();
                                                $_SESSION["autentificado"]=$ext; 
                                                header("location: ../primaria/portada.php");
                                                exit(); 
                                      break;
									  
                                      
									  case "a3p":

                                             session_start();
                                             $_SESSION["autentificado"]=$ext; 
                                             header("location: ../primaria/portada.php");
                                             exit(); 
                                       break;

									   case "a4p":
                                                 session_start();
                                                 $_SESSION["autentificado"]=$ext; 
                                                 header("location: ../primaria/portada.php");
                                                 exit(); 
                                        break;
											
											case "a5p":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../primaria/portada.php");
													exit(); 
											break;
											
											
											case "a6p":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../primaria/portada.php");
													exit(); 
											break;

											case "a1s":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../secundaria/home.php");
													exit(); 
											break;
			
											case "a2s":
													session_start();
													$_SESSION["autentificado"]=$ext; 
												    header("location: ../secundaria/home.php");
													exit(); 
											break;

											case "a3s":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../secundaria/home.php");
													exit(); 
											break;

											case "a1b":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../bach/home.php");
													exit(); 
											break;

											case "a2b":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../bach/home.php");
													exit(); 
											break;
											
											
											case "a3b":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../bach/home.php");
													exit(); 
											break;
											

											case "a4b":
											        session_start();
											        $_SESSION["autentificado"]=$ext; 
													header("location: ../bach/home.php");
													exit(); 
											break;

											case "a5b":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../bach/home.php");
													exit(); 
											break;
											

											case "a6b":
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../bach/home.php");
													exit(); 
											break;

											case "doc";
													session_start();
													$_SESSION["autentificado"]=$ext; 
													header("location: ../docentes/primaria/tecnologia.php");
													exit(); 
											break;

											default:
												header("location:portada.htm");
											exit();
}//fin swith
				}else {//si no
                   header("location:portada.htm");
             }//fin if

			 mysql_free_result($resultado);
             mysql_close($link1);

//esta autentificacion es con llamado a usuarios de una base de datos.
//Alguan duda alli esta mi correo
?>