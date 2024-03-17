<?php
  session_start();
  ?>
  <?php
   include('fc.php');
  // Obtengo los datos cargados en el formulario de login.
  $user= $_POST['user'];
  $pass = $_POST['pass'];
   
 
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM login WHERE user='%s' AND pass = '%s'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
  $resultado = $connect->query($sql);
   
  // Verificando si el usuario existe en la base de datos.
 
  if($resultado){
      
    // Guardo en la sesión el email del usuario.
    $_SESSION['user'] = $user;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location:../paginas/inicio.php");
  }else{
    echo 'El usuario o password es incorrecto, <a href="../index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>