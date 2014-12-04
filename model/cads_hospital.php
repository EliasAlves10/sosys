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
error_reporting(0);
ini_set(“display_errors”, 0 );

require"../controller/connect_bd.php";

	//Inserindo dados no banco...
     $nome_hospital = $_POST["nome_hospital"];
	 $cnpj_hospital = $_POST["cnpj_hospital"];
	 $endereco_hospital = $_POST["endereco_hospital"];
     $bairro_hospital = $_POST["bairro_hospital"];
	 $estado_hospital = $_POST["estado_hospital"];
	 $cidade_hospital = $_POST["cidade_hospital"];
	 $telefone_hospital = $_POST["telefone_hospital"];
	 $telefone2_hospital = $_POST["telefone2_hospital"];
	 $email_hospital = $_POST["email_hospital"];
	 $total_uti = $_POST['total_uti'];
	 $total_leito = $_POST['total_leito'];
    
	 
	 
	 //Especificando dados....
     $query = mysql_query(" INSERT INTO hospital (nome_hospital,cnpj_hospital,endereco_hospital,bairro_hospital,estado_hospital,cidade_hospital,telefone_hospital,telefone2_hospital,email_hospital,total_uti,total_leito)
                        VALUES('$nome_hospital','$cnpj_hospital','$endereco_hospital','$bairro_hospital','$estado_hospital','$cidade_hospital','$telefone_hospital','$telefone2_hospital','$email_hospital','$total_uti','$total_leito')");

	//Tratando erros caso n�o seja digitados valores nos campos...					
     if($_POST["nome_hospital"] == "" || $query == FALSE) {
                    echo"<script>alert('O campo de nome não foi digitado.');</script>";
                    //$rsp == FALSE;
					header("Location :../view/insert_hospital.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>"; 
           } else if($_POST["cnpj_hospital"] == ""|| $query == FALSE) {
                  echo"<script>alert('O campo de CNPJ não foi digitado.');</script>";
				   // $rsp == FALSE;
					header("Location :../view/insert_hospital.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";	
            } else if($_POST["endereco_hospital"] == ""|| $query == FALSE) {
                   echo"<script>alert('O campo de endereço não foi digitado.');</script>";
                  // $rsp == FALSE;
				 header("Location :../view/insert_hospital.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";	
            } else if($_POST["bairro_hospital"] == ""|| $query == FALSE) {
                   echo"<script>alert('O campo do Bairro não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_user.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
            }else if($_POST['estado_hospital']==""|| $query == FALSE){
					echo"<script>alert('O campo do Estado não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_hospital.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
			 
			}else if($_POST['cidade_hospital']==""|| $query == FALSE){
			echo"<script>alert('O campo da Cidade não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_hospital.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
			}else if($_POST['telefone_hospital']==""|| $query == FALSE){
			echo"<script>alert('O campo de Telefone  não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_hospital.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
			
			}else if($_POST['email_hospital']==""|| $query == FALSE){
			echo"<script>alert('O campo de email não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_hospital.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
			
			}else if($_POST['total_uti']=="" || $query == FALSE){
			echo"<script>alert('O campo com a quantidade total de Utis não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_hospital.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
			
			}else if($_POST['total_leito']=="" || $query == FALSE){
			echo"<script>alert('O campo com a quantidade total de leitos não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_hospital.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
			
			} 
			//Apos tratamento dos erros,� informado que os dados s�o inseridos ao cliente... 
            if($query == TRUE) {
                    echo"<script>alert('Cadastrado realizado com sucesso.');</script>";
					header("Location :../view/insert_user.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_hospital.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('O cadastro não pode ser realizado.');</script>";
						  header("Location :../view/insert_user.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_hospital.php>";
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
	
