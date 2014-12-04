<!Doctype html>
<!--[if lt IE 7 ]><html class="ie6" lang="pt-BR"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="pt-BR"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="pt-BR">
    <!--<![endif]-->
	<head>
        <title>SOSsys</title>
		<link rel="stylesheet" type="text/css" href="../css/style-position-progress.css" />
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/theme.css" rel="stylesheet">
		<link href="../css/font-awesome.min.css" rel="stylesheet">
		<link href="../css/alertify.css" rel="stylesheet">
		<script src="js/bootbox.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/alert.test.js" type="text/javascript"></script>
		<script src="js/bootbox.test.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript">
		var progresso = new Number();
			var maximo = new Number();
			var progresso = 0;
			var maximo = 60;
				function start(){
				if(progresso + 1 < maximo){
				 progresso = progresso +1;
				 document.getElementById("pg").value=progresso;
				 setTimeout("start();",1);
				}
			}	
		</script>
	 </head>
     <body onload="start();">	 
<?php

require"../controller/connect_bd.php";

	//Inserindo dados no banco...
     $login_usuario = $_POST["login_usuario"];
	 $senha_usuario = $_POST["senha_usuario"];
	 $nivel = $_POST["nivel"];
     $cpf_usuario = $_POST["cpf_usuario"];
    
	 
	 
	 //Especificando dados....
     $query = mysql_query(" INSERT INTO usuario (login_usuario,senha_usuario,nivel,cpf_usuario)
                        VALUES('$login_usuario','$senha_usuario','$nivel','$cpf_usuario')");

	//Tratando erros caso n�o seja digitados valores nos campos...					
     if($_POST["login_usuario"] == "" || $query == FALSE) {
                    echo"<script>alert('O campo de login não foi digitado.');</script>";
                    //$rsp == FALSE;
					header("Location :../view/insert_user.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>"; 
           } else if($_POST["senha_usuario"] == ""|| $query == FALSE) {
                  echo"<script>alert('O campo de senha não foi digitado.');</script>";
				   // $rsp == FALSE;
					header("Location :../view/insert_user.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>";	
            } else if($_POST["nivel"] == ""|| $query == FALSE) {
                   echo"<script>alert('Você não escolheu o nivel do usuario.');</script>";
                  // $rsp == FALSE;
				 header("Location :../view/insert_user.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>";	
            } else if($_POST["cpf_usuario"] == ""|| $query == FALSE) {
                   echo"<script>alert('O campo de CPF não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_user.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>";
            }else{
			 
				//Apos tratamento dos erros,� informado que os dados s�o inseridos ao cliente... 
            if($query == TRUE) {
                    echo"<script>alert('Cadastrado realizado com sucesso.');</script>";
					header("Location :../view/insert_user.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_user.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('O cadastro não pode ser realizado.');</script>";
						  header("Location :../view/insert_user.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_user.php>";
            }
    }         
?>
<div class="positionProgress">
			<div class="progress-striped active">
				<p align="center">Aguarde...</p>
				<progress  class="bar bar-danger" style="width: 500%; height:26px;"id="pg" max="59" ></progress>
			</div>	
		</div>	

		</body>
	</head>
</html>	
	
