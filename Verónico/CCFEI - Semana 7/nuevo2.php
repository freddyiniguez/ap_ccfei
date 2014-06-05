<?php  

    if (isset($_POST['enviar'])) { 

      $nickname = $_POST['nickname']; 
      $nombre = $_POST['nombre']; 
      $email = $_POST['email']; 
      $pwd = $_POST['pwd']; 
      $repwd = $_POST['repwd']; 

      function validar_email($email){ 
        if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $email)) return true; 
        else return false;         
      } 
      $sin_espacios = count_chars($nickname, 1); 
      if(!empty($sin_espacios[50])) {  
        echo "El campo <em>nickname</em> no debe contener espacios en blanco. <a href='javascript:history.back();'>Reintentar</a>"; 
      }elseif(empty($nickname)) {  
        echo "No haz ingresado tu nickname. <a href='javascript:history.back();'>Reintentar</a>"; 
      }elseif(empty($nombre)) {  
        echo "No haz ingresado tu nombre. <a href='javascript:history.back();'>Reintentar</a>"; 
      }elseif (!valida_email($email)) { 
        echo "El email ingresado no es válido. <a href='javascript:history.back();'>Reintentar</a>"; 
      }elseif (empty($pwd)) { 
        echo "No haz ingresado tu contraseña. <a href='javascript:history.back();'>Reintentar</a>"; 
      }elseif($pwd != $repwd) {  
        echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>"; 
      }else {         
        $sql = sprintf("SELECT nickname FROM usuarios WHERE nickname='%s'",mysqli_real_escape_string($nickname)); 
        $sql2 = sprintf("SELECT email FROM usuarios WHERE email='%s'",mysqli_real_escape_string($email)); 

        $query = mysqli_query($conexion,$sql) or die('Error en query1 '.mysqli_error()); 
        $query2 = mysqli_query($conexion,$sql2) or die('Error en query2 '.mysqli_error()); 

        if (mysqli_stmt_num_rows($query) > 0) { 
          echo "El nickname elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>"; 
        }elseif (mysqli_stmt_num_rows($query2)) { 
          echo "El email elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>"; 
        }else{ 
          $pwd = md5($pwd);           
          $query3 = sprintf("INSERT INTO usuarios (nicknae,nombre,email,password,fecha) VALUES ('%s','%s','%s','%s',NOW())",mysqli_real_escape_string($nickname),mysqli_real_escape_string($nombre),mysqli_real_escape_string($email),mysqli_real_escape_string($pwd))or die('Error en query3 '.mysqli_error()); 
          $reg = mysqli_query($conexion,$query3); 
          if ($reg) { 
            echo 'Datos ingresados correctamente'; 
          }else{ 
            echo 'Ha ocurrido un error y no se han ingresado los datos ' .mysqli_connect_error(); 
          } 
        } 
      } 
    }else{ 

  ?> 
     
  <div class="block dark"> 
        <div class="container"> 
            <div class="row"> 
                <div class="span12"> 
                    <div class="clear-form no-border">                                 
                        <form>   
                            <div class="form-heading"> 
                                <h3 class="header">Registrate</h3>    
                                <hr/>                             
                            </div>   
                            <div class="form-body"> 
                              <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 

                                <span class="form-label">Escribe tu nickname</span> 
                                <input type="text" class="input-block-level" name="nickname"> 

                                <span class="form-label">Escribe tu nombre real</span> 
                                <input type="text" class="input-block-level" name="nombre"> 

                                <span class="form-label">Ingresa tu correo electrónico</span> 
                                <input type="email" class="input-block-level" name="email"> 

                                <span class="form-label">Ingresa tu contraseña</span> 
                                <input type="password" class="input-block-level" name="pwd"> 

                                <span class="form-label">Confirma tu contraseña</span> 
                                <input type="password" class="input-block-level" name="repwd">                           
                                
                                <p class="highlight"> 
                                    Al hacer click en el botón de confirmación estás al tanto de que el contenido de esta web es solo para fines de prueba y/o copia de seguridad del material original. Además nos eximes de cualquier responsabilidad por el uso del material aquí encontrado. 
                                </p>                                 
                            </div>                                  
                            <div class="form-footer">                                
                                <input type="submit" class="btn btn-large btn-green btn-block" name="enviar" value="Crear"> 
                                <p class="center"> 
                                     ¿Ya tienes una cuenta? <a href="../iniciosesion">¡Ingresa!</a>. 
                                </p> 
                            </div>                                          
                        </form> 
                    </div>  
                </div> 
            </div> 
        </div>          
    </div> 

    <?php } ?>