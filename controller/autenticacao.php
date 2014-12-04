<?php
  include("../class/usuario.php");
	$login_usuario = $_POST["login_usuario"];
	$senha_usuario = $_POST["senha_usuario"];
 
 var usuario = new Usuario($login_usuario,$senha_usuario);
	if (usuario-> autentica()) {
		header("location:home.php");
	}
 else{
		header("location:../index.php");
	}
?>
