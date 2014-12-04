<?php
	
	//session_start();
  if (isset($_POST['login_usuario'])){   
   //obtendo os valores do formulario e colocando addslashes
	$login_usuario = $_POST["login_usuario"];
 }if(isset($_POST['senha_usuario'])){
  $senha_usuario = $_POST["senha_usuario"];
 }
 include"connect_bd.php";
  //codigo de desabilitacao de notices//
//ini_set('display_errors', '0'); 
//error_reporting(E_ALL); 
 
 $resultado = mysql_query("Select * from usuario where login_usuario='$login_usuario' and senha_usuario ='$senha_usuario'");
 $querry = $resultado;
  if(mysql_num_rows($querry )==0 || mysql_num_rows($querry)== False){ 
	 echo"<script>alert('Senha ou email não correspodem.');</script>";
    	 echo"<META HTTP-EQUIV=REFRESH CONTENT=0;url=../index.php>";
	}else{
	$consulta = mysql_query("Select * from usuario where login_usuario='$login_usuario'");
		$nivel = mysql_result($consulta,0,'nivel');
		$login_usuario = mysql_result($consulta,0,'login_usuario');
		$senha_usuario = mysql_result($consulta,0,'senha_usuario');
		
		session_start();
		$_SESSION['id']=$id;
		$_SESSION['login_usuario']=$login_usuario;
		$_SESSION['senha_usuario']=$senha_usuario;
		$_SESSION['cpf_usuario']=$cpf_usuario;
		$_SESSION['nivel']=$nivel;
		
			if($nivel >1){
			header("Location:../view/menu_medico.php");
			}else{
			header("Location:../view/home.php");
			}

	}
	
  
?>