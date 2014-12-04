<?php
    include_once '../includes/formataData.php';
?>
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
     $nome_medico = $_POST["nome_medico"];
	 $cpf_medico = $_POST["cpf_medico"];
	 $rg_medico = $_POST["rg_medico"];
     $dataNasc_medico = formata_data_db($_POST["dataNasc_medico"]);
	 $crm_medico = $_POST["crm_medico"];
	 $especialidade_medico = $_POST["especialidade_medico"];
	 $sexo = $_POST["sexo"];
	 $endereco_medico = $_POST["endereco_medico"];
	 $bairro_medico = $_POST["bairro_medico"];
	 $nacionalidade_medico = $_POST['nacionalidade_medico'];
	 $estado_medico = $_POST['estado_medico'];
     $cidade_medico = $_POST['cidade_medico'];
	 $telefone_medico = $_POST['telefone_medico'];
	 $email_medico = $_POST['email_medico'];	 
	 
	 
	 //Especificando dados....
     $query = mysql_query(" INSERT INTO medico (nome_medico,cpf_medico,rg_medico,dataNasc_medico,crm_medico,especialidade_medico,sexo,endereco_medico,bairro_medico,nacionalidade_medico,estado_medico,cidade_medico,telefone_medico,email_medico)
                        VALUES('$nome_medico','$cpf_medico','$rg_medico','$dataNasc_medico','$crm_medico','$especialidade_medico','$sexo','$endereco_medico','$bairro_medico','$nacionalidade_medico','$estado_medico','$cidade_medico','$telefone_medico','$email_medico')");

	//Tratando erros caso n䯠seja digitados valores nos campos...					
     if($_POST["nome_medico"] == "" || $query == FALSE) {
                    echo"<script>alert('O campo de nome não foi digitado.');</script>";
                    //$rsp == FALSE;
					header("Location :../view/insert_medico.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>"; 
           } else if($_POST["cpf_medico"] == ""|| $query == FALSE) {
                  echo"<script>alert('O campo de CPF não foi digitado.');</script>";
				   // $rsp == FALSE;
					header("Location :../view/insert_medico.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";	
            } else if($_POST["rg_medico"] == ""|| $query == FALSE) {
                   echo"<script>alert('O campo de RG não foi digitado.');</script>";
                  // $rsp == FALSE;
				 header("Location :../view/insert_medico.php");
				echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";	
            } else if($_POST["dataNasc_medico"] == ""|| $query == FALSE) {
                   echo"<script>alert('O campo da Data de Nascimento não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
            }else if($_POST['crm_medico']==""|| $query == FALSE){
					echo"<script>alert('O campo do CRM não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			 
			}else if($_POST['especialidade_medico']==""|| $query == FALSE){
			echo"<script>alert('O campo da Especialidade não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			}else if($_POST['telefone_medico']==""|| $query == FALSE){
			echo"<script>alert('O campo de Telefone  não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			
			}else if($_POST['sexo']==""|| $query == FALSE){
			echo"<script>alert('O campo de sexo não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			
			}else if($_POST['endereco_medico']=="" || $query == FALSE){
			echo"<script>alert('O campo com o endereço não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			
			}else if($_POST['bairro_medico']=="" || $query == FALSE){
			echo"<script>alert('O campo com o Bairro não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			
			}else if($_POST['nacionalidade_medico']=="" || $query==FALSE){
			echo"<script>alert('O campo com a nacionalidade não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			}else if($_POST['estado_medico']=="" || $query == FALSE){
			echo"<script>alert('O campo com o estado não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			}else if($_POST['cidade_medico']=="" || $query==FALSE){
				echo"<script>alert('O campo com a cidade não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			
			}else if($_POST['telefone_medico'] =="" || $query ==FALSE){
				echo"<script>alert('O campo com o telefone não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			} else if($_POST['email_medico'] =="" || $query == FALSE){
			echo"<script>alert('O campo com o email não foi digitado.');</script>";
                   //$rsp == FALSE;
				  header("Location :../view/insert_medico.php");
				  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
			
			}
			//Apos tratamento dos erros,顩nformado que os dados s䯠inseridos ao cliente... 
            if($query == TRUE) {
                    echo"<script>alert('Cadastrado realizado com sucesso.');</script>";
					header("Location :../view/insert_medico.php");
					echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/list_medico.php>";
									
            } else {
						//Erro ao incluir os dados no Banco de Dados!
						  echo"<script>alert('O cadastro não pode ser realizado.');</script>";
						  header("Location :../view/insert_medico.php");
						  echo"<META HTTP-EQUIV=REFRESH CONTENT=1;url=../view/insert_medico.php>";
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
	
