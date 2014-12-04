<?php 
 
//destruindo os cookies e direcionando para a página inicial//
 unset($_SESSION['login_usuario']);
unset($_SESSION['senha_usuario']);
 
 session_destroy(); // Destrói toda sessão

 
  header("Location:../index.php");
   
   
  ?>