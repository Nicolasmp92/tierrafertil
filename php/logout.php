<?php
  session_start();
   
  // Elimina la variable email en sesión.
  unset($_SESSION['user']);
 
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("HTTP/1.1 302 Moved Temporarily");
  header("Location: ../index.html");
?>