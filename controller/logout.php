<?php 
 
//destruindo os cookies e direcionando para a p�gina inicial//
 unset($_SESSION['login_usuario']);
unset($_SESSION['senha_usuario']);
 
 session_destroy(); // Destr�i toda sess�o

 
  header("Location:../index.php");
   
   
  ?>